   <link href="<?=base_url()?>css/main.css" rel="stylesheet" media="screen"/> 
    <link href="<?=base_url()?>icon/flaticon.css" rel="stylesheet" media="screen"/> 
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/normalize.css" />
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/component.css" />
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/cs-skin-border.css" />
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front/alegreya/alegreya.css" />
    
    <script src="<?=base_url()?>js/modernizr.custom.js"></script>
    <script src="<?=base_url()?>js/jquery-1.11.1.js"></script>
    <script src="<?=base_url()?>script/jquery.easing-1.3.js"></script>
    <script src="<?=base_url()?>script/jquery.mousewheel-3.1.12.js"></script>
    <script src="<?=base_url()?>js/jquery.jcarousellite.js"></script>
  <style>

  

  </style> 
  <script type="text/javascript">
    $(function() {
        $(".carousel").jCarouselLite({
            btnNext: ".arnext",
            btnPrev: ".arprev"
        });
    });
</script> 
<script type="text/javascript">
   $(document).ready(function(){
        //Скрыть логин
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    function privatShow(){
        $("#popup1").show();

    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
    
    function privatShow(){
        $("#privatPUP").show();
    }
        $("body").click(function(e) {
	       $("#privatPUP").hide();
           
	      });
          $("#privatPUP").click(function(e) {
    	    e.stopImmediatePropagation();
    	   })
           
    $(".rodsub").click(function(q){
        $(".submenu").show();
        q.stopImmediatePropagation();
        $("body").click(function(q) {
	       $(".submenu").hide();
           
	      });
    });
    
    
</script>            
         
</head>
<body>