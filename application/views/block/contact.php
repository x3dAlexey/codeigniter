<div class="main">

    <h1>Обратная связь</h1>
    <div class="register">
        
        
           <div class="body_tab">
                <form  action="<?=base_url().'frontend/contact'?>" method="POST" enctype="multipart/form-data">
                    <input class="txt" type="text" name="name" placeholder="Как вас зовут?" value=""  />
                    <input class="txt" type="text" name="email" placeholder="E-mail" value=""  />
                    <textarea class="txt" name="text"></textarea>
                  
                    <button class="butn">Сохранить</button>
                
                </form>
            </div>
            
        
    </div>


</div>
