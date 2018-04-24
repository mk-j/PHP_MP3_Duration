# MP3File
Using the MP3File Class you can calculate the MP3 file duration in PHP, aware of id3v1, id3v2, CBR, VBR
#### This code is from: [Zenwoods - PHP Calculate Duration of MP3](http://www.zedwood.com/article/php-calculate-duration-of-mp3)

---

## Getting Started
> Installing using Composer
>```sh
>composer require mp3file/mp3file
>```

## How to load:
> Load the Package using Composer
>```php
>require_once("autoload.php");
>use MP3File\MP3File;
>```

>Load the Package **not** using Composer (Downloaded from Github)
>```php
>require_once("PHP_MP3_Duration/src/class.mp3file.php");
>use MP3File\MP3File;
>```

## Class in Action
>Get the Duration of a File (Little bit Longer Process Time, Shorter Code, Composer)
>```php
>require_once("autoload.php");
>use MP3File\MP3File;
>echo MP3File::getTime("[Your MP3 File].mp3");
>```

>Get the Duration of a File (Shorter Process Time, Longer Code, Composer)
>```php
>require_once("autoload.php");
>use MP3File\MP3File;
>$file = new MP3File("[Your MP3 File].mp3");
>echo $file->getDurationEstimate();
>``
