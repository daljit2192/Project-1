<?php session_start();
if(!isset($_SESSION['user'])){
    // echo "m here"; die;
    header("Location: ../login.php");
} ?>
<?php include 'submit.php' ?>
<?php include 'header.php' ?>
<?php include 'navigation.php' ?>
<div class="modal fade" id="deleteRecepie" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Delete Recepie !!</h3>
                </div>
                <div class="modal-body">
                    <h4 >Are you sure you want to delete this recepie??</h4>
                    <input type="text" name="recepie_id_hidden" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="delete_recepie">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recepie Lists</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Recepies
                    </div>
                    <div class="panel-body">
                        <?php if(count($recepies["data"])>0) {?>
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($recepies["data"] as $recepie) {?>
                                        <tr>
                                            <td><?php echo $recepie["id"]; ?></td>
                                            <td><b><?php echo $recepie["name"]; ?></b></td>
                                            <td><?php echo $recepie["description"]; ?></td>
                                            <td><img height="100" width="100" src="<?php echo $recepie['image_path'].$recepie['image_name']; ?>"></td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-pencil" onClick="document.location.href='editReceipie.php?rec=<?php echo $recepie['id']; ?>'"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#deleteRecepie" data-recepieid="<?php echo $recepie['id']; ?>" class="delete btn btn-danger btn-sm _deleteRecepie">
                                                    <i class="fa fa-trash-o" style=""></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <h1>No recepies added yet, <a href="addnewrecepie.php">add now</a></h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>

<script type="text/javascript">
        $(document).ready(function(){
            $("._deleteRecepie").on("click",function(){
                var recepieId = $(this).data("recepieid");
                $("input[name='recepie_id_hidden']").val(recepieId);
            });

        });
    </script>