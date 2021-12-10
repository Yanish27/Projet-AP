<?php
if($_GET['action'] == "HeuresPrises"){
echo $unevar;
die();
  }
  
?>
<div class="col-md-12 ml-md-auto mr-md-auto">
    <div id="booked-profile-page">
        <div id="booked-page-form">
            <ul class="booked-tabs nav login bookedClearFix" id="booked-tabs" role="tablist">

                <li><a href="#profile-login" id="profile-login-tab" data-toggle="tab" role="tab" aria-selected="true" class="active"><i class="booked-icon ion-calendar"></i>Réserver une partie</a></li>
            </ul>
            <div class="tab-content">
                <div id="profile-inscrption" class="booked-tab-content tab-pane fade active show" role="tabpanel" aria-labelledby="profile-login-tab">
                    <div class="booked-form-wrap bookedClearFix">
                        <form name="loginform" id="loginform" action="reservation.php" method="POST">

                            <div class="form-group login-password"><input type="text" placeholder="Un nom pour votre partie ?" name="nompartie" class="form-control"></div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group login-password"><input id="datepicker" name="dateresa" class="form-control" placeholder="Date de la réservation"></div>
                                </div>
                                <?php

                                ?>
                                <div class="col-md-6">
                                    <div class="form-group login-password">
                                        <select name="heure_partie" class="form-control heure_partie">
                                            <option value="8">8 h</option>
                                            <option value="9">9 h</option>
                                            <option value="10">10 h</option>
                                            <option value="11">11 h</option>
                                            <option value="13">12 h</option>
                                            <option value="14" disabled>13 h</option>
                                            <option value="15">14 h</option>
                                            <option value="16">15 h</option>
                                            <option value="17">16 h</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="valid-submit"><input type="submit" name="inscription_form" id="wp-submit" class="btn btn-lg btn-primary" value="Réserver une salle"></div>
                        </form>
                        lo
                        <script>
                            const datePicker = MCDatepicker.create({
                                el: '#datepicker',
                                bodyType: 'modal',
                                dateFormat: 'DD-MMM-YYYY',
                                customWeekDays: ['Dimanche', 'Lundi', 'Mardi', 'Mecredi', 'Jeudi', 'Vendredi', 'Samedi'],
                                disableWeekDays: [0],
                                customMonths: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                                customClearBTN: 'Annuler',
                                customCancelBTN: 'Retour',

                                firstWeekday: 1,
                                minDate: new Date(Date.now() + 86400000),

                            });

                            function DesactiverHeuresPrises(message) {
                                alert(message);
                                $.getJSON("http://ap.yanish.fr/reservation.php?action=HeuresPrises", function(json) {
                                    alert("JSON Data: " + json.description);
                                });
                            }


                            datePicker.onSelect(() => DesactiverHeuresPrises(document.getElementById("datepicker").value));
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .heure_partie option {
            color: white;
            background-color: #717171;
        }
    </style>
</div>