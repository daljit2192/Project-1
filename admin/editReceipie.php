<?php session_start();
if(!isset($_SESSION['user'])){
    // echo "m here"; die;
    header("Location: ../login.php");
} ?>
<?php include 'submit.php' ?>
<?php include 'header.php' ?>
<?php include 'navigation.php' ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Edit recepie</h3>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label>Recepie Name</label>
                                    <input type="text" value="<?php echo $recepie['name']; ?>" name = "name" class="form-control">
                                    <input type="hidden" value="<?php echo $recepie['id']; ?>" name = "id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Select type of food</label>
                                    <select class="form-control" name="food_type_id">
                                        <option value="">Select food type</option>
                                        <?php foreach ($foodTypes["data"] as $foodType) { ?>
                                            <option <?php if($recepie['food_type_id'] == $foodType['id'])  ?> selected value="<?php echo $foodType["id"]; ?>"><?php echo $foodType["type_name"]; ?></option>
                                        <?php } ?>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Recepie description</label>
                                    <textarea class="form-control" name="description" rows="3"><?php echo $recepie['description']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image for recepie </label>
                                    <input type="hidden" name="recepie_image_name_hidden" value="<?php echo $recepie['image_name']; ?>">
                                    <input type="hidden" name="recepie_image_path_hidden" value="<?php echo $recepie['image_path']; ?>">
                                    <input type="file" id="filetag" name="recepie_image" class="form-control" value="<?php echo $recepie['image_path'].$recepie['image_name']; ?>">
                                        <?php if($recepie["image_path"]!= null) {?>
                                            <img height="70" width="70" src="<?php echo $recepie['image_path'].$recepie['image_name']; ?>"  id="preview">
                                        <?php } else { ?>
                                            <img src=""  id="preview">
                                        <?php } ?>
                                </div>
                                <button type="submit" name="update_recepie" class="btn btn-success">Submit Recepie</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script type="text/javascript">
        var fileTag = document.getElementById("filetag"),
        preview = document.getElementById("preview");
            
        fileTag.addEventListener("change", function() {
          changeImage(this);
        });

        function changeImage(input) {
          var reader;

          if (input.files && input.files[0]) {
            reader = new FileReader();

            reader.onload = function(e) {
              preview.setAttribute('src', e.target.result);
              preview.setAttribute('height', 70);
              preview.setAttribute('width', 70);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>
