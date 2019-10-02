
<div class="main">
    <div class="com">
        <h2 class="left"><?=$summar['title']?></h2>
        
            <div class="clearfix"></div>
        <div class="info">
            
           <section>
                <strong>Город</strong><span><?=$summar['siti']?></span>
            </section>
            <section>
                <strong>Вид занятости</strong><span><?=$summar['type']?></span>
            </section>
            <section>
                <strong>Образование</strong><span><?=$summar['education']?></span>
            </section>
            <section>
                <strong>Обыт работы</strong><span><?=$summar['staj']?></span>
            </section>
        </div>
        <div class="com_price">
         <? 
            if(empty($summar['zarplata'])){
                echo "договорная";
            }else{
                echo $summar['zarplata']."руб";
            }
          
         ?> 
         </div>
            <div class="clearfix"></div>
         <div class="com-text">   
        <h3>Описание</h3>
        
            <p><?=$summar['text']?></p>
            
         
        </div>
         <div class="left">   
            <h4>Свзять с работодателем</h4>
            <div class="info" style="width:200px;">
            <section>
                <strong>Телефон</strong><span><?=$summar['phone']?></span>
            </section>
         
        </div>
            
        </div>
        <div class="clearfix"></div>
    </div>
    
</div>