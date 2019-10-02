<?php
    $CI =& get_instance ();
  $menu=$CI->mdl_menu->getAll();
  $categoryss=$CI->mdl_category->getAll();
  $users = $CI->mdl_login->get($this->session->userdata('id'));
  
?> 
  
<div id="st-container">
    <div class="block-left_menu mcat">
        <div id="st-trigger-effects" class="site_logo cat-log">
            <div id="st-trigger-effects" class="column">
            <button data-effect="st-effect-1"></button>					
            </div>
        </div>
        <ul class="menu">
           <a href="<?=base_url()?>">        
                <li>
                    <i class="flaticon-dwelling1"></i>
                    <span>Главная</span>
                </li>
            </a>      
            <a href="<?=base_url().'category'?>">        
                <li>
                    <i class="flaticon-file17"></i>
                    <span>Разделы</span>
                </li>
            </a>  
            
            <a href="<?=base_url().'frontend/news'?>">    
                <li>
                    <i class="flaticon-world91"></i>
                    <span>Новости</span>
                </li>
            </a>  
            <a href="<?=base_url().'frontend/article'?>">        
                <li>
                    <i class="flaticon-books"></i>
                    <span>Статьи</span>
                </li>
            </a> 
           
        </ul>
        
        <div class="aout">
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
            <a href="<?=base_url().'logins/login'?>">Войти</a>
            <a href="<?=base_url().'register'?>">Регистрация</a>
            <?endif;?> 
        </div>
        
    </div>