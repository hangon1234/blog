<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container">
    <a class="navbar-brand" href="#">Daniel Kim</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample07" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/skill')}}">Skill</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/project')}}">Project</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/contact')}}">Contact</a>
        </li>
        <li class="nav-item active">
          <a href="https://enjoykhg.blogspot.com" target="_blank" class="nav-link">Blog</a>
        </li>
        <li class="nav-item active">
            <a href="{{url('/album')}}" class="nav-link">Album</a>
        </li>
        @if(Auth::check())
        <li class="nav-item active">
            <a href="{{url('/admin')}}" class="nav-link">Admin</a>
        </li>
        @endif
      </ul>
      @if(Auth::check())
      <form class="form-inline my-2 my-lg-0" method="post" action="{{route('logout')}}">
        {{csrf_field()}}
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
      @endif
    </div>
  </div>
</nav>