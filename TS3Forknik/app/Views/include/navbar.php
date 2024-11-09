<link rel="stylesheet" href="<?= base_url("public/style/navbar_cs.css")?>">

<nav class="navbar navbar-expand-lg bg-body-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url()?>">
            <img src="<?= base_url("public/style/redbloon.png") ?>" alt="home" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="<?= base_url()?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url("index/about")?>">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manage
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url("users") ?>">Users</a></li>
                        <li><a class="dropdown-item" href="<?= base_url("products") ?>">Products</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="Btn" href="<?= base_url("index/logout")?>">
                    <div class="sign">  
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="text">Logout</div>
                </a>
                </li>
            </ul>
        </div>
    </div>
</nav>