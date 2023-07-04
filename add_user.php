<?php
include('./app/init.php');
$userController = new UserController(new UserModel($db));
$data = $userController->getUser();
if (isset($_POST['save_student'])) {
    $userController->saveUser($_POST);
}
include('./thems/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Register Student
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form id="save_data">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" id="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" id="email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" id="phone" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Course</label>
                            <input type="text" id="course" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" id="save_student" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('./thems/footer.php');
