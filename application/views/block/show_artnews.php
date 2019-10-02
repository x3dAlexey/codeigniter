<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <meta name="Keywords" content="работа в крыму, вакансии в крыму, работа в симферополе, работа в севастополе, работа в ялте, работа юбк, крым, работа в крыму россия, работа в крыму 2015, объявления крыма,найти работу в крыму, работа в крыму вакансии, вакансии севас, симферополь вакансии, севастополь вакансии, работа в крыму свежие вакансии, работа в симферополь свежие вакансии, работа в севастополе свежие вакансии ,работа в крыму с проживанием, крым вакансии 2015, Работа объявления Крыма ,работа в симферополе объявления крыма, республика крым работа, новости крыма" />
        <meta name="Description" content="adtwork.ru сайт по поиску работы в крыму и симферополе, подбор сотрудников,рассылка свежих вакансий" />

    	<meta name="author" content="x3d" />
        <title>Работа в крыму, свежие вакансии в Крыму, работа в Симферополе</title>
        
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/component.css" />
        <link href="<?=base_url()?>css/style.css" rel="stylesheet" media="screen"/>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        
<style>
a{
    text-decoration: none;
}
</style>      
        
</head>
    
    
<body class="demo-4">


<?php
    $CI =& get_instance ();
  $menu=$CI->mdl_menu->getAll();
  $categoryss=$CI->mdl_category->getAll();
  $users = $CI->mdl_login->get($this->session->userdata('id'));
  
?>
  
<div class="menu-head" >
    <div class="menu-body">
        <nav class="nav-left">
        <section><a href="<?=base_url()?>">Главная</a>
           
        </section>
        <section class="rodsub"><a href="<?=base_url().'category'?>">Разделы</a></section>
        <?foreach($menu as $val){?> 
            <section><a href="<?=base_url().$val['page_url']?>"><?=$val['menu_name']?></a></section>
            
        <?}?>
        </nav>
       <nav class="nav-right">
            <?php if(($this->auth_lib->check_login())): ?>
               <?if($this->session->userdata('type')=='com'):?>
                    <a class="link_privat"  href="<?=base_url().'accounts/'.$users['id']?>">
                        <?=$users['com_name'] ?>
                        
                        <span class="privatIcon" ></span>
                    </a>
                 
                <?elseif($this->session->userdata('type')=='user'):?>
                    <a class="link_privat" id="privat" href="<?=base_url().'accounts/'.$users['id']?>">
                        <?=$users['first_name'] ?>
                        <span class="privatIcon" ></span>
                    </a>
                    
                <?endif;?>
            <?else:?>
            <div class="auth">
                <a class="auth_trigger" href="<?=base_url().'logins/login'?>">Войти</a>
            </div>
            <div class="auth"><span style="padding: 0;" class="auth_trigger">|</span></div>
            <div class="auth">
                <a class="auth_trigger" href="<?=base_url().'register'?>">Регистрация</a>
            </div>
            <?endif;?>
            
        </nav>
    </div>
    <div class="clearfix"></div>
</div>
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <a class="hidepup" href="javascript:PopUpHide()"></a>
        <form class="authForm" method="post" action="<?=base_url().'logins/login'?>" >
            <h2 class="form-pup">Вход</h2>
            <span class="line">
                <input class="modalPopupField" type="text" name="email" value="" />
            </span>
            <span class="line">
                <input class="modalPopupField" type="password" name="password" value="" />
            </span>
            <div class="submit-line">
                <input class="btnStyle" value="Войти" type="submit" />
                <a class="passwordReset" href="">Забыли пароль?</a>
            </div>
            
        </form>
    </div>
</div>
		<div id="container" class="container intro-effect-side">
        <div class="main">
			<header class="header">
				
				<div class="title">
				
					<h1><?=$vals['title']?></h1>
					<!--<p class="subline">Inspiration for Article Intro Effects</p>--!>
				
				</div>
			</header>
		
			<article class="content">
				<div>
                    <p><?=$vals['text']?></p>
				</div>
			</article>
		</div>	
		</div><!-- /container -->
	 
	</body>
</html>