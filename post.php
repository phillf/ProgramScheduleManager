<?php

$title = $_POST['title']
$author = $_POST['author']
$type = $_POST['type'];
$section = $_POST['section'];

$title_es = sqlite_escape_string($title);
$author_es = sqlite_escape_string($author);
$type_es = sqlite_escape_string($type);
$section_es = sqlite_escape_string($section);

if (!empty($name)) {

   $dbhandle = sqlite_open('db/test.db', 0666, $error);

   if (!$dbhandle) die ($error);
   
   $stm = "INSERT INTO Books(title, author, type, section) VALUES('$title', '$author', '$type', '$section')";
   $ok = sqlite_exec($dbhandle, $stm, $error);

   if (!$ok) die("Oh No!: $error");  
   echo "Form submitted successfully";
}
?>