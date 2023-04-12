<?php
    include("/xampp/htdocs/ges_pret/conf/db.php");

    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        extract($_POST);
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $naissance=$_POST['naissance'];
        $cotisation=$_POST['cotisation'];
        if(!empty($nom) && !empty($prenom) &&!empty($naissance) && !empty($cotisation)){
            $sql="UPDATE `adherant` SET `nom`='$nom',`prenom`='$prenom',`naissance`='$naissance',`cotisation`='$cotisation' WHERE id = $id";
            $insert=$con->prepare($sql);
            $insert->execute();
            header("location:?affichage=listerAdherant");
            
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
    <title>Ajout_Adherant</title>
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <script src="../css/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        // include("/xampp/htdocs/ges_pret/pages/nav.php");
        include("/xampp/htdocs/ges_pret/conf/db.php");
        $id=$_GET['id'];
        $sql="SELECT * FROM `adherant` WHERE id = $id ";
        $select=$con->prepare($sql);
        $select->execute();
        $affichages = $select->fetchAll();
    ?>
    
    <div class="formulaire">
        <?php foreach($affichages as $affichage): ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="nom" value="<?php echo $affichage['nom']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PRENOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage['prenom']?> " name="prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NAISSANCE</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" value="<?=$affichage['naissance']?>" name="naissance">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">COTISATION</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" value="<?=$affichage['cotisation']?>" name="cotisation">
                </div>
                <div class="mb-3" id="enregistrer">
                    
                    <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="example" name="submit" value="Modifier" >
                </div>
                
                
            </form>
        <?php endforeach ?>

    </div>
    
</body>
</html>