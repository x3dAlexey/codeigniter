<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Управление Статьями/Категориями</h1>
            
                
                <div class="tab-content">
                <a class="b-content__link formadd click" href="<?=base_url().'admin/ad_article/add_art'?>">
                    <i class="b-admin-bar__icon b-content__icon"></i><span class="icon-qq" >добавить статью</span> </a>
                    <div id="structure" class="tab-pane"></div>
                    <div id="pages" class="tab-pane active">
                    <?php if($_GET['q']=='admin'):?>
                     
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="users-table__hcell">Операции</th>
                                    <th class="users-table__hcell">Дата</th>
                                    <th class="users-table__hcell">Название</th>
                                    <th class="users-table__hcell">Категории</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($items as $item):?>
                                <tr class="users-table__row" data-id="456">
                                    <td id="pages" class="users-table__cell users-table__hcell_width">
                                        <div class="art_blok" >
                                            <ul>
                                                <li style="margin-top: 4px;" ><a href="<?=base_url().'articles/show_page/'.$item['id'].''?>" target="_blank" ><i class="icon-eye-open"></i></a></li>
                                                <li ><a href="<?=base_url().'admin/ad_article/update_art/'.$item['id'].''?>"><i class="icon-pencil"></i></a></li>
                                                <li><a href="<?=base_url().'admin/ad_article/delete_art/'.$item['id'].''?>"><i class="icon-remove"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </td>
                                    <td width="700"><span><?=$item['data']?></span></td>
                                    <td class="users-table__cell"><span><?=$item['title']?></span></td>
                                    <td class="users-table__cell users-table__hcell_width1"><span><?=$item['data']?></span></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    <?endif;?>
                    </div>
                </div>
                <?=$page_nav?>
            </div>
        </div>
    </div>

</body>

</html>