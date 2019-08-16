@extends('layouts.admin')
@section('content')
  <header class="app-header navbar fixed-top">
    <!-- Header content here -->
    <div class="container-fluid">
      <a class="navbar-brand" href="/admin">MAN HAIR SALON</a>
    </div>
  </header>
  <div class="app-body admin-sidebar">
    <div class="sidebar">
      <!-- Sidebar content here -->
      <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">
          <li class="nav-item nav-dropdown active open">
            <a class="nav-link  nav-dropdown-toggle " href="#">
            HOME
            </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item ">
              <a class="nav-link" href="">
              Services
              </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
    <main class="main">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12  col-xl-12 ">
              <div class="card">
                <div class="card-body">
                  <h1 class="docs-title" id="content">Migrating to v2.0.0</h1>
                  <p class="docs-lead">CoreUI 2.0.0 is a major rewrite of the entire project. The most notable changes are summarized below, followed by more specific changes to relevant components.</p>
                </div>
                
                
              </div>
            </div>
        </div>
        
      </div>
    </main>
    <aside class="aside-menu">
      <!-- Aside menu content here -->
    </aside>
  </div>
  <footer class="app-footer">
    <!-- Footer content here -->
  </footer>

@endsection