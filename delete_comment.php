
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/db.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php confirm_login(); ?>
<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM comments WHERE id='$id'";
        $execute = mysqli_query($connection, $query);
        if($execute){
            $_SESSION['success_message'] = "Comment Deleted Successfully";
            redirect_to("comments.php");
        }else{
            $_SESSION['error_message'] = "Something went wrong";
            redirect_to("comments.php");
        }
    }

?>