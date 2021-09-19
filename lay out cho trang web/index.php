<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Using require in php</title>
   <style>
       div.container {
           width: 100%;
           border: 1px solid gray;
       }

       header, footer {
           padding: 1em;
           color: white;
           background-color: black;
           clear: left;
           text-align: center;
       }
       nav {
           float: left;
           max-width: 160px;
           margin: 0;
           padding: 1em;
       }

       nav ul {
           list-style-type: none;
           padding: 0;
       }

       nav ul a {
           text-decoration: none;
       }
       article {
           margin-left: 170px;
           border-left: 1px solid gray;
           padding: 1em;
           overflow: hidden;
       }

   </style>
</head>
<body>
<div class="container">
    <header><?php require "header.php"; ?></header>
    <nav><?php require "nav.php"; ?></nav>
    <article><?php require "content.php"; ?></article>
    <footer><?php require "footter.php"; ?></footer>
</div>
</body>
</html>
