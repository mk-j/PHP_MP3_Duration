<?php

/**
 * Here you will find the Test of how to Use the MP3 File Class.
 * When you are using Composer you just need to do  `user MP3File\MP3File` then
 *  you have it!
 * Simply Start using It!
 */

require_once("autoload.php"); // Composer component

// Use the Class
use MP3File\MP3File;

// Test!
echo MP3File::getTime("[Your MP3 File].mp3");

?>
