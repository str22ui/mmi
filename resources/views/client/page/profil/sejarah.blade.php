@extends('client.layouts.index')

@section('title', 'Sejarah')

@section('content')
<section class="overflow-x-hidden mx-5 lg:mx-12 xl:mx-32">
    <div class="container mx-auto py-20 font-[Poppins]">
        <!-- Judul -->
        <div class="text-left mb-12">
            <h2 class="text-lg md:textt-4xl lg:text-4xl font-bold text-primary">SEJARAH SINGKAT SMK AL-HASRA</h2>
            <div class="w-1/3 h-1 bg-primary mt-4"></div>
        </div>

        <!-- Bagian Konten -->
        <div class="flex flex-col md:flex-row py- items-center md:space-x-12">

            <div class="w-full md:w-1/2 relative">

                <img src="{{ asset('images/sejarah1.png') }}" alt="Sejarah 1" class="rounded-lg shadow-md mb-6">

                <img src="{{ asset('images/sejarah2.png') }}" alt="Sejarah 2" class="rounded-lg shadow-md w-1/2 absolute bottom-0 right-4 transform translate-y-1/4 hidden sm:block">
            </div>

            <!-- Bagian Teks -->
            <div class="w-full md:w-1/2 mt-6 md:mt-0 font-normal text-justify">
                <p class="text-gray-700 mt-4">
                    Lembaga Pendidikan Yayasan Al Hasra yang berlokasi di Jalan Raya Ciputat Parung Km. 24 Bojongsari – Kota Depok, berdasarkan  Akte Notaris Ny. Muljani Sjafei, SH. No. 9 tanggal 11 September 1984, didirikan atas dasar pemikiran ketinggian nilai-nilai Islam dan semata-mata untuk beribadah kepada Allah SWT. Selain itu keprihatinan sosial spiritual dan kemiskinan intelektual yang melanda umat Islam akan lebih tepat jika didekati melalui upaya-upaya peningkatan penguasaan keilmuan yang dilakukan secara terencana, terprogram, terorganisir dan dengan kemampuan pengelolaan manajemen modern.

                </p>
                <p class="text-gray-700 mt-4">
                    Sebagai Lembaga Pendidikan yang baru berdiri, Yayasan Al Hasra focus pada Pendidikan Menengah sehingga yang pertama di dirikan adalah SMP Al Hasra. Setelah SMP Al Hasra berkembang selama 5 tahun menyusul SMA Al Hasra pada tahun 1989. Niat baik Yayasan Al Hasra untuk memberikan Pendidikan yang berkualitas dan terjangkau bagi masyakarat berlanjut dengan mendirikan SMK Al Hasra pada tahun 1999.
                </p>
                <p class="text-gray-700 mt-4">
                    Untuk melengkapi kebutuhan akan pelayanan pendidikan menengah tingkat atas bagi masyarakat, maka didirkan SMK Al Hasra berdasarkan keputusan Kepala Dinas Depdikbud provinsi Jawabarat nomer: 3087/IO2.1/Kep/OT/99 tanggal 27 Juli 1999.
                </p>
                <p class="text-gray-700 mt-4">
                    Pada mulanya SMK Al Hasra mengembangkan program keahlian Administrasi Perkantoran atau Sekretaris, kemudian dibuka program keahlian Penjualan ( Pemasaran) yang pada akhirnya kedua jrusan tersebut di tutup pada tahun 2010.
                </p>
                <p class="text-gray-700 mt-4">

                Kembali kepada salah satu dasar pendirian Lembaga Pendidkan ini yaitu atas dasar ketinggian ilmu-ilmu Islam dan semata-mata untuk beribadah kepada Allah SWT  maka di bukalah Jurusan Perbankan Syariah sebagai bentuk kontribusi terhadap ilmu pengetahuan tentang perekonomian Islam pada tahun 2004.
                Selanjutnya dengan melihat kemajuan dunia technology yang semakin pesat dan kebutuhan akan ilmu pengetahuan di bidang tehnologi dan informasi, tahun 2010 dibuka juga program keahlian Teknik Komputer dan Jaringan berdasarkan keputusan Kepala Dinas Pendidikan Kota Depok nomor : 421.3/O17/Disdik/2010 tanggal 30 Juni 2010. Dalam sejarah berdirinya SMK Al Hasra telah berganti beberapa periode dan Kepala Sekolah, pada periode pertama tahun 1999 – 2004 yaitu Ibu Yunaeni, S.Pd., pada periode kedua tahun 2004-2006 adalah Ibu Endang Tri Astuti, S.Ak., selanjutnya pada periode ketiga tahun 2006 – 2009 yaitu Bapak Drs. Cik Hakim dan di lanjutkan pada period ke-empat 2009 – 2011  yaitu Ibu Dra. Helmidar. Pada peiode ke-lima tahun 2011-2014 adalah Bapak Abdul Hamid, S.Ag.. pada period ke-enam tahun 2014-2017 Bapak Drs. Cik Hakim Kembali menjabat sebagai kepala sekolah. Pada tahun 2017-2021 atau periode ke-tujuh yaitu Ibu Sawitri Retno Widyaningsih, M.pd. pada periode ke-delapan yaitu pada tahun 2021 sampai dengan sekarang yaitu Bapak Tusam, S.Pd
                </p>

            </div>
        </div>
    </div>
</section>
@endsection
