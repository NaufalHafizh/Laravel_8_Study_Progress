<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="#">Naufal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse float-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === "TULISAN") ? 'active' : '' }}" href="/tulisan">Tulisan</a>
        </div>
      </div>
    </div>  
  </nav>