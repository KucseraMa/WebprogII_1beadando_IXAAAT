<!DOCTYPE html>
<html>
    <head>
        <title>DTkH Nonprofit Kft.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=SITE_ROOT?>assets/css/main_style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    </head>
    <body>
    <body>
        <div class="jumbotron" >
            <h1>DTkH Nonprofit Kft.</h1> 
        </div>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <a class="navbar-brand" >
            <?php if($_SESSION['userID']) {?>Bejelentkezett: </br>
                <strong><?= $_SESSION['lastName']." ".$_SESSION['firstName']." ".$_SESSION['userName']."" ?></strong><?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">                
                <?php echo Menu::getMenu($viewData['selectedItems']); ?>
            </div>
        </nav>

        <?php include($viewData['render']); ?>

        </section>
        <div class="jumbotron " style="margin-bottom:20px; margin-top: 10px;">
            &copy; DTkH Nonprofit Kft. <?= date("Y") ?> - Készítette: Kucsera Csaba
        </div>
    </body>
</html>