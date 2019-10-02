<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Редоктирование Обьявления</h1>
                <div class="b-form-tda">
                    <div class="demands-line">
                <div id="access_form_container" style="display: inline-block;">
                    <div>
                        <form id="access_form" method="post" action="<?=base_url().'admin/administration/edit/'.$item['id'].'?model=catalog'?>" enctype="multipart/form-data">
                            <ul class="b-form-tda__panel">
                                <li></li>
                                <li>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><label for="first_name">Название работы</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="title" value="<?=$item['title']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">Зп</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="zarplata" value="<?=$item['zarplata']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">Телефон</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="phone" value="<?=$item['phone']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="access_type">Категории</label></td>
                                                <td>
                                                    <select id="access_type" name="cat" style="width: 150px">
                                                       <?foreach($category as $cate):?>
                                                        <option <?if($item['cat']==$cate['id']) echo 'selected="selected"';?>  value="<?=$cate['id']?>"><?=$cate['title']?></option>
                                                        <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><label for="access_type">Город</label></td>
                                                <td>
                                                    <select id="access_type" name="siti" style="width: 150px">
                                                       <?foreach($sitis as $siti):?>
                            								<option <?if($item['siti']==$siti['siti']) echo 'selected="selected"';?> ><?=$siti['siti'];?></option>
                            						    <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><label for="access_type">Юзер</label></td>
                                                <td>
                                                    <select id="access_type" name="user_id" style="width: 150px">
                                                       <option value="1">Админ</option>
                                                        <?foreach($coms as $com):?>
                            								<option <?if($item['user_id']==$com['id']) echo 'selected="selected"';?> value="<?=$com['id'];?>" ><?=$com['com_name'];?></option>
                            						    <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><label for="last_name">Компания</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="company" value="<?=$item['company']?>"/></td>
                                            </tr>
                                             
                                             <?if($item['fron_page']=='1'):?><?endif?>
                                             <tr>
                                                <td><label for="access_type">На Главной</label></td>
                                                <td>
                                                    
                                                    <select id="access_type" name="fron_page" style="width: 150px">
                            							
                                                            <option value="0">Нет</option>
                                                            <option <?if($item['fron_page']=='1')echo 'selected="selected"';?> value="1">ДА</option>
                                                           
                      						    
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td><label for="access_type">Позиция на главной</label></td>
                                                <td>
                                                    <select id="access_type" name="rating" style="width: 150px">
                            								<option selected="selected"><?=$item['rating']?></option>
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
                                                </td>
                                             </tr>
                                             <input type="hidden" name="ratid" value="<?=$rat['id'];?>" />
                                             
                                             <tr>
                                                <td><label for="access_type">Статус</label></td>
                                                <td>
                                                    <select id="access_type" name="status" style="width: 150px">
                            								<option selected="selected"><?=$item['status'];?></option>
                                                            <option>vip</option>
                                                            <option>noob</option>
                      						    
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td><label for="access_type">Образование</label></td>
                                                <td>
                                                    <select id="access_type" name="education" style="width: 150px">
                                                        <option value=""></option>
                                                        <?foreach($advanc as $key[0]=>$adv):?>
                                                        <option <?if($item['education']==$adv['education']) echo 'selected="selected"';?> ><?=$adv['education'];?></option>
                                                        <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><label for="access_type">Опыт работы</label></td>
                                                <td>
                                                    <select id="access_type" name="staj" style="width: 150px">
                                                        <option value=""></option>
                                                        <?foreach($advanc as $key[1]=>$adv):?>
                                                        <option <?if($item['staj']==$adv['staj']) echo 'selected="selected"';?> ><?=$adv['staj'];?></option>
                                                        <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><label for="access_type">Вид занятости</label></td>
                                                <td>
                                                    <select id="access_type" name="type" style="width: 150px">
                                                       <option value=""></option>
                                                        <?foreach($advanc as $key[2]=>$adv):?>
                                                        <option <?if($item['type']==$adv['type']) echo 'selected="selected"';?> ><?=$adv['type'];?></option>
                                                        <?endforeach?>
                                                    </select>
                                                </td>
                                             </tr>
                                             
                                            <tr>
                                                <td> Текст: </td>
                                                <td>
                                                <textarea id="access_description" name="text"><?=$item['text']?></textarea><?=form_error('main_text');?>
                                                <br/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Требования: </td>
                                                <td>
                                                <textarea id="access_description" name="req"><?=$item['req']?></textarea><?=form_error('main_text');?>
                                                <br/>
                                                </td>
                                            </tr>
                                            
                                            <input type="hidden" name="data" value="<?=date("d-m-Y")?>" />
                                            <tr>
                                                <td><input type="submit" name="catalog" value="Сохранить" class="b-form-tda__action b-form-tda__action_type_add click" style="width: 80px; text-align: center;" /></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            
                            </ul>
                        </form>
                    </div>
                </div>
                
                
                                                
            </div>
                </div>
                
            </div>
        </div>
    </div>

</body>

</html>