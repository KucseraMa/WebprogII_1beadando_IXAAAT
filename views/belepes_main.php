<form action="<?= SITE_ROOT ?>beleptet" method="post">
    <div class="row m-3">
        <div class="text-center">
            <fieldset>
                <legend>Bejelentkezés</legend>
                <br>
                <input class="form-control" type="text" name="felhasznalo"  placeholder="Bejelentkezési név" required><br><br>
                <input class="form-control" type="password" name="jelszo"  placeholder="Jelszó" required><br><br>
                <input type="submit" name="belepes" class="btn btn-outline-secondary" value="Belépés">
                <a href="<?php echo SITE_ROOT . "regisztracio" ?>" class="btn btn-outline-info" role="button">Regisztráció</a>


                <br>&nbsp;
            </fieldset>
        </div>
    </div>
</form>