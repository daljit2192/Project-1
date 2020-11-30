<?php include 'header.php'; ?>
        <!-- Slider -->
        
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-12 text-center">
                    <h2><?php echo $foodRecepie['name']; ?></h2>

                </div>
                <div class="col-12 my-5" >
                    <fieldset class="rating">
                            <input type="radio" <?php if($foodRecepie['rating'] == 5) {?> checked <?php } ?> id="star5" name="rating" value="5" />
                            <label data-value="5" class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 4.5) {?> checked <?php } ?> id="star4half" name="rating" value="4 and a half" />
                            <label data-value="4.5" class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 4) {?> checked <?php } ?> id="star4" name="rating" value="4" />
                            <label data-value="4" class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 4.5) {?> checked <?php } ?> id="star3half" name="rating" value="3 and a half" />
                            <label data-value="3.5" class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 3) {?> checked <?php } ?> id="star3" name="rating" value="3" />
                            <label data-value="3" class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 2.5) {?> checked <?php } ?> id="star2half" name="rating" value="2 and a half" />
                            <label data-value="2.5" class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 2) {?> checked <?php } ?> id="star2" name="rating" value="2" />
                            <label data-value="2" class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 1.5) {?> checked <?php } ?> id="star1half" name="rating" value="1 and a half" />
                            <label data-value="1.5" class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 1) {?> checked <?php } ?> id="star1" name="rating" value="1" />
                            <label data-value="1" class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" <?php if($foodRecepie['rating'] == 0.5) {?> checked <?php } ?> id="starhalf" name="rating" value="half" />
                            <label data-value="0.5" class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    <div class="card-deck px-5">

                        <div class="card">
                        	<img width="100" height="400" src="./images/recepies/<?php echo $foodRecepie['image_name']; ?>" class="card-img-top" alt="Image">
                        </div>
                        <div class="card">
                            <h3 style="align-content: center;">Description</h3>
                            <p><?php echo $foodRecepie['description']; ?></p>
                        </div>
                    </div>
                
                    
                </div>
            </div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".full,.half").on("click", function(){
            // alert($(this).attr("data-value"));

            $.ajax({    
                url: "submit.php",
                type: "GET",
                data: {rating:$(this).attr("data-value"), recid:<?php echo $foodRecepie['id'];?>},       
                success: function(response){                    
                    console.log(response); 
                },error: function(response){                    
                    console.log("error"); 
                }
            });
        });
    });
</script>