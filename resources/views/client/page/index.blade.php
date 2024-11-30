@extends('client.layouts.index')

@section('title', '')

@section('content')
    {{-- Hero --}}
    @include('client.component.landing.heroo')
    @include('client.component.landing.project')
    @include('client.component.landing.contactHome')
@endsection
