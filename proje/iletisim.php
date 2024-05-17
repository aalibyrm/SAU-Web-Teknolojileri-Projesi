<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>İletişim</title>
    <style>
        
        @media(max-width:576px) {
            #iletisimPHP{
            margin-top:50%;
        }
        } 

        #pTablo{
            padding: 0;
            margin: 0;
        }

    </style>
</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand " href=index.html>Ali Bayram</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href=egitim.html>Eğitim-CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=sehrim.html>Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgiAlan.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link active text-white" id="login">Giriş
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--NAVBAR-->

    <!-- CONTENT -->

    <div class="container bg-light border rounded shadow-sm py-3 py-md-5" id="iletisimPHP">
        <h1 class="text-center">Gelen Bilgiler</h1>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>İsminiz:</td>
                    <td>
                    <p class="text-end" id="pTablo"><?php echo $_POST['fullname'];?></p>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><p class="text-end" id="pTablo">
                    <?php
                    echo $_POST['email'];
                    ?>
                    </p></td>
                </tr>
                <tr>
                    <td>Cinsiyetiniz:</td>
                    <td><p class="text-end" id="pTablo">
                    <?php
                        if(isset($_POST["cinsiyetRadio"])) {
                        $cinsiyet = $_POST["cinsiyetRadio"];
                        echo "$cinsiyet";
                    }
                    ?>
                    </p></td>
                </tr>
                <tr>
                    <td>Mesajınız:</td>
                    <td><p class="text-end" id="pTablo">
                    <?php
                    echo $_POST['mesaj'];
                    ?>
                    </p></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- CONTENT -->

    <!-- FOOTER -->
    <footer class="py-3 text-center clr" id="footer">
        <p style="color: darkblue;">Web-Teknolojileri-Projesi Ali Bayram 2024</p>
        <p>
            <a href="https://github.com/aalibyrm" class="Link"><i class="fab fa-github" id="icon1"></i>
                GitHub</a>
            <a href="https://www.instagram.com/aalibyrm/" class="Link"><i class="fa-brands fa-instagram" id="icon1"></i>
                Instagram</a>
            <a href="https://www.linkedin.com/in/ali-bayram-444165285/" class="Link"><i class="fa-brands fa-linkedin"
                    id="icon1"></i> Linkedin</a>
        </p>
    </footer>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>
