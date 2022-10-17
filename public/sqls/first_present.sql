INSERT INTO `department` (`id`, `code`, `department`, `latitude`, `longitude`) VALUES
(1, 'law', 'College of Law', 121.76371828, 16.93726998),
(2, 'ccsict', 'College of Computing Studies, Information and Communication Technology ', 121.76395699, 16.93796790),
(3, 'iat', 'Institute of Agricultural Technology', 121.76472142, 16.94018350),
(4, 'ccje', 'Criminology', 121.76518947, 16.93899937),
(5, 'cbm', 'College of Business Management', 121.76490717, 16.93712726),
(6, 'ite', 'Institute of Teacher Education', 121.76467817, 16.93659259),
(7, 'automotive', 'automotive', 121.76426880, 16.93888647);


INSERT INTO `faculty` (`id`, `department_id`, `name`, `gender`, `address`, `birthday`, `contact`, `fb`, `email`, `position`, `scheduleSY`, `latitude`, `longitude`) VALUES
(1, 1, 'Law Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(2, 1, 'Law Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(3, 2, 'CCSICT Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(4, 2, 'CCSICT Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(5, 3, 'IAT Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(6, 3, 'IAT Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(7, 4, 'CCJE Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(8, 4, 'CCJE Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(9, 5, 'CBM Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(10, 5, 'CBM Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(11, 6, 'ITE Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(12, 6, 'ITE Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(13, 7, 'Automotive Teacher 1', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 1', 'email@gmail.com', 'Instructor I', '', NULL, NULL),
(14, 7, 'Automotive Teacher 2', 'Male', 'District I, Cauayan City', '1980-01-01 00:00:00', '09123456789', 'Teacher 2', 'email@gmail.com', 'Instructor I', '', NULL, NULL);
