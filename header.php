<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
include "userconn.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>DOERS</title>

    <!-- CSS FILES -->

    <link rel="stylesheet" href="css/login.css">
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    <!--

TemplateMo 567 DOERS

https://templatemo.com/tm-567-nomad-force

-->
    <!--signup password eye css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--Number input arrow hide in signup form-->
    <style>
        input[type="number"] {
            -moz-appearance: textfield;
        }

        input[type="number"]:hover,
        input[type="number"]:focus {
            -moz-appearance: number-input;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }
    </style>

</head>

<body>

    <main>

       