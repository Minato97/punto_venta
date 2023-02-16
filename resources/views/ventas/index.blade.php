@extends('layouts.dashboard')
@section('title', "Home")
@section('content-dashboard')
    <div class="container-fluid py-4">
        <div id="app"></div>
        @vite('resources/js/app.js')
    </div>
@endsection
