<?php
include('./app/init.php');
$userController = new UserController(new UserModel($db));
$id = $_GET['update_id'];
if (isset($_POST['update_student'])) {
    $userController->updateUser($_POST, $id);
}
$data = $userController->getupdateUser($id);
