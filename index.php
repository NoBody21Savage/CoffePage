<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chvj</title>
    <link rel="stylesheet" href="style.css">

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
            <a href="">Strona główna</a>
            <a href="">Zamówienia</a>
            <a href="">Gatunki kawy</a>
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


    </main>

    <footer>

    </footer>

</body>
</html>