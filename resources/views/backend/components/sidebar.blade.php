	<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <div id="navWrapper">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="{{url('/dashboard/pages/all')}}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Pages</span>
              </a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="{{url('/dashboard/reviews/all')}}">
                <i class="menu-icon mdi mdi mdi-tooltip-text"></i>
                <span class="menu-title">Reviews</span>
              </a>
            </li>

            <li class="nav-item nav-category"></li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-folder-outline"></i>
                <span class="menu-title">Portfolio</span>
                <i class="menu-arrow"></i> 
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> 
                    <a class="nav-link" href="{{url('/dashboard/portfolio/all')}}">All Portfolio</a>
                  </li>
                  <li class="nav-item"> 
                    <a class="nav-link" href="{{url('/dashboard/portfolio/create/')}}">Add new Portfolio</a>
                  </li>
                </ul>
              </div>
            </li>

          {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> 
                  <a class="nav-link" href="{{url('/dashboard/reviews/all')}}">
                    <i class="menu-icon mdi mdi mdi-tooltip-text"></i>
                    <span class="menu-title">Reviews</span>
                  </a>
                </li>
              </ul>
            </div>
          </li> --}}

          

            {{-- <li class="nav-item nav-category">Forms and Datas</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/pages/all')}}">Mdi icons</a></li>
                </ul>
              </div>
            </li> --}}
          </ul>
       </div>
      </nav>