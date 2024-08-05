@extends('layouts.app')
@section('title', 'Progam')
@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-4xl font-extrabold text-green-800 mb-8 mt-10 text-center">Program Kami</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Program Tahfid -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('images/tahfid.jpg') }}" alt="Program Tahfid" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Tahfid</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program Tahfid bertujuan untuk menghafal Al-Qur'an dengan target tertentu. Siswa akan diberikan bimbingan intensif untuk mempercepat proses hafalan dengan metode yang efektif dan pengawasan yang ketat.
                </p>
            </div>
        </div>

        <!-- Program Tahsin -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('images/tahsin.jpg') }}" alt="Program Tahsin" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Tahsin</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program Tahsin fokus pada perbaikan bacaan Al-Qur'an agar sesuai dengan tajwid yang benar. Peserta akan dilatih oleh pengajar berpengalaman untuk memperbaiki dan menyempurnakan bacaan mereka.
                </p>
            </div>
        </div>

        <!-- Program Sholat Duha dan Duhur Berjamaah -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\sholat.jpeg" alt="Sholat Duha dan Duhur Berjamaah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Sholat Duha dan Duhur Berjamaah</h2>
                <p class="text-gray-700 leading-relaxed">
                    Setiap hari, siswa dianjurkan untuk mengikuti sholat duha sebagai bentuk ibadah tambahan, serta sholat duha berjamaah sebagai bagian dari rutinitas harian di sekolah.
                </p>
            </div>
        </div>

        <!-- Program Tadabur Alam -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\tadabur.jpeg" alt="Tadabur Alam" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Tadabur Alam</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program Tadabur Alam dilaksanakan setiap tiga bulan sekali. Kegiatan ini melibatkan eksplorasi dan refleksi terhadap ciptaan Allah sebagai bagian dari pendidikan spiritual dan ilmiah.
                </p>
            </div>
        </div>

        <!-- Program Khotmil Quran -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('images/khotmil-quran.jpg') }}" alt="Khotmil Quran" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Khotmil Quran</h2>
                <p class="text-gray-700 leading-relaxed">
                    Setiap akhir bulan, diadakan acara khotmil Quran di mana seluruh siswa bersama-sama menyelesaikan pembacaan Al-Qur'an. Kegiatan ini merupakan bagian dari upaya untuk meningkatkan kecintaan terhadap Al-Qur'an.
                </p>
            </div>
        </div>

        <!-- Program p5  -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\p5.jpeg" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Project Penguatan Profil Pelajar Pancasila (P5)</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program Penguatan Profil Pelajar Pancasila dirancang untuk membentuk siswa yang tidak hanya cerdas secara akademis tetapi juga memiliki karakter kuat dan berlandaskan pada nilai-nilai Pancasila.
                </p>
            </div>
        </div>

        <!-- Program Istigosah -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('images/istigosah.jpg') }}" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Istigosah</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program Istigosah dilaksanakan setiap hari Jumat. Kegiatan ini merupakan doa bersama yang dilakukan untuk memohon keberkahan dan keselamatan bagi seluruh anggota sekolah.
                </p>
            </div>
        </div>

        <!-- Program class meeting  -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\class.jpeg" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Class Meeting</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program ini mencakup berbagai lomba dan kompetisi seperti olahraga, seni, dan permainan kreatif yang dirancang untuk mempererat tali persahabatan antar siswa.
                </p>
            </div>
        </div>
        <!-- Program pramuka -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\pramuka.jpeg" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Ekstra Pramuka</h2>
                <p class="text-gray-700 leading-relaxed">
                    Program ini mengajarkan kepemimpinan, kerjasama, dan kemandirian melalui berbagai kegiatan seru seperti kemah, eksplorasi alam, dan proyek sosial.
                </p>
            </div>
        </div>
        <!-- Program pencak silat  -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('images/istigosah.jpg') }}" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Ekstra Pencak silat</h2>
                <p class="text-gray-700 leading-relaxed">
                    Temukan kekuatan dan keseimbangan dalam setiap gerakan di program ekstrakurikuler Pencak Silat kami. Melalui seni bela diri tradisional ini, siswa tidak hanya belajar teknik pertahanan diri, tetapi juga nilai-nilai disiplin, kepercayaan diri, dan kebanggaan budaya.
                </p>
            </div>
        </div>

        <!-- Program ekstra komputer  -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="..\image\ac6.jpeg" alt="Istigosah" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-green-800 mb-3">Ekstra Komputer</h2>
                <p class="text-gray-700 leading-relaxed">
                    Jelajahi dunia digital lebih dalam dengan program Ekstra Komputer kami! Dirancang untuk menambah keterampilan teknologi siswa
                </p>
            </div>
        </div>

    </div>
</div>
@endsection