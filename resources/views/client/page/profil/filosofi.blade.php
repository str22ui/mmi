@extends('client.layouts.index')

@section('title', 'Filosofi')
@section('content')
    <div class="mx-5 lg:mx-12 xl:mx-32 py-12 font-[Poppins] overflow-x-hidden">
        <!-- Judul -->
        <div class="text-left mb-12">
            <h2 class="text-lg lg:text-2xl font-bold text-primary">FILOSOFI AL-HASRA</h2>
            <div class="w-1/6 h-1 bg-primary mt-4"></div>
        </div>
    
        <!-- Bagian Konten -->
        <div class="flex flex-col md:flex-row items-center">
            <!-- Bagian Gambar -->
            <div class="w-full md:w-1/2 relative">
                <!-- Gambar 1 -->
                <img src="{{ asset('images/filosofi1.png') }}" alt="Filosofi 1" class="rounded-lg w-4/5 shadow-md mb-6">
    
                <!-- Gambar 2, lebih kecil -->
                <img src="{{ asset('images/filosofi2.png') }}" alt="Filosofi 2" class="rounded-lg shadow-md w-1/3 absolute bottom-0 right-4 transform translate-y-1/4">
            </div>

            <!-- Bagian Teks -->
            <div class="w-full md:w-1/2 mt-6 md:mt-0 text-justify text-sm">
                <p class="text-gray-700 mt-4">
                    Perubahan sosial budaya masyarakat Indonesia melalui proses yang lebih dikenal dengan istilah “pembangunan nasional”, pada gilirannya tidak hanya berpengaruh terhadap tatanan fisik material dan sosiokultural saja, tetapi juga sangat mempengaruhi kehidupan spiritual umat Islam di Indonesia. Dalam perkembangan kehidupan sosial budaya seperti ini, agama Islam yang semula dianggap dan diharapkan berfungsi sebagai sumber inspirasi kehidupan umat, justru ditantang untuk mendapatkan bentuk-bentuk ekspresi dan istitusi yang baru, yaitu ekspresi ataupun bentuk institusi yang sesuai dengan perkembangan kebudayaan modern dewasa ini. Kemampuan untuk melahirkan ekspresi dan institusi baru akan membuat Islam mampu berperan dan bermakna bagi peletakan dasar- dasar etika kehidupan umat khususnya umat Islam.


                </p>
                <p class="text-gray-700 mt-4">
                Tetapi sebaliknya, ketidakmampuan agama menyesuaikan diri dengan perkembangan modern akan berakibat pada semakin jauhnya umat dari agamanya, agama bisa-bisa kehilangan makna ditengah-tengah kehidupan yang semakin sekuler ini. Dan tampaknya gejala yang terakhir inilah yang umum terjadi pada dunia Islam dewasa ini.
                </p>

                <p class="text-gray-700 mt-4">
                    Sementara di sisi lain, umat Islam juga mempunyai agenda besar yang perlu secara cepat diantisipasi yaitu masalah kualitas sumber daya manusia. Kwalitas sumber daya manusia yang belum memungkinkan umat Islam mengambil peran aktif dalam proses pembangunan. Umat Islam tidak lebih sebagai pemakai hasil pembangunan ketimbang menjadi pelaku pembangunan yang berpartisipatif.
                </p>

            </div>
        </div>
    
        <!-- Tambahan kalimat di bawah gambar -->
        <div class="text-justify mt-12 text-sm">
            <p class="text-gray-700 mt-4">
                Atas dasar pemikiran diatas. timbulah cita-cita pada diri Bapak Haji Hashuda. Setelah beliau mendapat cobaan dari Allah SWT. Yang hampir merengut jiwanya pada hari jumat, 11 maret 1977 sekitar pukul 15.00 WIB, sewaktu pulang melihat restoran yang berada di wilayah Sukabumi, Jawa Barat. Kejadian tersebut terjadi ketika mobil yang ia tumpangi bersama sopirnya meluncur dengan kencangnya di Jalan Raya Desa Klari krawang. tiba-tiba slip jungkir balik dan berputar-putar sejauh kurang lebih 30 meter. Mobil tersebut baru berhenti setelah masuk kedalam got dengan posisi terbalik. Musibah yang menimpa beliau tersebut mengakibatkan meninggalnya sang sopir seketika itu juga. Kejadian tersebut dimaknai beliau sebagai peringatan dari Allah baginya, dengan hikmah agar beliau tidak hanya memikirkan kepentingan dunia semata tetapi juga harus mempersiapkan diri untuk bekal kehidupan akhirat yang telah dijanjikan Allah kekal didalamnya.
            </p>
            <p class="text-gray-700 mt-4">
                Lima tahun berlalu impian dari Bapak H. Hashuda belum juga terwujud. Hingga pada pagi hari yang cerah di bulan Januari tahun 1982. ketika H. Hashuda sedang duduk di depan restorannya di Jalan Matraman Raya No. 65 Jatinegara Jaktim, tiba-tiba saja seseorang yang baru saja menyelesaikan makan pagi di restoran tersebut melontarkan perkataan, “apakah pak Haji tidak berniat untuk mendirikan masjid?”, mendapat pertanyaan seperti itu, Bapak H. Hashuda seolah mendapatkan sebuah gagasan, segera mempersilahkan orang tersebut.
                Setelah ada perbincangan singkat diketahui ternyata orang tersebut adalah mantan anggota polisi yang selalu menyampaikan gagasan kepada pemuka masyarakat atau siapa saja yang mungkin menerima ide-idenya. Ia mengatakan bahwa dia sekarang sedang mengerjakan sebuah masjid di wilayah Depok dengan anggaran Rp. 100.000.000.- (seratus juta rupiah) atas prakarsa seorang dermawan dari Jakarta. Orang tersebut berkata “Kalau Pak Haji ada atau mempunyai waktu, mari kita lihat kesana” ucapnya. Bapak Haji Hashuda meresponnya dan langsung melihat masjid yang sedang di bangun orang tersebut. Sepulang dari sana Bapak Haji Hashuda tidak sengaja melihat dan tertarik pada sebidang tanah yang akan dijual di pinggir jalan raya Sawangan-Parung yang saat itu masuk ke dalam wilayah administrasi Kota Bogor.
            </p>
            <p class="text-gray-700 mt-4">
                Setelah proses penjajakan kepada pemilik tanah, maka terjadilah transaksi jual-beli yang dilaksanakan pada tanggal 22 Januari 1982. untuk mencari solusi (jalan keluar) dari problematika atas tanah yang telah tersedia, sesuai dengan kemampuan dan ketersedian sumber daya yang ada semula difahami bahwa jalan keluar dari problematika itu dapat dilakukan dengan pendekatan usaha dibidang ekonomi (restoran) atau dibidang kesehatan (rumah sakit/klinik).
                Tetapi perkembangan analisa selanjutnya menunjukan bahwa untuk merambah kedua bidang tersebut belum didukung oleh ketersediaan sumber daya yang efektif. Disamping pertimbangan bahwa kedua bidang tersebut belum secara langsung menjawab keprihatinan spiritual umat Islam seperti yang digambarkan di atas menjadi landasan berpikir berdirinya sebuah badan hukum (yayasan) sosial.
            </p>
            <p class="text-gray-700 mt-4">
                Akhirnya diputuskan bahwa bidang pendidikan adalah bidang yang paling tepat untuk menjawab persoalan tersebut. Karena dipahami keprihatinan sosial spiritual dan kemiskinan intelektual yang melanda umat Islam akan lebih tepat jika didekati melalui upaya-upaya peningkatan penguasaan keilmuan yang dilakukan secara terencana, terprogram, terorganisir dan dengan kemampuan pengelolaan manajemen modern. Lebih jauh, pilihan strategis tersebut diatas diletakan di atas dasar-dasar pemikiran tentang ketinggian nilai-nilai Islam dan semata-mata untuk beribadah kepada Allah SWT. Muncul kesepakatan untuk mendirikan yayasan yang bergerak di bidang pendidikan, dan kemudian secara formal dimuat dalam Akte Notaris Ny. Muljani Sjafei, SH. No. 9 tanggal 11 September 1984 dengan nama “Himpunan Amal Sosial Redha Allah” disingkat AL-HASRA.
            </p>
        </div>
    </div>
@endsection
