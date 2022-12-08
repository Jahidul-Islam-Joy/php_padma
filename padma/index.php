<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!-- hader part start -->
<header class="container-fluid slider">

    <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
        <?php 
        $x=0;
        while(have_posts()){the_post();
            $x++;
        ?>
    <div class="carousel-item <?=($x==1)?'active' : ''?>">
   <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
      <?php }?>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

</header>
<!-- hader part end -->

    <!--logo part start  -->
<section class="container-fluid logo pt-2">
    <div class="row">
        <div class="col-sm-6 logo_left">
        
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logo_right text-end">
        <?php dynamic_sidebar('bdlogo'); ?>
        </div>
    </div>
</section>

    <!--logo part end  -->


    <!-- menu part start -->

    <section class="container-fluid">
        <div class="container navbar-expand menu_1">
            <?php wp_nav_menu(array(
                'Instance of a custom walker class.
                theme_location'=>'TM',
                'menu_class'=>'menu navbar-nav',
            ) );?>
        </div>
    </section>
    <!-- menu part end -->




    <!--  -->




<section class="container hero text-center">
    <div class="row hero_top">
        <?php dynamic_sidebar('hertop'); ?>
        <!-- <h4>Welcome to <samp> PADMA MULTIPURPOSE BRIDGE PROJECT</samp></h4><br>
        <p>The Padma Bridge is a multipurpose road-rail bridge across the Padma River to be constructed in Bangladesh. When completed it <br> will be the largest bridge in Bangladesh and the first fixed river crossing for road traffic. <br> It will connect Louhajong, Munshiganj to Shariatpur and Madaripur, linking the south-west of the country, to northern and eastern regions.</p> -->

    </div>
    <div class="row hero_bottom mt-5">
        <div class="col-sm-4">
                          <div class="card" style="width: 18rem;">
                                    <?php dynamic_sidebar('hbimg'); ?>
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                                     <div class="card-body">
                    
                                <?php dynamic_sidebar('hbbody');?>
                            </div>
                          </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
                          <?php dynamic_sidebar('hbimg2'); ?>
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                              <div class="card-body">
                    
                                <?php dynamic_sidebar('hbbody2');?>
                            </div>
                          </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
                          <?php dynamic_sidebar('hbimg3'); ?>
                                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                              <div class="card-body">
                    
                                <?php dynamic_sidebar('hbbody3');?>
                            </div>
                          </div>
        </div>
    </div>
</section>


<!-- ============= -->


<!-- photo -->

<section class="container photo mt-5 text-center">
  <div class="row photo_top">
    <div class="col-sm-5">

    ==================================
      <img src="<?=get_template_directory().''?>" alt="">
    </div>
    <div class="col-sm-2">
      <h4>Recent Photos</h4>
      <p>Some latest project pictures</p>
    </div>
    <div class="col-sm-5">
      ===================================
    </div>
  </div>
  <div class="row photo_bottom">
    <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                    <?php dynamic_sidebar('p_img1');?>
                    <div class="card-body">
                    <?php dynamic_sidebar('p_body_1');?>
                    </div>
</div>
    </div>
    <div class="col-sm-3">2</div>
    <div class="col-sm-3">3</div>
    <div class="col-sm-3">4</div>
  </div>
</section>



<!-- photo end -->




    <!--  -->


    <!-- new paet st -->
    <section class="container news mt-5 mb-5">
      <div class="row news_top">

      <div class="col-sm-5">

=======================================
  <img src="<?=get_template_directory().''?>" alt="">
</div>
<div class="col-sm-2">
  <h4>Recent Photos</h4>
  <p>Some latest project pictures</p>
</div>
<div class="col-sm-5">
  ========================================
</div>

      </div>
      <div class="row news_bottom">
        <!-- st -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
        <?php 
        $x=0;
        while(have_posts()){the_post();
            $x++;
        ?>
    <div class="carousel-item <?=($x==1)?'active' : ''?>">
   <?php the_title();?>
     
    </div>
      <?php }?>
   

  </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
</div>
        <!-- end -->
      </div>
    </section>
    <!-- new paet end -->

<?php wp_footer(); ?>
</body>
</html>