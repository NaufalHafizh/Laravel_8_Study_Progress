  <nav class="navbar navbar-expand-lg shadow-sm navbar-light text-uppercase bg-light">
      <div class="container">
          {{-- <h3 class="float-md-start text-dark">Naufal.</h3> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'HOME' ? 'active' : '' }}" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'ABOUT' ? 'active' : '' }}" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $active === 'TULISAN' ? 'active' : '' }}" href="/tulisan">Tulisan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $active === 'KATEGORIS' ? 'active' : '' }}" href="/Kategoris">Kategori</a>
                  </li>
              </ul>
          </div>
          <ul class="navbar-nav ms-auto">
              @auth
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                          aria-expanded="false">Selamat Datang, {{ auth()->user()->username }}</a>
                      <ul class="dropdown-menu">
                          <li>
                              <form action="/logout" method="POST">
                                  @csrf
                                  <button type="submit" class="dropdown-item">LOGOUT</button>
                              </form>
                          </li>
                          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                      </ul>
                  </li>
              @else
                  <li class="nav-item">
                      <a class="nav-link btn bg-primary {{ $active === 'Login' ? 'active' : '' }}" href="/login">Login</a>
                  </li>
              @endauth
          </ul>

      </div>
  </nav>
