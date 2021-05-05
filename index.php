<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&display=swap" rel="stylesheet">

    <style>
        section.jumbotron {
            padding: 6rem;
            background-image: url(../Asset/image/banner2.jpg);
            background-size: 100%;
            text-align: justify;

        }

        section.atas {
            padding: 5rem;
            background-color: #000000;
        }

        h3 {
            font-family: 'Krona One', sans-serif;
        }

        h2 {
            font-family: 'Antonio', sans-serif;
        }

        h5 {
            font-family: 'Antonio', sans-serif;
        }

        h1 {
            font-family: 'Krona One', sans-serif;
        }

        h4 {
            font-family: 'Krona One', sans-serif;
        }

        p#jumbotron {
            font-family: 'Orelega One', cursive;
        }

        button {
            font-family: 'PT Sans', sans-serif;
        }

        a.btn {
            border-radius: 10px;
        }

        a.nav-link {
            color : white;
        }

        footer.jumbotron {
            padding: 2rem 1rem;
            background-color: black;
        }

        #tiga {
            color: white;
        }

        .iklan1 {
            width: 100%;
        }

        .iklan2 {
            width: 100%;
        }

        .iklan3 {
            width: 100%;
        }

        a {
            color: red;
        }

        span {
            color: red;
        }

        .timeline {
            width: 98%;
        }

        ul.awal {
            position: relative;
            display: flex;
        }

        ul.awal li {
            list-style: none;
        }

        ul.awal li a {
            display: inline-block;
            color: gray;
            text-decoration: none;
        }

        .isikonten p {
            width: 90%;
            text-align: justify;
            font-family: 'Antonio', sans-serif;
        }

        .timeline p {
            text-align: justify;
        }

        footer {
            background-color: #000000;
        }

        .isikontenn {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: justify;
            width: 100%;
        }

        .span {
            color: blue;
        }

        .col-sm-4 {
            margin-top: 2rem;
        }
    </style>
  </head>
  <body>

    <!-- include navbar -->
    <?php
        if(empty($_GET['menu'])){
            include "src/home.php";
        }
        else if($_GET['menu']=='1') {
            include "src/kabar.php";
        }
        else if($_GET['menu']=='2') {
            include "src/car.php";
        }
        else if($_GET['menu']=='3') {
            include "src/beritabalap.php";
        }
        else if($_GET['menu']=='4') {
            include "src/carlife.php";
        }
        else if($_GET['menu']=='5') {
            include "src/beritaguide.php";
        }
        else if($_GET['menu']=='6') {
            include "src/galeri.php";
        }
        else if($_GET['menu']=='7') {
            include "src/home.php";
        }
    ?>
    <!-- akhir include -->

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>