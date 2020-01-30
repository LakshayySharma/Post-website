<?php
    include 'database.php';
    include 'header.php';
?>
    <div class='jumbotron' style='text-align: center'>
        <h1>All Posts</h1>
    </div>
    <div class="container">
        <?php
            $query = 'SELECT * FROM `posts`';
            $sql = mysqli_query($conn, $query);
            while($row=mysqli_fetch_assoc($sql)){
        ?>
            <div class="container">
                <h3><?= $row['title'] ?></h3>
                <p><?= $row['content']?></p>
                <a href="edit.php?id=<?= $row['id']?>"><button class="btn btn-md btn-info" style="width:100px">Edit</button></a>
                <a href="delete.php?id=<?=$row['id'] ?>"><button class="btn btn-md btn-danger" style="width:100px">Delete</button></a>
                
            <hr>
            </br>
           
            </div>
        <?php
            }
        ?>
    <a href="post.php"><button class="btn btn-lg btn-primary">Add new Post</button></a>
    
    </div>
<?php
    include 'footer.php'
?>