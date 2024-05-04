CREATE TABLE event_ (
e_id INT(11) NOT NULL AUTO_INCREMENT,
e_name VARCHAR(50) NOT NULL,
description VARCHAR(255),
max_capacity int UNSIGNED NOT NULL,
address VARCHAR(255) NOT NULL,
e_type VARCHAR(50) NOT NULL,
s_date_time DATETIME NOT NULL DEFAULT CURRENT_TIME ,
e_date_time DATETIME NOT NULL DEFAULT  CURRENT_TIME,
PRIMARY KEY (e_id) 
);

CREATE TABLE user_ (
f_name VARCHAR(50) NOT NULL,
l_name VARCHAR(50) NOT NULL,
phone_number CHAR(10) NOT NULL,
e_mail VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(100) NOT NULL,
PRIMARY KEY (e_mail)
);

CREATE TABLE attendee (
ae_id INT(11) NOT NULL,
ae_mail VARCHAR(50) NOT NULL,
FOREIGN KEY (ae_id) REFERENCES event_(e_id),
FOREIGN KEY (ae_mail) REFERENCES user_ (e_mail) ON DELETE CASCADE 
);

CREATE TABLE presenter (
p_name VARCHAR(50) NOT NULL,
pe_id INT(11), 
pe_email VARCHAR(50),
PRIMARY KEY (p_name),
FOREIGN KEY (pe_id) REFERENCES event_(e_id),
FOREIGN KEY (pe_email) REFERENCES user_ (e_mail) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE key_note_speaker (
k_name VARCHAR(50) NOT NULL,
ke_id INT(11), 
ke_email VARCHAR(50),
PRIMARY KEY (k_name),
FOREIGN KEY (ke_id) REFERENCES event_(e_id),
FOREIGN KEY (ke_email) REFERENCES user_ (e_mail) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE sponsor (
company_name varchar(50) NOT NULL,
se_id int(11) DEFAULT NULL,
se_email varchar(50) DEFAULT NULL,
PRIMARY KEY(se_id),
FOREIGN KEY (se_id) REFERENCES event_ (e_id),
FOREIGN KEY (se_email) REFERENCES user_ (e_mail) ON DELETE CASCADE ON UPDATE CASCADE
);



INSERT INTO `event_`(`e_id`, `e_name`, `description`, `max_capacity`, `address`, `e_type`, `s_date_time`, `e_date_time`) VALUES ('1', 'Music Festival 2024','Annual music festival featuring top artists', 1000, '456 Park Avenue, Music City, New York 54324', 'Festival', '2024-05-16 16:00:00', '2024-05-17 20:00:00');
INSERT INTO `event_`(`e_id`, `e_name`, `description`, `max_capacity`, `address`, `e_type`, `s_date_time`, `e_date_time`) VALUES (2, 'Food Expo 2024', 'International food expo showcasing culinary innovations', 300, '789 Market Street, Foodtown, California 67890', 'Expo', '2024-09-10 10:00:00', '2024-09-12 18:00:00');

INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('Alice', 'Johnson', 9876543210, 'alice@example.com', 'LALA30');
INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('Bob', 'Smith', 5555555555, 'bob@example.com', '123BOB');
INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('Paul', 'Smith', 9495297079, 'paul@example.com', 'paul0516');
INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('Andreia', 'Shin', 9493200009, 'andreia@example.com', 'andreia123');
INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('James', 'Lee', 1234567890, 'jamesbose@example.com', 'jamesbose123');
INSERT INTO `user_`(`f_name`, `l_name`, `phone_number`, `e_mail`, `password`) VALUES ('Natalia','Shin','0987654321','natinike@example.com','nati123');

INSERT INTO `presenter`(`p_name`, `pe_id`, `pe_email`) VALUES ('Bob','2','bob@example.com');
INSERT INTO `presenter`(`p_name`, `pe_id`, `pe_email`) VALUES ('Alice','1','alice@example.com');

INSERT INTO `key_note_speaker`(`k_name`, `ke_id`, `ke_email`) VALUES ('Andreia','2','andreia@example.com');
INSERT INTO `key_note_speaker`(`k_name`, `ke_id`, `ke_email`) VALUES ('Bob','2','bob@example.com');
INSERT INTO `key_note_speaker`(`k_name`, `ke_id`, `ke_email`) VALUES ('Paul','1','paul@example.com');

INSERT INTO `sponsor`(`company_name`, `se_id`, `se_email`) VALUES ('Bose','1','jamesbose@example.com');
INSERT INTO `sponsor`(`company_name`, `se_id`, `se_email`) VALUES ('Nike','2','natinike@example.com');
