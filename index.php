<?php
session_start();
?>

<html lang="nl">
    <head>
        <title>Jay</title>
    </head>
    <body>
        <div id="container">
            <div class="upperScreen">
                <h1 class="header">Website in opbouwing</h1>
            </div>
            <div class="lowerScreen">
                <p class="text">Website moet nog verder opgebouwen worden<br><section class="text"><a href="https://snapchat.com/add/jayverrijt_0">Snapchat</a> · <a href="https://instagram.com/jayverrijt0">Instagram</a></section></p>

            </div>
        </div>
    </body>

    <style>
        * {
            margin: 0;
            font-family: Arial;
        }
        #container {
            display: block;
            height: 100%;
            width: 100%;
            border: solid 0;
            background-color: #2e3440;
            position: absolute;
            left: 0;
            top: 0;
        }

        .upperScreen {
            border: solid 0;
            display: inline-block;
            height: 40%;
            width: 100%;
            top: 0;
            position: absolute;
            left: 0;
            background-color: #2e3440;
        }
        .lowerScreen {
            border: solid 0;
            display: inline-block;
            height: 60%;
            width: 100%;
            bottom: 0;
            position: absolute;
            left: 0;
            background-color: #2e3440;
        }
        .header {
            position: relative;
            text-align: center;
            top: 70%;
            font-size: 48px;
            color: #D8Dee9;
        }
        .text {
            position: relative;
            text-align: center;
            top: 0;
            font-size: 22px;
            color: #D8Dee9;
            text-decoration: none;
        }
        .text a {
            color: #D8Dee9;
        }
    </style>
</html>
