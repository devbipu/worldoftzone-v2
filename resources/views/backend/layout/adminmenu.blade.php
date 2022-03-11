<div class="sidebar-sticky pt-3">
  <ul class="nav flex-column navItemsWrapper">
    <li class="nav-item">
      <a class="nav-link active" href="{{url('/dashboard')}}">
        Dashboard
      </a>
    </li>
    <li class="nav-item dropdown @if(Request::is('dashboard/post/*')) active @endif">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Posts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/dashboard/post/create') }}">Add New</a>
          <a class="dropdown-item" href="{{ url('/dashboard/post/all') }}">All Posts</a>
        </div>
      </li>
      <li class="nav-item dropdown @if(Request::is('dashboard/portfolio/*')) active @endif">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Portfolios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/dashboard/portfolio/create') }}">Add New</a>
          <a class="dropdown-item" href="{{ url('/dashboard/portfolio/all') }}">All Portfolios</a>
        </div>
      </li>
      <li class="nav-item @if(Request::is('dashboard/pages/all')) active @endif">
        <a class="nav-link" href="{{ url('dashboard/pages/all') }}"> Pages </a>
      </li>
      <li class="nav-item @if(Request::is('dashboard/reviews/*')) active @endif">
        <a class="nav-link" href="{{ url('/dashboard/reviews/all') }}"> Reviews </a>
      </li>
  </ul>
</div>