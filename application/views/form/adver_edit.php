<div class="main">

    <h1>Добавить обьявление</h1>
   
        <a href="<?=base_url().'privates/index/'.$this->session->userdata('id')?>">Назад</a>
           
                <form class="cbp-mc-form"  action="<?=base_url().'advert/edit_advert/'.$adver['id']?>" method="POST">
                    
                <div class="cbp-mc-column">
                     <label>название работы</label>
                        <span class="set_masege"><?=form_error('title');?></span>
                        <input class="txt" type="text" name="title" placeholder="название работы" value="<?=$adver['title'];?>" />
                    
                    
                     <label>Зп</label>
                        <span class="set_masege"><?=form_error('zarplata');?></span>
                        <input class="txt" type="text" name="zarplata" placeholder="" value="<?=$adver['zarplata'];?>"  />
                        
                   
                    
                    <label>Категории</label>
                  
                        <select name="cat" class="span4">
                            <option value=""></option>
                            <?foreach($category as $cate):?>
                            <option <?if($adver['cat']==$cate['id']) echo 'selected="selected"';?>  value="<?=$cate['id']?>"><?=$cate['title']?></option>
                            <?endforeach?>
                        </select>
                  
                    
                    <label>Город</label>
                  
                        <select name="siti" class="span4" >
                            <option value=""></option>
                            <?foreach($sitis as $siti):?>
								<option <?if($adver['siti']==$siti['siti']) echo 'selected="selected"';?> ><?=$siti['siti'];?></option>
      
						    <?endforeach?>
                        </select>
                 </div>
                 <div class="cbp-mc-column">
                    <label>Описание работы</label>
                    <textarea class="txt" name="text" placeholder="Описание"><?=$adver['text'];?></textarea>
                  
                    
                    
                    <label>Требования</label>
                    <textarea class="txt" name="req" placeholder="Описание"><?=$adver['req'];?></textarea>
                 </div>
                 <div class="cbp-mc-column">
                   
                    <label>Образование</label>
                   
                        <select name="education"  class="span4">
                            <option value=""></option>
                            <?foreach($advanc as $key[0]=>$adv):?>
                            <option <?if($adver['education']==$adv['education']) echo 'selected="selected"';?> ><?=$adv['education'];?></option>
                            <?endforeach?>
                        </select>
                       
               
                   
                    <label>Опыт работы</label>
                        <select name="staj" class="span4">
                            <option value=""></option>
                            <?foreach($advanc as $key[1]=>$adv):?>
                            <option <?if($adver['staj']==$adv['staj']) echo 'selected="selected"';?> ><?=$adv['staj'];?></option>
                            <?endforeach?>
                        </select>
                
                  
                    <label>Вид занятости</label>
                   
                        <select name="type" class="span4">
                            <option value=""></option>
                            <?foreach($advanc as $key[2]=>$adv):?>
                            <option <?if($adver['type']==$adv['type']) echo 'selected="selected"';?> ><?=$adv['type'];?></option>
                            <?endforeach?>
                        </select>
                        
                   <label>Телефон</label>
                    <span class="set_masege"><?=form_error('phone');?></span>
                    <input class="txt" type="text" name="phone" placeholder="Телефон" value="<?=$adver['phone'];?>"  />
                  </div> 

                    
                   
                    <input type="hidden" name="status" value="<?=$adver['status'];?>" />
                    <input type="hidden" name="user_id" value="<?=$adver['user_id'];?>" />
                    <input type="hidden" name="company" value="<?=$adver['company'];?>" />
                    <input type="hidden" name="data" value="<?=$adver['data'];?>" />
                    <input type="hidden" name="fron_page" value="<?=$adver['fron_page'];?>" />
                   	<div class="cbp-mc-submit-wrap"><input type="submit" class="cbp-mc-submit" name="reg_com" value="Сохранить" /></div> 
                    
                    
                    
                </form>
            
        
    


</div>