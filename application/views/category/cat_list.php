
    <!--- до 1040    --!>
    <div class="filter-cat" id="menu-2">
        <h2>Критерии поиска</h2>
        <form method="POST" action="<?=base_url().'razdels/'.$alt?>">
            <input class="flt_butt" type="submit" name="filt"  value="Поиск" />
            <div class="filter_block">
                <label>Поиск</label>
                <input class="fl_src" type="text" name="title" value="" />
            </div>
            <div class="filter_block">
                <label>Зарплата</label>
                <input class="flzap" type="text" placeholder="От" name="zpot" value="" />
                
                <input  class="flzap" type="text" placeholder="До" name="zpdo" value="" />
                <div class="clearfix"></div>
            </div>
            <div class="filter_block">
                <label>Города крыма</label>
                <div class="select_cat">
                   <p></p>
                    <select name="siti" class="span2">
                    <option value="">Выберите из списка</option>
                        <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
						    <?endforeach?>	
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Разделы</label>
                <div class="select_cat">
                   <p></p>
                    <select name="cat" class="span2">
                        <option value="">Выберите из списка</option>
                       <?foreach($category as $cate):?>
                        <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                        <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Опыт работы</label>
                <div class="select_cat">
                   <p></p>
                    <select name="staj" class="span2">
                        <option value="">Выберите из списка</option>
                      <?foreach($advanc as $key[1]=>$adv):?>
                            <option><?=$adv['staj']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Вид занятости</label>
                <div class="select_cat">
                   <p></p>
                    <select name="type" class="span2">
                        <option value="">Выберите из списка</option>
                      <?foreach($advanc as $key[2]=>$adv):?>
                            <option><?=$adv['type']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Образование</label>
                <div class="select_cat">
                   <p></p>
                    <select name="education" class="span2">
                        <option value="">Выберите из списка</option>
                       <?foreach($advanc as $key[0]=>$adv):?>
                            <option><?=$adv['education']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <input class="flt_butt" type="submit" name="filt"  value="Поиск" />
        </form>
    </div>
    <!--- разрешен 1040   --!>
    <div class="filter-cat st-menu st-effect-1" id="menu-1">
        <h2>Критерии поиска</h2>
        <form method="POST" action="<?=base_url().'razdels/'.$alt?>">
            <div class="filter_block">
                <label>Поиск</label>
                <input class="fl_src" type="text" name="title" value="" />
            </div>
            <div class="filter_block">
                <label>Зарплата</label>
                <input class="flzap" type="text" placeholder="От" name="zpot" value="" />
                
                <input  class="flzap" type="text" placeholder="До" name="zpdo" value="" />
                <div class="clearfix"></div>
            </div>
            <div class="filter_block">
                <label>Города крыма</label>
                <div class="select_cat">
                   <p></p>
                    <select name="siti" class="span2">
                    <option value="">Выберите из списка</option>
                        <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
						    <?endforeach?>	
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Разделы</label>
                <div class="select_cat">
                   <p></p>
                    <select name="cat" class="span2">
                        <option value="">Выберите из списка</option>
                       <?foreach($category as $cate):?>
                        <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                        <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Опыт работы</label>
                <div class="select_cat">
                   <p></p>
                    <select name="staj" class="span2">
                        <option value="">Выберите из списка</option>
                      <?foreach($advanc as $key[1]=>$adv):?>
                            <option><?=$adv['staj']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Вид занятости</label>
                <div class="select_cat">
                   <p></p>
                    <select name="type" class="span2">
                        <option value="">Выберите из списка</option>
                      <?foreach($advanc as $key[2]=>$adv):?>
                            <option><?=$adv['type']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <div class="filter_block">
                <label>Образование</label>
                <div class="select_cat">
                   <p></p>
                    <select name="education" class="span2">
                        <option value="">Выберите из списка</option>
                       <?foreach($advanc as $key[0]=>$adv):?>
                            <option><?=$adv['education']?></option>
                            <?endforeach?>
                    </select>
                </div>
            </div>
            <input class="flt_butt" type="submit" name="filt"  value="Поиск" />
        </form>
    </div>
    
    
    
    <div class="block-center">
        <div class="cats-head">
            <h1><?=$thiscat?></h1>
           
        </div>
        
        <div class="clear"></div>
        <div class="center-content">
            <div class="content_cats">
                
                <ul class="list-advert cats">
                 <?if(!empty($free)):?>
                <?foreach($free as $asd):?>
                    <li> 
                        <div class="list_center">
                            <a href="<?=base_url().'advert/'.$asd['id']?>" class="list_cat-title"><?=$asd['title']?></a>
                        <?if(empty($asd['zarplata'])){?>
                            <span class="dogovor">по договоренности</span>
                       <?}else{?>
                             <span class="price"><?=$asd['zarplata']." руб"?></span> 
                       <?}?>  
                            <br />
                            <?=$asd['text']?>
                            <div class="clearfix"></div>
                            <div class="workroom cats_work">
                                <img width="15" height="15" src="<?=base_url()?>img/icon/pin.png" /><span><strong><?=$asd['siti']?></strong></span>
                            </div>
                            <?if(!empty($asd['company'])):?>
                            <div class="workroom cats_work">
                                <img width="15" height="15" src="<?=base_url()?>img/icon/info.png" /><span><?=$asd['company']?></span>
                            </div>
                            <?endif?>
                            <div class="clearfix"></div>
                            <div class="workroom">
                                <strong>добавлено:</strong>&nbsp;&nbsp;<img src="<?=base_url()?>img/icon/icn2.png" /><span><?=$asd['data']?></span>
                            </div>
                        </div>
                       
                        <div class="clearfix"></div>
                    </li>
                      <?endforeach;?>
            <?else:?>
                <li>
                    <b>Результатов нет</b>
                </li>
                 
                
            <?endif;?> 
                    
                    
                    
                    
                  
                   
                    
                </ul>
                <div class="list_cat-prew">
                <!--
                    <h3 style="text-align: center;">Професси</h3>
                    <ul class="cat_list-prow">
                        <li>
                            <a href="">Менеджер</a><span><div class="count">44</div></span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <a href="">Специалист</a><span><div class="count">25</div></span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                           <a href="">Консультант</a><span><div class="count">10</div></span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                           <a href="">Директор</a><span><div class="count">4</div></span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                           <a href="">Управляющий</a><span><div class="count">1</div></span>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                --!>
                    <div class="vip_advert">
                    <h3 class="cate-titl">Популярная работа</h3>
                        <a href="<?=base_url().'advert/127'?>">Водитель</a><br />
                        <span class="price">20 000руб</span>
                        <p>Уже с первого дня зарабатывайте от 1500 рублей в день!
<br />
Для того, чтобы начать зарабатывать Вам потребуется:
<br />
    Легковой 4х-дверный автомобиль любой марки.
    Мобильный телефон с поддержкой функции выхода в Интернет (желательно на базе Android).
    Позвонить по вопросу трудоустройства по номеру +7 (978) 767-11-45, +7 (978) 841-41-81 и зарегистрироваться.
<br />
Круглосуточный телефон для информация: +7 (861) 203-39-61</p>
                         <ul class="list_status">
                                <li>
                                    <span>Образование</span><br />
                                    <strong >Среднее специальное</strong>
                                </li>
                                <li>
                                    <span>Обыт работы</span><br />
                                    <strong>1 год</strong>
                                </li>
                                
                            </ul>
                         <div class="clearfix"></div>
                    </div>
                    <div class="vip_advert">
                  
                        <a href="<?=base_url().'advert/89'?>">Онлайн-риэлтор</a><br />
                        <span class="price">10 000руб</span>
                        <p>Работа из дома через Интернет (место Вашего проживания не имеет значения). Без разъездов. Стабильный доход по факту сделок (примерно от 15 тысяч рублей в месяц + премии по итогам месяца) Возможность активно влиять на свой заработок Карьерный рост (до уровня офис представителя, руководителя направления) Премии и бонусы за инициативность и креативность .</p>
                         <ul class="list_status">
                                <li>
                                    <span>Образование</span><br />
                                    <strong>Среднее специальное</strong>
                                </li>
                                
                                <li>
                                    <span>Вид занятости</span><br />
                                    <strong>Частичная</strong>
                                </li>
                            </ul>
                         <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
            
            <div class="clearfix"></div>
            
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="footer catfoot">
        <ul>
            <li class="aboutME">
                <p><strong>Adtwork.ru</strong>- это стремительно развивающися портал помогающий людям бытро найти работу и работадателям разместить вакансию</p>
            </li>
           <li></li>
        </ul>
        <div class="social-buttons">
        <a class="fb" href="" target="_blank">Facebook</a>
        <a class="vk" href="" target="_blank">Вконтакте</a>
        <a class="tw" href="" target="_blank">Twitter</a>
        <a class="gplus" href="" target="_blank">Google+</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script type="text/javascript">
    $('select').each(function(){
	$(this).siblings('p').text( $(this).children('option:selected').text() );
    });
    $('select').change(function(){
    	$(this).siblings('p').text( $(this).children('option:selected').text() );
    });
</script> 

<script src="<?=base_url()?>js/classie.js"></script>
		<script src="<?=base_url()?>js/sidebarEffects.js"></script>
</body>
</html>