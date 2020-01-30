<?php
    include 'database.php';
    include 'header.php';
    $id = $_GET['id'];
    $query = "Select * from `posts` where id = $id";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    extract($_POST);
    if(isset($submit)){
        $q = "UPDATE `posts` SET `title`='$title',`content`='$content' WHERE id= $id";
        mysqli_query($conn, $q);
        header('location:home.php');
    }
    
?>

<h1 class="jumbotron" style="text-align: center">Add new post</h1>
<form class="container" method="post">
    <div class="form-group">
    <label>Post Title:</label>
    <input type="text" class="form-control" name="title"value="<?= $data['title']; ?>">
    </div>
    <div class="form-group">
    <label>Post Body:</label>
    <textarea class="form-control" rows="8" name='content'><?php echo $data['content']; ?></textarea>
    </div>
    <button type="submit" name='submit' class="btn btn-primary">Submit</button>
</form>