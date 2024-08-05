@extends('layouts.app')
@section('title', 'tentang kami')
@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-11 py-16 ">
    <h1 class="text-3xl font-bold text-green-800 mb-6 mt-6 text-center">Tentang Kami</h1>
    <div class="bg-white rounded-lg shadow-lg p-6 md:p-12">
        <h2 class="text-2xl font-bold text-green-800 mb-4">Sejarah Berdirinya MTs Mambaul Hasan</h2>
        <p class="text-gray-700 mb-4">
            MTs Mambaul Hasan didirikan pada tahun 1992 oleh seorang ulama dan tokoh pendidikan yang bernama KH. Syaifullah Misbah. Beliau memiliki visi untuk membangun sebuah lembaga pendidikan yang berbasis Islami dengan tujuan mendidik generasi muda agar menjadi insan yang beriman, berilmu, dan berakhlakul karimah.
        </p>
        <p class="text-gray-700 mb-4">
            Pada awal berdirinya, MTs Mambaul Hasan hanya memiliki beberapa siswa dan fasilitas yang sederhana. Namun, dengan semangat dan dedikasi dari para pendiri, guru, dan masyarakat sekitar, sekolah ini terus berkembang dan mendapatkan kepercayaan yang semakin besar dari masyarakat.
        </p>
        <p class="text-gray-700 mb-4">
            Seiring berjalannya waktu, MTs Mambaul Hasan berhasil meningkatkan kualitas pendidikan dan fasilitasnya. Sekarang, sekolah ini dilengkapi dengan ruang kelas yang modern, laboratorium, perpustakaan, serta fasilitas pendukung lainnya yang menunjang proses belajar mengajar.
        </p>
        <p class="text-gray-700 mb-4">
            MTs Mambaul Hasan juga telah menghasilkan banyak alumni yang sukses dalam berbagai bidang, baik di tingkat lokal maupun nasional. Hal ini menjadi bukti komitmen sekolah dalam memberikan pendidikan yang terbaik bagi siswa-siswinya.
        </p>
        <p class="text-gray-700 mb-4">
            Kami terus berupaya untuk meningkatkan kualitas pendidikan dan memberikan yang terbaik bagi siswa-siswi kami, agar mereka dapat menjadi generasi penerus yang unggul dan berakhlak mulia.
        </p>
        <p class="text-gray-700">
            Wassalamu'alaikum warahmatullahi wabarakatuh.
        </p>
    </div>

    <!-- Lokasi Kami -->
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Lokasi Kami</h2>
        <div class="relative overflow-hidden rounded-lg shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5456332219164!2d113.5398242!3d-7.731798200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd703118095b60f%3A0x7d568da1c09259df!2sMTs%20MAMBAUL%20HASAN!5e0!3m2!1sid!2sid!4v1722877751396!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
</div>
@endsection