<div class="main">
<?if($user['type']=='com'):?>
    <h1>Личный кабинет,<?=$user['com_name']?></h1>
    <div class="provile">
        
            <img src="<?=base_url().'images/coms/'.$user['img']?>" />
            <a class="prov_href" href="<?=base_url().'privates/advert_add'?>">Добавить объявление</a>
            <a class="prov_red" href="<?=base_url().'privates/edit_user/'.$user['id']?>">Редактировать</a>
            <a class="prov_red" href="<?=base_url().'logins/logout'?>">Выход</a>
        
       
            <ul class="prov_info">
                
                <li><strong>E-mail</strong> <?=$user['email']?></li>
                <li><strong>Название компании</strong> <?=$user['com_name']?></li>
                <li><strong>Телефон</strong><?=$user['phone']?></li>
                <li>
                    <strong>Информация</strong><br />
                    <p><?=$user['info']?></p>
                </li>
                
            </ul>
        
    </div>
    
    <div class="prov_tabs">
    <h3 style="text-align: center;">Ваши Обьявления</h3>
   
        <table  class="table">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Работа</th>
                    <th>ЗП</th>
                    <th>Опции</th>
                </tr>
            </thead>
            <tbody id="table_result">
            <?if(!empty($free)):?>
                <?foreach($free as $asd):?>
                <tr>
                    <td><?=$asd['data']?></td>
                    <td><a href="<?=base_url().'advert/'.$asd['id']?>"><?=$asd['title']?></a></td>
                    <td>
                    <? 
                        if(empty($asd['zarplata'])){
                            echo "договорная";
                        }else{
                            echo $asd['zarplata']."руб";
                        }
                      
                     ?> 
                    </td>
                    <td><a href="<?=base_url().'privates/advert_edit/'.$asd['id']?>">Редактировать</a>/<a href="<?=base_url().'privates/advert_del/'.$asd['id']?>">Удалить</a> </a></td>
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
<?elseif($user['type']=='user'):?>
    <h1>Личный кабинет,<?=$user['first_name']?></h1>
    <div class="provile">
        
           
            
            <a class="prov_red" href="<?=base_url().'privates/edit_user/'.$user['id']?>">Редактировать</a>
            <a class="prov_del" href="">Удалить</a>
        
       
            <ul class="prov_info">
                
                <li><strong>E-mail</strong> <?=$user['email']?></li>
                <li><strong>Ф.И.О</strong> <?=$user['first_name']?></li>
                <li><strong>Телефон</strong><?=$user['phone']?></li>
                <li>
                    <strong>Информация</strong><br />
                    <p><?=$user['info']?></p>
                </li>
                
            </ul>
        
    </div>
    
    <div class="prov_tabs">
    <h3 style="text-align: center;">Ваши Подписки</h3>
   
        <table  class="table">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Работа</th>
                    <th>ЗП</th>
                    <th>Опции</th>
                </tr>
            </thead>
            <tbody id="table_result">
            <?if(!empty($free)):?>
                <?foreach($free as $asd):?>
                <tr>
                    <td><?=$asd['data']?></td>
                    <td><a href="<?=base_url().'advert/'.$asd['id']?>"><?=$asd['title']?></a></td>
                    <td>
                    <? 
                        if(empty($asd['zarplata'])){
                            echo "договорная";
                        }else{
                            echo $asd['zarplata']."руб";
                        }
                      
                     ?> 
                    </td>
                    <td><a href="<?=base_url().'privates/advert_edit/'.$asd['id']?>">Редактировать</a>/<a href="<?=base_url().'privates/advert_del/'.$asd['id']?>">Удалить</a> </a></td>
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
<?endif;?>
</div>