<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software" />
    <meta name="author" content="themefisher.com" />

    <title>Acceuil</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo css_loader('bootstrap.min'); ?>" />
    <link rel="stylesheet" href="<?php echo css_loader('icofont.min'); ?>" />
    <link rel="stylesheet" href="<?php echo css_loader('slick'); ?>" />
    <link rel="stylesheet" href="<?php echo css_loader('slick-theme'); ?>" />
    <link rel="stylesheet" href="<?php echo css_loader('style'); ?>" />
</head>

<body id="top">
    <header>
        <div class="col-10" style="margin-left: 125px">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo img_loader('logo','png'); ?>" width="100" height="50" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?php echo base_url() ;?>Welcome/index">Acceuil</a>
                        <a class="nav-item nav-link" href="#">Pays</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Actualit??s et Info</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Actualit??s sur le r??chauffement climatique dans tous les pays
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php for($i=0;$i<count($liste);$i++) {?>
                <div class="col-lg-4 col-md-6" style="margin-top: 10px">
                    <div class="department-block mb-5 mb-lg-0">
                        <img src="<?php echo base_url() ;?><?php echo "/assets/img/".$liste[$i]['image']; ?>"
                            width="800" heigh="500" alt="" class="img-fluid w-200" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">
                                <?php echo $liste[$i]['titre']  ;?>
                            </h4>
                            <p class="mb-4">
                                <?php echo $liste[$i]['infromation']  ;?>
                            </p>
                            <a class="read-more"
                                href="<?php echo base_url(); ?>Welcome/getActu?id=<?php echo $liste[$i]['idActualite'] ;?>">
                                <img src="<?php echo img_loader('next','png'); ?>" width="100" height="50" /></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>


    <div class="text-center p-4 col-10" style="background-color: rgba(0, 0, 0, 0.05); margin-left: 125px;
    margin-top: 20px;">
        ?? 2022 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Actualit??s du jour</a>
    </div>


    <script src="<?php echo js_loader('jquery') ;?>"></script>
    <script src="<?php echo js_loader('popper') ;?>"></script>
    <script src="<?php echo js_loader('bootstrap.min') ;?>"></script>
    <script src="<?php echo js_loader('jquery.easing') ;?>"></script>
    <script src="<?php echo js_loader('slick.min') ;?>"></script>
    <script src="<?php echo js_loader('jquery.waypoints.min') ;?>"></script>
    <script src="<?php echo js_loader('shuffle.min') ;?>"></script>
    <script src="<?php echo js_loader('shuffle.min.js') ;?>"></script>
    <script src="<?php echo js_loader('jquery.counterup.min') ;?>"></script>
    <script src="<?php echo js_loader('map') ;?>"></script>
    <script src="<?php echo js_loader('script') ;?>"></script>
    <script src="<?php echo js_loader('contact') ;?>"></script>
</body>

</html>