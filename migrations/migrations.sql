Create Database acadgild;

CREATE TABLE `session_details` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `session_duration` varchar(55) DEFAULT NULL,
  `session_author` varchar(55) DEFAULT NULL,
  `session_vote` int(11) DEFAULT '0',
  PRIMARY KEY (`session_id`)
);

CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `event_address` varchar(255) DEFAULT NULL,
  `event_city` varchar(55) DEFAULT NULL,
  `event_pincode` int(6) DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_time` time DEFAULT NULL,
  PRIMARY KEY (`event_id`)
);