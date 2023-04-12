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
    <?php include("/xampp/htdocs/ges_pret/conf/db.php");?>
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
        <form action="?affichage=traiterEffectuer" method="post">
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
                <option value="<?=$element['code']?>"  ><?= $element['nom'] ?></option>
                <?php endforeach ?>
            </select>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DATE_DEBUT</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="example" name="dated">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DATE_FIN</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="example" name="datef">
            </div>
            
            <div class="mb-3" id="enregistrer">
                <input type="submit" class="form-control" id="exampleFormControlInput1" placeholder="example" name="submit" value="Eregistrer" >
            </div>
            
            
        </form>

    </div>
    
</body>
</html>