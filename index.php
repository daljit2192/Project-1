        <?php include 'header.php'; ?>
        <!-- Slider -->
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <?php $i=0;foreach ($sliderImages['data'] as $sliderImage) { 
                    if($i==0){
                        $i=1; ?>
                <div class="carousel-item active">

                    <?php } else { ?>
                <div class="carousel-item">
                    <?php }  ?>
                    <img src="<?php echo $sliderImage['slider_image_path'].$sliderImage['slider_image'] ?>" alt="Image 1" width="1100" height="500">
                    <div class="carousel-caption">
                        <!-- <h3>Slide 1</h3> -->
                        <!-- <p>Image 1</p> -->
                    </div>   
                </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="container-fluid" id="recepies">
            <div class="row p-5">
                <div class="col-12 text-center">
                    <h2>Recepies <?php //echo count($foodtypes["data"]); ?> </h2>
                </div>
                <div class="col-12 my-5" >
                    <div class="card-deck px-5">
                        <?php foreach ($foodtypes["data"] as $foodtype ) {?>
                            <div class="card">
                                <a href="recepies.php?foodtypeid=<?php echo $foodtype["id"];?>">
                                    <img width="100" height="400" src="<?php echo $foodtype['image_path'].'/'.$foodtype['image_name'] ?>" class="card-img-top" alt="Image">
                                    <div class="overlay"><?php echo $foodtype["type_name"]; ?></div>
                                </a>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
    
            <div class="row p-5">
                <div class="col-md-3 text-center contact-border">
                    <i class="fa fa-map-marker"  aria-hidden="true"></i>
                    <h5>Our Office Address</h5>
                    <p>Malad West,Mumbai</p>
                </div>
                <div class="col-md-3 text-center contact-border"  >
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h5>General Enquiries</h5>
                    <p>demo@gmail.com</p>
                </div>
                <div class="col-md-3 text-center contact-border" >
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h5>Call Us</h5>
                    <p>+91-0000000000</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h5>Our Timings</h5>
                    <p>Mon - Sun : 09:00 AM - 05:00 PM</p>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        