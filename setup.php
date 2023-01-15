<?php

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "gwsc_db";


// CREATE DATABASE home_gym_equipment
$conn = mysqli_connect($host, $username, $passwd, $dbname);
$sql = 'CREATE DATABASE IF NOT EXISTS ' . $dbname;
if ($conn->query($sql) === TRUE) {
    '<p class="success">Database created successfully</p>';
} else {
    '<p class="error">Error creating database: ' . $conn->error . '</p>';
}


// CREATE users TABLE
$user_query = 'CREATE TABLE IF NOT EXISTS users (                
    id int(8) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    user_name varchar(55) NOT NULL,
    email varchar(255) NOT NULL,
    postcode int(255) NOT NULL,
    phonenumber int(20) NOT NULL,
    user_password varchar(12) NOT NULL,
    display_name varchar(55) NOT NULL,
    city varchar(255) NOT NULL,
    country varchar(255) NULL NULL
  )';


if ($conn->query($user_query) === TRUE) {
    '<p class="success">Table users created successfully</p>';
} else {
    '<p class="error">Error creating table: ' . $conn->error . '</p>';
}


// CREATE failed_login TABLE
$failed_query = 'CREATE TABLE IF NOT EXISTS failed_login (                
    ip_address varchar(255) NOT NULL,
    date datetime NOT NULL
  )';

if ($conn->query($failed_query) === TRUE) {
    '<p class="success">Table failed_login created successfully</p>';
} else {
    '<p class="error">Error creating table: ' . $conn->error . '</p>';
}


// CREATE visitor_counter TABLE
$counter_query = 'CREATE TABLE IF NOT EXISTS visitor_counter (                
    counts int(10)  PRIMARY KEY NOT NULL AUTO_INCREMENT

  )';

if ($conn->query($counter_query) === TRUE) {
    '<p class="success">Table visitor_counter created successfully</p>';
} else {
    '<p class="error">Error creating table: ' . $conn->error . '</p>';
}









// new

// CREATE TABLE `users` ( `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,`firstname` varchar(50) NOT NULL,`lastname` varchar(50) NOT NULL, `user_name` varchar(55) NOT NULL, `email` varchar(255) NOT NULL, `phonenumber` int(20) NOT NULL, `password` varchar(12) NOT NULL, `display_name` varchar(55) NOT NULL );
// INSERT INTO `users` (`id`,`firstname`,`lastname`, `user_name`,`email`,`phonenumber`,`password`, `display_name`) VALUES (1,'Manasseh','Ankrah','Man90','man@gmail.com',0253665, 'admin', 'admin');

// CREATE TABLE `users` ( `id` int(8) NOT NULL AUTO_INCREMENT,`firstname` varchar(50) NOT NULL,`lastname` varchar(50) NOT NULL, `user_name` varchar(55) NOT NULL, `email` varchar(255) NOT NULL, `phonenumber` int(20) NOT NULL, `password` varchar(12) NOT NULL, `display_name` varchar(55) NOT NULL );
// INSERT INTO `users` (`id`, `user_name`, `password`, `display_name`) VALUES (1, 'admin', 'admin', 'Admin')