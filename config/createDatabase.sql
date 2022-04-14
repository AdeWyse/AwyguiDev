CREATE TABLE user(
    username varchar(255) primary key,
    password text not null,
    name varchar(255) not null,
    permissions varchar(255) not null
);

CREATE TABLE  post(
    id int primary key auto_increment,
    title varchar(255) not null,
    content text not null,
    mainImage text,
    user varchar(255),
     FOREIGN KEY (user) REFERENCES user(username)
);

CREATE TABLE project(
    id int primary key auto_increment,
    title varchar(255) not null,
    content varchar(255) not null,
    mainImage text ,
    images text
);

CREATE TABLE  message
(
    id int primary key auto_increment,
    name varchar(255),
    email varchar(255),
    subject text,
    content text
);

insert into user
values('AwyguiAdmin', '$argon2i$v=19$m=65536,t=4,p=1$d1g2aHB6QVBUQndjdFYuVw$sFUr80cvofR4AUm3x+MGWIrRwMjBe7VDVlmBV8hJpU4', 'Awygui', 'admin');
