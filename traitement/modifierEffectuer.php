<?php
    include("/xampp/htdocs/ges_pret/conf/db.php");

    if(isset($_POST['submit'])){
        $id=$_GET['id'];
        extract($_POST);
        $identifiant=$_POST['adherant'];
        $code=$_POST['emprunt'];
        $dated=$_POST['dated'];
        $datef=$_POST['datef'];
        if(!empty($adherant) && !empty($emprunt) &&!empty($dated) && !empty($datef)){
            $sql="UPDATE `effectuer` SET `id`='$identifiant',`code`='$code',`dated`='$dated',`datef`='$datef' WHERE id_effectuer = $id";
            $insert=$con->prepare($sql);
            $insert->execute();
            header("location:?affichage=listerEffectuer&msg=Modification faite avec succes");
            
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
        $sql="SELECT * FROM `effectuer` WHERE id_effectuer = $id ";
        $select=$con->prepare($sql);
        $select->execute();
        $affichages = $select->fetchAll();
    ?>
    
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
        <form action="" method="post">
            <!-- foreign keys adherant -->
            <label for="exampleFormControlInput1" class="form-label">Adherant</label>
            <select class="form-select" aria-label="Default select example" name="adherant" id="adherant">
                <?php
                    $sql="SELECT * FROM `adherant` ";
                    $insert=$con->prepare($sql);
                    $insert->execute();
                    $elements=$insert->fetchAll();
                ?>
               <?php foreach($elements as $element): ?>
                <option value="<?=$element['id']?>" ><?= $element['nom'] ?></option>
                <?php endforeach ?>
            </select>

            <!-- foreign keys emprunt  -->
            <label for="exampleFormControlInput1" class="form-label">Emprunt</label>
            <select class="form-select" aria-label="Default select example" name="emprunt" id="emprunt">
                <?php
                    $sql="SELECT * FROM `emprunt`";
                    $insert=$con->prepare($sql);
                    $insert->execute();
                    $elements=$insert->fetchAll();
                ?>
               <?php foreach($elements as $element): ?>
                <option value="<?=$element['code']?>"> <?= $element['nom'] ?></option>
                <?php endforeach ?>
            </select>
            <?php foreach($affichages as $affichage):?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DATE_DEBUT</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="<?=$affichage['dated']?>" name="dated">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DATE_FIN</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="<?=$affichage['datef']?>" name="datef">
            </div>
            <?php endforeach?>
            
            <div class="mb-3" id="enregistrer">
                <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="example" name="submit" value="Modifier" >
            </div>
            
            
        </form>

    </div>
   
                
                
        
</body>
</html>