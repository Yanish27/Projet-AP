<div id="booked-profile-page">
    <div id="booked-page-form">
        <ul class="booked-tabs nav login bookedClearFix" id="booked-tabs" role="tablist">
            <li><a href="#profile-login" id="profile-login-tab" data-toggle="tab" role="tab" aria-selected="true" class="active"><i class="booked-icon ion-locked"></i>Inscription</a></li>
            <li><a href="#profile-forgot" id="profile-forgot-tab" data-toggle="tab" role="tab" aria-selected="false" class=""><i class="booked-icon ion-unlocked"></i>Connexion</a></li>
        </ul>
        <div class="tab-content">
            <div id="profile-login" class="booked-tab-content tab-pane fade active show" role="tabpanel" aria-labelledby="profile-login-tab">
                <div class="booked-form-wrap bookedClearFix">
                    <form name="loginform" id="loginform" action="reservation.php" method="POST">
                        <div class="form-group login-username"><input type="email" placeholder="Adresse e-mail" name="email" class="form-control"></div>
                        <div class="form-group login-password"><input type="password" placeholder="Mot de passe" name="motdepasse1" class="form-control"></div>
                        <div class="form-group login-password"><input type="password" placeholder="Confirmation du mot de passe" type="password" name="motdepasse2" class="form-control"></div>
                        <div class="login-submit"><input type="submit" name="inscription_form" id="wp-submit" class="btn btn-lg btn-primary" value="Inscription"></div>
                    </form>
                </div>
            </div>
            <div id="profile-forgot" class="booked-tab-content fade tab-pane" role="tabpanel" aria-labelledby="profile-forgot-tab">
                <div class="booked-form-wrap bookedClearFix">
                    <form name="loginform" id="loginform" action="reservation.php" method="POST">
                        <div class="form-group login-username"><input type="email" placeholder="Adresse e-mail" name="email" class="form-control"></div>
                        <div class="form-group login-password"><input type="password" placeholder="Mot de passe" name="motdepasse1" class="form-control"></div>
                        <div class="login-submit"><input type="submit" name="connexion_form" id="wp-submit" class="btn btn-lg btn-primary" value="Connexion"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>