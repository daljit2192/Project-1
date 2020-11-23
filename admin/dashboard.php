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
                <h1 class="page-header">Welcome <?php echo $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']; 
?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php include 'footer.php' ?>
