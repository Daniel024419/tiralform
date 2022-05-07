 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `user` (
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


 