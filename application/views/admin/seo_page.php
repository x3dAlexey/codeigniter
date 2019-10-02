<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">SEO</h1>
              
                    <div id="pages" class="tab-pane active">
                   
                     
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="users-table__hcell">Операции</th>
                                    <th class="users-table__hcell">Страница</th>
                                    <th class="users-table__hcell">title</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($items as $item):?>
                                <tr class="users-table__row" data-id="456">
                                    <td id="pages" class="users-table__cell users-table__hcell_width">
                                        <div class="art_blok" >
                                            <ul>
                                                
                                                <li ><a href="<?=base_url().'admin/administration/seo_edit/'.$item['id']?>"><i class="icon-pencil"></i></a></li>
                                               
                                            </ul>
                                        </div>
                                        
                                    </td>
                                    <td width="100"><span><?=$item['page']?></span></td>
                                    <td class="users-table__cell"><span><?=$item['seo_title']?></span></td>
                                    
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>

</html>