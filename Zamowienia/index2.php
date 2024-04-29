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
    <title>Zamówienia</title>
    <link rel="stylesheet" href="style2.css">
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
                <a href="/xd/index.php">Strona główna</a>
                <a href="index2.php">Zamówienia</a>
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
        <section class="zamowienie">
            <div class="zdjeciakaw">
                <img id="kawu" src="kawa.png" alt="kawa">
                <img id="kawu2" src="kawa.png" alt="kawa">
            </div>    
                <div class="zamowienie-kontent">
                    
        
                    <form action="index2.php" method="POST">
                        <h1>Złóż zamowienie!</h1>
        
                        <label for="typkawy">Typ Kawy</label>
                        <select name="typkawy" id="typkawy">
                            <option value="Arabica">Arabica</option>
                            <option value="Robusta">Robusta</option>
                            <option value="Bezkofeinowa">Bezkofeinowa</option>
                            <option value="Zielona">Zielona</option>
                        </select>
        
                        <label for="iloscml">Ilość ML</label>
                        <input type="number" name="iloscml" min="0">

                        <button id="btn" name="btn">Złóż zamówienie</button>

                    </form>

                </div>
                <div class="podsumowanie">
                <?php
                    if (isset($_POST['btn'])) {
                        $typKawy = $_POST["typkawy"];
                        $iloscMl = $_POST["iloscml"];

                        $ceny = [
                            'Arabica' => 20.00,
                            'Robusta' => 15.00,
                            'Bezkofeinowa' => 25.00,
                            'Zielona' => 30.00
                        ];

                        $cena = $ceny[$typKawy] * ($iloscMl / 100);

                        $sql = "INSERT INTO zamowienia (typ_kawy, koszt) VALUES ('$typKawy', '$cena')";

                        if (mysqli_query($conn, $sql)) {
                            echo "Zamówienie zapisane pomyślnie!";
                        } else {
                            echo "Błąd: " . $sql . "<br>" . mysqli_error($conn);
                        }

                        mysqli_close($conn); // Przenieś tutaj zamknięcie połączenia
                    }
                ?>

                </div>
            </section>
    </main>


    <footer>
        <h3>Autor: 00000000000000</h3>
    </footer>
    
</body>
</html>