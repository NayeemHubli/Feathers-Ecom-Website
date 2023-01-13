<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
    <title>Feather</title>
    <?php   require_once 'cw-admin/dbcon.php';
            require_once 'cw-BLL/get_chicken_variety.php';
            require_once 'generic-functions.php';
            include 'section-CSS-Library.php';
            include 'cw-BLL/get_all.php';
            $page =  'Home'; ?>
</head>

<body style="background: url(images/body-bg/body_bg.jpg) fixed repeat;">
    <div id="container" class="boxed-page">
        <div class="hidden-header"> </div>
        <?php include'section-header.php'; ?>
        <!-- ========================================= Slider ========================================= -->

            <div id="main-slide" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="images/slider/bg1.jpg" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2">
                                    <span>Welcome to <strong>FEATHER</strong></span>
                                </h2>
                                <h3 class="animated3">
                                    <span style="color: #FFF;">The Online RAW Chicken Supplier</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2">
                                <span>Welcome to <strong>FEATHER</strong></span>
                                </h2>
                                <h3 class="animated3">
                                    <span style="color: #FFF;">Order your favourite chicken variety in 1 click</span>
                                </h3>
                            </div>
                        </div>
                        
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2">
                                    <span>Welcome to <strong>FEATHER</strong></span>
                                </h2>
                                <h3 class="animated3">
                                    <span style="color: #FFF;">We make you easy </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div
        </section>
        <!-- ========================================= End Slider ========================================= -->

        <!-- =========================================Intro Section========================================= -->
        <div class="section service" style="padding-top: 30px;padding-bottom: 15px;">
        <div>
        <div class="container">
            <div class="row">
                <!-- ======================================Price Section============================================= -->
                 <div class="col-md-4">
                        <h4 class="classic-title"><span>Price For Day</span></h4>
                        <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
                            <?php foreach($chicken_list_arr["chicken_list_arr"] as $best_variety):
                            if( $best_variety->chk_variety_name === 'Chicken Full Boiler' ||
                                $best_variety->chk_variety_name === 'Chicken Biryani Pieces' ||
                                $best_variety->chk_variety_name === 'Chicken Full Tandoori'  ) {
                                 $price = make_decimal($best_variety->chk_price);
                                echo ("
                                            <div class='classic-testimonials item '>
                                                 <div class='testimonial-content'>
                                                       <p style='font-size: 40px;'><i class='fa fa-rupee'></i> $price /-<small style='font-size: 20px;'>Per Kg.</small></p>
                                                </div>
                                                <div class='testimonial-author font22'>$best_variety->chk_variety_name</div>
                                            </div>
                                ");
                            }
                            endforeach;?>
                        </div>
                    </div>
                <!-- ======================================INTRO============================================= -->
                <div class="col-md-8">
                    <div class="latest-posts">
                        <h4 class="classic-title"><span>About us</span></h4>
                        <div class="latest-posts-classic" data-appeared-items="2">
                            <div class="col-lg-12"style="padding-left: 0px;" >
                                <p class="pull-left font-14 text-justify">
                                    Feather’s are the supplier of raw chicken through online service at your door steps.
                                    We deliver best Younger, Clean and Farm Fresh chicken with free home delivery at your
                                    address within 45 minutes. Our Prices are best compare to market price. Feather
                                    is the first organization in BELAGAVI who have started supplying raw chicken at door
                                    to door without making extra charges for chicken at delivery time.
                                    Customer can order chicken through this online portal or make a call mentioned above mobile numbers
                                    at any time. Our MOTO is to serve neat & clean chicken in easiest way that makes you feel good
                                    and happy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        <!-- =========================================End Intro Section========================================= -->

        <!-- =========================================Contact  Section========================================= -->
        <div class="section service" style="padding-top: 30px;padding-bottom: 15px;">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-4 text-center ">
                                <a href="tel:9000590005"><h1><span  class="text-red"><i class="fa fa-phone"></i> +91 9000590005</span></h1></a>

                            </div>
                            <div class="col-lg-4 text-center">
                                <a href="product.php" class="btn-system btn-large">Check New Varieties of Chicken</a>
                            </div>
                            <div class="col-lg-4 text-center  hidden-xs">
                                <a href="tel:9036379530"><h1><span  class="text-red"><i class="fa fa-phone"></i> +91 9000590005 </span></h1></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- =========================================End Contact Section========================================= -->

        <!--  =========================================Order Place Instruction Section=========================================  -->
        <div>
            <div class="container" style="margin-top: -26px !important;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="latest-posts">
                            <h4 class="classic-title text-center"><span>Order Can Be Placed in 3 Ways </span></h4>
                                <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                                    <div class="service-icon">
                                        <i class="fa fa-globe fa-4x"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Via Web Portal</h4>
                                        <p>
                                            Check list of chicken varieties &  click on <a href="product.php"> Chicken List </a>
                                            select any chicken item and <a>ADD TO CART</a> button
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                                    <div class="service-icon">
                                        <i class="fa fa-mobile-phone fa-4x"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Via Call </h4>
                                        <p>You can place order  through call  just dial any of two mobile numbers on
                                        <a href="tel:9000590005"><i class="fa fa-phone"></i> 9000590005  </a>
                                        OR
                                        <a href="tel:9036379530"><i class="fa fa-phone"></i> 9000590005</a>
                                            and make order confirmed
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                                    <div class="service-icon">
                                        <i class="fa fa-phone-square fa-4x"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Via WhatsApp</h4>
                                        <p>You can place order through WhatsApp, To place order type <a>"Feather"</a> & send to this number <a href="tel:9000590005"><i class="fa fa-phone"></i> 9000590005</a>  </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  =========================================EOF Order Place Instruction Section=========================================  -->

        <!--  =========================================Service Section=========================================  -->
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="latest-posts">
                            <h4 class="classic-title text-center"><span>Service Make Us Different</span></h4>
                            <div class="col-md-3 col-sm-6 service-box service-center">
                                <div class="service-icon">
                                    <i class="fa fa-magic icon-large-effect icon-effect-1"></i>
                                </div>
                                <div class="service-content">
                                    <h4>High Quality</h4>
                                    <p class="text-capitalize">Feather provides you best Younger,
                                        Neat Clean and Farm Fresh Standard Chicken and also Hand Selected
                                        after age and weight calibration
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service-box service-center">
                                <div class="service-icon">
                                    <i class="fa fa-shopping-cart icon-large-effect icon-effect-1"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Order Confirmation</h4>
                                    <p class="text-capitalize">Order can be placed in two ways either through this online                                        e portal or Phone call number that is mentioned at top bar section. Once Your Order
                                        is confirm it will be delivered in 45 minutes.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service-box service-center">
                                <div class="service-icon">
                                    <i class="fa fa-wheelchair icon-large-effect icon-effect-1"></i>
                                </div>
                                <div class="service-content">
                                    <h4>  Accuracy Delivery</h4>
                                    <p class="text-capitalize">
                                        Once your order confirmed our Feather delivery boy will call
                                        to deliver your chicken at your mentioned address or place within 45 minutes</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 service-box service-center">
                                <div class="service-icon">
                                    <i class="fa fa-rupee icon-large-effect icon-effect-1"></i>
                                </div>
                                <div class="service-content">
                                    <h4>Cash & Carry</h4>
                                    <p class="text-capitalize">
                                        Once You get chicken at your mentioned place you can Make payment
                                        in cash that is COD <br> [Cash On Delivery]  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  =========================================Service Section=========================================  -->

        <!--  =========================================Variety Section=========================================  -->
        <div class="section padding-top-bottom-30" style="background:#fff;">
            <div class="container">
                <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01" style="margin-bottom: 20px;">
                    <h1>Our Gallimaufry <strong>Chickens</strong></h1>
                </div>
                <p class="text-center">We have N+ varieties of chickens that make us proud to serve you </p>
                <div class="">
                    <div class="container">
                        <div class="recent-projects">
                            <div class="projects-carousel touch-carousel">
                                <?php foreach($chicken_list_arr["chicken_list_arr"] as $chk_variety):
                                    $price_1 = make_decimal($chk_variety->chk_price);
                                echo ("
                                        <div class='portfolio-item item'>
                                            <div class='portfolio-border'>
                                                <div class='portfolio-thumb'>
                                                    <a href='product.php'>
                                                        <img alt='' width='430' height='332' src='images/products/$chk_variety->chk_image_location' />
                                                    </a>
                                                </div>
                                                <div class='portfolio-details'>
                                                    <a href='#'>
                                                        <h4>$chk_variety->chk_variety_name</h4>
                                                        <span class='text-red'><i class='fa fa-rupee'></i> $price_1</span>
                                                        <span class='text-red'>Per Kg.</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        ");
                                endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  =========================================EOD Variety Section=========================================  -->

        <!--  =========================================Traffic Section=========================================  -->
        <div class="project">
            <div class="container">
                <div class="recent-projects">
                    <h4 class="title text-center"><span>Our Traffic Crowd </span></h4>
                </div>
            </div>
        </div>
        <div id="parallax-one" class="parallax" style="background: url(images/body-bg/body-bg-1.jpg) fixed repeat; border-left: 1px solid #5d6660; border-right: 1px solid #5d6660; ">
            <div class="parallax-text-container-1">
                <div class="parallax-text-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="counter-item">
                                    <i class="fa fa-eye"></i>
                                    <div class="timer" id="item1" data-to="358" data-speed="5000"></div>
                                    <div class="plan-signup">Daily Customer Visits</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="counter-item">
                                    <i class="fa fa-hospital-o"></i>
                                    <div class="timer" id="item2" data-to="23" data-speed="5000"></div>
                                    <div class="plan-signup">Hotels Supply</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="counter-item">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="timer" id="item3" data-to="70" data-speed="5000"></div>
                                    <div class="plan-signup">Daily Chicken supply </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="counter-item">
                                    <i class="fa fa-users"></i>
                                    <div class="timer" id="item4" data-to="3012" data-speed="5000"></div>
                                    <div class="plan-signup">Satisfied customers about service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  =========================================EOD Traffic Section=========================================  -->

        <!--  =========================================Hotel Pricing Section=========================================  -->
        <div class=" section pricing-section" style="padding-bottom: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>We Have Nice Pricing Plans For <strong><i class="fa fa-hospital-o"></i> Hotels!</strong></h1>
                            <h1 style="margin-top: 15px;">
                                For More Details Buzz Us :
                                <strong>
                                    <a href="tel:9000590005"><i class="fa fa-mobile-phone"></i> 9000590005 |</a>
                                    <a href="tel:9036379530"><i class="fa fa-mobile-phone"></i> 9036379530 </a>
                                </strong>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" section pricing-section" style="padding-bottom: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
              
                            <!-- Classic Heading -->
                            <h2 class="classic-title text-center"><span> Impressive Benefits Of Chicken</span></h2>
                            
                            <!-- Some Text -->
                            <p>
Chicken is the most common type of poultry in the world. It has been domesticated and consumed as food for 
thousands of years. There are many varieties of chicken, including free range chicken, organic chicken, and 
conventional chicken, the difference being on the basis of their breeding. While free-range chicken, 
as the term implies, is allowed to roam freely in the pastures; conventional chicken, which is also the
 most controversial, is kept in cages and not allowed to move freely. Conventional chicken is injected 
 with hormones to fasten its growth and make it unnaturally big. This chicken variety is usually kept in 
 unhygienic and unhealthy conditions.

Of the three, organic chicken is the most expensive because it is bred freely and is
 allowed to eat only organically prepared food, as per the USDA standards. It is kept 
 in healthy and clean conditions and is allowed to grow naturally without any medications 
 to disturb its hormone cycle. Organic chickens are also vaccinated and therefore safe to eat.
 </p>
     
     <h4 class="classic-title" style="margin-top:15px;"><span> Nutritional Value Of Chicken</span></h4>
     <p>
        According to the USDA   chicken (100 g) has moisture (65 g), energy (215 kcal),
        protein (18 g), fat (15 g), saturated fat (4 g), cholesterol (75 mg), calcium (11 mg),
        iron (0.9 mg), magnesium (20 mg), phosphorus (147 mg), potassium (189 mg), sodium (70 mg),
        and zinc (1.3 mg). In terms of vitamins, it contains vitamin C, thiamin, riboflavin, niacin, 
        vitamin B6, folate, vitamin B12, vitamin A, vitamin E, vitamin D, and vitamin K.
     </p>

     <h4 class="classic-title" style="margin-top:15px;"><span> High Protein Content</span></h4>
     <p>
        Chicken breast, with 31 grams of protein per 100 grams, is one of the best foods for protein. 
        Protein plays an important role in our diet. It is made of amino acids, which are the building blocks
        of our muscles. Generally, the recommended amount of daily protein requirement is 1 gram per 1 kg of
        body weight or 0.4 g of protein per pound of body weight. For athletes, 
        the daily requirement of protein is about 0.6 g to 0.9 g per pound.
     </p>
     <h4 class="classic-title" style="margin-top:15px;"><span> Rich in Vitamins & Minerals</span></h4>
     <p>
        It is not only a good source of protein but is also very rich in vitamins and minerals. 
        For example, B vitamins in it are useful  for preventing cataracts and skin disorders, 
        boosting immunity, eliminating weakness, regulating digestion, and improving the nervous system. 
        They are also helpful in preventing migraine,
        heart disorders, gray hair, high cholesterol, and diabetes.
        Vitamin D in chicken helps in calcium absorption and bone strengthening. 
        Vitamin A helps  in building eyesight and minerals such as iron are helpful 
        in hemoglobin formation, muscle activity, and eliminating anemia. Potassium and 
        sodium are electrolytes; phosphorus is helpful in tackling weakness, bone health, 
        brain function, dental care, and metabolic issues.
     </p>
     <h4 class="classic-title" style="margin-top:15px;"><span>Weight Loss</span></h4>
     <p>
        Diets with high levels of protein have been known to be effective in reducing weight and chicken has
        been one of the main contenders in weight loss. Studies   and trials have shown that significant 
        weight control was observed in people who regularly ate chicken breast.
        This can be attributed to its high protein content and low calories.
     </p>
     <h4 class="classic-title" style="margin-top:15px;"><span>Control of Blood Pressure</span></h4>
     <p>
        Chicken consumption has been found to be useful in controlling  blood pressure as well. 
        This was observed in people with hypertension and in many African Americans, 
        though the diet was also comprised of nuts, low-fat dietary products, vegetables, and fruits.
     </p>
     
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--  =========================================EOD Hotel Pricing Section=========================================  -->
        <hr>
        <!--  =========================================Party Order Accept Section=========================================  -->
        <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff; padding-top: 0px !important; padding-bottom: 20px !important;">
            <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                <h1>We Accept All Kind <strong>Orders !!!</strong></h1>
            </div>
            <ul id="portfolio-list" data-animated="fadeIn">
                <li>
                    <img src="images/orders/birthday_celebration.jpg" alt="" />
                </li>
                <li>
                    <img src="images/orders/marriage_party.jpg" alt="" />
                </li>
                <li>
                    <img src="images/orders/outdoor_party.jpg" alt="" />
                </li>
                <li>
                    <img src="images/orders/family_party.jpg" alt="" />
                </li>
            </ul>
        </div>
        
        
        <!--  =========================================EOD Party Order Accept Section=========================================  -->
        <!--  =========================================Benefits of chickens=========================================  -->

        <?php include'section-footer.php'; ?>
    </div>
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <?php include'section-JS-Library.php';?>
    <?php include'hit_page.php';?>
  

</body>

</html>