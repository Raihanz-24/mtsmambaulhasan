@extends('layouts.app')

@section('title', 'beranda')
@section('content')
<!-- Konten Utama -->
<div id="main-content">
    <!-- Hero Section -->
    <section id="1" class="bg-gradient-to-r from-green-700 to-green-600 text-white pt-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="flex flex-col md:flex-row items-center justify-between fade-in">
                <div class="w-full md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
                        Selamat Datang di <span class="text-yellow-400">MTs Mambaul Hasan</span>
                    </h1>
                    <p class="mt-4 text-lg sm:text-xl md:text-2xl">
                        Mengembangkan potensi siswa melalui pendidikan Islami yang berkualitas dan berkarakter.
                    </p>
                    <a href="#" class="mt-6 bg-yellow-400 text-green-700 py-3 px-6 rounded-full hover:bg-yellow-500 transition duration-300 ease-in-out inline-block shadow-lg">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="image/up.jpeg" alt="mts_maha" class="rounded-lg shadow-2xl mx-auto md:mx-0 transition duration-300 ease-in-out transform hover:scale-105">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Sambutan Kepala Sekolah Section -->
<section id="2" class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white rounded-lg shadow-lg p-6 md:p-12">
        <div class="md:flex md:items-center">
            <h2 class="text-2xl text-center font-bold text-green-800 mb-4">Sambutan Kepala Sekolah</h2>
        </div>
        <div class="md:flex md:items-start">
            <div class="md:w-1/3 mb-4 md:mb-0">
                <img src="image/kepala-mts.png" alt="Kepala Sekolah" class="w-1/2 md:w-full rounded-lg mx-auto md:mx-0 shadow-lg">
                <h3 class="text-xl md:text-2xl font-bold text-green-800 mt-4 md:mt-2 text-center md:text-left">Hj. Qurrotul Aini, S.Pd.I, M.M</h3>
            </div>
            <div class="md:w-2/3 md:ml-8">
                <p class="text-gray-700 mb-4">
                    Assalamu'alaikum warahmatullahi wabarakatuh.
                </p>
                <p class="text-gray-700 mb-4">
                    Selamat datang di website resmi MTs Mambaul Hasan. Sebagai lembaga pendidikan berbasis Islami, kami berkomitmen untuk memberikan pendidikan berkualitas yang berlandaskan pada nilai-nilai keislaman. Kami berharap dengan adanya website ini, informasi mengenai sekolah kami dapat diakses dengan lebih mudah oleh masyarakat.
                </p>
                <p class="text-gray-700">
                    Wassalamu'alaikum warahmatullahi wabarakatuh.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Visi dan Misi Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-green-800">Visi dan Misi</h2>
            <p class="text-gray-600 mt-2">Kami berkomitmen untuk memberikan pendidikan berkualitas yang berlandaskan nilai-nilai keislaman.</p>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-6">
            <!-- Visi -->
            <div class="flex-1 mb-8 md:mb-0">
                <div class="bg-green-100 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-green-700 mb-4">Visi</h3>
                    <p class="text-gray-700">Menjadi lembaga pendidikan Islam yang unggul dalam ilmu pengetahuan dan teknologi, berkarakter Islami, dan berwawasan lingkungan.</p>
                </div>
            </div>
            <!-- Misi -->
            <div class="flex-1">
                <div class="bg-green-100 rounded-lg p-6 shadow-lg">
                    <h3 class="text-2xl font-semibold text-green-700 mb-4">Misi</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Menyelenggarakan pendidikan yang berkualitas dan berorientasi pada pengembangan potensi siswa secara optimal.</li>
                        <li>Mengintegrasikan nilai-nilai Islami dalam seluruh aspek kehidupan sekolah.</li>
                        <li>Mengembangkan lingkungan sekolah yang kondusif untuk pembelajaran.</li>
                        <li>Mendorong partisipasi aktif orang tua dan masyarakat dalam mendukung pendidikan.</li>
                        <li>Memanfaatkan teknologi informasi dalam proses pembelajaran dan manajemen sekolah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section Info -->
<section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full md:w-1/3 px-3 mb-6">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <h2 class="text-xl sm:text-2xl font-bold mb-4 text-green-800">Program Pendidikan</h2>
                <p class="text-gray-700">Program pendidikan yang komprehensif dan Islami, menggabungkan pengetahuan umum dan agama.</p>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <h2 class="text-xl sm:text-2xl font-bold mb-4 text-green-800">Ekstrakurikuler</h2>
                <p class="text-gray-700">Program ekstrakurikuler kami dirancang untuk mengembangkan potensi siswa </p>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <h2 class="text-xl sm:text-2xl font-bold mb-4 text-green-800">Kegiatan Islami</h2>
                <p class="text-gray-700">Kegiatan ekstrakurikuler yang menguatkan karakter Islami siswa, seperti tahfidz dan kajian Islam.</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-green-800">Galeri Foto Kegiatan</h2>
        <p class="mt-4 text-lg text-gray-600">Berikut adalah beberapa dokumentasi kegiatan di MTs Mambaul Hasan</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="gallery-item relative">
            <img src="image/ac1.jpeg" alt="Kegiatan 1" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Upacara bendera |</h3>
                <p class="text-sm"> petugas upacara kelas IX</p>
            </div>
        </div>
        <div class="gallery-item relative">
            <img src="image/romadhon.jpeg" alt="Kegiatan 2" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Pondok Romadhon |</h3>
                <p class="text-sm">guna meningkatkan iman</p>
            </div>
        </div>
        <div class="gallery-item relative">
            <img src="image/ac3.jpeg" alt="Kegiatan 3" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Upacara Bendera |</h3>
                <p class="text-sm">Ning Hj Qurrotul Aini, S.Pd.I, M.M</p>
            </div>
        </div>
        <div class="gallery-item relative">
            <img src="image/ac4.jpeg" alt="Kegiatan 4" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Upacara Bendera |</h3>
                <p class="text-sm">Deskripsi singkat kegiatan 4.</p>
            </div>
        </div>
        <div class="gallery-item relative">
            <img src="image/ac6.jpeg" alt="Kegiatan 5" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Lab Komputer |</h3>
                <p class="text-sm">memperkenalkan siswa dengan teknologi</p>
            </div>
        </div>
        <div class="gallery-item relative">
            <img src="image/ac5.jpeg" alt="Kegiatan 6" class="w-full h-64 object-cover rounded-lg shadow-lg">
            <div class="gallery-overlay p-4">
                <h3 class="text-lg font-bold">Kegiatan 6</h3>
                <p class="text-sm">Deskripsi singkat kegiatan 6.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
        <a href="#" class="mt-6 bg-green-600 text-white py-3 px-6 rounded-full hover:bg-green-700 transition duration-300 ease-in-out inline-block shadow-lg">
            Lihat Semua Galeri
        </a>
    </div>
</section>

<!-- Lokasi Kami -->
<section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Lokasi Kami</h2>
    <div class="relative overflow-hidden rounded-lg shadow-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5456332219164!2d113.5398242!3d-7.731798200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd703118095b60f%3A0x7d568da1c09259df!2sMTs%20MAMBAUL%20HASAN!5e0!3m2!1sid!2sid!4v1722877751396!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
@endsection