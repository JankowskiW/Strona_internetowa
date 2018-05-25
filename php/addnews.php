<?php
$plik = "../iloscnewsow.txt";
date_default_timezone_set('Europe/Warsaw');

//Czytanie zawartości z pliku
$file = fopen($plik, "r+");
flock($file,2);
$n = fread($file, filesize($plik))+1;
flock($file,3);
fclose($file);

//Aktualizacja pliku
unlink($plik);
touch($plik);
$file = fopen($plik, "w");
flock($file,2);
fwrite($file, $n);
flock($file,3);
fclose($file);


//Pobieranie danych z formularza
$user = trim($_POST['user']);
$title = trim($_POST['title']);
$tresc = trim($_POST['tresc']);
$time = date("H:i d-m-Y");

$nuser = "../newsy/".$n."user.txt";
$ntitle = "../newsy/".$n."title.txt";
$ntresc = "../newsy/".$n."tresc.txt";
$ntime = "../newsy/".$n."time.txt";

//Tworzenie plików z NEWSEM
touch($nuser);
touch($ntitle);
touch($ntresc);
touch($ntime);


//Zapisywanie newsa do plików
  //USER
$file = fopen($nuser, "r+");
flock($file,2);
fwrite($file, $user);
flock($file,3);
fclose($file);
  //TITLE
$file = fopen($ntitle, "r+");
flock($file,2);
fwrite($file, $title);
flock($file,3);
fclose($file);
  //TRESC
$file = fopen($ntresc, "r+");
flock($file,2);
fwrite($file, $tresc);
flock($file,3);
fclose($file);
  //CZAS
$file = fopen($ntime, "r+");
flock($file,2);
fwrite($file, $time);
flock($file,3);
fclose($file);