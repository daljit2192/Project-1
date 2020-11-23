<?php session_start();
include 'submit.php'; 
?>
<?php include 'header.php' ?>
<?php include 'navigation.php' ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Recepie Lists</h1>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Recepies
                                    <div style="float:right;">
                                        <a href="addnewrecepie.php"><input type="button" name="add_new_recepie" value="Add new" class="btn btn-success"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                    <!-- <th>Imager</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach($recepies["data"] as $recepie) {?>
                                                <tr>
                                                    
                                                    <td><?php echo $recepie["id"]; ?></td>
                                                    <td><?php echo $recepie["name"]; ?></td>
                                                    <td><?php echo $recepie["description"]; ?></td>
                                                    <td><a href="">Edit</a></td>
                                                    <td><a href="">Delete</a></td>
                                                    
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include 'footer.php' ?>