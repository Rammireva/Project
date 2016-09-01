<?php
class Project1DAO extends AbstractDAO {

    public static function getEventDetails(){
        $query="SELECT * FROM event_details";
        $result=self::fetchQuery($query);
        return $result;
    }
    public static function getSessionDetails(){
        $query = "SELECT session_id,event_name,session_name,session_duration,session_author,session_vote FROM event_details ed JOIN session_details sd ON ed.event_id=sd.event_id";
        $result = self::fetchQuery($query);
        return $result;
    }
    public static function insertEventData($event_name,$event_address,$event_city,$event_pin,$even_date,$event_time){
        $query = "insert into event_details (event_name,event_address,event_city,event_pincode,event_date,event_time) VALUES
                ('$event_name','$event_address','$event_city','$event_pin','$even_date','$event_time')";
        $result = self::insertQuery($query);
        return $result;
    }
    public static function getEventName(){
        $query = "select event_id,event_name from event_details";
        $result = self::fetchQuery($query);
        return $result;
    }
    public static function insertSessionData($session_name,$event_name,$session_duration,$session_author){
        $query = "insert into session_details (session_name,event_id,session_duration,session_author) VALUES
                  ('$session_name','$event_name','$session_duration','$session_author')";
        $result = self::insertQuery($query);
        return $result;
    }
    public static function updateVote($vote,$id){
        $query = "update session_details set session_vote=$vote where session_id=$id";
        $result = self::updateQuery($query);
        return $result;
    }
}	
?>
