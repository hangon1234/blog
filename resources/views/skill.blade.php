@extends('layouts.master')
@section("title", "Skill")
@section('body')
<div class="row mb-5 marketing">
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/laravel.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>Laravel</h2>
     <p>Proficient</p>
    </div>
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/php.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>PHP</h2>
     <p>Proficient</p>
    </div>
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/docker.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>Docker</h2>
     <p>Proficient</p>
    </div>
</div>
<div class="row marketing">
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/cpp.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>C++</h2>
    </div>
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/html.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>HTML</h2>
     <p>Novice</p>
    </div>
    <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
     focusable="false" role="img" aria-label="Placeholder: 140x140">
     <title>Placeholder</title>
     <rect width="100%" height="100%" fill="#f8fafc"></rect>
     <text x="50%" y="50%" fill="#f8fafc" dy=".3em">140x140</text>
     <image xlink:href="{{url('image/python.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
     <h2>Python</h2>
     <p>Expert</p>
    </div>
</div>
@endsection