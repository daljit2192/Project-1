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
                <h3 class="page-header">Add new recepie</h3>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label>Recepie Name</label>
                                    <input type="text" name = "name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Select type of food</label>
                                    <select class="form-control" name="food_type_id">
                                        <option value="">Select food type</option>
                                        <?php foreach ($foodTypes["data"] as $foodType) { ?>
                                            <option value="<?php echo $foodType["id"]; ?>"><?php echo $foodType["type_name"]; ?></option>
                                        <?php } ?>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Recepie description</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image for recepie</label>
                                    <input type="file" name="recepie_image" class="form-control">
                                </div>
                                <button type="submit" name="submit_recepie" class="btn btn-success">Submit Recepie</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
