<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $comment_id = ""; 
    $comment_stars = ""; 
    $comment_title = ""; 
    $comment_content = ""; 
    $comment_date = "";

    if (isset($_GET["comment_id"]) && $_GET["comment_id"] > 0)
    {
        $sql = "SELECT * FROM table_comment 
                WHERE comment_id = :comment_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":comment_id", $_GET["comment_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $comment_id = $row["comment_id"]; 
            $comment_stars = $row["comment_stars"]; 
            $comment_title = $row["comment_title"]; 
            $comment_content = $row["comment_content"]; 
            $comment_date = $row["comment_date"]; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of comments</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="comment_id">Enter comment id</label>
                <input class="form-control" id="comment_id" placeholder="" name="comment_id"
                    value="<?=$comment_id;?>">
            </div>
        
            <div class="form-group">
                <label for="comment_stars">Enter comment stars</label>
                <input class="form-control" id="comment_stars" placeholder="" name="comment_stars"
                    value="<?=$comment_stars;?>">
            </div>

            <div class="form-group">
                <label for="comment_title">Enter comment title</label>
                <input class="form-control" id="comment_title" placeholder="" name="comment_title"
                    value="<?=$comment_title;?>">
            </div>

            <div class="form-group">
                <label for="comment_content">Enter comment content</label>
                <textarea class="form-control" id="comment_content" placeholder="" name="comment_content" rows="4"><?=$comment_content;?></textarea>
            </div>

            <div class="form-group">
                <label for="comment_date">Enter comment date</label>
                <input class="form-control" id="comment_date" placeholder="" name="comment_date"
                    value="<?=$comment_date;?>">
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>