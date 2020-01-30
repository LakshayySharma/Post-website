<?php

    include 'database.php';
    extract($_POST);
    if(isset($submit)){
        $query = "INSERT INTO `posts` (`id`, `title`, `content`) VALUES ('', '$title', '$content')";
        mysqli_query($conn, $query);
        header('location:home.php');
    }
    
    include 'header.php'
    
?>
<h1 class="jumbotron" style="text-align: center">Add new post</h1>
<form class="container" method="post">
    <div class="form-group">
    <label>Post Title:</label>
    <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
    <label>Post Body:</label>
    <textarea class="form-control" rows="8" name='content'></textarea>
    </div>
    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>
