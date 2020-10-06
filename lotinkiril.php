<!-- 
Bu skript matnlarni lotindan kirilga yoki kirilldan lotiga o'tkazishga yordam beradi.
///////////////////////////////////////
//                                   //
// Created by Tolib Abdurakhmonov    //
// E-mail: t.abdurakhmoov@mail.ru    //
// Tel: +99891-512-63-63             //
//                                   //
///////////////////////////////////////                                  
 -->


<!-- Dizayn qismini yozib olamiz: -->
<style>
form {
    text-align: center;
    border: 1px solid green;
    border-radius: 5px;
    padding: 5px;
    margin: 10px;
    background-color:  #f0f7eefb;
}
textarea {
    width: 45%;
    height: 60%;
    border: 2px black solid;
    border-radius: 5px;
    background-color:  #faf8f8fb;
    margin:10px 
}

.button{
    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;  
}
.button1 {
  background-color:  #d7fad8; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
  }
</style>

<?php

// Kiril va lotinga o'tkazish amallari

if (isset($_POST['submit1'])) {
    $text = $_POST['text1'];
    $text = str_replace("Sh","Ш",$text);
    $text = str_replace("Ch","Ч",$text);
    $text = str_replace("Yo","Ё",$text);
    $text = str_replace("Yu","Ю",$text);
    $text = str_replace("Ya","Я",$text);
    $text = str_replace("sh","ш",$text);
    $text = str_replace("ch","ч",$text);
    $text = str_replace("yo","ё",$text);
    $text = str_replace("yu","ю",$text);
    $text = str_replace("ya","я",$text);
    $text = str_replace("ye","е",$text);
    $text = str_replace("Ye","Е",$text);
    $text = str_replace("ts","ц",$text);
    $text = str_replace("oʻ","ў",$text);
    $text = str_replace("gʻ","ғ",$text);
    $text = str_replace("o'","ў",$text);
    $text = str_replace("g'","ғ",$text);
    $text = str_replace("a","а",$text);
    $text = str_replace("b","б",$text);
    $text = str_replace("d","д",$text);
    $text = str_replace("e","е",$text);
    $text = str_replace("f","ф",$text);
    $text = str_replace("g","г",$text);
    $text = str_replace("h","ҳ",$text);
    $text = str_replace("i","и",$text);
    $text = str_replace("j","ж",$text);
    $text = str_replace("k","к",$text);
    $text = str_replace("l","л",$text);
    $text = str_replace("m","м",$text);
    $text = str_replace("n","н",$text);
    $text = str_replace("o","о",$text);
    $text = str_replace("p","п",$text);
    $text = str_replace("q","қ",$text);
    $text = str_replace("r","р",$text);
    $text = str_replace("s","с",$text);
    $text = str_replace("t","т",$text);
    $text = str_replace("u","у",$text);
    $text = str_replace("v","в",$text);
    $text = str_replace("x","х",$text);
    $text = str_replace("y","й",$text);
    $text = str_replace("z","з",$text);
    $text = str_replace("ʼ","ъ",$text);

    $text = str_replace("Oʻ","Ў",$text);
    $text = str_replace("Gʻ","Ғ",$text);
    $text = str_replace("A","А",$text);
    $text = str_replace("B","Б",$text);
    $text = str_replace("D","Д",$text);
    $text = str_replace("E","Е",$text);
    $text = str_replace("F","Ф",$text);
    $text = str_replace("G","Г",$text);
    $text = str_replace("H","Ҳ",$text);
    $text = str_replace("I","И",$text);
    $text = str_replace("J","Ж",$text);
    $text = str_replace("K","К",$text);
    $text = str_replace("L","Л",$text);
    $text = str_replace("M","М",$text);
    $text = str_replace("N","Н",$text);
    $text = str_replace("O","О",$text);
    $text = str_replace("P","П",$text);
    $text = str_replace("Q","Қ",$text);
    $text = str_replace("R","Р",$text);
    $text = str_replace("S","С",$text);
    $text = str_replace("T","Т",$text);
    $text = str_replace("U","У",$text);
    $text = str_replace("V","В",$text);
    $text = str_replace("X","Х",$text);
    $text = str_replace("Y","Й",$text);
    $text = str_replace("Z","З",$text);

    
}
elseif (isset($_POST['submit2'])){

    $text = $_POST['text2'];
    $text = str_replace("ш","sh",$text);
    $text = str_replace("ц","ts",$text);
    $text = str_replace("ч","ch",$text);
    $text = str_replace("ё","yo",$text);
    $text = str_replace("ю","yu",$text);
    $text = str_replace("я","ya",$text);
    $text = str_replace("а","a",$text);
    $text = str_replace("б","b",$text);
    $text = str_replace("д","d",$text);
    $text = str_replace("е","e",$text);
    $text = str_replace("ф","f",$text);
    $text = str_replace("г","g",$text);
    $text = str_replace("ҳ","h",$text);
    $text = str_replace("и","i",$text);
    $text = str_replace("ж","j",$text);
    $text = str_replace("к","k",$text);
    $text = str_replace("л","l",$text);
    $text = str_replace("м","m",$text);
    $text = str_replace("н","n",$text);
    $text = str_replace("о","o",$text);
    $text = str_replace("п","p",$text);
    $text = str_replace("қ","q",$text);
    $text = str_replace("р","r",$text);
    $text = str_replace("с","s",$text);
    $text = str_replace("т","t",$text);
    $text = str_replace("у","u",$text);
    $text = str_replace("в","v",$text);
    $text = str_replace("х","x",$text);
    $text = str_replace("й","y",$text);
    $text = str_replace("з","z",$text);
    $text = str_replace("ў","oʻ",$text);
    $text = str_replace("ғ","gʻ",$text);
    $text = str_replace("ъ","ʼ",$text);

    $text = str_replace("Ш","Sh",$text);
    $text = str_replace("Ц","S",$text);
    $text = str_replace("Ч","Ch",$text);
    $text = str_replace("Ё","Yo",$text);
    $text = str_replace("Ю","Yu",$text);
    $text = str_replace("Я","Ya",$text);
    $text = str_replace("А","A",$text);
    $text = str_replace("Б","B",$text);
    $text = str_replace("Д","D",$text);
    $text = str_replace("Е","E",$text);
    $text = str_replace("Ф","F",$text);
    $text = str_replace("Г","G",$text);
    $text = str_replace("Ҳ","H",$text);
    $text = str_replace("И","I",$text);
    $text = str_replace("Ж","J",$text);
    $text = str_replace("К","K",$text);
    $text = str_replace("Л","L",$text);
    $text = str_replace("М","M",$text);
    $text = str_replace("Н","N",$text);
    $text = str_replace("О","O",$text);
    $text = str_replace("П","P",$text);
    $text = str_replace("Қ","Q",$text);
    $text = str_replace("Р","R",$text);
    $text = str_replace("С","S",$text);
    $text = str_replace("Т","T",$text);
    $text = str_replace("У","U",$text);
    $text = str_replace("В","V",$text);
    $text = str_replace("Х","X",$text);
    $text = str_replace("Й","Y",$text);
    $text = str_replace("З","Z",$text);
    $text = str_replace("Ў","Oʻ",$text);
    $text = str_replace("Ғ","Gʻ",$text);
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title> Kiril-Lotin tarjimon </title>
</head>
<body>
<form method="POST">
<h2>Matnni kiriting</h2>
    
    <textarea type="text", name="text1", placeholder="Matnni kiriting"><?php 
    if(isset($_POST['submit1']) or isset($_POST['submit2']) ){
     echo $_POST['text1'];   
    } ?>
    </textarea>
    <textarea type="text", name="text2", placeholder="Matnni kiriting">
    <?php 
    if(isset($_POST['submit1']) or isset($_POST['submit2']) ){
     echo $text;   
    }
    ?>
    </textarea>
    <br><br>
    <button class="button button1" type="submit", name="submit1">Kirillga o'tkazish</button>
    <button class="button button1" type="submit", name="submit2">Lotinga o'tkazish</button>
    <br>
   

</form>
</body>
</html>







