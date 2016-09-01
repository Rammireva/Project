<?php
require_once('config/config.php');
require_once('functions/ConnectionFactory.php');
require_once('functions/AbstractDAO.php');
require_once('functions/Project1DAO.php');

function valData($data){
    if(isset($_POST[$data]))
        return $_POST[$data];
    else
        return '';
}
if(isset($_GET['insert_event'])){
    $event_name = valData('name');
    $event_address = valData('address');
    $event_city = valData('city');
    $event_pin = valData('pin');
    $even_date = valData('date');
    $event_time = valData('time');
    Project1DAO::insertEventData($event_name,$event_address,$event_city,$event_pin,$even_date,$event_time);
    echo 'success';
}
if(isset($_GET['insert_session'])){
    $session_name = valData('name');
    $event_name = valData('event');
    $session_duration = valData('duration');
    $session_author = valData('author');
    Project1DAO::insertSessionData($session_name,$event_name,$session_duration,$session_author);
    echo 'success';
}
if(isset($_GET['update'])){
    Project1DAO::updateVote($_GET['vote'],$_GET['id']);
}

?>