create table userdata(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
  deta time
);

create table musicforeign(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table musicrock(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table sportsoccer(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table sportbaseball(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table sportbasketball(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table gamefps(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table gamepuzzle(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);

create table gamerace(
  userid int not null auto_increment primary key,
  name varchar(20),
  mess text
);
