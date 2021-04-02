<?php
    $json = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    $post = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="href">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <?php
            $gid = $_GET['id'];

            foreach ($post as $value) {
                if ($value['id'] == $gid) {
                    $title = $value['title'];
                    $body = $value['body'];
                }
            }
        ?>
        <head><title><?php echo $title;?> — Posts</title></head>
        <div class="post">
            <h1>title: <?php echo '<a href="view_post.php?id=' . $gid . '">' . $title . '</a>';?></h1><hr>
            <p>body: <?php echo $body;?></p><br>
        </div>
        <hr>
        <a href="index.php" class="href">Back to home</a>
</body>
</html>