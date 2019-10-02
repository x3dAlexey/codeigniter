<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Редоктирование</h1>
                <div class="b-form-tda">
                    <div class="demands-line">
                <div id="access_form_container" style="display: inline-block;">
                    <div>
                        <form id="access_form" method="post" action="<?=base_url().'admin/administration/edit/'.$item['id'].'?model='.$_GET['model']?>" enctype="multipart/form-data">
                            <ul class="b-form-tda__panel">
                                <li></li>
                                <li>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><label for="first_name">Название</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="title" value="<?=$item['title']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">дата</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="data" value="<?=$item['data']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">Которкий текст</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="short_text" value="<?=$item['short_text']?>"/></td>
                                            </tr>
                                            
                                            <tr>
                                                <td> Текст: </td>
                                                <td>
                                                <textarea id="access_description" name="text"><?=$item['text']?></textarea>
                                                <br/>
                                                </td>
                                            </tr>
                                            
                                            
                                            <input type="hidden" name="data" value="<?=date("d-m-Y")?>" />
                                            <tr>
                                                <td><input type="submit" name="<?=$_GET['model']?>" value="Сохранить" class="b-form-tda__action b-form-tda__action_type_add click" style="width: 80px; text-align: center;" /></td>
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