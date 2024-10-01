-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 01, 2024 at 12:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ics_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `announcement_text` text NOT NULL,
  `announcement_file` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `title`, `announcement_text`, `announcement_file`, `created_at`, `updated_at`) VALUES
(1, 'Test 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '../announcement/Sisig.jpg', '2024-09-28 09:36:30', '2024-09-28 09:36:30'),
(2, 'School Year 2024 Enrollment Scheduledsada', 'We are pleased to inform you that enrollment for the School Year 2024-2025 is now open! Key Dates: October 1: Start of Early Enrollment for returning students  October 15: Regular Enrollment for new students  November 5: Classes begin Please ensure to submit all the necessary requirements before the deadline. You can access the enrollment portal via the school’s website. Jelo\\\'s Sari-sari storernrnrnjfgjfgjf', '../announcement/', '2024-09-28 10:42:19', '2024-09-29 12:17:31'),
(10, 'asdsadad', 'dsadad', '../announcement/', '2024-09-29 12:25:06', '2024-09-29 12:25:06'),
(11, 'asdada', 'dasdadasd', '../announcement/Sisig.jpg', '2024-09-29 12:25:20', '2024-09-29 12:25:20'),
(12, 'sdasdasd', 'GASFAJISFNAskLF\r\n\r\nASDASDSA\r\n\r\n\r\nSDASDA', '../announcement/', '2024-09-29 12:25:41', '2024-09-29 12:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `e_cert`
--

CREATE TABLE `e_cert` (
  `e_cert_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `e_cert` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `academic_year` varchar(10) DEFAULT NULL,
  `first_quarter` decimal(5,2) DEFAULT NULL,
  `second_quarter` decimal(5,2) DEFAULT NULL,
  `third_quarter` decimal(5,2) DEFAULT NULL,
  `fourth_quarter` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

CREATE TABLE `grade_level` (
  `grade_level_id` int(11) NOT NULL,
  `grade_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`grade_level_id`, `grade_level`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `guidance`
--

CREATE TABLE `guidance` (
  `guidance_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `address`, `role_id`) VALUES
(1, 'Janet', '', 'Dimaano', 'jannangelodimaano@gmail.com', '9454210467', 'C. Tirona St.', 2),
(2, 'Janet', '', 'Dimaano', 'jannangelodimaano@gmail.com', '9454210467', 'C. Tirona St.', 2),
(3, 'Janet', '', 'Dimaano', 'jannangelodimaano@gmail.com', '9454210467', 'C. Tirona St.', 2),
(4, 'Janet', '', 'Dimaano', 'jannangelodimaano@gmail.com', '9454210467', 'C. Tirona St.', 2),
(5, 'Janet', '', 'Dimaano', 'jannangelodimaano@gmail.com', '9454210467', 'C. Tirona St.', 2),
(6, 'Mylene', '', 'Sabundo', 'regina@gmail.ccom', '9121231234', 'Romblon St.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pdo`
--

CREATE TABLE `pdo` (
  `pdo_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `principal_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Student'),
(2, 'Parent'),
(3, 'Teacher'),
(4, 'Guidance'),
(5, 'Principal'),
(6, 'PDO');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(7, 'dasdada', 'dadadacadaa', '2024-09-27 21:50:00', '2024-09-29 23:51:00'),
(8, 'dasdadadada', 'dadadacadaadasdad', '2024-09-27 21:50:00', '2024-09-29 23:51:00'),
(9, 'dasda', 'dasfasfxacac', '2024-09-23 22:15:00', '2024-09-23 12:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `school_materials`
--

CREATE TABLE `school_materials` (
  `material_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `school_materials` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `grade_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `grade_level_id`) VALUES
(1, 'Emerald', 1),
(2, 'Ruby', 1),
(3, 'Sapphire', 1),
(4, 'Diamond', 2),
(5, 'Topaz', 2),
(6, 'Garnet', 2),
(7, 'Amethyst', 3),
(8, 'Opal', 3),
(9, 'Quartz', 3),
(10, 'Peridot', 4),
(11, 'Jade', 4),
(12, 'Aquamarine', 4),
(13, 'Onyx', 5),
(14, 'Amber', 5),
(15, 'Pearl', 5),
(16, 'Coral', 6),
(17, 'Ivory', 6),
(18, 'Obsidian', 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `lrn` bigint(12) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `current_status` varchar(20) NOT NULL,
  `academic_year` varchar(9) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `grade_level_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `lrn`, `first_name`, `middle_name`, `last_name`, `sex`, `date_of_birth`, `current_status`, `academic_year`, `parent_id`, `grade_level_id`, `section_id`, `role_id`) VALUES
(1, 123123123123, 'Jann', 'Calalo', 'Dimaano', 'male', '2024-09-01', 'active', '2024-2025', 1, 1, 2, 1),
(2, 210987654321, 'Mariel', 'Calalo', 'Dimaano', 'female', '2024-09-20', 'active', '2024-2025', 2, 5, 14, 1),
(3, 123456789101, 'Jann', 'Calalo', 'Dimaano', 'male', '2024-09-01', 'active', '2024-2025', 3, 3, 7, 1),
(4, 123412341234, 'Angelo', 'Calalo', 'Dimaano', 'male', '2024-09-06', 'active', '2024-2025', 4, 5, 14, 1),
(5, NULL, 'Jann', 'Dimaano', 'Perez', 'male', '2024-09-05', 'active', '2024-2025', 5, 3, 9, 1),
(6, 123456789012, 'Regina Cheley', 'Punzalan', 'Sabundo', 'female', '2019-06-19', 'active', '2024-2025', 6, 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_archives`
--

CREATE TABLE `student_archives` (
  `archive_id` int(11) NOT NULL,
  `lrn` int(12) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `current_status` varchar(20) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_credential`
--

CREATE TABLE `student_credential` (
  `lrn` bigint(12) DEFAULT NULL,
  `student_password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_credential`
--

INSERT INTO `student_credential` (`lrn`, `student_password`) VALUES
(123123123123, '$2y$10$Zm5GSSaaMaYFtlMq/U/qoe7QJBHJUCXUhfDKeMDISnNi3/5oa5egC'),
(123412341234, '$2y$10$lqmZ3gZQaTnP2Ng6RKY6ieKnAMdGOZV1QLSDM7e0qTz2EZWef9TIi'),
(12345678, '$2y$10$HrJLkjTsOLt1VKi6czcnP.5QorpHucrGoZfBVowHClxLfsb9NWBj6'),
(123456789012, '$2y$10$kInw/0Ty26tDLdNay8VysuM4pwHTomJ10qejPqjbIQuVAQCRfYtle'),
(210987654321, '$2y$10$Su26BbVjX./rAjB8BmKH6uthCvd8YVGnTloKcBxTIRjNzGgyqJGfK');

-- --------------------------------------------------------

--
-- Table structure for table `student_file`
--

CREATE TABLE `student_file` (
  `student_file_id` int(11) NOT NULL,
  `student_picture` varchar(100) NOT NULL,
  `psa_birth_certificate` varchar(100) DEFAULT NULL,
  `progress_report_card` varchar(100) DEFAULT NULL,
  `medical_assessment` varchar(100) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_file`
--

INSERT INTO `student_file` (`student_file_id`, `student_picture`, `psa_birth_certificate`, `progress_report_card`, `medical_assessment`, `student_id`) VALUES
(1, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 1),
(2, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 2),
(3, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 3),
(4, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 4),
(5, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 5),
(6, '../uploads/Sisig.jpg', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', '../uploads/Dimaano_Automated Testing Activity.pdf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `grade_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `grade_level_id`) VALUES
(1, 'Basic Math', 1),
(2, 'Introduction to Algebra', 2),
(3, 'Geometry Fundamentals', 3),
(4, 'Advanced Algebra', 4),
(5, 'Pre-Calculus', 5),
(6, 'Calculus', 6),
(7, 'Phonics and Reading', 1),
(8, 'Grammar and Composition', 2),
(9, 'Literature Studies', 3),
(10, 'Creative Writing', 4),
(11, 'Essay Writing', 5),
(12, 'Advanced Literature', 6),
(13, 'Introduction to Science', 1),
(14, 'Life Science', 2),
(15, 'Earth Science', 3),
(16, 'Physical Science', 4),
(17, 'Biology', 5),
(18, 'Chemistry', 6);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `e_cert`
--
ALTER TABLE `e_cert`
  ADD PRIMARY KEY (`e_cert_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `grade_level`
--
ALTER TABLE `grade_level`
  ADD PRIMARY KEY (`grade_level_id`);

--
-- Indexes for table `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`guidance_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `pdo`
--
ALTER TABLE `pdo`
  ADD PRIMARY KEY (`pdo_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`principal_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_materials`
--
ALTER TABLE `school_materials`
  ADD PRIMARY KEY (`material_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `student_archives`
--
ALTER TABLE `student_archives`
  ADD PRIMARY KEY (`archive_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `student_file`
--
ALTER TABLE `student_file`
  ADD PRIMARY KEY (`student_file_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `e_cert`
--
ALTER TABLE `e_cert`
  MODIFY `e_cert_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_level`
--
ALTER TABLE `grade_level`
  MODIFY `grade_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `guidance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pdo`
--
ALTER TABLE `pdo`
  MODIFY `pdo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `principal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_materials`
--
ALTER TABLE `school_materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_archives`
--
ALTER TABLE `student_archives`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_file`
--
ALTER TABLE `student_file`
  MODIFY `student_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `e_cert`
--
ALTER TABLE `e_cert`
  ADD CONSTRAINT `e_cert_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `e_cert_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `grade_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `guidance`
--
ALTER TABLE `guidance`
  ADD CONSTRAINT `guidance_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `pdo`
--
ALTER TABLE `pdo`
  ADD CONSTRAINT `pdo_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `principal`
--
ALTER TABLE `principal`
  ADD CONSTRAINT `principal_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `school_materials`
--
ALTER TABLE `school_materials`
  ADD CONSTRAINT `school_materials_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `school_materials_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`parent_id`);

--
-- Constraints for table `student_archives`
--
ALTER TABLE `student_archives`
  ADD CONSTRAINT `student_archives_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`parent_id`),
  ADD CONSTRAINT `student_archives_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `student_file`
--
ALTER TABLE `student_file`
  ADD CONSTRAINT `student_file_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
