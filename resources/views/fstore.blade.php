@extends('layouts.main')
@section('container')
<section class="fstore mb-0" id="fstore" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <img src="img/fstore.png" alt="" height="150px" class="mb-4">
        <h1>F-STORE</h1>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> About</b> F-Store </h3>
            <hr class="border border-success border-3" width="95px">
            <p class="mb-0">F-Store ialah sebuah unit usaha yang dimiliki oleh Forum Studi Teknik (FST) dimana memiliki dua tujuan utama didalamnya yaitu, menjadi wadah untuk mengembangkan jiwa kewirausahaan anggota melalui program pendanaan usaha dan mewujudkan FST yang mandiri secara finansial.</p>
        </div>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="program-content">
            <h3 class="text-black fw-bold"><b class="text-success">
                <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-program"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                Program</b> F-Store </h3>
            <hr class="border border-success border-3" width="170px">
        </div>
        <style>
            .accordion-item {
                border: 2px solid #08ac6c !important;
                border-radius: 1rem; /* mengikuti rounded-4 Bootstrap */
                overflow: hidden; /* agar sudut tidak bocor */
            }

            .accordion-button {
                border: none; /* hilangkan border tombol agar tidak dobel */
                border-radius: 0 !important;
            }

            .accordion-button:hover {
                background-color: #d4edda;
                color: #157347;
            }

            .accordion-button:focus {
                background-color: #08ac6c;
                color: #ffffff;
                box-shadow: 0 0 0 0.3rem rgba(25, 135, 84, 0.25); 
            }


            .accordion-button:not(.collapsed) {
                background-color: #08ac6c;
                color: #ffffff;
                box-shadow: inset 0 -1px 0 rgba(25, 135, 84, 0.25);
            }

            .accordion-collapse {
                border-top: 1px solid #08ac6c;
            }
        </style>
        <div class="accordion mt-4" id="program-fstore">
        <div class="accordion-item rounded-4 overflow-hidden mb-3">
            <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                FST APIK
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#program-fstore">
            <div class="accordion-body">
                FST APIK merupakan sebuah program non-proker yang dikelola oleh bidang Technopreneurship Forum Studi Teknik (FST), di bawah naungan langsung F-STore. Program ini menandai momen penting bagi para pengurus FST dalam satu periode kabinet, di mana mereka secara resmi memiliki atribut khas FST sebagai identitas.
            </div>
            </div>
        </div>

        <div class="accordion-item rounded-4 overflow-hidden mb-3">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Pitching
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#program-fstore">
            <div class="accordion-body">
                Pitching adalah sebuah proses dimana seseorang menyajikan dan menjelaskan ide atau proposal kepada pihak lain, seperti investor atau klien, dengan tujuan untuk meyakinkan mereka agar memberikan dukungan atau investasi. Pitching merupakan kegiatan di mana individu atau tim menyampaikan ide, rencana, atau produk kepada audiens tertentu, seperti investor, mitra bisnis, atau pelanggan potensial, dengan harapan untuk mendapatkan dukungan, investasi, atau kerjasama.
            </br></br>Pitching F-Store bertujuan untuk untuk menarik perhatian, menjelaskan nilai-nilai yang ada, serta memperkenalkan inovasi wirausaha para punggawa bidang technopreneurship. Pitching F-STore dilaksanakan dengan sistem presentasi dan diikuti sesi tanya jawab. Peserta Pitching F-STore adalah Staf Muda Bidang Technopreneurship Forum Studi Teknik 2025, dengan kehadiran 100% dari pengurus bidang Technopreneurship (diwajibkan), dan kuota forum sekitar 35% dari total pengurus Forum Studi Teknik 2025.
            </div>
            </div>
        </div>

        <div class="accordion-item rounded-4 overflow-hidden mb-3">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Fundraising
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#program-fstore">
            <div class="accordion-body">
                Fundraising adalah proses pengumpulan dana untuk mendukung suatu tujuan F-STore untuk memandirikan ekonomi FST. Proses fundraising melibatkan berbagai strategi. Tujuan utamanya adalah untuk mengumpulkan dana yang cukup untuk mendukung kegiatan atau proyek tertentu yang telah direncanakan oleh organisasi atau perusahaan yang bersangkutan.
            </br></br>Fundraising F-STore dapat dilaksanakan di berbagai tempat, yaitu saat program kerja FST yang diadakan, kegiatan-kegiatan Fakultas Teknik seperti kegiatan ODM FT, GoRe FT, dll. Fundraising tahun 2025 akan sedikit berbeda dengan tahun sebelumnya dimana akan ada pengoptimalan waktu termin penjualan dan tim EP akan menjualkan produk yang belum terjual pada kabinet sebelumnya (lanyard), tetapi akan tetap melakukan penjualan barang hasil dari ide pitching mereka (selain lanyard).
            </div>
            </div>
        </div>
        
        <div class="accordion-item rounded-4 overflow-hidden mb-3">
            <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Suksesi F-Store
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#program-fstore">
            <div class="accordion-body">
                Kegiatan yang dilakukan dalam rangka pertanggungjawaban unit F-Store selama satu kepengurusan dan menentukan manajemen F-Store berupa reorganisasi kepengurusan unit F-Store yang baru serta arah pergerakan F-Store di kabinet yang selanjutnya. Suksesi F-Store ditargetkan untuk wajib dihadiri oleh 100 % Pengurus Forum Studi Teknik 2025.
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="product-content">
            <h3 class="text-black fw-bold"><b class="text-success"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-product"
                viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                Product</b> F-Store </h3>
            <hr class="border border-success border-3" width="155px">
        </div>
    </div>
    <div class="container mt-3">
        @if ($product->isEmpty())
            <div class="alert text-center" role="alert" style="background-color: #d4edda; color: #155724;">
                Belum ada <strong>produk</strong>.
            </div>
        @else
            <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @foreach ($product as $item)
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-4">
                <div class="card border-0 h-100 text-decoration-none rounded-4" style="box-shadow: 0 4px 8px #157347;">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid rounded-4" style="aspect-ratio: 1/1; object-fit: cover; object-position: center;">
                <div class="card-body text-dark">
                    <span class="badge bg-succes mb-2">{{ $item->category }}</span>
                    <p class="card-title fw-semibold mb-1">
                        {{ $item->name }}
                    </p>
                    <p class="card-title">
                        Rp {{ number_format($item->price, 0, ',', '.') }},00
                    </p>
                    </div>         
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <style>
            .btn-custom {
                background-color: #08ac6c; /* hijau muda */
                border: 1px solid #08ac6c;
                transition: background-color 0.3s ease;
                padding: 0.5rem 1.5rem; /* menambah ukuran tombol */
                font-size: 1.25rem; /* memperbesar ukuran teks */
            }

            .btn-custom:hover {
                background-color: #157347; /* hijau lebih gelap */
                color: #fff;
            }

            .btn-custom:focus {
                box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);;
            }
        </style>
        <div class="d-flex justify-content-center mb-4">
            <a href="https://www.instagram.com/f.storeundip" class="btn btn-custom text-white fw-semibold rounded-4">
                LET'S BUY!
            </a>
        </div>
    </div>
</section>
@endsection