<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Пользователи</h1>
               
                <div class="clear"></div>
                <div class="tab-content">
                
                    <div id="structure" class="tab-pane"></div>
                    <div id="pages" class="tab-pane active">
                   
                   <div class="section">  
                          <ul class="tabs">  
                            <li class="current">Компании</li>  
                            <li>Юзеры</li>  
                          </ul> 
                          <div class="clearfix"></div> 
                          <div class="box visible">  
                          <h3>Компании</h3>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="users-table__hcell">Операции</th>
                                        <th class="users-table__hcell">id</th>
                                        <th class="users-table__hcell">Название компании</th>
                                        <th class="users-table__hcell">мыло</th>
                                        <th class="users-table__hcell">Телефон</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items_com as $item):?>
                                    <tr class="users-table__row" data-id="456">
                                        <td id="pages" class="users-table__cell users-table__hcell_width">
                                            <div class="art_blok" >
                                                <ul>
                                                     <li><a href="<?=base_url().'admin/administration/del/'.$item['id'].'?model='.$_GET['model'].''?>"><i class="icon-remove"></i></a></li>
                                                </ul>
                                            </div>
                                            
                                        </td>
                                        <td width="100"><span><?=$item['id']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['com_name']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['email']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['phone']?></span></td>
                                        
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>  
                          <div class="box">  
                            <h3>юзеры</h3>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="users-table__hcell">Операции</th>
                                        <th class="users-table__hcell">id</th>
                                        <th class="users-table__hcell">Юзер</th>
                                        <th class="users-table__hcell">мыло</th>
                                        <th class="users-table__hcell">Телефон</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items_user as $item):?>
                                    <tr class="users-table__row" data-id="456">
                                        <td id="pages" class="users-table__cell users-table__hcell_width">
                                            <div class="art_blok" >
                                                <ul>
                                                    <li><a href="<?=base_url().'admin/administration/del/'.$item['id'].'?model='.$_GET['model'].''?>"><i class="icon-remove"></i></a></li>
                                                </ul>
                                            </div>
                                            
                                        </td>
                                        <td width="100"><span><?=$item['id']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['first_name']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['email']?></span></td>
                                        <td class="users-table__cell"><span><?=$item['phone']?></span></td>
                                        
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>  
                       
                        
                     </div><!-- .section -->  
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<script>

</script>
</body>

</html>