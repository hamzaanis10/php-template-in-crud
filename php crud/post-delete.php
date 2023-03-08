<?php
    include('connection.php');

    $id = $_GET['post_id'];
    
    $delete_query = "delete from creat_post where id = $id";
    $result = mysqli_query($connection, $delete_query);

    if($result){
        header('location: profile-posts.php');
    }else {
        echo "Error deleting..";
    }
?>