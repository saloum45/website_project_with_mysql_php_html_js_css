<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout_Adherant</title>
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <script src="../css/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    ?>
    
    <div class="formulaire">
        <form action="?affichage=traiterEmprunt" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="example -> livre" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3" id="enregistrer">
                
                <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="example" name="submit" value="Eregistrer" >
            </div>
            
            
        </form>

    </div>
    
</body>
</html>