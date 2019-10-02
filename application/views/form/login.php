<div class="main">

    <h1>Вход</h1>
    <div class="register">
        
           <div class="body_tab">
                <form  action="<?=base_url().'logins/login'?>" method="POST" enctype="multipart/form-data">
                    
                    <input class="txt" type="text" name="email" placeholder="E-mail" value=""  />
                    <input class="txt" type="password" name="password" placeholder="Пароль" value=""  />
                  
                    <button class="butn" name="userEdit" >Войти</button>
                
                </form>
            </div>
            <hr />
           
    </div>


</div>
