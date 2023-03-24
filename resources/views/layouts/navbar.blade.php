<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" id="title" href="{{ Route('market') }}">TOKOKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('market') }}">Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('kategori') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('produk') }}">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
