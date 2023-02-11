@extends('layouts.main')
@section('layout')
    @include('layouts.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.navbar')
        <div class="content">
            @yield('content-dashboard')
        </div>
        @include('layouts.footer')
    </main>
@endsection
