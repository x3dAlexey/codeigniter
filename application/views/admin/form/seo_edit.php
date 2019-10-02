<div class="content">
        <div class="content__right">
            <h1 class="content__title-demands">Редоктирование SEO</h1>
                <div class="b-form-tda">
                    <div class="demands-line">
                <div id="access_form_container" style="display: inline-block;">
                    <div>
                        <form id="access_form" method="post" action="<?=base_url().'admin/administration/seo_edit/'.$item['id']?>" enctype="multipart/form-data">
                            <ul class="b-form-tda__panel">
                                <li></li>
                                <li>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><label for="first_name">Страница</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="page" value="<?=$item['page']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">seo_title</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="seo_title" value="<?=$item['seo_title']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">description</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="description" value="<?=$item['description']?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><label for="last_name">keywords</label></td>
                                                <td><input id="access_image_upload" class="hover" type="text" name="keywords" value="<?=$item['keywords']?>"/></td>
                                            </tr>
                                         
                                            
                                            
                                            
                                            <tr>
                                                <td><input type="submit"  value="Сохранить" class="b-form-tda__action b-form-tda__action_type_add click" style="width: 80px; text-align: center;" /></td>
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