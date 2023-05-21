<?php

$id = '1fbfPhUc3brlOMU_aaVwUsXnRItLlJO4emw6id4olG-Y';
$gid = 0;
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/'.$id.'/export?format=csv&gid='.$gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div include-html="title.html" id="title_file"></div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/button.css" rel="stylesheet" type="text/css">
    <script src="js/button.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
<script src="js/include-html.min.js"></script>

  </head>
  <body>
    <div include-html="header.html" id="header_file"></div>
    
    <div class="container-fluid" style="margin-top: 10px;">

      <div id="center" class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background-color: white !important; border: 4px double black;">
          <div class="col-md-12 px-0">
            <h1 class="display-4 font-italic" align="center" style="color: black;">Почему выбирают нас?</h1>
            <p class="lead my-3" align="center" style="color: black;">Во времена Кёнигсберга в этом районе размещались знаменитые шпайхеры Ластадий, фотографиями которых вдохновлялись архитекторы, создавая фасад здания.

Спокойный минималистичный интерьер в теплой песчаной гамме дает отсылку к дюнам на побережье Балтийского моря. Натуральный дизайн и мягкие приглушенные тона интерьеров Апарт-отеля «Lastadie» создают неповторимую атмосферу сочетания стиля и комфорта.</p>
            <p class="lead mb-0" align="center" style="color: black;"><a href="https://www.python.org" class="text-black font-weight-bold">Ссылка на Python</a></p>
          </div>
        </div>
      </div>
      



      <div class="container-fluid" style="margin-top: 10px; margin-bottom: 10px;">
     

        <table>

       <?php
        $i = 0;
        foreach($array as $arr){
            $i++;
            $html = '<tr>';
            $html .= '<td scope = "row">'.$i.'</td>';
            foreach($arr as $val){
                $html .= '<td scope = "row">'.$val.'</td>';
            }
            $html .= '</tr>';

        }
            echo $html;
        ?>

    </table>



        
    
        
      </div>



   
 
    

<div include-html="../footer.html" id="footer_file"></div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">В начало</button>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
      
      <!-- подключаем для работы Google Charts -->
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script src="js/jquery-3.6.0.min.js"></script>
      
      <!-- скрипт с нашим кодом -->
      <script type="text/javascript" src="main.js"></script>
   
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




</div>
