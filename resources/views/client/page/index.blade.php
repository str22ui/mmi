@extends('client.layouts.index')

<?php
    $desc = 'SMK Al-Hasra merupakan salah satu lembaga pendidikan yang berada di bawah naungan Yayasan Al-Hasra. Berlokasi di Jalan Raya Ciputat Parung Km. 24 Bojongsari, Kota Depok, sekolah ini didirikan dengan landasan nilai-nilai Islam yang kuat serta sebagai bentuk pengabdian kepada Allah SWT. Yayasan Al-Hasra sendiri didirikan berdasarkan Akte Notaris Ny. Muljani Sjafei, SH. No. 9 tanggal 11 September 1984.';
?>
@section('title', '')
@section('desc', $desc)
@section('keyword', 'al-hasra','smk', 'pendidikan', 'sekolah')

@section('content')
    {{-- Hero --}}
    @include('client.component.landing.heroo')
    @include('client.component.landing.project')
    @include('client.component.landing.contactHome')
@endsection
