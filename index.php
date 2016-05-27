<?php
 //ini_set("display_errors",0);
 require_once("si.php");
 require_once("header.phtml");
?>
	<div id="slider" class="nivoSlider">
<? 
	$slider = sidb::getAsArray('select * from sis_slider order by o');
	if(count($slider) > 0){
	foreach($slider as $slide){
		if ($slide['url'] != ''){
			print '<a href="'.$slide['url'].'">';
		}
		print '<img src="/slider/'.$slide['id'].'.jpg" alt="slider" />';
		if ($slide['url'] != ''){
			print '</a>';
		}
	}
	}
?>
    </div>
	<div class="list-catalog">
		<?php
			echo category::menu_left();
		?>
	</div>
	<div class="index_blocks">
		<div class="item">
			<h3>
			<a href="http://et-e.com.ua/ru/page/hlebopekarnoe-konditerskoe-oborudovanie">
				<img src="/images/index_blocks/i_1.png" alt="<?= __('iblock1') ?>" />
				<span>
					<?= __('iblock1') ?>
				</span>
			</a>
			</h3>
		</div>
		<div class="item">
			<h3>
			<a href="http://et-e.com.ua/ru/page/oborudovanie-dlya-restoranov-kafe-barov-stolovyh-fast-food">
				<img src="/images/index_blocks/i_2.png" alt="<?= __('iblock2') ?>" />
				<span>
					<?= __('iblock2') ?>
				</span>
			</a>
			</h3>
		</div>
		<div class="item">
			<h3>
			<a href="http://et-e.com.ua/ru/page/oborudovanie-dlya-pitstseriy-ulichnoy-torgovli">
				<img src="/images/index_blocks/i_3.png" alt="<?= __('iblock3') ?>" />
				<span>
					<?= __('iblock3') ?>
				</span>
			</a>
			</h3>
		</div>
		<div class="item">
			<h3>
			<a href="http://et-e.com.ua/ru/page/torgovoe-oborudovanie-dlya-supermarketov-magazinov">
				<img src="/images/index_blocks/i_4.png" alt="<?= __('iblock4') ?>" />
				<span>
					<?= __('iblock4') ?>
				</span>
			</a>
			</h3>
		</div>
		<div class="item last">
			<h3>
			<a href="http://et-e.com.ua/ru/page/oborudovanie-dlya-gostinits">
				<img src="/images/index_blocks/i_6.jpg" alt="<?= __('iblock6') ?>" />
				<span>
					<?= __('iblock6') ?>
				</span>
			</a>
			</h3>
		</div>
		<div class="clr"></div>
	</div>
	<a href="http://et-e.com.ua/ru/page/stoki" title="<?= __('iblock5') ?>" class="stoki-block">
		<img src="images/link-button_q.jpg" width="100%">
	</a>
	<?php
		$actual = sidb::getAsArray('select * from sis_products where actual = 1 and disabled = 0 limit 8');
		if(count($actual) > 0) {
	?>
	<div class="products-category-block allotted">
		<h3>
		<img src="images/allotted.png" width="100%">
		<?/*= __('EQUIPMENT_BESTSELLERS')*/?></h3>
	<?php
		$c = 1;
		foreach($actual as $pitem){
			print render::productDiv($pitem,$c % 4 ? false : true);
			$c++;
		}
	?>
	</div>
	<?php
		}
		$specials = sidb::getAsArray('select * from sis_products where 
			specialprice > 0 and spto > now() and spfrom < now() limit 8');
		//print_r($specials);
		if (count($specials) > 0){
	?>
	<div class="products-category-block allotted">
		<h3><?= __('Action_goods')?></h3>
	<?php
		$c = 1;
		foreach($specials as $special){
			print render::productDiv($special,$c % 4 ? false : true,true);
			$c++;
		}
	?>
	</div>
	<?
		}
	?>
	<div class="all-content">
		<h3><?= __('ABOUT_US')?></h3>
		<div class="text-all">
			<? echo render::_r(69,'page','content'); ?>
		</div>
	</div>
<?php
 require_once("footer.phtml");
 ?>