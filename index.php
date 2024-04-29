<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kawiarnia";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="logo.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="mojHeader">
        <div class="kawalogo">
            <img id="kawal" src="logo.png" alt="logo.png">
        </div>
    
    <script>
        window.onscroll = function() {
            lepkaFunkcja();
        };

        var header = document.getElementById("mojHeader");
        var lepki = header.offsetTop;

        function lepkaFunkcja() {
            if (window.pageYOffset > lepki) {
                header.classList.add("lepki");
            } else {
                 header.classList.remove("lepki");
            }
        }
    </script>

    <div class="menu">   
        <div class="kontener" onclick="funkcja(this)">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
        </div>
        <div class="menu-kontent">
            <a href="index.php">Strona główna</a>
            <a href="Zamowienia/index2.php">Zamówienia</a>
        </div>
    </div>
    </header>

        <script>
            function funkcja(x) {
                x.classList.toggle("change");
                var menuContent = document.querySelector('.menu-kontent');
                
                if(menuContent.style.display === "block") {
                    menuContent.style.display = "none";
                } else {
                menuContent.style.display = "block";
                }
            }
        </script>

    <main>
        <section class="naglowek">
            <div class="naglowekkawy">
                <h1>Sklep z kawą</h1>
            </div>
        </section>

        <section class="kawaziarna">
            <div class="kawaz">
                <img id="kawaz2" src="kawa.png" alt="kawa.png">
                <img id="kawaz3" src="kawa.png" alt="kawa.png">
                <img id="kawaz4" src="kawa.png" alt="kawa.png">
            </div>

            <div class="oferta">
                <h3>Nasza aktualna oferta</h3>
                <ul>
                    <li>Arabica</li>
                    <li>Robusta</li>
                    <li>Bezkofeinowa</li>
                    <li>Zielona</li>
                </ul>
            </div>
        </section>

        <section class="tabelacenkaw">
            <table>
                <tr>
                    <th>Arabica</th>
                    <th>Robusta</th>
                    <th>Bezkofeinowa</th>
                    <th>Zielona</th>
                </tr>
                <tr>
                    <td>100ml</td>
                    <td>100ml</td>
                    <td>100ml</td>
                    <td>100ml</td>
                </tr>
                <tr>   
                    <td>20.00PLN</td>
                    <td>15.00PLN</td>
                    <td>25.00PLN</td>
                    <td>30.00PLN</td>
                </tr>
            </table>
        </section>

        <section class="formularzkaw">
            <form action="index.php" method="POST">
                <label for="typkawy">Typ Kawy</label>
                <select class="custom-select" name="typkawy" id="typkawy">
                    <option value="Arabica" name="arabica" id="arabica">Arabica</option>
                    <option value="Robusta" name="robusta" id="robusta">Robusta</option>
                    <option value="Bezkofeinowa" name="bezkofeinowa" id="bezkofeinowa">Bezkofeinowa</option>
                    <option value="Zielona" name="zielona" id="zielona">Zielona</option>
                </select>

                <label for="liczbaml">Ile chciałbyś wypić kawy (Proszę wpisać w ml)</label>
                <input type="number" name="liczbaml" min="0">

                <button id="btn" name="btn">Koszt</button>

                <div class="obliczenia">
                    <?php 
                        if (isset($_POST['btn'])) {
                            $typKawy = $_POST['typkawy'];
                            $iloscMl = $_POST['liczbaml'];

                            $ceny = [
                                'Arabica' => 20.00,
                                'Robusta' => 15.00,
                                'Bezkofeinowa' => 25.00,
                                'Zielona' => 30.00
                            ];

                            $cena = $ceny[$typKawy] * ($iloscMl / 100);

                            echo "Cena kawy ($iloscMl ml) $typKawy:&nbsp;<strong>$cena PLN</strong>";
                        }
                    ?>
                </div>
            </form>

        </section>

        <section class="mlekoobraz">

            <div class="spot">
                <h1 id="kawka">Poczuj smak naszej kawy!</h1>
            </div>
            
            <div class="mleko">
                <img id="mleko" src="mleko.png" alt="mleko.png">
                <img id="mleko2" src="mleko.png" alt="mleko.png">
            </div>
        </section>

        <section class="kawaopis">
            <div class="zdjeciawrapper">
                <div class="zdjeciekawa">
                        <img id="kawu" src="Arabica.jpg" alt="Arabica">
                    <div class="zdjeciekawa__kontent">
                        <p class="zdjeciekawa__tytul">Arabica</p>
                        <p class="zdjeciekawa__opis">Posiada podłużne ziarna, które po wypaleniu posiadają delikatny, pozbawiony goryczki, smak. Cechą charakterystyczną jest delikatna kwasowość oraz niewielka zawartość kofeiny.</p>
                    </div>
                 </div>
                 <div class="zdjeciekawa">
                        <img id="kawu" src="robusta.jpg" alt="Robusta">
                    <div class="zdjeciekawa__kontent">
                        <p class="zdjeciekawa__tytul">Robusta</p>
                        <p class="zdjeciekawa__opis">Robusta zawiera więcej kofeiny niż Arabika i jest ogólnie bardziej ziemista, gorzka i kwaśniejsza. Uprawia się ją na południu, raczej na nizinach, ponieważ do zbiorów potrzebuje więcej ciepła.</p>
                    </div>
                 </div>
                 <div class="zdjeciekawa">
                        <img id="kawu" src="bezkofeinowa.jpg" alt="Bezkofeinowa">
                    <div class="zdjeciekawa__kontent">
                        <p class="zdjeciekawa__tytul">Bezkofeinowa</p>
                        <p class="zdjeciekawa__opis">Kawa bezkofeinowa zawiera minimalną ilość kofeiny, która jest znacznie niższa niż w tradycyjnej kawie do zaledwie około 0,10%. Dlatego nie powinna mieć znaczącego wpływu na podnoszenie ciśnienia krwi.</p>
                    </div>
                 </div>
                 <div class="zdjeciekawa">
                        <img id="kawu" src="zielona.jpg" alt="Zielona">
                    <div class="zdjeciekawa__kontent">
                        <p class="zdjeciekawa__tytul">Kawa zielona</p>
                        <p class="zdjeciekawa__opis">Jej ziarna nie zostały poddane procesowi palenia, a co za tym idzie ziarna zachowują cenny kwas chlorogenowy, który jest składnikiem wielu produktów wspomagających odchudzanie.</p>
                    </div>
                 </div>
            </div>
        
        </section>


    </main>

    <footer>
            <h3>Autor:00000000000000000</h3>
    </footer>

</body>
</html>