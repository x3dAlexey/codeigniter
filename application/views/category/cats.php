<div class="main">
            <h1>Поиск работы по разделам в Крыму</h1>
                            
                            <ul class="cate_cats category">
                                <? foreach($category as $cat):?>
                                    <li><a href="<?=base_url().'razdels/'.$cat['alt']?>"><?=$cat['title']?></a></li>
                                <?endforeach;?>
                               
                            </ul> 
 </div>