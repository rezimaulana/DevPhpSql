<?php
//get uri segment for active css on menu
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$folder = $uri_segments[4];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRUDNATIVE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $folder == 'index.php' ? 'active' : '' ?>" href="<?=BASEPATH?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $folder == 'pengarang' ? 'active' : '' ?>" href="<?=BASEPATH?>pengarang">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $folder == 'buku' ? 'active' : '' ?>" href="<?=BASEPATH?>buku">Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>