<div class="main">

    <h1>Добавить Резюме</h1>
   
       
           
                <form class="cbp-mc-form"  action="<?=base_url().'summary/add_summ'?>" method="POST">
                    
                   <div class="cbp-mc-column">
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
	  					
	  				</div>
	  				<div class="cbp-mc-column">
                        <label for="Описание работы">Описание работы</label>
	  					<textarea id="affiliations" name="text"></textarea>
                        
                        
	  				</div>
	  				<div class="cbp-mc-column">
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
						<input type="hidden" name="data" value="<?=date("Y-m-d")?>" />
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="goSumm" value="Отправить" /></div>
                
                </form>
</div>