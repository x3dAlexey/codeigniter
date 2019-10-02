<!DOCTYPE html>
<html>
<head>
<title></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?=base_url()?>css/admin/style.css"/>  
    
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
    <script>
    (function($) {  
$(function() {  
  
  $('ul.tabs').on('click', 'li:not(.current)', function() {  
    $(this).addClass('current').siblings().removeClass('current')  
      .parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();  
  })  
  
})  
})(jQuery) 
    </script>
    
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
  
</head>
