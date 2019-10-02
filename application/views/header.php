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
                <a class="passwordReset" href="<?=base_url().'logins/error_login'?>">Забыли пароль?</a>
            </div>
            
        </form>
    </div>
</div>
