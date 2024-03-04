<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $cancel_pattern_id = ""; 
    $cancel_pattern_content = ""; 
    $cancel_pattern_date = "";
    $route_id = "";

    if (isset($_GET["cancel_pattern_id"]) && $_GET["cancel_pattern_id"] > 0)
    {
        $sql = "SELECT * FROM table_cancel_pattern 
                WHERE cancel_pattern_id = :cancel_pattern_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":cancel_pattern_id", $_GET["cancel_pattern_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $cancel_pattern_id = $row["cancel_pattern_id"]; 
            $cancel_pattern_content = $row["cancel_pattern_content"]; 
            $cancel_pattern_date = $row["cancel_pattern_date"]; 
            $route_id = $row["route_id"]; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of cancel patterns</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="cancel_pattern_id">Enter cancel pattern id</label>
                <input class="form-control" id="cancel_pattern_id" placeholder="" name="cancel_pattern_id"
                    value="<?=$cancel_pattern_id;?>">
            </div>

            <div class="form-group">
                <label for="cancel_pattern_content">Enter cancel pattern content</label>
                <textarea class="form-control" id="cancel_pattern_content" name="cancel_pattern_content" rows="4"><?=$cancel_pattern_content;?></textarea>
            </div>

            <div class="form-group">
                <label for="cancel_pattern_date">Enter cancel pattern date</label>
                <input class="form-control" id="cancel_pattern_date" placeholder="" name="cancel_pattern_date"
                    value="<?=$cancel_pattern_date;?>">
            </div>

            <div class="form-group">
                <label for="route_id">Enter route id</label>
                <input class="form-control" id="route_id" placeholder="" name="route_id"
                    value="<?=$route_id;?>">
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>