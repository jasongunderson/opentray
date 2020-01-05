CREATE DATABASE `test`
CREATE TABLE `people` (
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  PRIMARY KEY (`fname`,`lname`)
)
INSERT INTO `test`.`people` (`fname`, `lname`) VALUES ('gary', 'stu');
INSERT INTO `test`.`people` (`fname`, `lname`) VALUES ('john', 'smith');
INSERT INTO `test`.`people` (`fname`, `lname`) VALUES ('mary', 'jane');
INSERT INTO `test`.`people` (`fname`, `lname`) VALUES ('mary', 'sue');