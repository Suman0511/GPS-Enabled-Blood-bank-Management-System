CREATE TABLE IF NOT EXISTS `blood_country` (
  `country_id` int(9) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50;

INSERT INTO `blood_country` (`country_name`) VALUES
('India');

CREATE TABLE IF NOT EXISTS `blood_state` (
  `state_id` int(255) NOT NULL AUTO_INCREMENT,
  `country_id` int(255) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=255;

INSERT INTO `blood_state` (`state_name`) VALUES
('Andhra Pradesh'),
('Arunachal Pradesh'),
('Assam'),
('Bihar'),
('Chhattisgarh'),
('Goa'),
('Gujarat'),
('Haryana'),
('Himachal Pradesh'),
('Jharkhand'),
('Karnataka'),
('Kerala'),
('Madhya Pradesh'),
('Maharashtra'),
('Manipur'),
('Meghalaya'),
('Mizoram'),
('Nagaland'),
('Odisha'),
('Punjab'),
('Rajasthan'),
('Sikkim'),
('Tamil Nadu'),
('Telangana'),
('Tripura'),
('Uttar Pradesh'),
('Uttarakhand'),
('West Bengal');


CREATE TABLE IF NOT EXISTS `blood_city` (
  `city_id` int(255) NOT NULL AUTO_INCREMENT,
  `state_id` int(255) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=255;

INSERT INTO `blood_city`( `city_name`, `state_id`) VALUES
('Visakhapatnam', 1),
('Vijayawada', 1),
('Tirupati', 1),
('Itanagar', 2),
('Naharlagun', 2),
('Guwahati', 3),
('Silchar', 3),
('Dibrugarh', 3),
('Patna', 4),
('Gaya', 4),
('Bhagalpur', 4),
('Raipur', 5),
('Bilaspur', 5),
('Durg', 5),
('Panaji', 6),
('Margao', 6),
('Vasco da Gama', 6),
('Ahmedabad', 7),
('Surat', 7),
('Vadodara', 7),
('Faridabad', 8),
('Gurgaon', 8),
('Panipat', 8),
('Shimla', 9),
('Dharamshala', 9),
('Solan', 9),
('Ranchi', 10),
('Jamshedpur', 10),
('Dhanbad', 10),
('Bengaluru', 11),
('Mysuru', 11),
('Hubli-Dharwad', 11),
('Thiruvananthapuram', 12),
('Kochi', 12),
('Kozhikode', 12),
('Bhopal', 13),
('Indore', 13),
('Jabalpur', 13),
('Mumbai', 14),
('Pune', 14),
('Nagpur', 14),
('Imphal', 15),
('Thoubal', 15),
('Shillong', 16),
('Tura', 16),
('Aizawl', 17),
('Lunglei', 17),
('Kohima', 18),
('Dimapur', 18),
('Bhubaneswar', 19),
('Cuttack', 19),
('Rourkela', 19),
('Amritsar', 20),
('Ludhiana', 20),
('Jalandhar', 20),
('Jaipur', 21),
('Jodhpur', 21),
('Udaipur', 21),
('Gangtok', 22),
('Namchi', 22),
('Chennai', 23),
('Coimbatore', 23),
('Madurai', 23),
('Hyderabad', 24),
('Warangal', 24),
('Karimnagar', 24),
('Agartala', 25),
('Udaipur', 25),
('Dharmanagar', 25),
('Lucknow', 26),
('Kanpur', 26),
('Varanasi', 26),
('Dehradun', 27),
('Haridwar', 27),
('Roorkee', 27),
('Kolkata', 28),
('Asansol', 28),
('Siliguri', 28);