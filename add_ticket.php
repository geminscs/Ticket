<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2/22/17
 * Time: 10:32 PM
 */
require_once "DBManager.php";

if(is_array($_GET)){
    if(isset($_GET["user_id"]) and isset($_GET["event_id"])){
        $user_id = $_GET["user_id"];
        $event_id = $_GET["event_id"];
        $conn = DBManager::getInstance()->getConnection();
        $event_query = "select time_end from Event where id = $event_id";
        $result = $conn->query($event_query) or die("No event found");
        if($result->num_rows > 0){
            $end_time = $result->fetch_assoc()["time_end"];
            $cur_time = date("Y-m-d H:i:s");
            $sql = "insert into EntryPass(user_id, event_id, time_buy, time_last) 
                values($user_id, $event_id, '$cur_time', '$end_time')";
            echo $sql;

            $conn->query($sql) or die("Fail to insert entry pass");
        }
    }
    else{
        echo "Unexpected parameters";
    }
} else{
    echo "Unexpected accessing!";
}