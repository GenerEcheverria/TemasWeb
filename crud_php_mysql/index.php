<?php
    include ("db.php");
    include ("includes/header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Task description"
                            rows="2"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block" name="save_task" value="Save task">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM task";
                        $tasks = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_array($tasks)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="edit_task.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                <i class="fa-solid fa-file-pen"></i>
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>

                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "includes/footer.php";?>