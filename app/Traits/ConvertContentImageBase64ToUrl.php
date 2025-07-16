<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ConvertContentImageBase64ToUrl
{
    protected function convertContentImageBase64ToUrl($content)
    {
        $pattern = '/<img[^>]+src="data:image\/([^;]+);base64,([^"]+)"/i';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $extension = $match[1];
            $base64Data = $match[2];

            $fileName = uniqid() . '.' . $extension;
            Storage::disk('public')->put($fileName, base64_decode($base64Data));
            $fileUrl = '/storage/' . $fileName;

            $content = str_replace($match[0], str_replace($match[1] . ';base64,' . $match[2], $fileUrl, $match[0]), $content);
        }

        return $content;
    }

    public function setAttribute($key, $value)
    {
        if (isset($this->contentName) && $key === $this->contentName && is_string($value)) {
            $value = $this->convertContentImageBase64ToUrl($value);
        }

        return parent::setAttribute($key, $value);
    }
}
