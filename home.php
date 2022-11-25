<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/routine/db_conn.php";

$dbo=new DatabaseConnection;
$action = $_POST["action"];

if ($action == "Add") {

    $subject = $_POST["subject"];
    $link = $_POST["link"];
    $date = $_POST["date"];
    $note = $_POST["note"];
    $status = 0;
    $query = $dbo->conn->prepare("INSERT INTO daily(subject,link,date,note) 
        VALUES (:d_subject,:link,:d_date,:note)");
    $query->bindParam(':d_subject', $subject);
    $query->bindParam(':link', $link);
    $query->bindParam(':d_date', $date);
    $query->bindParam(':note', $note);
    if ($query->execute()) {
        $rv = array("status" => $status);
    echo json_encode($rv);
    exit();
    }
    
}

if($action=="load")
{
    

    //$query =;
    $temp = $dbo->conn->prepare( "SELECT * from daily ORDER BY date DESC");
    $temp->execute();

    if ($temp->rowCount() > 0) {

        $rv = $temp->fetchAll(PDO::FETCH_ASSOC);
    }

    echo json_encode($rv);
}


?>