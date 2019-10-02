

<?php
    $CI =& get_instance ();
  $menu=$CI->mdl_menu->getAll();
  $categoryss=$CI->mdl_category->getAll();
  $users = $CI->mdl_login->get($this->session->userdata('id'));
  
?>
    
    
    
<div id="st-container">
    <div class="block-left_menu">
        <div id="st-trigger-effects" class="column">
            <button data-effect="st-effect-1"></button>					
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
            <a href="<?=base_url().'summary'?>">        
                <li>
                    <i class="flaticon-books"></i>
                    <span>Резюме</span>
                </li>
            </a> 
            <a href="<?=base_url().'frontend/news'?>">    
                <li>
                    <i class="flaticon-world91"></i>
                    <span>Новости</span>
                </li>
            </a>  
            <a href="<?=base_url().'frontend/contact'?>">    
                <li>
                   <img width="30" height="30" style="margin: 5px auto;display: block;" src="<?=base_url()?>/icon/png/telephone5.png" />
                    <span>Контакты</span>
                </li>
            </a> 
            <a href="<?=base_url().'frontend/dev'?>">    
                <li>
                   <img width="30" height="30" style="margin: 5px auto;display: block;" src="<?=base_url()?>/icon/png/royalty13.png" />
                    <span>Услуги</span>
                </li>
            </a> 
                  
        </ul>
        <div class="aout atmain">
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
    <!--- до 1040   --!>
    <div class="block-left_cats " id="menu-2">
        <div class="cats-block">
        <?php if($this->auth_lib->check_login()): ?>
            <a class="buttadd" href="<?=base_url().'privates/advert_add'?>"><img src="<?=base_url()?>img/icon/add.png" /> Добавить вакансию</a>
        <?php else:?>
            <a class="buttadd" href="<?=base_url().'register'?>"><img src="<?=base_url()?>img/icon/add.png" /> Добавить вакансию</a>
        <?php endif?>    
            <h3>Города</h3>
            <ul class="cats-block_list">
            <? foreach($coutSiti as $cS):?>
                <a href="<?=base_url().'razdels/'.$cS['alt'].'?siti'?>">
                    <li>
                        <span class="cats-block_value"><?=$cS['siti']?></span><span class="cats-block_count">(<?=$cS['num']?>)</span>
                    </li>
                </a>
            <?endforeach;?>
                
            </ul>
        </div>
        <div class="cats-block">
            <h3>Разделы</h3>
            <ul class="cats-block_list">
                <? foreach($coutCat as $caC):?>
                <a href="<?=base_url().'razdels/'.$caC['alt'].''?>">
                    <li>
                        <span class="cats-block_value"><?=$caC['title']?></span><span class="cats-block_count">(<?=$caC['num']?>)</span>
                    </li>
                </a>
                <?endforeach;?>
                
            </ul>
        </div>
        <div class="cats-block">
                <p style="color: #fff;"><strong>Adtwork.ru</strong> - это стремительно развивающийся ресурс, помогающий людям найти работу, а работадателям разместить соответствующие объявления</p>
        </div>
    </div>
    <!--- разрешен 1040   --!>
    <div class="block-left_cats st-menu st-effect-1" id="menu-1">
        <div class="cats-block">
        <?php if($this->auth_lib->check_login()): ?>
            <a class="buttadd" href="<?=base_url().'privates/advert_add'?>"><img src="<?=base_url()?>img/icon/add.png" /> Добавить вакансию</a>
        <?php else:?>
            <a class="buttadd" href="<?=base_url().'register'?>"><img src="<?=base_url()?>img/icon/add.png" /> Добавить вакансию</a>
        <?php endif?>    
            <h3>Города</h3>
            <ul class="cats-block_list">
            <? foreach($coutSiti as $cS):?>
                <a href="<?=base_url().'razdels/'.$cS['alt'].'?siti'?>">
                    <li>
                        <span class="cats-block_value"><?=$cS['siti']?></span><span class="cats-block_count">(<?=$cS['num']?>)</span>
                    </li>
                </a>
            <?endforeach;?>
                
            </ul>
        </div>
        <div class="cats-block">
            <h3>Разделы</h3>
            <ul class="cats-block_list">
                <? foreach($coutCat as $caC):?>
                <a href="<?=base_url().'razdels/'.$caC['alt'].''?>">
                    <li>
                        <span class="cats-block_value"><?=$caC['title']?></span><span class="cats-block_count">(<?=$caC['num']?>)</span>
                    </li>
                </a>
                <?endforeach;?>
                
            </ul>
        </div>
        <div class="cats-block">
                <p style="color: #fff;"><strong>Adtwork.ru</strong> - это стремительно развивающийся ресурс, помогающий людям найти работу, а работадателям разместить соответствующие объявления</p>
        </div>
    </div>
    <div class="block-center">
        <div class="center-head">
            <h1>Работа в Крыму и Симферополе</h1>
            
        </div>
        
       <!-- PUPUP   --!>
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
      <!-- end pup  --!>
        <div class="center-gorizont">
            <div class="carousel">
                <ul class="list-fast_advert">
                <?foreach($front_advert as $key=>$val):?>
                
                    <li class="list_item ">
                    
                        <a class="fast_advert-title gd-<?=$i++;?> " href="<?=base_url().'advert/'.$val['id']?>">
                            <span><?=$val['title']?></span>
                        </a>
                        <div class="fast_advert-body">
                            <div id="hexagon" class="fast_advert-price">
                            <?php if(empty($val['zarplata'])){echo "договорная"; }else{echo $val['zarplata']."руб";} ?>
                            </div>
                            <div class="fast-left">
                                <span>Город</span><br />
                                <?=$val['siti']?>
                            </div>
                            <div class="fast-right">
                            <span>Опыт работы</span><br />
                            <? if(!empty($val['staj'])){echo $val['staj'];}else{echo "Без опыта";}  ?></div>   
                        </div>
                         
                    </li>
                <?endforeach?>
                   
                   
                </ul>
            </div>
            <div class="carousel_nav">
               
                
                <h3>Срочная работа в Крыму</h3>
                
                
                <div class="arrow">
                    <a class="arprev"></a>
                    <a class="arnext"></a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="center-content">
            <div class="center-content_left">
                <div class="content-fast_serch">
                <div class="setch-title"> Свежие вакансии</div><img class="flame" src="img/icon/flame.png" />
                    <div id="morphsearch" class="morphsearch">
        				<form method="POST" class="morphsearch-form" action="<?=base_url().'razdels/def'?>">
        					<input class="morphsearch-input" type="search" name="title" placeholder="Поиск..."/>
        					<input class="morphsearch-submit" name="filt" type="submit"/>
        				
        				<div class="morphsearch-content">
        					<div class="dummy-column">
        						<h2>Города Крыма</h2>
        						<section>
                    				<select name="siti" class="cs-select cs-skin-border">
                    					<option value="" disabled selected>Выберите из списка</option>
                    					<?foreach($sitis as $siti):?>
            								<option ><?=$siti['siti'];?></option>
            						    <?endforeach?>
                    				</select>
                    			</section>
        					</div>
        					<div class="dummy-column">
        						<h2>Разделы работы</h2>
        						<section>
                    				<select name="cat" class="cs-select cs-skin-border">
                    					<option value="" disabled selected>Выберите из списка</option>
                    					<?foreach($category as $cate):?>
                                        <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                                        <?endforeach?>
                    				</select>
                    			</section>
        					</div>
        				</div><!-- /morphsearch-content -->
                        </form>
        				<span class="morphsearch-close"></span>
        			</div><!-- /morphsearch -->
                    
                </div>
                <ul class="list-advert">
                <?foreach($lastadvert as $val):?>
                    <li>
                        
                        <img class="list-img lst" src="img/icon/nologo.jpg" />
                        <div class="list_center">
                            <a href="<?=base_url().'advert/'.$val['id']?>" class="title"><?=$val['title']?></a>
                            <a class="siti"><?=$val['siti']?></a>
                            <ul class="list_status">
                            <?if(!empty($val['education'])){?>
                                <li>
                                    <span>Образование</span><br />
                                    <strong><?=$val['education']?></strong>
                                </li>
                            <?}elseif(!empty($val['staj'])){?>
                                <li>
                                    <span>Опыт работы</span><br />
                                    <strong><?=$val['staj']?></strong>
                                </li>
                            <?}elseif(!empty($val['type'])){?>
                                <li>
                                    <span>Вид занятости</span><br />
                                    <strong><?=$val['type']?></strong>
                                </li>
                            <?}else{?>
                                <li>
                                    <span>Опыт работы</span><br />
                                    <strong>Без опыта</strong>
                                </li>
                            <?}?>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="workroom">
                                <img src="img/icon/icn1.png" /><a href="<?=base_url().'advert/'.$val['id']?>">Подробней</a>
                            </div>
                            <div class="workroom">
                                <img src="img/icon/icn2.png" /><span><?=$val['data']?></span>
                            </div>
                        </div>
                        <div class="list-right">
                            <? 
                                if(empty($val['zarplata'])){
                                    echo '<span class="dogovor">по договоренности</span>';
                                }else{
                                    echo '<span class="price">'.$val['zarplata'].'&nbsp;руб</span>';
                                }
                              
                             ?> 
                           <!--
                            <div class="info">
                                <span>Категория</span>&nbsp;-&nbsp;<a href="">Недвижимость</a><br />
                                <span>Компания</span>&nbsp;-&nbsp;<a href="">АТБ</a>
                            </div>
                            --!>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                <?endforeach?>
                    
                </ul>
            </div>
            <div class="center-content_right">
                <h3>Новости Крыма</h3>
                <div class="news_day">
                <div class="news_day-back"></div>
                <a href="<?=base_url()?>frontend/show/13/news">
                    <div class="news_day-title">Местные власти лишили крымских предпринимателей возможности торговать</div>
                </a>                                
                    <img src="<?=base_url()?>images/news1.jpg" />  
                </div>
                
                <div class="bordered">
                    <i></i>
                </div>
                <ul class="news_list">
                <?foreach($news as $new):?>
                    <li>
                        <a href="<?=base_url().'frontend/show/'.$new['id'].'/news'?>"><?=$new['title']?></a>
                        <div class="news_list-body"><?=$new['short_text']?></div>
                    </li>
                <?endforeach;?>
                    
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="main_article">
                <h1>Статьи</h1>
                <ul class="main_article-list">
                    <?foreach($article as $art){?>
                    <a href="<?=base_url().'frontend/show/'.$art['id'].'/article'?>">
                        <li class="main_art">
                            <img src="img/icon/nofoto.gif" />
                            <div class="main_art-body">
                                <h4><?=$art['title']?></h4>
                                <p><?=$art['short_text']?></p>
                            </div>
                        </li>
                    </a>
                    <?}?>
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="footer">
        <ul>
            <li class="aboutME">
                <strong>Adtwork.ru</strong> - это стремительно развивающийся ресурс, помогающий людям найти работу, а работадателям разместить соответствующие объявления</p>
            </li>
           <li></li>
        </ul>
        <div class="social-buttons">
        
        <a class="vk" href="https://vk.com/adtwork" target="_blank">Вконтакте</a>
        <a class="tw" href="https://twitter.com/AdtworkCrimea" target="_blank">Twitter</a>
        <a class="gplus" href="https://plus.google.com/u/0/" target="_blank">Google+</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<script src="<?=base_url()?>js/classie.js"></script>
		<script>
			(function() {
				var morphSearch = document.getElementById( 'morphsearch' ),
					input = morphSearch.querySelector( 'input.morphsearch-input' ),
					ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
					isOpen = isAnimating = false,
					// show/hide search area
					toggleSearch = function(evt) {
						// return if open and the input gets focused
						if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

						var offsets = morphsearch.getBoundingClientRect();
						if( isOpen ) {
							classie.remove( morphSearch, 'open' );

							// trick to hide input text once the search overlay closes 
							// todo: hardcoded times, should be done after transition ends
							if( input.value !== '' ) {
								setTimeout(function() {
									classie.add( morphSearch, 'hideInput' );
									setTimeout(function() {
										classie.remove( morphSearch, 'hideInput' );
										input.value = '';
									}, 300 );
								}, 500);
							}
							
							input.blur();
						}
						else {
							classie.add( morphSearch, 'open' );
						}
						isOpen = !isOpen;
					};

				// events
				input.addEventListener( 'focus', toggleSearch );
				ctrlClose.addEventListener( 'click', toggleSearch );
				// esc key closes search overlay
				// keyboard navigation events
				document.addEventListener( 'keydown', function( ev ) {
					var keyCode = ev.keyCode || ev.which;
					if( keyCode === 27 && isOpen ) {
						toggleSearch(ev);
					}
				} );


				/***** for demo purposes only: don't allow to submit the form *****/
				morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			})();
		</script>

		<script src="<?=base_url()?>js/selectFx.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>
        <script src="<?=base_url()?>js/classie.js"></script>
		<script src="<?=base_url()?>js/sidebarEffects.js"></script>
        
        
        
</body>
</html>