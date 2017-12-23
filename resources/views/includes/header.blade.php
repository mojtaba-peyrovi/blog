<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('dashboard') }}">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item" style="display:inline-block;">
        <a class="nav-link" href="{{route('account')}}">Account</a>
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>



  </div>
</nav>
