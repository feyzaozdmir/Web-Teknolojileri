<!doctype html>
<html lang="en"> </html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Style Css-->
    <link href="main.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">



    <title>G201210402</title>
</head>
<body>
    <div class="header-background">
        <div id="nav" class="sticky-nav">
            <nav class="navbar  navbar-expand-lg navbar-dark" style="background-color:rgba(68, 131, 76, 0.3);">
                <div class="container">
                    <a class="navbar-brand" href="#">Web Teknolojileri Projesi</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
                                <div class="line"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Hakkımda</a>
                                <div class="line"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="favthings.html">İlgi Alanlarım</a>
                                <div class="line"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="city.html">Şehrim</a>
                                <div class="line"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="historical.html">Mirasımız</a>
                                <div class="line"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">İletişim</a>
                                <div class="line"></div>
                            </li>
                            <li>
                                <a class="btn" href="login.php" role="button">Giriş Yap</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>
        <h1 class="heading">Giriş</h1>
        <main>
            <div class="container">
                <?php
                    include("kullanici.php");
                    if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
                    {
                        $_SESSION["login"] = "true";
                        $_SESSION["user"] = $user;
                        $_SESSION["pass"] = $pass;

                        echo(" HOŞGELDİNİZ !!");
                    }
                    else{
                        echo "Kullancı Adı veya Şifre Yanlış.<br>";
                        echo "!!!TEKRAR DENEYİN!!!";
                        header("Refresh:1 ; url=login.php");
                    }
                ?>    
            </div>
        </main>

    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>    