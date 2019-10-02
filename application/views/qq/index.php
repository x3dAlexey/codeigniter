<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?=base_url?>application/views/qq/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url?>application/views/qq/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script language=JavaScript>
      <!--
var message="no";
///////////////////////////////////
      function clickIE4(){
      if (event.button==2){
      alert(message);
      return false;
      }
      }
function clickNS4(e){
      if (document.layers||document.getElementById&&!document.all){
      if (e.which==2||e.which==3){
      alert(message);
      return false;
      }
      }
      }
if (document.layers){
      document.captureEvents(Event.MOUSEDOWN);
      document.onmousedown=clickNS4;
      }
      else if (document.all&&!document.getElementById){
      document.onmousedown=clickIE4;
      }
document.oncontextmenu=new Function("alert(message);return false")
// --> 
      </script>
</head>
<body>
<div class="container">
    <div class="header">
        <a class="logo" href=""><img src="img/logo.png" alt="" /></a>
        
            <ul class="menu">
                <li><a href="">РЕГИСТРАЦИЯ БИЗНЕСА</a></li>
                <li><a href="">ЛИКВИДАЦИЯ КОМПАНИЙ</a></li>
                <li><a href="">ЮРИДИЧЕСКИЕ АДРЕСА</a></li>
                <li><a href="">ВИЗОВЫЙ ЦЕНТР</a></li>
                <li><a href="">НАШИ КОНТАКТЫ</a></li>
            </ul>
        
        <div class="sub_menu">
            <div class="col-sm-4">
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="img/sub1.gif" alt="...">
                  </a>
                  <div class="media-body">
                    <strong>Наша миссия</strong>
                    <p>Наша цель - сделать качественные услуги доступными! Ничего лишнего: вы не переплачиваете за дополнительный сервис</p>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="img/sub2.gif" />
                    </a>
                    <div class="media-body">
                        <strong>Регистрация под ключ 18 000 р.</strong>
                        <p>Все под ключ за 18 000 рублей. Включены пошлины, юр. адрес, печать и наши услуги. Оплата по факту регистрации.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 adres">
                <span>+7 (495) 755 - 70 - 17</span>
                <span>vectorbiz@yandex.ru</span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="main">
        <div class="clearfix"></div>
        <div class="right-block">
            <a href="" class="hover_doc" >Документы раздела</a>
            <div class="media docs">
                <a class="pull-left" href="#">
                    <img class="media-object" src="img/doc.gif" alt="...">
                </a>
                <div class="media-body"><a href="">Скачать Анкету для регистрации ООО.doc</a></div>
            </div>
            <div class="media docs">
                <a class="pull-left" href="#">
                    <img class="media-object" src="img/doc.gif" alt="...">
                </a>
                <div class="media-body"><a href="">Скачать Анкету для регистрации ООО.doc</a></div>
            </div>
            <div class="register_group">
                <a class="registr" href="">Регистрация бизнеса</a>
                <a href="" class="reg">Документы для регистрации ООО</a>
                <a href="" class="reg">Оставить заявку на регистрацию ООО</a>
                <a href="" class="reg">Заказать печать</a>
            </div>
            
            <img class="bdr2_img" src="" />
            <div class="brd2">brd2</div>
            
        </div>
        <div class="content">
            
            <h1>Регистрация ООО в компании Векби</h1>
            
            <ul class="navigation">
                <li><a href="">Подготовка комплекта документов + консультация</a><span>2 000 руб</span></li>
                <li> <a href="">Все включено (включая пошлины)</a><span>9 000 руб.</span></li>
                <li> <a href="">Все включено с юридическим адресом</a><span>18 000 руб.</span></li>
                <li><a href="">Дополнительные услуги</a><span></span></li>
            </ul>
            
            <p>Воспользовавшись услугами нашей компании при регистрации Вашей новой ООО, Вы экономите и 
            время, и свои деньги. Регистрация фирм - это наш профиль, и свою работу мы выполняем на "отлично". 
            К тому же, наша ценовая политика выводит наши предложения в ряд самых выгодных на сегодняшний 
            день.</p>
            
            <h3>1. Регистрация ООО >> Подготовка документов</h3>
            <p>Не хотите вдаваться в подробности надлежащего оформления заявлений и учредительных документов. 
            Тогда просто позвоните нам - и мы с радостью выполним эту работу. Да-да, цены, что Вы видите на этой 
            странице действительны и актуальны на сегодняшний день!</p>
            <p>Перечень услуг 	Описание 	Цена...</p>
            <h1>h1 Загаловок</h1>
            <h2>h2 Загаловок</h2>
            <h3>h3 Загаловок</h3>
            <h4>h4 Загаловок</h4>
            <h5>h5 Загаловок</h5>
            <h6>h6 Загаловок</h6>
            
            <table class="brd" >
                <thead>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <a class="href_text" href="">ссылка</a><br />
            <a class="href_foot" href="">ссылка футер</a>
            <br />
            <ul class="list_mark">
                <li>mark1</li>
                <li>mark2</li>
                <li>mark3</li>
                <li>mark4</li>
            </ul>
            
            <ol>
              <li>mark2</li>
              <li>mark2</li>
              <li>mark2</li>
              <li>mark2</li>
            </ol>
            
            <!-- 
            /* 
@active - ширина на всю
@active2 - делять по пополам
@active3 - 3 модуля ширина 320
@disebl - скрывает модуль
 */
              --!>
            
            <div class="module">
                <div class="btm active3">mdl1</div>
                <div class="btm active3">mdl2</div>
                <div class="btm active3">mdl3</div>
            </div>
            
     
            
            
        </div>
        
    </div>
    
    <div class="footer">
    <div class="clearfix"></div>
        <div class="mdl">
            <div class="foot">
                <h4>Фоот меню</h4>
                <ul class="list_foot">
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                </ul>
            </div>
            <div class="foot">
                <h4>Фоот меню</h4>
                <ul class="list_foot">
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                </ul>
            
            </div>
        </div>
        <div class="mdl">
            <div class="foot">
                <h4>Фоот меню</h4>
                <ul class="list_foot">
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                </ul>
            </div>
            <div class="foot">
                <h4>Фоот меню</h4>
                <ul class="list_foot">
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка1 сылка1</a></li>
                    <li><a class="href_foot" href="">сылка2 сылка1</a></li>
                </ul>
            
            </div>
        </div>
        <div class="clearfix"></div>
            <h5 class="inffoot">Копирайт</h5>
    </div>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>