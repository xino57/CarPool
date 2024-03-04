<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["contact_id"]) && $_GET["contact_id"] > 0)
    {
        $sql = "DELETE FROM table_contact
        WHERE contact_id = :contact_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":contact_id", $_GET["contact_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>