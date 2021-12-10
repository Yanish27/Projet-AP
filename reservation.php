<?php
$page = "reservation";
include 'view/header.php';
include 'controller/ctReservation.php';
?>
<div class="page-heading jarallax" data-jarallax data-speed="0.2">
    <div class="page-heading__inner">
        <div class="container"
            <h1 class="page-heading__title">Réservez</h1>
            <ol class="breadcrumb page-heading__breadcrumb">
                <li class="breadcrumb-item active"><a href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item" aria-current="page">Réservation</li>
            </ol>
        </div>
    </div>
</div>
<main class="site-content">
    <div class="section-content">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-md-auto mr-md-auto">
                        <?php
                        
                        
                        session_start();
                        if (empty($_SESSION['user'])) {
                            if (isset($_POST['inscription_form'])) {
                                $Rep_FN = ReservationInscription($_POST['email'], $_POST['motdepasse1'], $_POST['motdepasse2']);
                                if ($Rep_FN == 1) {
                                    echo '<div class="alert alert-success" role="success"> Votre inscription est bien enregistrée ! Connectez-vous.</div>';
                                    include 'view/vueConnexionReservation.php';
                                } else {
                                    echo $Rep_FN;
                                    include 'view/vueConnexionReservation.php';
                                }
                            } else if (isset($_POST['connexion_form'])) {
                                $Rep_FN = ReservationConnexion($_POST['email'], $_POST['motdepasse1']);
                                if ($Rep_FN == 1) {
                                header('Location: reservation.php');
                                $_SESSION['user'] = $_POST['email'];
                                } else {
                                    echo $Rep_FN;
                                    include 'view/vueConnexionReservation.php';
                                }
                            } else if (!isset($_POST['inscription_form']) && !isset($_POST['connexion_form'])) {
                                include 'view/vueConnexionReservation.php';
                            }
                        } else {
                            ?></div><?php
                            
                            $unevar = returnprisrs();
                            include 'view/vueReservation.php';
                        }   
                        ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('view/footer.php'); ?>