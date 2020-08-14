<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DaniMusic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/swiper.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
      <a href="<?=base_url('P2user')?>">
              <i class="now-ui-icons design_app"></i>
              <p>Users</p>
            </a>
          </li>
    </div>
    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 " data-aos="fade-down">
            <h1 class="mb-0"><a href="<?php echo base_url()?>P2ventas" class="text-black h2 mb-0">DaniMusic</a></h1>
		  </div>
      <div class="col-6 text-right" data-aos="fade-down">
        <a href="<?=base_url()?>P2LoginController/logOut">Log out</a>


        </div>
      </div>
      
    </header>

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
      <div class="swiper-wrapper">
        <?php foreach($discos as $disco){?>
          <div class="swiper-slide">
            <div class="image-wrap">
              <div class="image-info">
                <h2 class="mb-3"><?=$disco['Album']?></h2>
                <button type='button'class="btn btn-outline-white py-2 px-4" onclick="selecD(<?=$disco['id_discos']?>)">Select</button>
              </div>
              <img src="<?=base_url('portadas/'.$disco['Portada'])?>" alt="Image">
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-scrollbar"></div>
    </div>
  </div>
  <button class="btn btn btn-info" id="buyCD">Buy</button>
  </div>

  <script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url()?>/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/swiper.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/aos.js"></script>

  <script src="<?php echo base_url()?>/assets/js/picturefill.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/lightgallery-all.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.mousewheel.min.js"></script>

  <script src="<?php echo base_url()?>/assets/js/main.js"></script>
  
  <script>
    var array = [];
    $(document).ready(function()
    {
      $('#buyCD').click(function()
      {
        if(array.length > 0){
          $.ajax({
            url: "<?php echo base_url()?>P2shoppingController/add_discos",
            method: 'post',
            data: {discos: array},
            success: function(response)
            {
              if(response){
                location.href = "<?php echo base_url()?>P2shoppingController/index";
              }
            }
          });
        }
      });
    });

    function selecD(id){
      array.push(id);
    }
  </script>
    
  </body>
</html>