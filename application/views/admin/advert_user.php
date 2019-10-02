<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Обьявления Юзера</h1>
            
                
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
                                    <th class="users-table__hcell">Компания</th>
                                    <th class="users-table__hcell">Город</th>
                                    <th class="users-table__hcell">ЗП</th>
                                    <th class="users-table__hcell">Статус</th>
                                    <th class="users-table__hcell">На главной и позиция</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($items as $item):?>
                            <?php
                             $CI =& get_instance ();
                             $cat=$CI->mdl_category->get($item['cat']);
                             $comany=$CI->mdl_login->get($item['user_id']);
                             
                            ?>
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
                                    <td width="100"><span><?=$item['data']?></span></td>
                                    <td width="300" class="users-table__cell"><span><?=$item['title']?></span></td>
                                    <td class="users-table__cell"><span><?=$cat['title']?></span></td>
                                    <td ><span><?=$comany['com_name']?></span></td>
                                    <td ><span><?=$item['siti']?></span></td>
                                    <td ><span><?=$item['zarplata']?></span></td>
                                    <td ><span><?=$item['status']?></span></td>
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