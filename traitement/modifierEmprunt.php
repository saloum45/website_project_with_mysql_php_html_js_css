<?php
    include("/xampp/htdocs/ges_pret/conf/db.php");

    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        extract($_POST);
        
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        if(!empty($nom) && !empty($description)){
            $sql="UPDATE `emprunt` SET `nom`='$nom',`description`='$description' WHERE code = $id";
            $insert=$con->prepare($sql);
            $insert->execute();
            header("location:?affichage=listerEmprunt&msg=Modification faite avec succes");
            
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Veuillez renseigner tous les champs
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <script src="../css/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        // include("/xampp/htdocs/ges_pret/pages/nav.php");
        include("/xampp/htdocs/ges_pret/conf/db.php");
        $id=$_GET['id'];
        $sql="SELECT * FROM `emprunt` WHERE code = $id ";
        $select=$con->prepare($sql);
        $select->execute();
        $affichages = $select->fetchAll();
    ?>
    
    
    <div class="formulaire">
        <form action="" method="post">
            <!-- foreign keys adherant -->
            <?php foreach($affichages as $affichage):?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="nom" value="<?=$affichage['nom']?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DESCRIPTION</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="description" value="<?=$affichage['description']?>">
            </div>
            <?php endforeach?>
            
            <div class="mb-3" id="enregistrer">
                <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="example" name="submit" value="Modifier" >
            </div>
            
            
        </form>

    </div>
   
                
                
        
</body>
</html>