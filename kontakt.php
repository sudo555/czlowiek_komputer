<?php 
  session_start(); 

  if (!isset($_SESSION['nazwa'])) {
    $_SESSION['msg'] = "Musisz się zalogować";
    header('location: loguj.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nazwa']);
    header("location: loguj.php");
  }
?>
<!DOCTYPE html>
<html>
<title>Kontakt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="./index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    body, html {
        height: 100%;
        background-color: black;
    }

    body, h1, h2, h3, h4, h5, h6 {
          font-family: 'Oswald', sans-serif;
    }

    .menu {
        display: none
    }


    .navbar-nav > li {
        padding-left: 20px;
        padding-right: 20px;
    }

    .navbar li:hover
    {
        background: grey;
        color: black;
    }

  
    .container-fluid {
        position: relative;
        color: white;   
    }
    .container {
        position: relative;
        color: white;   
    }

footer{
    color: white;
}
p{
    text-align: center; 
    font-size: 25px
 } 

   .content {
  width: 40%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid;

  border-radius: 0px 0px 10px 10px;
}  
</style>
<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#1">
            <img src="logopizz.png" alt="Logo" style="width: 80px;" target="blank" class="style-only" />
        </a>
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav nav-fill mr-auto">
               <li class="nav-item">
                    <a class="nav-link" style="font-size:30px" href="indeks.php">STRONA GŁÓWNA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:30px" href="onas.php">O NAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:30px" href="Menu.php">OFERTA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:30px" href="kontakt.php">KONTAKT</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php  if (isset($_SESSION['nazwa'])) : ?>
                    <a class="nav-link" style="font-size:50px" href="indeks.php?logout='1'">Wyloguj</a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php  if (isset($_SESSION['nazwa'])) : ?>
        <p style="color: white">Witaj <strong><?php echo $_SESSION['nazwa']; ?></strong></p>
    <?php endif ?>

</div>
    <br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <br>
      <div class="container border text-center">
        <br>
        <h1 style="font-size:25px">SKONTAKTUJ SIĘ Z NAMI!</h1>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Telefon: 000-111-222</p>
<p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg> E-mail: pizza@pizza.com</p>
<br>
<h1 style="font-size:25px">ODWIEDŹ NAS!</h1>
<p>ul. Włoska 55, Piza</p>
<br>
<p><strong>ZAPRASZAMY!</strong></p>
      </div>
    </div>
    <div class="col-md-8">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.4029279030738!2d10.39440831572462!3d43.722955855934856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d591a6c44e88cd%3A0x32eca9b1d554fc03!2sKrzywa%20Wie%C5%BCa%20w%20Pizie!5e0!3m2!1spl!2spl!4v1621966696849!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
<br>
<br>




<footer class="page-footer font-small blue pt-4">


  <div class="container text-center text-md-left">

  
    <div class="row">

      <div class="col-md-2 mt-md-0 mt-3">


        <img src="logopizz.png" style="width: 120px">

      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-7 mb-md-0 mb-3" style="font-size:15px">

        Informujemy, iż w celu realizacji usług dostępnych w naszym serwisie, optymalizacji jego treści, dostosowania serwisu do Państwa indywidualnych potrzeb oraz personalizacji wyświetlanych reklam w ramach zewnętrznych sieci remarketingowych korzystamy z informacji zapisanych za pomocą plików cookies na urządzeniach końcowych użytkowników. Pliki cookies można kontrolować za pomocą ustawień swojej przeglądarki internetowej. Dalsze korzystanie z naszego serwisu internetowego, bez zmiany ustawień przeglądarki internetowej oznacza, iż użytkownik akceptuje stosowanie plików cookies. Więcej informacji zawartych jest w polityce prywatności serwisu.

        

      </div>

      <div class="col-md-3 mb-md-0 mb-3">

        <h5 class="text-uppercase">Polub nas</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/">Facebook</a>
          </li>
          <li>
            <a href="https://www.instagram.com/">Instagram</a>
          </li>
          <li>
            <a href="https://twitter.com/?lang=pl">Twitter</a>
          </li>
        </ul>

      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3">Made by: Albert Fryc, Artur Słonka
  </div>

</footer>
</body>
</html>