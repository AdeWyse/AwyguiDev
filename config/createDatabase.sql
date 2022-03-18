CREATE TABLE user(
    username varchar(255) primary key,
    password text not null,
    name varchar(255) not null,
    permissions varchar(255) not null
);

CREATE TABLE  post(
    id int primary key,
    title varchar(255) not null,
    content text not null,
    mainImage text,
    images text,
    user varchar(255),
     FOREIGN KEY (user) REFERENCES user(username)
);

CREATE TABLE project(
    id int primary key,
    title varchar(255) not null,
    content varchar(255) not null,
    mainImage text ,
    images text
);

CREATE TABLE  message
(
    id int primary key,
    name varchar(255),
    email varchar(255),
    subject text,
    content text
)
