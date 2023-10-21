create database wa;
use wa;

/*============USER============*/
create table user(
	id int not null unique auto_increment,
	name varchar(20) not null unique,
	password varchar(255) not null check(length(password) > 5),
    email varchar(200) not null unique check(email like '%@%'),
    views int default 0,
    likes int default 0,
    dislikes int default 0,
    logs int default 0
);

/*==========ADD_USER==========*/
DELIMITER //

create procedure `add_user` (in namex varchar(20), in emailx varchar(200), in passwordx varchar(255), out success tinyint)
begin
	declare exist int default 0;
    
    select count(id) into exist from user where namex = name or emailx = email;
    
    if exist = 0
    then
		insert into user(name, email, password)
			values
				(namex, emailx, passwordx);

		set success = 1;
	else
		set success = 0;
	end if;
end //

DELIMITER ;

/*==========GET_HASH==========*/
DELIMITER //

create procedure `get_hash` (in emailx varchar(200), out hashx varchar(255))
begin
	select password into hashx from user where email = emailx;
end //

DELIMITER ;


/*=============================*/