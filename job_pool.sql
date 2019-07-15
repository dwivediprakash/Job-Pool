CREATE TABLE `applicants` (
  `post_id` int(11) NOT NULL,
  `enrollment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `applicants` (`post_id`, `enrollment`) VALUES
(2, '0115CS161037'),
(6, '0115CS161037'),
(4, '0115CS161037'),
(5, '0105IT161064'),
(3, '0105IT161064'),
(7, '0105IT161064'),
(6, '0115CS161056'),
(2, '0115CS161056'),
(4, '0115CS161056'),
(4, '0105IT161064');

CREATE TABLE `college` (
  `cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `cphone` varchar(20) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `university` varchar(200) NOT NULL,
  `cwebsite` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `college` (`cid`, `cname`, `caddress`, `cphone`, `cemail`, `grade`, `university`, `cwebsite`, `username`, `password`, `image`) VALUES
(105, 'Oriental Institute of Science and Technology', 'Raisen Road Bhopal', '7566985642', 'hod@oriental.ac.in', 'A', 'RGPV', 'oriental.com', 'oriental123', 'oriental123', 'OIST.jpg'),
(115, 'NRI Institute of Information Science and Technology', 'Raisen Road Bhopal', '7566235214', 'admin@nri.ac.in', 'B', 'RGPV', 'niist.com', 'nri123', 'nri123', 'NRI.jpeg');

CREATE TABLE `company` (
  `kid` int(11) NOT NULL,
  `kname` varchar(200) NOT NULL,
  `kaddress` varchar(200) NOT NULL,
  `Kphone` varchar(15) NOT NULL,
  `kemail` varchar(40) NOT NULL,
  `web` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `company` (`kid`, `kname`, `kaddress`, `Kphone`, `kemail`, `web`, `username`, `password`, `image`) VALUES
(101, 'Tata Consultancy Services', 'MP Nagar Zone 2 , Bhopal', '912564412', 'tcscareer@ion.co.in', 'tcs.com', 'tcs123', 'tcs123', 'tcslogo.jpg'),
(102, 'Infosys Telecom', 'Sector C Hoshangabad Road Bhopal', '8659234612', 'info@infosys.co.in', 'infosys.com', 'infosys123', 'infosys123', 'infosys.jpg');

CREATE TABLE `companyposts` (
  `post_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `specification` varchar(500) NOT NULL,
  `vacancies` int(11) DEFAULT NULL,
  `package` int(11) NOT NULL,
  `ExpDated` varchar(20) DEFAULT NULL,
  `gradeOfClg` varchar(10) NOT NULL,
  `MinCGPA` int(11) DEFAULT NULL,
  `Backlog` int(11) DEFAULT NULL,
  `MaxDrop` int(11) DEFAULT NULL,
  `open_off` varchar(20) DEFAULT NULL,
  `clgname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `companyposts` (`post_id`, `company_id`, `title`, `specification`, `vacancies`, `package`, `ExpDated`, `gradeOfClg`, `MinCGPA`, `Backlog`, `MaxDrop`, `open_off`, `clgname`) VALUES
(1, 101, 'Web Development', 'PHP and Django', 200, 5, '2019-09-30', 'A', 6, 2, 2, 'open', 'All'),
(2, 101, 'Android Developer', 'JavaME and Kotlin', 150, 3, '2019-12-25', 'A', 6, 2, 2, 'open', 'All'),
(3, 101, 'Full Stack Developer', 'C and C++', 100, 4, '2020-12-26', 'A', 7, 1, 1, 'close', 'Oriental Institute of Science and Technology'),
(4, 101, 'System Developer', 'Embedded C', 50, 8, '2020-05-30', 'A', 8, 1, 1, 'open', 'All'),
(5, 102, 'Android Developer', 'Scala and Rails', 120, 4, '2019-12-30', 'A', 8, 1, 1, 'open', 'All'),
(6, 102, 'Full Stack Developer', 'Code Igniter and Laravel', 100, 6, '2020-03-01', 'A', 8, 1, 1, 'close', 'NRI Institute of Information Science and Technology'),
(7, 102, 'Backend Developer', 'PHP and Django', 100, 6, '2020-12-25', 'A', 8, 0, 1, 'close', 'Oriental Institute of Science and Technology'),
(8, 102, 'System Developer', 'C and C++', 150, 4, '2019-12-29', 'A', 7, 1, 1, 'open', 'All'),
(9, 102, 'Marketing', 'Communication Skills', 100, 3, '2020-12-25', 'C', 6, 2, 3, 'open', 'All'),
(10, 101, 'Digital Media', 'Paint', 100, 2, '2020-12-25', 'D', 5, 4, 3, 'open', 'All');


CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `feedback` (`name`, `feedback`) VALUES
('Pavan Jain', 'This is an amazing website for all the people related to this website.');

CREATE TABLE `list_college` (
  `clgname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `list_college` (`clgname`) VALUES
('All Saints College of Technology'),
('Bansal Institute of Science and Technology'),
('Bhopal Institute of Science and Technology'),
('Globus Engineering College'),
('IES College of Technology'),
('Jai Narayan College of Technology and Science'),
('Laxmi Narayan of Technology'),
('Maulana Azad National Institute of Technology'),
('NRI Institute of Information Science and Technology'),
('Oriental Institute of Science and Technology'),
('Oriental College of Technology'),
('Radharaman Engineering College'),
('RKDF College of Engineering'),
('Sagar Institute of Science and Technology'),
('Technocrats Institute of Technology');


CREATE TABLE `student` (
  `sname` varchar(200) NOT NULL,
  `semail` varchar(200) NOT NULL,
  `enrollment` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date NOT NULL,
  `collegeid` varchar(200) NOT NULL,
  `collegeName` varchar(200) DEFAULT NULL,
  `Branch` varchar(40) NOT NULL,
  `AvgCGPA` int(11) NOT NULL,
  `passingYear` int(11) NOT NULL,
  `tenthMarks` int(11) NOT NULL,
  `twelethMark` int(11) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `Exp` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Invalid',
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `student` (`sname`, `semail`, `enrollment`, `phone`, `address`, `gender`, `dob`, `collegeid`, `collegeName`, `Branch`, `AvgCGPA`, `passingYear`, `tenthMarks`, `twelethMark`, `pdf`, `photo`, `Exp`, `status`, `username`, `password`) VALUES
('Pavan Jain', '013pavanjain@gmail.com', '0105IT161064', '8349312393', 'Kalpana Hagar 434, Ayodhya Bypass, Bhopal', 'Male', '1996-11-13', '105', 'Oriental Institute of Science and Technology', 'Information Technology', 9, 2020, 88, 79, 'Resume.docx', 'Passport Photo.jpg', 2, 'Valid', 'pavan123', 'pavan123'),
('Jasmeet Kaur', 'jassu@gmail.com', '0115CS161037', '8356231245', 'Sheetal City Mandideep', 'Female', '1997-04-12', '115', 'NRI Institute of Information Science and Technology', 'Computer Science', 8, 2020, 84, 84, 'Jasmeet Resume.doc', 'Jasmeet.png', 1, 'Valid', 'jassu123', 'jassu123'),
('Payal Raghuwanshi', 'babu@gmail.com', '0115CS161056', '8541256325', 'Sheetal City Mandideep Bhopal', 'Female', '1998-05-12', '115', 'NRI Institute of Information Science and Technology', 'Computer Science', 8, 2020, 88, 95, 'TCS Application Form.pdf', 'IMG-20190113-WA0054.jpg', 1, 'Valid', 'payal123', 'payal123');


CREATE TABLE `studentvalidaterequest` (
  `collegeid` int(200) NOT NULL,
  `enrollment` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `college`
  ADD PRIMARY KEY (`cid`);

ALTER TABLE `company`
  ADD PRIMARY KEY (`kid`);

ALTER TABLE `companyposts`
  ADD PRIMARY KEY (`post_id`);

ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollment`);

ALTER TABLE `companyposts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;