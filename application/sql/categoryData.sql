
USE kylecarlson_tigertrade; 

INSERT INTO categories (description) VALUES 
	('for sale'), --1
	('services'), --2
	('tutoring'), --3
	('housing'), --4
	('jobs'), --5
	('study groups'); --6
	
INSERT INTO subcategories (category_id, description) VALUES
	--For Sale
	('1','books'), 
	('1','tickets'), 
	('1','furniture'), 
	('1', 'household'), 
	('1','electronics'), 
	('1','computers'), 
	('1','video games'), 
	('1','vehicles'), 
	('1','free'), 
	('1','other'), 
	--Services
	('2', 'computers'), 
	('2', 'manual labor'), 
	('2', 'other'), 
	--Tutoring
	('3', 'math'), 
	('3', 'english'), 
	('3', 'science'), 
	('3', 'social studies'), 
	('3', 'computer science'), 
	('3', 'engineering'), 
	('3', 'other'), 
	--Housing
	('4','roomate'),
	('4','lease'), 
	--Jobs
	('5', 'part time'),
	('5', 'full time'), 
	('5', 'internship'), 
	('5', 'coop'); 