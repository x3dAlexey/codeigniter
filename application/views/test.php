<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="The Sabotage Rebellion hackers" />

	<title></title>

    <link href="<?=base_url()?>css/test.css" rel="stylesheet" media="screen"/> 
</head>
<body>

<?php
$url = file_get_contents( 'http://www.work.ua/jobs-it-%D1%81%D0%B8%D0%BC%D1%84%D0%B5%D1%80%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C/' );
preg_match_all( "#<a [^>]*href=\"\/jobs\/(\d+)\/\"[^>]*>#Ui" , $url , $result );

foreach($result[1] as $val){
    $obv = file_get_contents( 'http://www.work.ua/jobs/'.$val.'/' );
    
    preg_match("/<h1>(.*)<\/h1>/",$obv,$parstitl);
    $title = $parstitl[1];
   
    preg_match("/<b>(\d+)<\/b>/",$obv,$parssile);
    $rbk = $parssile[1];
    if($rbk==null){
        $rbk=0;
    }
   
    
    
    preg_match_all("/<p>(.*?)<\/p>/",$obv,$parsetext);
    
    $text = implode("", $parsetext[0]);
   
    
    preg_match_all("/<td>(.*?)<\/td>/",$obv,$parseph);
    
    if(preg_match("/[0-9]{10,10}+$/", $parseph[1][4])){
       $phone = $parseph[1][4];
 
    }else{
        $phone = 0;
    }
    
    
    preg_match_all("/<li>(.*?)<\/li>/",$obv,$q);
    print_r($q[0]);
    
    $array =array(
        "cat"=>"5",
        "status"=>"noob",
        "fron_page"=>"0",
        "user_id"=>"1",
        "zarplata"=>$rbk,
        "siti"=>"Симферополь",
        "title"=>$title,
        "type"=>"Полная занятость",
        "text"=>$text,
        "phone"=>$phone,
        "data"=>date("Y-m-d")
    );
    //$this->mdl_catalog->addAll($array);
}





?>



<?php
//$text = file_get_contents( 'http://www.work.ua/jobs/1762328/' );









// preg_match("/<h1>(.*)<\/h1>/",$text,$title);
// деньги preg_match_all("/<b>(\d+)<\/b>/",$text,$title);

/* текст
preg_match_all("/<p>(.*?)<\/p>/",$text,$title);
foreach($title as $k=>$v){
    $result = implode("", $v);
    print_r($result);
}
*/

?>


</body>
</html>