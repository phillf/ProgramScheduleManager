ProgramScheduleManager
======================

## Introduction

The Station Manager app was originally developed for PowerCast Radio. This application will allow you to add, edit, and delete a program shcedule without needing to know, or bother with editing, HTML.

## Installation

1. Upload package to a webserver (LAMP stack).
2. Rename config.sample.php to config.php and edit it to use your the database where you will store the data.
3. Execute the "TableStructure.sql" file by using a tool like phpMyAdmin.
4. Edit login.sample.php in the admin folder and insert a username and password for your user.
 Note: The password must be an MD5 Hash. You can use admin/md5.php
5. After editing login.sample.php rename it to login.php