
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

drop database peer;
create database peer;
use peer;

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `publish_date` date NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `criterias` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_22_113551_create_students_table', 1),
(4, '2017_02_22_113628_create_courses_table', 1),
(5, '2017_02_22_113921_create_assignments_table', 1),
(6, '2017_02_28_115151_create_criterias_table', 1),
(7, '2017_02_28_115216_create_rubrics_table', 1),
(8, '2017_02_28_115255_create_submissions_table', 1),
(9, '2017_02_28_115315_create_reviews_table', 1),
(10, '2017_02_28_120524_create_comments_table', 1),
(11, '2017_02_28_124543_create_marks_table', 1),
(12, '2017_02_28_124633_create_teachers_table', 1);

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `comment_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `rubrics` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_date` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rubrics`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `criterias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `rubrics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;



ALTER TABLE Students ADD Rating double(3,2);

insert into Students Values(1,1,'Kamal','Ediri sooriya','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.4);
insert into Students Values(2,2,'Nimal','Weraperuma','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.7);
insert into Students Values(3,3,'Supun','Abesinghe','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.6);
insert into Students Values(4,4,'Pawan','Manishka','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.2);
insert into Students Values(5,5,'Ediri','Nirmani','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.0);
insert into Students Values(6,6,'Sunil','Addarachi','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',2.8);
insert into Students Values(7,7,'Mikky','Girly','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.0);
insert into Students Values(8,8,'Menuka','Warusawithana','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.1);
insert into Students Values(9,9,'Thirasara','Ariyarathna','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.3);
insert into Students Values(10,10,'Prabodha','Harankandeniya','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.4);
insert into Students Values(11,11,'Chamath','Abesinghe','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.4);
insert into Students Values(12,12,'Ashen','Gamage','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.8);
insert into Students Values(13,13,'Suvi','Lakmali','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.5);
insert into Students Values(14,14,'Lahiru','Jayathilaka','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.6);
insert into Students Values(15,15,'Kasun','Sahabandu','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.7);
insert into Students Values(16,16,'Madusha','Nirmal','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',4.9);
insert into Students Values(17,17,'Chalidu','Kalhara','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',2.9);
insert into Students Values(18,18,'Ganeeshi','Anuridika','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',2.7);
insert into Students Values(19,19,'Senuri','Disanayaka','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',2.6);
insert into Students Values(20,20,'Amila','Indrachapa','1980-04-05','2016-03-10 10:10:10','2016-03-11 10:10:10',3.5);

insert into courses Values(1,'Artificial Inteligence','AI','2016-04-10 11:10:10','2016-04-11 12:12:12');

insert into Assignments Values(1,'2016-04-11','2016-04-11','Summery on First Lecture','Describe what is said in first lecture','2016-06-15','2016-05-01',1);

insert into submissions Values(1,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,1);
insert into submissions Values(2,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,2);
insert into submissions Values(3,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,3);
insert into submissions Values(4,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,4);
insert into submissions Values(5,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,5);
insert into submissions Values(6,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,6);
insert into submissions Values(7,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,7);
insert into submissions Values(8,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,8);
insert into submissions Values(9,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,9);
insert into submissions Values(10,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,10);
insert into submissions Values(11,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,11);
insert into submissions Values(12,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,12);
insert into submissions Values(13,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,13);
insert into submissions Values(14,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,14);
insert into submissions Values(15,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,15);
insert into submissions Values(16,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,16);
insert into submissions Values(17,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,17);
insert into submissions Values(18,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,18);
insert into submissions Values(19,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,19);
insert into submissions Values(20,'2016-05-01','2016-05-01','Hi, I did not listen to the lecture','2016-05-01',0,20);

drop function if exists get_LastContact;
DELIMITER $$
create function get_LastContact (st_id INT,assignment_id INT)  RETURNS TimeStamp
BEGIN
DECLARE lastContact TimeStamp;
IF (exists (select updated_at from Reviews where student_id=st_id order by 1 desc))then
    select updated_at into lastContact from Reviews where student_id=st_id order by 1 desc;
ELSE
    select timestamp((select deadline from Assignments where id=assignment_id)) into lastContact;
end IF;
RETURN lastContact;
end$$
DELIMITER ;

drop function if exists updateSUB;
DELIMITER $$
create function updateSUB (st_id INT) RETURNS INT
BEGIN
    update submissions set status=3 where student_id=st_id;
    RETURN 1;
end$$
DELIMITER ;

drop function if exists insertReview;
DELIMITER $$
create function insertReview (stID INT,comment1 text,comment2 text,comment3 text,comment4 text,subID INT) RETURNS INT
BEGIN
    DECLARE countR INT DEFAULT 0;
    insert into Reviews(created_at,updated_at,comment_1,comment_2,comment_3,comment_4,submission_id,student_id) Values((select now()),(select now()),comment1,comment2,comment3,comment4,subID,stID);
    select count(id) into countR from Reviews where submission_id=subID;
    IF(countR=3)Then
        update Submissions set status=2 where id=subID;
    ELSE
        update Submissions set status=1 where id=subID;
    END IF;
    RETURN 1;
end$$
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS getBestToReview //
 CREATE PROCEDURE getBestToReview(student_id INT,student_rating DOUBLE,assignment_id INT)
   BEGIN
    DECLARE reviewID INT DEFAULT -1;
    DECLARE temp INT DEFAULT -1;
    DROP TEMPORARY TABLE IF EXISTS eligible;
    CREATE TEMPORARY TABLE eligible SELECT s.id,s.first_name,s.last_name,s.rating,get_LastContact(s.id,assignment_id) as lastContact from students s,submissions sub where sub.student_id=s.id and sub.status=1 and s.id!=student_id;
    IF(exists((select id, abs(rating-student_rating) as RAT,lastContact from eligible having RAT<0.3 order by 3 desc limit 1)))THEN
        select t.id into reviewID from (select id, abs(rating-student_rating) as RAT,lastContact from eligible having RAT<0.3 order by 3 desc,2 limit 1) as t;
    END IF;
    IF(reviewID=-1)THEN
        IF(exists((select id, abs(rating-student_rating) as RAT,lastContact from eligible having RAT<0.6 order by 3 desc limit 1)))THEN
            select t.id into reviewID from (select id, abs(rating-student_rating) as RAT,lastContact from eligible having RAT<0.6 order by 3 desc,2 limit 1) as t;
        END IF;
    END IF;
    IF(reviewID=-1)THEN
        IF(exists((select id, abs(rating-student_rating) as RAT from eligible order by 2 limit 1)))THEN
            select t.id into reviewID from (select id, abs(rating-student_rating) as RAT from eligible order by 2 limit 1) as t;
        END IF;
    END IF;
    IF(reviewID!=-1)THEN
        select updateSUB(reviewID) into temp;
    END IF;
    
    select s.id,s.first_name,s.last_name,get_LastContact(s.id,assignment_id) as LastContact,sub.id as SubMissionID,s.rating from students s,submissions sub where s.id=sub.student_id and s.id=reviewID;
   END //
 DELIMITER ;