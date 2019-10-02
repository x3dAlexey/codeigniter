<div class="main">

    <h1>Редактирование личных данных</h1>
    <div class="register">
         <?if($this->session->userdata('type')=='com'):?>
           <div class="body_tab">
                <form  action="<?=base_url().'privates/edit_user/'.$user['id']?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="com" />
                    <input type="hidden" name="forgot_password_key" value="" />
                    <span class="set_masege"><?=form_error('com_name');?></span>
                    <input class="txt" type="text" name="com_name" placeholder="Название компании" value="<?=$user['com_name'];?>" />
                    <span class="set_masege"><?=form_error('email');?></span>
                    <input class="txt" type="text" name="email" placeholder="E-mail" value="<?=$user['email'];?>"  />
                    <span class="set_masege"><?=form_error('password');?></span>
                    
                    <label><strong>Логотип</strong></label>
                    <span>добавте снова логотип</span>
                    <div class="fileform">
                        
                        <div id="fileformlabel"></div>
                        <div class="selectbutton">Обзор</div>
                        <input type="file" name="userfile" id="upload" onchange="getName(this.value);" />
                    </div>
                    <br />
                    
                    <input type="hidden" name="password" value="<?=$this->session->userdata('password') ?>" />
                    <input class="txt" type="text" name="phone" placeholder="Телефон/факс" value="<?=$user['phone'];?>" />
                    <textarea class="txt" name="info" placeholder="Описание"><?=$user['info'];?></textarea>
                    <button class="butn" name="userEdit" >Сохранить</button>
                
                </form>
            </div>
        <?elseif($this->session->userdata('type')=='user'):?>
            <div class="body_tab">
                    <form  action="<?=base_url().'privates/edit_user/'.$user['id']?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="user" />
                        <input type="hidden" name="forgot_password_key" value="" />
                        <span class="set_masege"><?=form_error('first_name');?></span>
                        <input class="txt" type="text" name="first_name" placeholder="Название компании" value="<?=$user['first_name'];?>" />
                        <span class="set_masege"><?=form_error('email');?></span>
                        <input class="txt" type="text" name="email" placeholder="E-mail" value="<?=$user['email'];?>"  />
                        <span class="set_masege"><?=form_error('password');?></span>
                        
                      
                        
                        <input type="hidden" name="password" value="<?=$this->session->userdata('password') ?>" />
                        <input class="txt" type="text" name="phone" placeholder="Телефон/факс" value="<?=$user['phone'];?>" />
                        <textarea class="txt" name="info" placeholder="Описание"><?=$user['info'];?></textarea>
                        <button class="butn" name="userEdit" >Сохранить</button>
                    
                    </form>
                </div>
        <?endif;?>
    </div>


</div>
<script>
function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }						
    var filename = str.slice(i);			
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}
</script>