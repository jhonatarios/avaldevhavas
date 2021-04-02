<?php
    $json = file_get_contents("https://jsonplaceholder.typicode.com/posts"); 
    $post = json_decode($json); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="href">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <?php
        foreach ($post as $key => $value) {
            $userId = $value->userId;
            $id = $value->id;
            $title = $value->title;
            $body = $value->body;
    ?>
        <div>
            <h4>userId: <?php echo $userId; ?></h4>
            <h4>id: <?php echo $id; ?></h4>
            <h1>title: <?php echo '<a href="view_post.php?id=' . $id . '">' . $title . '</a>';?></h1><hr>
            <p>body: <?php echo $body;?></p><br>
        </div>
    <?php
    }
    ?>
</body>
</html>