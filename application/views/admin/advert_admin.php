<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Обьявления Админа</h1>
                <div class="b-form-tda">
                    <div class="b-form-tda__editor">
                        <form class="b-action-form b-action-form_type_action" action="<?=base_url().'admin/administration/advert_admin'?>" method="POST">
                            
                            
                            <label for="first_name">Название работы</label>
    	  					<input type="text"  class="b-action-form__button deluser" name="title" placeholder="Реализатор" value="<?=set_value('title');?>"/>
    	  					<label for="last_name">Зп</label>
    	  					<input type="text" class="b-action-form__button deluser" name="zarplata" placeholder="10000руб" value="<?=set_value('zarplata');?>"/>
                            
                            <label for="last_name">Телефон</label>
    	  					<input type="text" class="b-action-form__button deluser" name="phone" placeholder="+545" value="<?=set_value('zarplata');?>"/>
    	  					
    	  					<label for="country">Категории</label>
    	  					<select class="b-action-form__select seldeluser" name="cat">
    	  						<option value="">Выберите из списка</option>
                                <?foreach($category as $cate):?>
                                <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                                <?endforeach?>
    	  					</select>
                            <label for="country">Город</label>
    	  					<select class="b-action-form__select seldeluser" name="siti">
    	  						<option value="">Выберите из списка</option>
                                <?foreach($sitis as $siti):?>
    								<option ><?=$siti['siti'];?></option>
    						    <?endforeach?>
    	  					</select>
                            
                            <label for="country">Юзер</label>
    	  					<select class="b-action-form__select seldeluser" name="user_id">
    	  						<option value="1">Админ</option>
                                <?foreach($coms as $com):?>
    								<option value="<?=$com['id'];?>" ><?=$com['com_name'];?></option>
    						    <?endforeach?>
    	  					</select>
    	  					<tr>
                                <td><label for="last_name">Компания</label></td>
                                <td><input id="access_image_upload" class="hover" type="text" name="company" value=""/></td>
                            </tr>
    	  			
                            <label for="Описание работы">Описание работы</label>
    	  					<textarea class="t seldeluser" name="text"></textarea>
                            
                            <label for="Требования">Требования</label>
    	  					<textarea class=" seldeluser" name="req"></textarea>
                            
                            <label>На Главной</label>
    	  					<input name="fron_page" type="checkbox" value="1" />
                            
                            <label>Позиция на главной</label>
    	  					<select class="b-action-form__select seldeluser" name="rating">
                                <option value="">Выберите из списка</option>
    	  						<option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
    	  					</select>
                            
                            <label>Статус</label>
    	  					<select class="b-action-form__select seldeluser" name="status">
                                <option>noob</option>
    	  						<option>vip</option>
                                
                              
                               
    	  					</select>
    	  			
    	  					<label>Образование</label>
    	  					<select class="b-action-form__select seldeluser" name="education">
                                <option value="">Выберите из списка</option>
    	  						 <?foreach($advanc as $key[0]=>$adv):?>
                                <option><?=$adv['education']?></option>
                                <?endforeach?>
    	  					</select>
                            
                            <label>Опыт работы</label>
    	  					<select class="b-action-form__select seldeluser" name="staj">
    	  						<option value="">Выберите из списка</option>
    	  						 <?foreach($advanc as $key[1]=>$adv):?>
                                <option><?=$adv['staj']?></option>
                                <?endforeach?>
    	  					</select>
                            
                            <label>Вид занятости</label>
    	  					<select class="b-action-form__select seldeluser" name="type">
    	  						<option value="">Выберите из списка</option>
    	  						 <?foreach($advanc as $key[2]=>$adv):?>
                                <option><?=$adv['type']?></option>
                                <?endforeach?>
    	  					</select>
                            
                            
                            <input type="hidden" name="data" value="<?=date("d-m-Y")?>" />
                           
                            
                            <input class="b-action-form__button deluser" name="goAdver" type="submit"  value="выбрать"/>
                            
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="tab-content">
                
                <a class="b-content__link formadd click" href="<?=base_url().'admin/ad_article/add_art'?>">
                    <i class="b-admin-bar__icon b-content__icon"></i><span class="icon-qq" >добавить статью</span> </a>
                    <div id="structure" class="tab-pane"></div>
                    <div id="pages" class="tab-pane active">
                   
                     
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="users-table__hcell">Операции</th>
                                    <th class="users-table__hcell">Дата</th>
                                    <th class="users-table__hcell">Название</th>
                                    <th class="users-table__hcell">Категории</th>
                                    <th class="users-table__hcell">На главной и позиция</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($items as $item):?>
                                <tr class="users-table__row" data-id="456">
                                    <td id="pages" class="users-table__cell users-table__hcell_width">
                                        <div class="art_blok" >
                                            <ul>
                                                <li style="margin-top: 4px;" ><a href="<?=base_url().'advert/'.$item['id'].''?>" target="_blank" ><i class="icon-eye-open"></i></a></li>
                                                <li ><a href="<?=base_url().'admin/administration/edit/'.$item['id'].'?model=catalog&url=advert_edit'?>"><i class="icon-pencil"></i></a></li>
                                                <li><a href="<?=base_url().'admin/administration/del/'.$item['id'].'?model=catalog'?>"><i class="icon-remove"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </td>
                                    <td width="700"><span><?=$item['data']?></span></td>
                                    <td class="users-table__cell"><span><?=$item['title']?></span></td>
                                    <td class="users-table__cell users-table__hcell_width1">
                                    <span>
                                    <?php $CI =& get_instance ();
                                     $cat=$CI->mdl_category->get($item['cat']);?>
                                    <?=$cat['title'];?>
                                    </span>
                                    </td>
                                    <td class="users-table__cell"><span><?if($item['fron_page']=='1')echo "Да/".$item['rating'].""?></span></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
                <?=$page_nav?>
            </div>
        </div>
    </div>

</body>

</html>