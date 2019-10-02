


    <h1>Поиск резюме</h1>
    <div class="filter summ"> 
        <div class="main"> 
        <h3>Фильтр</h3>
        <form method="POST" action="<?=base_url().'summary/index'?>" >
                
                   <div id="search">
                            <div class="searchbar-typeahead">
                                <input type="text" name="title" placeholder="Поиск" value="" />
                            </div>
                            <div class="searchbar-submit">
                                <div class="button-search"><input type="submit" class="button-search" name="filt_summ" value=""  /></div>
                            </div>
                    </div>     
              <div class="select_main">
                	<p></p>
                	<select name="siti" onchange="typeOfPage();" id="calc_region_1">
                		<option value="">Города</option>
                            <?foreach($sitis as $siti):?>
								<option ><?=$siti['siti'];?></option>
						    <?endforeach?>					
                	</select>
               </div>  
              
               <div class="select_main">
                    <p></p>
                    <select name="cat" onchange="cats();"  class="span3">
                        <option value="">Разделы</option>
                        <?foreach($category as $cate):?>
                        <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                        <?endforeach?>
                    </select>
                </div>
                <div class="clearfix"></div>
                         
                <div class="punkfilt"> 
                    <label style="font-size: 18px;display: block;margin-bottom:10px;"><strong>Зарплата</strong></label>
                    <input type="text" placeholder="От" name="zpot" class="span1" />
                    <input type="text"  placeholder="До" name="zpdo" class="span1" />
              
                </div>                
               <div class="select_main">
                   <p></p>
                    <select name="staj" class="span2">
                        <option value="">Опыт работы</option>
                        <?foreach($advanc as $key[1]=>$adv):?>
                            <option><?=$adv['staj']?></option>
                            <?endforeach?>
                    </select>
                </div>
                 <div class="select_main">
                    <p></p>
                    <select name="type" class="span2">
                        <option value="">Вид занятости</option>
                        <?foreach($advanc as $key[2]=>$adv):?>
                            <option><?=$adv['type']?></option>
                            <?endforeach?>
                    </select>
                </div>
                <div class="select_main">
                    <p></p>
                    <select name="education" class="span2">
                        <option value="">Образование</option>
                        
	  						 <?foreach($advanc as $key[0]=>$adv):?>
                            <option><?=$adv['education']?></option>
                            <?endforeach?>
                    </select>
                </div>
                
            
            <div class="clearfix"></div>
            <input type="submit" name="filt_summ" value="Найти" class="btn" />
            <div class="clearfix"></div>
        </form>
        </div>
        <div class="clearfix"></div>
    </div>
    
<div class="main">    
        <table  class="table">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Работа</th>
                    <th>Опыт работы</th>
                    <th>ЗП</th>
                </tr>
            </thead>
            <tbody id="table_result">
            <?if(!empty($summarys)):?>
                <?foreach($summarys as $asd):?>
                <tr>
                    <td><?=$asd['data']?></td>
                    <td><a href="<?=base_url().'summary/'.$asd['id']?>"><?=$asd['title']?></a></td>
                    <td>
                    <? 
                        if(empty($asd['staj'])){
                            echo "Без опыта";
                        }else{
                            echo $asd['staj'];
                        }
                      
                     ?> 
                     </td>
                    <td>
                    <? 
                        if(empty($asd['zarplata'])){
                            echo "договорная";
                        }else{
                            echo $asd['zarplata']."руб";
                        }
                      
                     ?>
                    </td>
                </tr>
                <?endforeach;?>
            <?else:?>
                <tr>
                    <td><b>Результатов нет</b></td>
                </tr> 
            <?endif;?>   
            </tbody>
        </table>
    
</div>

<script>
$('select').each(function(){
	$(this).siblings('p').text( $(this).children('option:selected').text() );
});
$('select').change(function(){
	$(this).siblings('p').text( $(this).children('option:selected').text() );
});

</script>