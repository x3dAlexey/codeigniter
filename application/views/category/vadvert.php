
    <?if(!empty($com)):?>
    <div class="block-info_company">
            <?if(!empty($logo['img'])){?>
                <img class="img_com" src="<?=base_url().'images/coms/'.$logo['img']?>" />
            <?}else{?>
                <img class="img_com" src="<?=base_url()?>img/icon/nologo.jpg" />
            <?}?>
            <div class="info-title_com">
                <h4><?=$com['com_name']?></h4>
                <?if(!empty($com['first_name'])): ?>
                <span>Контактное лицо:</span>&nbsp;<strong><?=$com['first_name']?></strong>
                <?endif;?>
            </div>
            <!--<div class="info_com-butt">
                <a href="" class="folow"><img  src="<?=base_url()?>img/icon/adminUser2.png" /> Подписатся</a>
                <a href="" class="meseg"><img  src="<?=base_url()?>img/icon/bubbles.png" />Написать</a>
               
            </div>--!>
             <div class="clearfix"></div>
            <hr />
            <div class="info_com-con address">
                <div class="con1">
                    <span>Телефон</span><br />
                    <strong><?=$com['phone']?></strong>
                </div>
                <div class="con2">
                    <span>Почта</span><br />
                    <strong><?=$com['email']?></strong>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr />
            <div class="info_com-con count">
                <div class="con1">
                    <strong><?=$count = $this->mdl_catalog->count_by(array('user_id'=>$com['id']));?></strong>
                    <span>вакансий</span>
                    
                </div>
                <!--
                <div class="con2">
                    <strong>0</strong>
                    <span>подписались</span>
                </div>
                
                --!><div class="clearfix"></div>
            </div>
             <hr />
             <div class="info_last-adv">
                <h4>Вакансии компании</h4>
                <?foreach($list_adver as $lisadv):?>
                    <div>
                        <i></i>
                        <span><?=$lisadv['data']?></span><br />
                        <a href="<?=base_url().'advert/'.$lisadv['id']?>"><?=$lisadv['title']?></a>
                    </div>
                <?endforeach;?>
                
                  
             </div>
    </div>
    
    <?else:?>
    <div class="block-info_company">
            
               
            
            <div class="info-title_com">
                <h4>adtwork.ru</h4>
                <span>Добавленно:</span>&nbsp;<strong>Администрацией сайта</strong>
            </div>
            <div class="info_com-butt">
               
                <a style="padding: 2% 10%; margin: 0 10%;"  href="<?=base_url().'frontend/contact'?>" class="meseg admin"><img  src="<?=base_url()?>img/icon/bubbles.png" />Написать</a>
                <div class="clearfix"></div>
            </div>
            <hr />
            <div class="info_com-con address">
                
                <div class="con1 admin">
                    <span>Почта</span><br />
                    <strong>advertwork@yandex.ru</strong>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr />
            <div class="info_com-con count">
                <div class="con1 admin">
                    <strong><?=$count = $this->mdl_catalog->count_by(array('user_id'=>1));?></strong>
                    <span>вакансий</span>
                    
                </div>
               
                <div class="clearfix"></div>
            </div>
             <hr />
             <div class="info_last-adv">
             <h4>Важно!</h4>
             <p style="color: #fff;">Чтобы удалить объявление или привязать к вашему аккаунту свяжитесь с Администрацией сайта</p>
             </div>
    </div>
    <?endif;?>
    <div class="adtv_main">
        <div class="cats-head">
            <nav class="nav-left">
                <section><a href="<?=base_url().'category'?>">Разделы </a></section>
                <section><span>></span></section>
                <section class="rodsub"><a href="<?=base_url().'razdels/'.$bred['alt']?>"><?=$bred['title']?></a></section>
            </nav>
            
        </div>
        <div class="info_adtv-title">
            <h3><?=$adver['title']?></h3><br />
            <?if(empty($adver['zarplata'])){?>
                            <span class="dogovor">по договоренности</span>
                       <?}else{?>
                             <span class="price"><?=$adver['zarplata']." руб"?></span> 
                       <?}?>  
            <div style="clear: left;"></div>
            
                <div class="workroom ">
                    <img width="15" height="15" src="<?=base_url()?>img/icon/pin.png" /><span>Город : <strong><?=$adver['siti']?></strong><? !empty($adver['adres'])?:$adver['adres']; ?></span>
                </div>
                <?if(!empty($adver['phone'])):?>
                            <div class="workroom" >
                                <img width="15" height="15" src="<?=base_url()?>img/icon/info.png" /><span>Телефон : <strong><?=$adver['phone']?></strong></span>
                            </div>
                <?endif?>
                
           <div style="clear: left;"></div>
                           
        </div>
                        <ul class="list_status adtv_stat">
                        
                                 <?if(!empty($adver['education'])){?>
                                <li>
                                    <span>Образование</span><br />
                                    <strong><?=$adver['education']?></strong>
                                </li>
                                <?}elseif(!empty($adver['staj'])){?>
                                    <li>
                                        <span>Опыт работы</span><br />
                                        <strong><?=$adver['staj']?></strong>
                                    </li>
                                <?}elseif(!empty($adver['type'])){?>
                                    <li>
                                        <span>Вид занятости</span><br />
                                        <strong><?=$adver['type']?></strong>
                                    </li>
                                <?}else{?>
                                    <li>
                                        <span>Опыт работы</span><br />
                                        <strong>Без опыта</strong>
                                    </li>
                                <?}?>
                                <div style="clear: left;"></div>
                            </ul>
        <?if(!empty($adver['text'])):?>
        <div class="adtv_text">
            <h3><span>Описание</span> </h3>
            <?=$adver['text']?>
        </div>
        <?endif?>
        <?if(!empty($adver['req'])):?>
        <div class="adtv_text">
            <h3><span>Требования</span> </h3>
            <?=$adver['req']?>
        </div>
        <?endif?>
    </div>
</div>