<form action="<?= SITE_ROOT ?>regisztracio" method="post">
    <div class="row">
        <div class="m-4 text-center">
            <fieldset>
                <legend>Regisztráció</legend>
                <br>
                <input class="form-control" type="text" name="vezetekNev"  placeholder="Családnév: " required><br><br>
                <input class="form-control" type="text" name="utoNev"  placeholder="Keresztnév:" required><br><br>
                <input class="form-control" type="text" name="felhasznalo"  placeholder="Bejelentkezési név" required><br><br>
                <input class="form-control" type="password" name="jelszo"  placeholder="Jelszó" required><br><br>
                <input type="submit" name="regisztracio" class="btn btn-outline-success" value="Regisztráció">
                <br>&nbsp;
            </fieldset>
        </div>
    </div>
</form>

<h3>Ha már van fiókja kérem jelentkezzen be:</h3>
<a href="<?php echo SITE_ROOT . "belepes" ?>" class="btn btn-outline-dark" role="button">Vissza a belépéshez</a><br><br>
<?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br>