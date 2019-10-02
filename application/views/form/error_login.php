<div class="main">

    <h1>Вход</h1>
    <div class="register">
        
           <div class="body_tab">
                <form  action="<?=base_url().'logins/login'?>" method="POST" enctype="multipart/form-data">
                    <span class="set_masege">Ошибка, неверный E-mail или Пароль</span>
                    <input class="txt" type="text" name="email" placeholder="E-mail" value=""  />
                    <input class="txt" type="password" name="password" placeholder="Пароль" value=""  />
                  
                    <button class="butn" name="userEdit" >Сохранить</button>
                
                </form>
            </div>
            <hr />
            <h3>Забыли пароль?</h3>
            <div class="body_tab">
                <form  action="<?=base_url().'logins/recovery'?>" method="POST" enctype="multipart/form-data">
                    <span class="set_masege">На вашу почту прийдет письмо с интрукциями</span>
                    <input class="txt" type="text" name="email" placeholder="E-mail" value=""  />
                  
                    <button class="butn" name="recovery" >Отправить</button>
                
                </form>
            </div>
        
    </div>


</div>
