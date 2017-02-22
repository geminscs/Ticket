<?php
require "DBManager.php";
/**
 * Created by PhpStorm.
 * User: tammy
 * Date: 17/2/21
 * Time: 22:53
 */
$conn = DBManager::getInstance()->getConnection();
$sql = "select * from User where id = 1";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo var_dump($row);
    }
}
