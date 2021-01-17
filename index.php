<!DOCTYPE html>

<?php
include_once("php/code.php");

$code = new code;
$codeentier = $code->get_Code();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
      $codeentier = $code->get_Code();
      foreach($codeentier as $c)
        {
    ?>
        <input type=hidden id=validationcodephp value= <?php echo($c['nombre1']); echo($c['nombre2']); echo($c['nombre3']);?> />
    <?php
        }
    ?>
    <div class="ct" id="t1">
    <div class="ct" id="t2">
      <div class="ct" id="t3">
        <div class="ct" id="t4">
                 <div class="ct" id="t8">
                   <div class="ct" id="t9">
                      <ul id="menu">
                        <a href="#t1"><li class="icon fas fa-home" id="uno"></li></a>
                        <a href="#t2"><li class="icon fas fa-question-circle" id="dos"></li></a>
                        <a href="#t3"><li class="icon fas fa-quote-left" id="tres"></li></a>
                        <a href="#t4"><li class="icon fas fa-sort-numeric-up-alt" id="cuatro"></li></a>
                        <a href="#t8"><li class="icon fas fa-trophy" id="ocho"></li></a>
                        <a href="#t9"><li class="icon fas fa-cog" id="nueve"></li></a>
                      </ul>
                      <div class="page" id="p1">
                         <section class="icon fas fa-home"><span class="title">Escape game</span></section>
                      </div>
                      <div class="page" id="p2">
                        <section class="icon fas fa-question-circle" onclick="window.open('defi1.php', 'windoname', 'width=500, height=350, left=24, top=24'); return false;"><span class="title">Défis 1</span></section>
                      </div>
                      <div class="page" id="p3">
                        <section class="icon fas fa-quote-left" onclick="window.open('defi2.php', 'windoname', 'width=500, height=350, left=24, top=24')"><span class="title">Défis 2</span></section>
                      </div>
                      <div class="page" id="p4">
                        <section class="icon fas fa-sort-numeric-up-alt" onclick="window.open('defi3.php', 'windoname', 'width=500, height=350, left=24, top=24')"><span class="title">Défis 3</span></section>
                      </div>
                      <div class="page" id="p8">
                        <section class="icon fas fa-trophy" onclick="test_code();"><span class="title">Tester son code secret</span></section>
                      </div>
                      <div class="page" id="p9">
                        <section class="icon fas fa-cog" onclick="location.href='login.php'"><span class="title">Admin</span></section>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
        </div>
  </body>
</html>
