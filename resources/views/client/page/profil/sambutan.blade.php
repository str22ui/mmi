@include('client.layouts.partials.header')

<body class="overflow-x-hidden">
    @include('client.layouts.partials.nav')
    {{-- @include('client.layouts.partials.hero') --}}
    <section id="hero" class="relative w-screen h-[80vh] mt-10 lg:mt-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/sambutan.png') }}');">
        <div class="absolute inset-0 bg-black opacity-10"></div>
    </section>


    <div class="flex flex-col md:flex-row items-center md:space-x-10 pl-6 pr-6 md:pb-6 pt-12 mt-24 text-[Poppins]">
        <!-- Bagian Gambar -->
        <div class="w-full md:w-1/4 flex flex-col justify-center items-center">
            <img src="{{ asset('images/struktur/Kepala-sekolah.png') }}" alt="Kepala Sekolah" class="rounded-lg shadow-md">
            <p class="text-center mt-4 font-bold">
                Tusam, S.Pd<br>
               <label for="" class="font-medium">Kepala SMK Al-Hasra</label>
            </p>
        </div>

        <!-- Bagian Teks -->
        <div class="w-full md:w-3/4 mt-6 md:mt-0 text-md font-[Poppins] font-normal text-justify ">
            <p class="">Bismillahirrahmanirrahim</p>
            <p class=" ">Assalamu'alaikum warahmatullahi wabarakatuh</p>
            <p class="mt-4">
                Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah kami dapat menerbitkan Website sekolah ini dengan alamat www.smkalhasra.sch.id. Mudah-mudahan dengan adanya website sekolah ini dapat memberikan jawaban atas kebutuhan informasi sekolah dan memberikan manfaat bagi semua pihak khususnya keluarga besar SMK Al-Hasra.
            <p class="mt-4">
                Dalam era industri 5.0 yang ditandai dengan kemajuan teknologi digital yang sangat pesat dan berimbas pada semua aspek kehidupan, maka kita yang bergerak dalam dunia pendidikan harus dapat mengikutinya agar tidak tertinggal dalam teknologi digital. Tentunya sekolah mempunyai tugas dan tanggung jawab yang besar untuk menyiapkan SDM yang mampu beradaptasi dengan kemajuan zaman dan mampu bersaing dalam pasar kerja global namun dengan tetap menjaga nilai-nilai agama dan budaya luhur bangsa.

            </p>
            <p class="mt-4">
                Pendidikan adalah investasi masa depan yang sangat berharga bagi setiap anak dan SMK Al-Hasra melalui Program Keahlian Perbankan Syarian dan Teknik Komputer Jaringan mempersiapkan para lulusan dengan pengetahuan dan keterampilan yang memadai sesuai dengan kompetensinya serta menanamkan akhlak yang mulia serta budi perkerti islami yang baik. Sehingga lulusan SMK Al-Hasra memiliki peluang dan kesempatan yang sama untuk dapat Bekerja, Melanjutkan, atau Berwirausaha (BMW). Semoga Allah SWT senantiasa memberikan petunjuk kepada kita semua dalam mendidik generasi penerus bangsa menjadi generasi yang unggul dimasa yang akan datang. Aamiin
            <p class="mt-4">
                Wassalamualaikum Warahmatullahi Wabarakatuh
            </p>

            <p class="mt-4">
                Kepala SMK Al Hasra
            </p>
            </p>
            <p class="text-left mt-4">
                Tusam, S.Pd
            </p>
        </div>
    </div>

</body>

@include('client.layouts.partials.footer')
