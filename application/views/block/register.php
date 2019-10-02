
<div class="main">
    <div class="register">
        <h1>Зарегистрируйтесь</h1>
        <div class="error"><?=$this->session->userdata('user_data')?></div>
        <?=$this->session->flashdata('user_data');?>
        <div id="tabs">
            <ul class="hed-tabs">
                <li><a href="#tabs-1">Работодатель</a></li>
                <li><a href="#tabs-2">Пользователь</a></li>
                <div class="clearfix"></div>
            </ul>
            
            <div  class="body_tab" id="tabs-1">
                <form id="comForm"  action="<?=base_url().'logins/register_com'?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="com" />
                    <input type="hidden" name="forgot_password_key" value="" />
                    
                    <span class="set_masege"><?=form_error('com_name');?></span>
                    <input  id="comname"  class="txt" type="text" name="com_name" placeholder="Название" value="" />
                    
                    <span class="set_masege"><?=form_error('email');?></span>
                    <input  id="email" class="txt" type="text" name="email" placeholder="E-mail" value=""  />
                    
                    
                    <input id="password" class="txt" type="password" name="password" placeholder="Пароль"  />
                    <input id="repeat_password" class="txt" type="password" name="repeat_password" placeholder="Повтор пароля" />
                    
                   <label><strong>Логотип</strong></label>
                    <div class="fileform">
                        
                        <div id="fileformlabel"></div>
                        <div class="selectbutton">Обзор</div>
                        <input type="file" name="userfile" id="upload" onchange="getName(this.value);" />
                    </div>
                    <br />
                    <input class="txt" type="text" name="phone" placeholder="Телефон/факс" value="<?=set_value('phone');?>" />
                    <textarea class="txt" name="info" placeholder="Описание"><?=set_value('info');?></textarea>
                    <button class="butn" name="reg_com" >Зарегестрироватся</button>
                
                </form>
            </div>
            <div   class="body_tab" id="tabs-2">
                <form id="uzForm"  action="<?=base_url().'logins/register_com'?>" method="POST">
                    <input type="hidden" name="type" value="user" />
                    
                    <input type="hidden" name="forgot_password_key" value="" />
                    <input class="txt" type="text" name="first_name" placeholder="ФИО" />
                    <input class="txt" type="text" name="email" placeholder="E-mail"  />
                    <input id="pass" class="txt" type="password" name="password" placeholder="Пароль"  />
                    <input id="rep_pass" class="txt" type="password" name="rep_pass" placeholder="Повтор пароля" />
                   
                    
                    <input class="txt" type="text" name="phone" placeholder="Телефон/факс" />
                    <textarea class="txt" name="info" placeholder="Описание"></textarea>
                    <button class="butn" name="reg_com" >Зарегестрироватся</button>
                
                </form>
            </div>
        
        </div>
    </div>
</div>

<script src="<?=base_url()?>js/valid/jquery.js"></script>
<script src="<?=base_url()?>js/valid/jquery.validate.js"></script>
	<script>
	
		// validate the comment form when it is submitted
	

		// validate signup form on keyup and submit
		$("#comForm").validate({
			rules: {
				com_name: {
					required: true,
					minlength: 1
				},
				password: {
					required: true,
					minlength: 5
				},
				repeat_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
			
			},
			messages: {
				com_name: "Введите название компании",
				
				password: {
					required: "Пароль обязателен",
					minlength: "Ваш пароль меньше 5 символов"
				},
				repeat_password: {
					required: "Повторите ваш пароль",
					minlength: "Ваш пароль меньше 5 символов",
					equalTo: "Пожалуйста, введите тот же пароль, что и выше"
				},
				email: "email обязателен",
				
			}
		});
        // пользователь
        $("#uzForm").validate({
			rules: {
				first_name: {
					required: true,
					minlength: 5
				},
				pass: {
					required: true,
					minlength: 5
				},
				rep_pass: {
					required: true,
					minlength: 5,
					equalTo: "#pass"
				},
				email: {
					required: true,
					email: true
				},
			
			},
			messages: {
				first_name: "Введите ФИО",
				
				pass: {
					required: "Пароль обязателен",
					minlength: "Ваш пароль меньше 5 символов"
				},
				rep_pass: {
					required: "Повторите ваш пароль",
					minlength: "Ваш пароль меньше 5 символов",
					equalTo: "Пожалуйста, введите тот же пароль, что и выше"
				},
				email: "email обязателен",
				
			}
		});

	

	</script>

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
//таблица в регистрации
        
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>