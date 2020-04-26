@extends('layouts.master')
@section("title", "About me")
@section('body')
<div class="row">
    <div class="col-md-8">
        <div class="blog-post">
            <h2 class="blog-post-title mb-3">Introduction</h2>
            <p>I am Daniel Kim a 24 years old who has interest for software development. 
                Constantly learn and study, interested in web-programming,
                 especially in PHP and Laravel.</p>
            <hr>
            <h3>Strength</h3>
            <ul>
                <li>PHP programming</li>
                <li>Understanding MVC pattern</li>
                <li>Managing database by using ORM</li>
                <li>Docker to deploy server; managing development environment</li>
                <li>Understanding Laravel framework's elegant feature</li>
                <li>Python scripting; task automization, web crawling, dramatically reduces workload, etc..</li>
            </ul>
            <hr>
            <h3>Education</h3>
            <ul>
                <li>Ann Arbor Montessori School (~2015, the Philippines)</li>
                <li>University of Macau (2015~defernment) - official postponement of military service</li>
            </ul>
            <hr>
            <h3>Language</h3>
            <ul>
                <li>Korean (fluent)</li>
                <li>Cantonese, 廣東話 (conversational)</li>
                <li>English (proficient)</li>
            </ul>
        </div>
    </div>
</div>
@endsection
