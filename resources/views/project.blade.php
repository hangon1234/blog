@extends("layouts.master")
@section("title", "Skill")
@section('body')
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Laravel</strong>
          <h3 class="mb-1">Laravel token manager</h3>          
          <p class="card-text mb-auto">This is a simple Laravel based JWT token issuer, to show example
              usage of Jitsi instance. It has basic authentication feature, room and token management.
          </p>
          <a href="https://github.com/hangon1234/laravel-jitsi-jwt" class="stretched-link">Source code (Github)</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          <image xlink:href="{{url('image/jitsi.png')}}" x="0" y="0" height="100%" width="100%"/></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Python</strong>
          <h3 class="mb-1">Khan Academy Video Downloader</h3>
          <p class="mb-auto">This program uses Khan Academy's API to recursively find topics and
              their videos. This reduce workloads and make easy to download Khan
              Academy's lecture.
          </p>
          <a href="https://github.com/hangon1234/khan-video-downloader" class="stretched-link">Source code (Github)</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          <image xlink:href="{{url('image/khan.png')}}" x="0" y="0" height="100%" width="100%"/></svg></svg>
        </div>
      </div>
    </div>
  </div>
@endsection
