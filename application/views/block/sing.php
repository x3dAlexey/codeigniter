<div class="main">

    <h1>Подписатся на обьявления</h1>
   
        <div class="register">
           <div class="body_tab">
                <form  action="<?=base_url().'advert/sing_advert'?>" method="POST">
                    
                    <div class="controls">
                     <label>Email </label>
                        <span class="set_masege"><?=form_error('title');?></span>
                        <input class="txt" type="text" name="email" placeholder="Email" value="<?=$this->session->userdata('email')?>" />
                    </div>
                    
                     <div class="controls">
                    <label>Город</label>
                  
                        <select name="siti" class="span4" >
                            <option value=""></option>
                            <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
      
						    <?endforeach?>
                        </select>
                 </div>
                    
                     <div class="controls">
                    <label>Категории</label>
                   
                        <select name="cat" class="span4">
                            <option value=""></option>
                            <?foreach($category as $cate):?>
                            <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                            <?endforeach?>
                        </select>
                  </div>
                   <br />
                    
                    
                    <button class="butn" name="goSumm" >сохранить</button>
                
                </form>
            </div>
        <div class="register">
    


</div>