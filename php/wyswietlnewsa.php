<?php
//WY�WIETLANIE NEWS�W

$plik = "../iloscnewsow.txt";
//Ile newsow
$file = fopen($plik, "r+");
flock($file,2);
$n = fread($file, filesize($plik));
flock($file,3);
fclose($file);


//Wy�wietlanie news�w

for ($i=$n; $i>2; $i--)
{
    //Wczytywanie news�w
    //USER
    $plik = ("../newsy/".$i."user.txt");
    $file = fopen($plik, "r+");
    flock($file,2);
    $user = fread($file, filesize($plik));
    flock($file,3);
    fclose($file);
    //TYTUL
    $plik = ("../newsy/".$i."title.txt");
    $file = fopen($plik, "r+");
    flock($file,2);
    $title = fread($file, filesize($plik));
    flock($file,3);
    fclose($file);
    //TRE��
    $plik = ("../newsy/".$i."tresc.txt");
    $file = fopen($plik, "r+");
    flock($file,2);
    $tresc = fread($file, filesize($plik));
    flock($file,3);
    fclose($file);
    //CZAS
    $plik = ("../newsy/".$i."time.txt");
    $file = fopen($plik, "r+");
    flock($file,2);
    $time = fread($file, filesize($plik));
    flock($file,3);
    fclose($file);
    
   
    
    echo('<div class="news">'); 
        echo('<h1>'.$title.'</h1>');
            echo('<p class="newstime">');
                echo('<span class="newsdate">Wstawiony: </span>');
                    echo($time);    
            echo('</p>');
            echo('<img src="../grafika/kwant.jpg" alt="Kropki kwantowe"/>');
            echo('<p class="newsshort">');
                 echo($tresc);       
            echo('</p>');
        //  <p class="newslong">
                           
        //  </p>
                        
            echo('<p class="newsauthor">');
                echo('Autor: <span class="nauthor">'.$user.'</span>');
            echo('</p>');
    echo('</div>');

}