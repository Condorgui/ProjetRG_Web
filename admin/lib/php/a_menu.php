<?php
if (isset($_SESSION['admin'])) {
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="#">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php?page=accueil_admin">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php?page=contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../index.php?page=catalogue" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catalogue
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../index.php?page=cataloguePS">Jeux PS4</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php?page=catalogueXBOX">Jeux XBOX</a>
 
   
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php?page=cataloguePC">Jeux PC </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php?page=catalogue">Tous les jeux </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Espace membre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../index.php?page=espaceclient">Mon profil</a>      
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./pages/disconnect.php">Me déconnecter</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

<?php
}
?>
