<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SKIMP</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">


   <link href='https://fonts.googleapis.com/css?family=Poiret+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>


     <header>

    
          <?php 
          include "menu.inc.php";
          ?>

    </header>


    <div id="services_page">
      <div class="container">
        <h1>Наши услуги</h1>

        <div class="container">
         <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="service serv1">
            <a href="polygraphy.html">
              <div class="s_icon icon1">
                <img class="img-responsive" src="img/icon/book.png" alt="скимп" />
                <p>Полиграфическая продукция</p>
              </div>

            </a>
          </div>
        </div>
        <div class="text col-md-6 col-sm-6 col-xs-12">
         <p>  Полиграфическая продукция на сегодняшний день достаточно широко используется в бизнесе. При правильном дизайне и высоком качестве данная продукция способна вырастить укрепить известность и популярность Вашей компании.  </p> 
         
         <div class="links">
           <a href="">Блокноты</a><a href="">Буклеты</a><a href="">Журналы</a><a href="">Календари</a><a href="">Каталоги</a><a href="">Постеры</a>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="col-md-6 col-sm-6 col-xs-12">

         <div class="service serv3">
           <a href="lfp.html"> <div class="s_icon icon3">
            <img src="img/icon/signboard.png" alt="скимп" />
            <p>Широкоформатная печать</p>
          </div>
        </a>
      </div>
    </div>

    <div class="text col-md-6 col-sm-6 col-xs-12">
     <p> На сегодняшний день широкоформатная печать стала одним из эффективных способов донесения информации к широкой аудитории. Благодаря разнообразию материалов для широкоформатной печати ее приминение становится очень широким - бигборды, банера, ситилайты, витрины магазинов, реклама на транспорте.</p> 

     <div class="links">
      <a href="lfp.html">Баннеры</a><a href="lfp.html">Борды</a><a href="lfp.html">Наклейки</a><a href="lfp.html">Ситилайты</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="col-md-6 col-sm-6 col-xs-12">
   <div class="service serv4">
     <a href="digital.html"> 
       <div class="s_icon icon4">
        <img class="img-responsive" src="img/icon/visit.png" alt="" />
        <p>Цифровая печать</p>
      </div>
    </a>
  </div>
</div>

<div class="text col-md-6 col-sm-6 col-xs-12">
 <p>Цифровая печать – это современный и надежный способ, который отличается широкими технологическими возможностями. Основной сферой применения цифровой печати является производство визиток, листовок, брошюр и прочей рекламной продукции, различных представительских материалов.</p> 

 <div class="links">
  <a href="digital.html">Бланки</a><a href="digital.html">Визитки</a><a href="digital.html">Листовки</a><a href="digital.html">Флаера</a>
</div>
</div>
</div>
<div class="container">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="service serv5">
     <a href="corp.html">
       <div class="s_icon icon5">
        <img src="img/icon/corp.png" alt="..." />
        <p>Корпоративная продукция</p>
      </div>
    </a>
  </div>
</div>

<div class="text col-md-6 col-sm-6 col-xs-12">
 <p>Корпоративная продукция очень важна в построении имиджа компании. Качество, стиль и оригинальность - именно это привлекает внимание и говорит о неповторимости и уникальности вашей компании.</p> 

 <div class="links">
      <a href="corp.html#souvenir">Сувенирная продукция</a><a href="corp.html#textile">Текстиль</a><a href="corp.html#package">Упаковка</a>
</div>
</div>
</div>

</div>
</div>


          <?php 
          include "footer.inc.php";
          ?>












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- MY JS -->

<script src="effect_services.js"></script>
<script src="validation.js"></script>


</body>
</html>
