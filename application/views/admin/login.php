<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="The Sabotage Rebellion hackers" />

	<title>Untitled 1</title>
</head>

<script type="text/javascript" src="<?=base_url()?>js/jquery-2.0.2.js"></script>

<style>
body{
    position: relative;
}
.q1{
        background:  url(../../img/admin/moria.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
#moria{
    position: relative;
    display: block;
    margin:0 auto;
    width: 200px;
    height: 200px;
    margin-top:40%;

}
.q2{
    background:  url(../../img/admin/moria2.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
.b-popup {
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    min-height: 100%;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999999;
}
.b-popup .b-popup-content {
    background-color: #fff;
    box-shadow: 0 0 10px #000;
    color: #4d4d4d;
    height:100px;
    margin: 150px auto;
    padding: 20px;
    position: relative;
    width:150px;
}
</style>
<script>
$(document).ready(function(){
    $("#moria").mouseover(function(){
       $("body").addClass('q2');
    });
   

});
</script>

<body class="q1">


<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <a class="hidepup" href="javascript:PopUpHide()"></a>
        <form class="authForm" method="post" action="<?=base_url().'admin/administration/login'?>" >
            <span>Скажи друг и Входи</span>
           <input type="text" name="pipl" />
           <input type="submit" />
            
        </form>
    </div>
</div>
<a id="moria" href="javascript:PopUpShow()"></a>
<script>
function PopUpShow(){
        $("#popup1").show();
    }
    function privatShow(){
        $("#popup1").show();

    }
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>
</body>
</html>