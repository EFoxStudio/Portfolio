<!DOCTYPE html>
<html lang="pl">

<head>

    <title>EFox - Jan Walicki</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="Programista, projektant stron internetowych i aplikacji mobilnych | Programmer, web and mobile apps developer">
    <meta name="keywords" content="HTML, CSS, JavaScript, Programmer, Websites, Programista, Strony internetowe">
    <meta name="author" content="Jan Walicki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">


</head>

<body>

    <div class="overlay">
        <div id="Currentpage">
            <a id="currentPageIndicator"></a>
            <a></a>
            <a></a>
            <a></a>
        </div>
    </div>

    <main id="MainPage" onscroll="MainScrolled()">
        <div id="Top">

            <header>
                <a href="https://efox.com.pl">EFox</a>
                <a href="#Services">Usługi</a>
                <a href="#Projects">Projekty</a>
                <a href="#About">O mnie</a>
            </header>

            <div>
                <img src="img/logo.png" alt="logo">
                <div>
                    <h1>EFox</h1>
                    <h2>Jan Walicki</h2>
                </div>
            </div>
            <div id="ScrollDown">
                <div>
                    SCROLL DOWN
                </div>
                <div>
                    <hr>
                </div>
            </div>
        </div>


        <div class="block" id="About">
            <div><img src="img/ja.jpg" alt="ja">
                <div></div>
                <div></div>
            </div>
            <div class="mainPageText">
                <div>
                    <h2>O mnie</h2>
                </div>
                <div></div>
                <div></div>
                <div>
                    <p>Jestem programistą. Najbardziej lubię język C#.<br>Trenuję wspinaczkę, interesuję się kosmosem i
                        robotyką
                    </p>
                </div>
                <!-- <a href="pages/about.html">Więcej</a> -->
            </div>
        </div>

        <div class="block" id="Projects">
            <div id="ProjectsCards">
                <!-- arrows -->
                <div>
                    <img src="img/arrow.png" alt="arrow" onclick="ScrollLeft()">
                    <img src="img/arrow.png" alt="arrow" onclick="ScrollRight()">
                </div>
                <!-- cards -->
                <div>
                    <h3>Notatnik</h3>
                    <p>Strona internetowa i aplikacja mobilna</p>
                    <a href="https://notatnik.projectsclassf.pl">
                        <img src="img/notatnik.png" alt="notatnik">
                    </a>
                </div>
                <div>
                    <h3>Strona na zlecenie</h3>
                    <p>Strona internetowa</p>
                    <a href="http://www.psycholog-psychoterapeuta.eu">
                        <img src="img/psycholog.png" alt="psycholog">
                    </a>
                </div>
                <div>
                    <h3>Knife</h3>
                    <p>Gra na telefon</p>
                    <a
                        href="https://play.google.com/store/apps/details?id=knife.EFoxStudio.com.unity.template.mobile2D">
                        <img src="img/knife.png" alt="knife">
                    </a>
                </div>

            </div>
            <div class="mainPageText">
                <div>
                    <h2>Moje projekty</h2>
                </div>
                <div></div>
                <div></div>
                <div>
                    <p>Przewiń w lewo lub w prawo.<br> Kliknij na wybrany projekt aby zobaczyć więcej informacji
                    </p>
                </div>
            </div>
        </div>

        <div class="block" id="Services">
            <div>
                <form method="post">

                    <label for="name">Twoje Imię i Nazwisko</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Twój e-mail</label>
                    <input type="text" name="email" id="email" required>

                    <label for="topic">Temat</label>
                    <input type="text" name="topic" id="topic" required>

                    <label for="mess">Wiadomość</label>
                    <textarea id="mess" name="mess" rows="10" cols="50" required></textarea>

                    <input type="submit" name="submit" value="Wyślij">

                </form>
            </div>
            <div class="mainPageText">
                <div>
                    <h2>Usługi</h2>
                </div>
                <div></div>
                <div></div>
                <div>
                    <p>Jeśli potrzebujesz strony internetowej napisz do mnie e-mail. Więcj szczegółów znajdziesz pod
                        przyciskiem usługi.
                    </p>
                </div>
                <!-- <a href="pages/services.html">Usługi</a> -->
            </div>
        </div>

        </div>

    </main>


    <script src="main.js"></script>

    <?php

        if(isset($_POST['submit']))
        {
            require_once('class.phpmailer.php');    //dodanie klasy phpmailer
            require_once('class.smtp.php');    //dodanie klasy smtp
            $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
            $mail->From = "SMTP@efox.com.pl";    //adres e-mail użyty do wysyłania wiadomości
            $mail->FromName = $_POST['name'];    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
            $mail->AddReplyTo($_POST['email'], $_POST['name']); //adres e-mail nadawcy oraz jego nazwa
                                                        //w polu "Odpowiedz do"  
            $mail->Host = "smtp.webio.pl";    //adres serwera SMTP wysyłającego e-mail
            $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
            $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
            $mail->Username = "SMTP@efox.com.pl";    //nazwa użytkownika do skrzynki e-mail
            $mail->Password = "853MW2z2x!1";    //hasło użytkownika do skrzynki e-mail
            $mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
            $mail->Subject = $_POST['topic'];    //Temat wiadomości, można stosować zmienne i znaczniki HTML
            $mail->Body = $_POST['mess'];    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
            $mail->AddAddress ("elementalsfox@gmail.com","EFox");    //adres skrzynki e-mail oraz nazwa
                                                //adresata, do którego trafi wiadomość
        
        } 


    ?>


</body>

</html>