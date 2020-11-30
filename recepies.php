<?php include 'header.php'; ?>
        <!-- Slider -->
        
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-12 text-center">
                    <h2>Recepies</h2>
                </div>
                <div class="col-12 my-5" >
                    <div class="card-deck px-5">
                    <?php foreach($foodRecepies["data"] as $foodRecepie) {?>
                        <div class="card">
                           	<a href="recepie.php?recid=<?php echo $foodRecepie['id']; ?>">
                            	<img height="400"src="images/recepies/<?php echo $foodRecepie['image_name'] ?>" class="card-img-top" alt="Image">
                            </a>
                            <div class="overlay"><?php echo $foodRecepie["name"]; ?></div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
<?php include 'footer.php'; ?>