<?php include 'submit.php' ?>
<?php include 'header.php' ?>
<?php include 'navigation.php' ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User Lists</h1>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Registered Users on tiffen service
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($users["data"] as $user) {?>
                                                <tr>
                                                    
                                                    <td><?php echo $user["id"]; ?></td>
                                                    <td><?php echo $user["first_name"]; ?></td>
                                                    <td><?php echo $user["last_name"]; ?></td>
                                                    <td><?php echo $user["email"]; ?></td>
                                                    
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