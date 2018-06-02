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

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_Name` varchar(255) NOT NULL,
   `supplier_Title` varchar(255) NOT NULL,
   `supplier_Email` varchar(255) NOT NULL,
   `supplier_Note` text NOT NULL,
  `supplier_PhoneNo` varchar(255)  NULL,
  `supplier_MobileNo` varchar(255) NOT NULL,
  `supplier_address` text NOT NULL,
  `supplier_Entry_By` int(11) NOT NULL,
  `supplier_Input_Time` datetime DEFAULT NULL,
  PRIMARY KEY (supplier_id),
  foreign key (supplier_Entry_By) references user(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_Name` varchar(255) NOT NULL,
  `customer_companyName` varchar(255) NOT NULL,
  `customer_title` varchar(255) NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contactType` varchar(255) NOT NULL,
   `customer_MobileNo` varchar(255) NOT NULL,
   `customer_PhoneNo` varchar(255)  NULL,
  `customer_address` text NOT NULL,
  `customer_Entry_By` int(11) NOT NULL,
  `customer_Input_Time` datetime DEFAULT NULL,
  PRIMARY KEY (customer_id),
  foreign key (customer_Entry_By) references user(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

