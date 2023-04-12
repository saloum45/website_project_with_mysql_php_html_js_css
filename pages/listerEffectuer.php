<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <script src="../css/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php

            include("/xampp/htdocs/ges_pret/conf/db.php");
    
            $sql="SELECT * FROM `effectuer`";
            $select=$con->prepare($sql);
            $select->execute(array());
            $affichages = $select->fetchAll();
            if(isset($_GET['msg'])){
                $msg=$_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        '.$msg.'
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
    ?>
    <div class="formulaire">
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Adherant</th>
                    <th scope="col">Emprunt</th>
                    <th scope="col">Date_Debut</th>
                    <th scope="col">Date_Fin</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichages as $affichage): ?>
                    <tr>
                        
                        <td><?=$affichage['id'] ?></td>
                        <td><?=$affichage['code'] ?></td>
                        <td><?=$affichage['dated'] ?></td>
                        <td><?=$affichage['datef'] ?></td>
                        <td>
                            <a href="?affichage=modifierEffectuer&id=<?=$affichage['id_effectuer'] ?>&test=2"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id=<?=$affichage['id_effectuer'] ?>&test=2"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
    
</body>
        <script>
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('click',function  (e){
                let confirmation = window.confirm("voulez vous vraiment faire cette ACTION");
                if(!confirmation){
                    e.preventDefault();
                }
            } )
            })
    
        </script>

</html>