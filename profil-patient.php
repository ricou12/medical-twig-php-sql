<?php
if(isset($_GET['id'])){
    require_once ("services/sqlCommand.php");  
    $sqlCommande = new MyComponentsSql();
    // CONNEXION A LA BASE DE DONNEE
    $connect = $sqlCommande->connectDataBase('hospitale2n');
    $profilPatient = $sqlCommande->profilRdvPatients($_GET['id']);
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <?php
        include 'includes/head.php';
        ?>
        <body>
        <?php
            include "includes/navbar.php";
        ?>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-6 mt-2 border p-2 rounded">
                    <div class="p-3 bg-secondary border text-white">
                        <h1>Profil du patient</h1>
                    </div>
                    <ul class="list-group my-2">
                        <li class="list-group-item">Nom : <?= $profilPatient[0]['lastname']?></a></li>
                        <li class="list-group-item">Prénom : <?= $profilPatient[0]['firstname']?></a></li>
                        <li class="list-group-item">Date de naissance : <?= $profilPatient[0]['birthdate']?></a></li>
                        <li class="list-group-item">Télephone : <?= $profilPatient[0]['phone']?></a></li>
                        <li class="list-group-item">Email : <?= $profilPatient[0]['mail']?></a></li>
                    </ul>
                    <div class="p-3 bg-warning border text-dark w-50">
                        <h2>Mes rendez-vous</h2>
                    </div>
                    
                    <?php
                    foreach($profilPatient as $patient){
                    ?>
                        <ul class="list-group my-2">
                            <li class="list-group-item">date du Rdv : <?= $patient['dateRdv']?></a></li>
                            <li class="list-group-item">heure du Rdv : <?= $patient['heureRdv']?></a></li>
                        </ul>
                    <?php
                    }
                    ?>
                    
                </div>
            </div>      
        </div>
        <?php
        include 'includes/script.php';
        ?>
        </body>
    </html>
<?php
}
?>