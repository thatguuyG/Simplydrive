<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Simplydrive')); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
    <style>
        html,
        body {
            font-family: 'Hind', sans-serif;
            margin: 0;
            padding: 0;
            width: auto;
            height: 100%;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        h3 {
            text-align: center;
            font-weight: 400;
            margin-bottom: 0;
        }
        
        .carousel-wrapper {
            position: relative;
            width: auto;
            height: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%);
            box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
            overflow: hidden;
        }
        
        .carousel-wrapper .carousel {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            height: auto;
        }
        
        .carousel-wrapper .carousel .carousel-cell {
            padding: 10px;
            background-color: #FFFFFF;
            width: 20%;
            height: auto;
            min-width: 120px;
            margin: 0 20px;
            transition: transform 500ms ease;
        }
        
        .carousel-wrapper .carousel .carousel-cell .more {
            display: block;
            opacity: 0;
            margin: 5px 0 15px 0;
            text-align: center;
            font-size: 10px;
            color: #CFCFCF;
            text-decoration: none;
            transition: opacity 300ms ease;
        }
        
        .carousel-wrapper .carousel .carousel-cell .more:hover,
        .carousel-wrapper .carousel .carousel-cell .more:active,
        .carousel-wrapper .carousel .carousel-cell .more:visited,
        .carousel-wrapper .carousel .carousel-cell .more:focus {
            color: #CFCFCF;
            text-decoration: none;
        }
        
        .carousel-wrapper .carousel .carousel-cell .line {
            position: absolute;
            width: 2px;
            height: 0;
            background-color: black;
            left: 50%;
            margin: 5px 0 0 -1px;
            transition: height 300ms ease;
            display: block;
        }
        
        .carousel-wrapper .carousel .carousel-cell .price {
            position: absolute;
            font-weight: 700;
            margin: 45px auto 0 auto;
            left: 50%;
            transform: translate(-50%);
            opacity: 0;
            transition: opacity 300ms ease 300ms;
        }
        
        .carousel-wrapper .carousel .carousel-cell .price sup {
            top: 2px;
            position: absolute;
        }
        
        .carousel-wrapper .carousel .carousel-cell.is-selected {
            transform: scale(1.2);
        }
        
        .carousel-wrapper .carousel .carousel-cell.is-selected .line {
            height: 35px;
        }
        
        .carousel-wrapper .carousel .carousel-cell.is-selected .price,
        .carousel-wrapper .carousel .carousel-cell.is-selected .more {
            opacity: 1;
        }
        
        .carousel-wrapper .flickity-page-dots {
            display: none;
        }
        
        .carousel-wrapper .flickity-viewport,
        .carousel-wrapper .flickity-slider {
            overflow: visible;
        }
        
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            /* Could be more or less, depending on screen size */
        }
        /* The Close Button */
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-left: 320px;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Simplydrive</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Logout</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn1");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn2");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn3");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html><?php /**PATH C:\xampp\htdocs\simplydrive\resources\views/home_layouts/app.blade.php ENDPATH**/ ?>