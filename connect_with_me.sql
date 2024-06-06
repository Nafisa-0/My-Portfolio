
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `connect_with_me` (
  `SNO` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `connect_with_me`
  ADD PRIMARY KEY (`SNO`);


ALTER TABLE `connect_with_me`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
