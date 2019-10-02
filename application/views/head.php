<!DOCTYPE HTML>
<html>
<head>

    
    <?if(!empty($seo)):?>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="Keywords" content="<?=$seo['keywords']?>" />
    <meta name="Description" content="<?=$seo['description']?>" />

	<meta name="author" content="x3d" />
    <title><?=$seo['seo_title']?></title>
    <?else:?>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="Keywords" content="Работа в крыму, вакансии в крыму, работа в севастополе, поиск работы в крыму, вакансии крым, работа в симферополе" />
    <meta name="Description" content="adtwork.ru сайт по поиску работы в крыму и симферополе, подбор сотрудников,рассылка свежих вакансий" />

	<meta name="author" content="x3d" />
    <title>Работа в крыму, свежие вакансии в Крыму, работа в Симферополе</title>
    
    <?endif;?>