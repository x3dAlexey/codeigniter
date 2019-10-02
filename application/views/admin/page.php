<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands"></h1>
                <div class="b-form-tda">
                    <div class="b-form-tda__editor">
                        <form class="b-action-form b-action-form_type_action" action="<?=base_url().'admin/administration/add?model='.$_GET['model']?>" method="POST">
                            
                            
                            <label for="first_name">Название</label>
    	  					<input type="text"  class="b-action-form__button deluser" name="title"  value="<?=set_value('title');?>"/>
                            <label for="first_name">Дата</label>
                            <input type="text"  class="b-action-form__button deluser" name="data" value="<?=date("d.m")?>" />
                            
                            <label for="first_name">Короткий текст</label>
                            <input type="text"  class="b-action-form__button deluser" name="short_text" value="" />
                            
                            <label for="Требования">Текст</label>
    	  					<textarea class=" seldeluser" name="text"></textarea>
                            <input class="b-action-form__button deluser" name="goAdver" type="submit"  value="выбрать"/>
                            
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="tab-content">
                
                    <div id="structure" class="tab-pane"></div>
                    <div id="pages" class="tab-pane active">
                   
                     
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="users-table__hcell">Операции</th>
                                    <th class="users-table__hcell">Дата</th>
                                    <th class="users-table__hcell">Название</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($items as $item):?>
                                <tr class="users-table__row" data-id="456">
                                    <td id="pages" class="users-table__cell users-table__hcell_width">
                                        <div class="art_blok" >
                                            <ul>
                                                <li style="margin-top: 4px;" ><a href="<?=base_url().'frontend/show/'.$item['id'].''?>" target="_blank" ><i class="icon-eye-open"></i></a></li>
                                                <li ><a href="<?=base_url().'admin/administration/edit/'.$item['id'].'?model='.$_GET['model'].'&url=page_edit'?>"><i class="icon-pencil"></i></a></li>
                                                <li><a href="<?=base_url().'admin/administration/del/'.$item['id'].'?model='.$_GET['model'].''?>"><i class="icon-remove"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                    </td>
                                    <td width="100"><span><?=$item['data']?></span></td>
                                    <td class="users-table__cell"><span><?=$item['title']?></span></td>
                                    
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