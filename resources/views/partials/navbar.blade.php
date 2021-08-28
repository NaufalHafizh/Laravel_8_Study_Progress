{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="float-md-start navbar-brand text-uppercase fw-bold" href="#">Naufal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === "TULISAN") ? 'active' : '' }}" href="/tulisan">Tulisan</a>
        </div>
      </div>
    </div>  
  </nav> --}}

  <nav class="navbar navbar-expand-lg shadow-sm navbar-light text-uppercase bg-light">
    <div class="container">
      <h3 class="float-md-start text-dark">Naufal.</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "TULISAN") ? 'active' : '' }}" href="/tulisan">Tulisan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "KATEGORIS") ? 'active' : '' }}" href="/Kategoris">Kategori</a>
          </li>
          <li>
            <a class="nav-link btn bg-primary {{ ($active === "Login") ? 'active' : '' }}" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>