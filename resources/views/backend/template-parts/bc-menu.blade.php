<?php error_reporting(0); ?>
<div class="card-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand">Control Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBC" aria-controls="navbarBC" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarBC">
          
        <ul class="navbar-nav mr-auto">
            
          <li class="nav-item @if(Request::is('dashboard')) active @endif">
            <a class="nav-link" href="{{ url('/dashboard') }}"> Dashboard </a>
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
        <?php
            if(Request::is('dashboard/post/*')):
                $surl = url('/dashboard/post/all');
                $sname = "Post";
            elseif(Request::is('dashboard/reviews/*')): 
                $surl = url('/dashboard/reviews/all');
                $sname = "Review";
            endif;
        ?>
        @if($surl)
            <form action="{{ $surl }}" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" name="s" value="{{ $_GET['s'] }}" placeholder="Search {{ $sname }}" aria-label="Search {{ $sname }}">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        @endif
        
      </div>
    </nav>
</div>