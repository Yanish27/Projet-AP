<div class="col-md-12 ml-md-auto mr-md-auto">
    <div class="form-field">
        <label class="form-field__label">Datepicker Demo</label>
        <input id="datepicker" type="text">
    </div>
        <?php
        $Date = new DateTime();
        $jour = date('d');
        $mois = date('m');
        $annee = date('y');

        var_dump($jour);
        var_dump($mois);
        var_dump($annee);
        print(date("m.d.y")); 
        ?>
    <script>
        const datePicker = MCDatepicker.create({
            el: '#datepicker',
            bodyType: 'modal',
            customWeekDays: ['Dimanche','Lundi', 'Mardi', 'Mecredi', 'Jeudi', 'Vendredi', 'Samedi'],
            customMonths: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            customClearBTN: 'Annuler',
            customCancelBTN: 'Retour',

            firstWeekday: 1,
            minDate: new Date(<?= $annee ?>, <?= $mois ?>, <?= $jour ?>)

        });
    </script>
</div>