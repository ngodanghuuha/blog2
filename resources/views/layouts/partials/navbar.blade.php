<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      @if (Request::is('admin/*'))
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        @auth
          @role('admin')
          <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
          @endrole
          @role('super_admin')
          <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>
          <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
          <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Permission</a></li>
          <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
          @endrole
          @role('user')
          <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>
          @endrole
        @endauth
      </ul>
      @auth
        {{auth()->user()->name}}&nbsp;
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth
    @endif
    </div>
  </div>
</header>