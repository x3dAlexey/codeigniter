

<div class="main">
    <h1>Статьи</h1>
            <ul class="cbp_tmtimeline">
                <?foreach($lists as $list):?>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-10 18:30"> <span><?=$list['data']?></span></time>
							<div class="cbp_tmicon cbp_tmicon-mail"></div>
						<div class="cbp_tmlabel">
							<h2><a href="<?=base_url().'frontend/show/'.$list['id'].'/article'?>"><?=$list['title']?></a></h2>
							<p><?=$list['short_text']?></p>
                            </div>
					</li>
				<?endforeach;?>	
            </ul>
            <nav id="paginator" class="paginator">
                <?=$page_nav;?>
            </nav>

</div>
