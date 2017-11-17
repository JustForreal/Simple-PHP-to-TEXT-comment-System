<?php
    if($_POST) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $handle = fopen("comments.php", "a");
        fwrite($handle, "<b><i>" . $name . "</b></i> said <br>" . $comment . "<br><br>");
        fclose($handle);
    }

?>

<!doctype html>
<html>
<head>
    <title>Simple PHP to text comment system</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Post your comment below!</h1>
    <form action="" method="POST">
        Name: <br/> <input type="text" name="name"><br/>
        Comment: <br/> <textarea rowa="10" cols="30" name="comment"></textarea><br><br>
        <input type="submit" value="Post comment">
    </form>
    <hr>
    <h1>Past Comments - Oldest to newest</h1>
    <?php
        include "comments.php";
    ?>
</body>
</html>
