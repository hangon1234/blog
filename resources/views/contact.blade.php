@extends("layouts.master")
@section("title", "Contact")
@section("body")
<div class="row">
<div class="col-md-8 blog-main">
      <div class="blog-post">
        <h2 class="blog-post-title mb-5">Contact me</h2>
        <ul>
            <li><a href="https://github.com/hangon1234/" target="_blank">GitHub</a></li>  
            <li><a href="https://enjoykhg.blogspot.com" target="_blank">Blog</a></li>
            <li><a href="mailto:hangon1234@gmail.com">E-mail</a></li>
            <li><a href="https://facebook.com/enjoykhg" target="_blank">Facebook</a></li>
        </ul>
    </div>
    <hr>
    <div class="blog-post">
        <h2 class="blog-post-title">Or leave me something<h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/contact/submit">
        {{csrf_field()}}
      <div class="form-group">
            <label for="exampleInputEmail1">Your name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection