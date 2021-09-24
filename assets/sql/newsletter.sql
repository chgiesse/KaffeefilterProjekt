-- Blog Articles
drop table newsletter;

create table newsletter (
	email varchar(300) primary key,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
	);

insert into newsletter (email) values 
('lennard@klein24.net'),
('f.langpage@gmail.com')