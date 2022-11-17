<!DOCTYPE html>
<html>
    <head>
        <title>DTkH Nonprofit Kft.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <body>

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <a class="navbar-brand" >
            DTkH Nonprofit Kft.
                          
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">                
                <?php echo Menu::getMenu($viewData['selectedItems']); ?>
            </div>
            <a class="navbar-brand text-right" >
          
            <?php if($_SESSION['felhasznaloId']) {?>Bejelentkezett: </br>
                <strong><?= $_SESSION['vezetekNev']." ".$_SESSION['utoNev']." ".$_SESSION['felhasznalo']."" ?></strong><?php } ?>
                
            </a>
        </nav>

        <?php include($viewData['render']); ?>

        </section>
        <div class="jumbotron " style="margin-bottom:20px; margin-top: 10px;">
            &copy; DTkH Nonprofit Kft. <?= date("Y") ?> - Készítette: Kucsera Csaba
        </div>
    </body>
</html>