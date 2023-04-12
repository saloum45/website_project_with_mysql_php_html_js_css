<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <script src="css/js/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?affichage=acceuil">Home</a>
            </li>
            <!-- adherant -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Adherant
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=formAdherant">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerAdherant">Lister</a></li>
                </ul>
            </li>
            <!-- emprunt -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Emprunt
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=formEmprunt">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerEmprunt">Lister</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Effectuer
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=formEffectuer">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerEffectuer">Lister</a></li>
                </ul>
            </li>
            
        </ul>
        
        </div>
    </div>
    </nav>
</body>
</html>