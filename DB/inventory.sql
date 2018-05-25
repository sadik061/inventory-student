--
-- Database: `inventory`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(255) NOT NULL,
  `user_PhoneNo` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `user_Password` varchar(255) NOT NULL,
  `user_Role` varchar(255) NOT NULL,
  `user_Input_Time` datetime DEFAULT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

