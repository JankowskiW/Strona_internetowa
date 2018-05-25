<!DOCTYPE html>
<!-- Waldemar Jankowski 4 TIN -->
<html>
    <head>
        <title>Technologia jutra</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nowinki technologiczne, dyskusje, technika">
        <meta name="keywords" content="technika, technologia, rozwój, nowinki, komputery, elektronika, informatyka, robotyka">
        <meta name="Author" content="Jankowski Waldemar">
        
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/bjqs.css"/>
        <link rel="stylesheet" href="../css/slider.css"/>
        
        
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../js/bjqs-1.3.min.js"></script>
        <script src="../js/more.js"></script>
    </head>
    <body>
        <div id="bgtop">
            <div class="container">
                <div id="logo">
                    <img src="../grafika/logo.jpg" alt="TECHNOLOGIA JUTRA"/>
                </div>
                <div id="userpanel">
                    <ul>
                        <li><a href="#">ZALOGUJ</a></li>
                        <li><a href="#">ZAREJESTRUJ</a></li>
                    </ul>
                </div>
            </div>
            <div id="slider">
                 <div id="banner-slide">
                    <ul class="bjqs">
                      <li><a href="#"><img src="../grafika/baner1.jpg" title="Technologia 3D wejdzie na nowy poziom" alt="3D"/></a></li>
                      <li><a href="#"><img src="../grafika/baner2.jpg" title="Norwegia - jak zapobiegać tragediom na mostach?" alt="Norway"/></a></li>
                      <li><a href="#"><img src="../grafika/baner3.jpg" title="Niezniszczalne układy scalone" alt="Expendable"/></a></li>
                    </ul>

                  </div>
                  <script class="secret-source">
                    jQuery(document).ready(function($) {

                      $('#banner-slide').bjqs({
                        animtype      : 'slide',
                        height        : 230,
                        width         : 640,
                        responsive    : false,
                        randomstart   : true
                      });

                    });
                  </script>
                </div>
                <script src="../js/libs/jquery.secret-source.min.js"></script>
            </div>
       
        
        
        
        <div id="bgbot">
            <div class="container">
                <div id="menu">
                    <ul>
                        <li class="first"><a href="../index.html">
                                <img src="../grafika/1.jpg" alt="Strona Główna"/>
                        </a></li>
                        <li class="second"><a href="#">
                                <img src="../grafika/2.jpg" alt="Newsy"/>
                        </a></li>
                        <li class="third"><a href="download.html">
                                <img src="../grafika/5.jpg" alt="Dwonload"/>
                        </a></li>
                        <li class="fourth"><a href="upload.html">
                                <img src="../grafika/6.jpg" alt="Upload"/>
                        </a></li>
                    </ul>
                        <!-- DOLNY MENU --><br/>
                    <ul>
                        <li class="fifth"><a href="zadania.html">
                                <img src="../grafika/3.jpg" alt="Zadania"/>
                        </a></li>
                        <li class="sixth"><a href="forum.php">
                                <img src="../grafika/4.jpg" alt="Forum"/>
                        </a></li>
                        <li class="seventh"><a href="galeria.html">
                                <img src="../grafika/7.jpg" alt="Galeria"/>
                        </a></li>
                        <li class="eighth"><a href="kontakt.html">
                                <img src="../grafika/8.jpg" alt="Kontakt"/>
                        </a></li>
                    </ul>
                </div>
                
               
                
                <div id="newsy">
                    <?php include '../php/addnews.php'; ?>
                   
                    <div class="news">
                        <h1>Telewizory z kropkami kwantowymi</h1>
                        <p class="newstime">
                            <span class="newsdate">Wstawiony: </span>
                            13:11 20-12-2014
                        </p>
                        <img src="../grafika/kwant.jpg" alt="Kropki kwantowe"/>
                        
                        <p class="newsshort">
                            W przyszłym roku LG rozpocznie sprzedaż telewizorów 
                            korzystających z technologii kwantowych kropek. Technologia 
                            ta zapewnia szerszą paletę kolorów i lepsze ich nasycenie
                            z porównaniu z tradycyjnymi wyświetlaczami LCD.<br/>
                            <span class="more">Czytaj więcej...</span>
                         </p>
                         <p class="newslong">
                            W przyszłym roku LG rozpocznie sprzedaż telewizorów 
                            korzystających z technologii kwantowych kropek. Technologia 
                            ta zapewnia szerszą paletę kolorów i lepsze ich nasycenie
                            z porównaniu z tradycyjnymi wyświetlaczami LCD.<br/><br/>
                            Kropki kwantowe, to niewielkie kryształy o średnicy 
                            od 2 do 10 nanometrów, których kolor zależy od wielkości.
                            Urządzenia UHD QD (Ultra HD Quantum Dot) uzupełnią dotychczasową 
                            ofertę LG, w której znajdziemy urządzenia UHD oraz OLED. 
                            Pierwsze telewizory QD będą miały przekątną 55 i 65 cali.<br/><br/>
                            Niestety, w tej chwili trudno będzie wykorzystać zalet 
                            telewizorów z kropkami kwantowymi. Technologie Blu-ray 
                            i HDTV korzystają ze standardu REC709, który zapisuje 
                            mniej kolorów niż mogą wyświetlić kwantowe kropki.
                            Telewizory z kwantowymi kropkami zaprezentują pełnię 
                            swoich możliwości dopiero przy korzystaniu ze standardu 
                            REC.2020, który pozwala na zapiasnie dwukrotnie większej 
                            liczby kolorów niż REC709. Problem jednak w tym, że na 
                            rynku jest niewiele kamer zapisujących w REC.2020.<br/><br/>
                            LG nie jest pierwszym producentem odbiorników z kwantowymi 
                            kropkami. Z technologii tej korzysta Sony w serii Triluminos, 
                            a Samsung zapowiada, że podczas targów CES zaprezentuje 
                            swój pierwszy telewizor QD.<br/>
                            <span class="more">Zwiń...</span>
                        </p>
                        
                        <p class="newsauthor">
                            Autor: <span class="nauthor">Waldemar Jankowski</span>
                        </p>
                    </div>
                    
                   
                    <div class="news">
                        <h1>Telewizory z kropkami kwantowymi</h1>
                        <p class="newstime">
                            <span class="newsdate">Wstawiony: </span>
                            15:32 10-12-2014
                        </p>
                        <img src="../grafika/win10.jpg" alt="Windows 10"/>
                        
                        <p class="newsshort">
                            Microsoft nie udostępni w bieżącym miesiącu kolejnej 
                            wersji rozwojowej Windows 10. Firma przygotowuje bowiem 
                            styczniową wersję o nazwie kodowej „Awesome” (Wspaniały). 
                            Koncern twierdzi, że nazwa nie jest na wyrost, 
                            gdyż w wersji tej znajdzie się wiele nowych funkcji 
                            i narzędzi, które trafią do ostatecznej wersji Windows 10.<br/>
                            <span class="more">Czytaj więcej...</span>
                         </p>
                         <p class="newslong">
                            Microsoft nie udostępni w bieżącym miesiącu kolejnej 
                            wersji rozwojowej Windows 10. Firma przygotowuje bowiem 
                            styczniową wersję o nazwie kodowej „Awesome” (Wspaniały). 
                            Koncern twierdzi, że nazwa nie jest na wyrost, 
                            gdyż w wersji tej znajdzie się wiele nowych funkcji 
                            i narzędzi, które trafią do ostatecznej wersji Windows 10.<br/><br/>
                            Dotychczas w kolejnych udostępnionych wersjach Microsoft 
                            skupiał się przede wszystkim na udoskonaleniach 
                            graficznego interfejsu użytkownika. Firma najwyraźniej 
                            chce zatrzeć złe wrażenie po premierze Windows 8, 
                            który był krytykowany właśnie ze względu na swój interfejs.<br/><br/>
                            Jak wynika z informacji płynących z Redmond, użytkownicy 
                            najwyraźniej zaakceptowali Windows 10. Obecnie system
                            ten testuje ponad 1,5 miliona osób na całym świecie. 
                            Około 450 000 używa go każdego dnia, co sugeruje, 
                            że jest on na tyle stabilny, iż nadaje się do 
                            codziennej pracy.<br/><br/>
                            Z nieoficjalnych informacji wynika, że premiera 
                            gotowej wersji Windows 10 Customer Preview odbędzie
                            się około połowy stycznia. Wówczas przekonamy się, 
                            czy „Awesome” nie zostało użyte na wyrost.
                            <span class="more">Zwiń...</span>
                        </p>
                        
                        <p class="newsauthor">
                            Autor: <span class="nauthor">Waldemar Jankowski</span>
                        </p>
                    </div>
                   
                </div>
                
                
                
                
                
                
                
                
                <div id="footer">
                    <div class="first">
                        <h1>Odwiedź nas także na:</h1>
                        <a href="http://facebook.com"><img src="../grafika/fb.png" alt="FB"/></a>
                        <a href="http://twitter.com"><img src="../grafika/twit.png" alt="Twitter"/></a>
                        <a href="http://youtube.com"><img src="../grafika/yt.png" alt="YT"/></a>
                        <a href="http://instagram.com"><img src="../grafika/insta.png" alt="Instagram"/></a>
                        <a href="http://plus.google.com"><img src="../grafika/google.png" alt="Google +"/></a>
                        <a href="http://pinterest.com"><img src="../grafika/pint.png" alt="Pinterest"/></a>
                    </div>
                    <div class="second">
                        <h1>Sprawdź także:</h1>
                        <a href="http://kopalniawiedzy.pl/wiadomosci/technologia">Kopalnia wiedzy</a><br/>
                        <a href="http://wikipedia.pl">Wikipedia</a><br/>
                        <a href="http://elektroda.pl">Elektroda</a><br/>
                        <a href="http://chip.pl">Chip</a><br/>
                    </div>
                    <div class="third">
                        <h1>Polecamy również:</h1>
                        <a href="http://zst-tarnow.pl">ZST Tarnów</a><br/>
                        <a href="http://ezst-tarnow.pl">e-zst-tarnow.pl</a><br/>
                        <a href="https://moodle.org/?lang=pl">Moodle</a><br/>
                    </div>
                    <div class="fourth">
                        <h1>Ucz się z nami:</h1>
                        <a href="http://code.org">Koduj!</a><br/>
                        <a href="http://www.kurshtml.edu.pl/">Kurs HTML, CSS, JS</a><br/>
                        <a href="http://msdn.microsoft.com/pl-pl/library/kx37x362.aspx">C#</a><br/>
                        <a href="http://javastart.pl/">JAVA</a><br/>
                    </div>
                </div>
                <div id="copyright">© W.Jankowski 2014 All Right Reserved</div>
            </div>
            
        </div>
    </body>
</html>

