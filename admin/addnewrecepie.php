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
                            <form role="form">
                                <div class="form-group">
                                    <label>Recepie Name</label>
                                    <input type="text" name = "name" class="form-control">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label>Recepie description</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image for recepie</label>
                                    <input type="file">
                                </div>
                                <button type="submit" class="btn btn-success">Submit Recepie</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php include 'footer.php' ?>
