<?php
include('./app/init.php');
$userController = new UserController(new UserModel($db));

$getid = $_GET['update_id'];
if (isset($_POST['task'])) {
    $userController->updateUser($_POST);
}
$data = $userController->getupdateUser($getid);
include('./thems/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Update Student
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form id="upDate">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" id="name" value="<?php echo $data['name'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" id="email" value="<?php echo $data['email'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" id="phone" value="<?php echo $data['phone'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>class</label>
                            <input type="text" id="course" value="<?php echo $data['course'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" id="update_student" class="btn btn-primary">Update Student</button>
                            <input type="hidden"  id="id" value="<?php echo $data['id'] ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./thems/footer.php');