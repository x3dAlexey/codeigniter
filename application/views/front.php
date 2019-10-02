
        <div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						
						<div class="intro-content">
							<div class="profile"><img  src="img/partner.png" alt="работа в крыму,найти работу в крыму"/></div>
							<h1><span></span><span>Найти работу</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<div class="profile"><img src="img/darab.png" alt="Добавить вакансию в крыму"></div>
							<h1><span></span><span>Добавить вакансию</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
     <?php if(!$this->auth_lib->check_login()): ?>
                     
     
                        <div class="fs-form-wrap" id="fs-form-wrap-block">
                            <div class="fs-title">
                					<h1 class="project">Быстрая регистрация компании</h1>
                					<div class="codrops-top">
                						
                					</div>
                				</div>
                            <form class="fast-reg"  method="post" action="" id="form_id">
                                <span class="codropmsg">Все поля ОБЕЗАТЕЛЬНЫ!</span>
                                <br /><br />
                                        <input class="input_fast-reg" id="com_name" type="text" name="com_name" value="" placeholder="Название Фирмы" required /><br/>
                                        <input class="input_fast-reg" id="email" type="text" name="email" value="" placeholder="Email" required /><br/>
                                        <input class="input_fast-reg" type="password" name="password" value="" placeholder="Пароль" required /><br/>
                                        <input type="hidden" name="type" value="com" />
                                        <input id="notification-trigger" class="progress-button"  type="button" value="Продолжить" onclick="AjaxFormRequest('result_div_id', 'form_id', 'form.php')" />
                         
                            </form>
                        </div>
                        <div style="display: none;" class="fs-form-wrap" id="fs-form-wrap">
                				<div class="fs-title">
                					<h1 class="project">Заполните все поля</h1>
                					<div class="codrops-top">
                						<a class="codrops-icon codrops-icon-info" href="#"><span></span></a>
                					</div>
                				</div>
                    <form style="width:80%;" class="cbp-mc-form"  action="<?=base_url().'advert/add_advert'?>" method="POST">
					
						<label for="first_name">Название работы</label>
	  					<input type="text" id="first_name" name="title" placeholder="Реализатор" value="<?=set_value('title');?>"/>
	  					<label for="last_name">Зп</label>
	  					<input type="text" id="last_name" name="zarplata" placeholder="10000руб" value="<?=set_value('zarplata');?>"/>
	  					
	  					<label for="country">Категории</label>
	  					<select id="country" name="cat">
	  						<option value="">Выберите из списка</option>
                            <?foreach($category as $cate):?>
                            <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                            <?endforeach?>
	  					</select>
                        <label for="country">Город</label>
	  					<select id="country" name="siti">
	  						<option value="">Выберите из списка</option>
                            <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
						    <?endforeach?>
	  					</select>
	  					
	  				
                        <label for="Описание работы">Описание работы</label>
	  					<textarea id="affiliations" name="text"></textarea>
                        
                        <label for="Требования">Требования</label>
	  					<textarea id="affiliations" name="req"></textarea>
	  				
	  					<label>Образование</label>
	  					<select id="talent" name="education">
                            <option value="">Выберите из списка</option>
	  						 <?foreach($advanc as $key[0]=>$adv):?>
                            <option><?=$adv['education']?></option>
                            <?endforeach?>
	  					</select>
                        
                        <label>Опыт работы</label>
	  					<select id="talent" name="staj">
                            <option value="">Выберите из списка</option>
	  						<?foreach($advanc as $key[1]=>$adv):?>
                            <option><?=$adv['staj']?></option>
                            <?endforeach?>
	  					</select>
                        
                        <label>Вид занятости</label>
	  					<select id="talent" name="type">
                            <option value="">Выберите из списка</option>
	  						<?foreach($advanc as $key[2]=>$adv):?>
                            <option><?=$adv['type']?></option>
                            <?endforeach?>
	  					</select>
                        
                        
                        <label for="last_name">Телефон</label>
	  					<input type="text" id="last_name" name="phone" placeholder="+7898...." value="<?=set_value('phone');?>"/>
                       
	  				
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" name="goadver" type="submit" value="Отправить" /></div>
				</form>
                </div>
        <?php else:?>
        <?if($this->session->userdata('type')=='user'):?>
            <div class="fs-form-wrap" id="fs-form-wrap">
                                <div class="fs-title">
                					<h1 class="project">Извените, только для <strong>Компаний</strong></h1>
                				
                				</div>
            </div>
        <?php else:?>
                    <div class="fs-form-wrap" id="fs-form-wrap">
                				<div class="fs-title">
                					<h1 class="project">Заполните все поля</h1>
                					<div class="codrops-top">
                						<a class="codrops-icon codrops-icon-info" href="#"><span></span></a>
                					</div>
                				</div>
                    <form style="width:80%;" class="cbp-mc-form"  action="<?=base_url().'advert/add_comAddvert'?>" method="POST">
					
						<label for="first_name">Название работы</label>
	  					<input type="text" id="first_name" name="title" placeholder="Реализатор" value="<?=set_value('title');?>"/>
	  					<label for="last_name">Зп</label>
	  					<input type="text" id="last_name" name="zarplata" placeholder="10000руб" value="<?=set_value('zarplata');?>"/>
	  					
	  					<label for="country">Категории</label>
	  					<select id="country" name="cat">
	  						<option value="">Выберите из списка</option>
                            <?foreach($category as $cate):?>
                            <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                            <?endforeach?>
	  					</select>
                        <label for="country">Город</label>
	  					<select id="country" name="siti">
	  						<option value="">Выберите из списка</option>
                            <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
						    <?endforeach?>
	  					</select>
	  					
	  				
                        <label for="Описание работы">Описание работы</label>
	  					<textarea id="affiliations" name="text"></textarea>
                        
                        <label for="Требования">Требования</label>
	  					<textarea id="affiliations" name="req"></textarea>
	  				
	  					<label>Образование</label>
	  					<select id="talent" name="education">
                            <option value="">Выберите из списка</option>
	  						 <?foreach($advanc as $key[0]=>$adv):?>
                            <option><?=$adv['education']?></option>
                            <?endforeach?>
	  					</select>
                        
                        <label>Опыт работы</label>
	  					<select id="talent" name="staj">
                            <option value="">Выберите из списка</option>
	  						<?foreach($advanc as $key[1]=>$adv):?>
                            <option><?=$adv['staj']?></option>
                            <?endforeach?>
	  					</select>
                        
                        <label>Вид занятости</label>
	  					<select id="talent" name="type">
                            <option value="">Выберите из списка</option>
	  						<?foreach($advanc as $key[2]=>$adv):?>
                            <option><?=$adv['type']?></option>
                            <?endforeach?>
	  					</select>
                        
                        <input type="hidden" name="user_id" value="<?=$this->session->userdata('id')?>" />
                        <input type="hidden" name="company" value="<?=$this->session->userdata('com_name')?>" />
                        <label for="last_name">Телефон</label>
	  					<input type="text" id="last_name" name="phone" placeholder="+7898...." value="<?=set_value('phone');?>"/>
						
	  				
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" name="goadver" type="submit" value="Отправить" /></div>
				</form>
                </div>
				
                        <?endif;?>    
					<?endif;?>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
					
                        <section>
                           <h2>Поиск работы по разделам</h2>
                            
                            <ul class="category">
                                <? foreach($category as $cat):?>
                                    <li><a href="<?=base_url().'razdels/'.$cat['alt']?>"><?=$cat['title']?></a></li>
                                <?endforeach;?>
                               
                            </ul> 
                            <div class="clearfix"></div> 
                        </section>
                        
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->

<div class="summary">
    <div class="main">
        <div class="right">
            <a href="<?=base_url().'summary/add_summ'?>">Добавить резюме</a>
            <a href="<?=base_url().'summary/index'?>">Список реюзме</a>
            <a href="<?=base_url().'advert/sing_advert'?>">Подписатся на обьявления</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="fast_work">
<div class="clearfix"></div>
    <div class="main">
        <h1 class="">Срочная работа в Крыму</h1>
        <div class="special">
            <ul class="sp_work">
            <?foreach($front_advert as $val):?>
                <li>
                    <a href="<?=base_url().'advert/'.$val['id']?>"><?=$val['title']?></a>
                    <div class="right">
                        <div style="width: 200px;" class="sp_work-item"><span class="muted">город.</span> <span><em><?=$val['siti']?></em></span></div>
                        <div style="width: 220px;" class="sp_work-item"><span class="muted">Опыт работы  </span> <span><em><?=$val['staj']?></em></span></div>
                        <div style="width: 150px;" class="sp_work-item"><span class="muted">ЗП  </span>  <span class="price">
                        <? 
                        if(empty($val['zarplata'])){
                            echo "договорная";
                        }else{
                            echo $val['zarplata']."руб";
                        }
                      
                     ?> 
                        
                        </span> </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
            <?endforeach?>
              
                
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="back_com">
    <div class="main"> 
     <div class="clearfix"></div>   
        <h1 class="title_com">Свежие вакансии</h1>
        
          <div class="special">
            <ul class="sp_work">
            <?foreach($lastadvert as $val):?>
                <li>
                    <a href="<?=base_url().'advert/'.$val['id']?>"><?=$val['title']?></a>
                    <div class="right">
                        <div style="width: 200px;" class="sp_work-item"><span class="muted">город.</span> <span><em><?=$val['siti']?></em></span></div>
                        <div style="width: 220px;" class="sp_work-item"><span class="muted">Опыт работы  </span> <span><em><?=$val['staj']?></em></span></div>
                        <div style="width: 150px;" class="sp_work-item"><span class="muted">ЗП  </span>  <span class="price">
                        <? 
                        if(empty($val['zarplata'])){
                            echo "договорная";
                        }else{
                            echo $val['zarplata']."руб";
                        }
                      
                     ?> 
                        
                        </span> </div>
                    </div>
                    <div class="clearfix"></div>
                </li>
            <?endforeach?>
              
                
            </ul>
        </div>
    <!--
    	<ul class="brend">
            <li><a href=""><img src="img/thumbs/q1.png" /></a></li>
			<li><img src="img/thumbs/q2.png" /></li>
			<li><img src="img/thumbs/q3.jpg" /></li>
            <li><img src="img/thumbs/q4.jpg" /></li>
            <li><a href=""><img src="img/thumbs/q1.png" /></a></li>
			<li><img src="img/thumbs/q2.png" /></li>
			<li><img src="img/thumbs/q3.jpg" /></li>
            <li><img src="img/thumbs/q4.jpg" /></li>
            <li><a href=""><img src="img/thumbs/q1.png" /></a></li>
			
   
		</ul>
         --!>
            <div class="clearfix"></div>  
     </div> 
    
</div>

<div class="backarticle" data-stellar-background-ratio="0.5">
    <div class="main">
    <div class="clearfix"></div>  
        <h1><a href="<?=base_url().'frontend/article'?>">Статьи</a></h1>
        <div class="artiles">
            <?foreach($article as $art){?>
            <div class="article">
                <a href="<?=base_url().'frontend/show/'.$art['id'].'/article'?>">
                    <h1><?=$art['title']?></h1>
                    <p><?=$art['short_text']?></p>
                </a>      
            </div>
           <?}?>
             <div class="clearfix"></div>  
        </div>
    </div>
</div> 
<div class="back_news">
    <div class="main">
    <div class="clearfix"></div>          
         <h1 class="title_com"><a href="<?=base_url().'frontend/news'?>">Новости Крыма</a></h1>
         <ul class="tape_news">
         <?foreach($news as $new):?>
            <li>
                <div class="news-block">
                        <div class="news-block_content">
                            <a href="<?=base_url().'frontend/show/'.$new['id'].'/news'?>">
                            <h4><?=$new['title']?></h4>
                            
                            <p><?=$new['short_text']?></p>
                            </a>
                           
                        </div>
        
                </div>
            </li>
        <?endforeach;?>
           
            <div class="clearfix"></div>
        </ul>
         <div class="clearfix"></div>  
    </div>  
</div>
<script src="<?=base_url()?>js/main.js"></script> 
<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>


<script src="js/classie.js"></script>
<script src="js/cbpSplitLayout.js"></script>

		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
  <script src="js/notificationFx.js"></script>
		<script>
			(function() {
				var bttn = document.getElementById( 'notification-trigger' );

				// make sure..
				bttn.disabled = false;

				bttn.addEventListener( 'click', function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, 'active' );
					setTimeout( function() {

						classie.remove( bttn, 'active' );
						
						// create the notification
						var notification = new NotificationFx({
							message : '<span class="icon icon-calendar"></span><p>Используйте <strong>Войти</strong> что бы попасть в Личный кабинет.</p>',
							layout : 'attached',
							effect : 'bouncyflip',
							type : 'notice', // notice, warning or error
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
<script>
jQuery('.link_privat').on('click', function(event) {
  var el=jQuery(event.target);
  if (el.hasClass('link_privat')) PopUpHide();      
});

</script> 
