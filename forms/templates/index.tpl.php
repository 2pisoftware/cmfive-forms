<style>
<!--
.forms-app-box {
	width: 128px;
	height: 165px;
	
	float: left;
	margin: 12px;
}
-->
</style>

<?php
if (!empty($apps)) {
    foreach($apps as $app): ?>
        <div class="forms-app-box">
        <a href="<?php echo $w->localUrl("/forms/app/".$app->slug)?>"><img src="<?php echo FormsLib::getApplicationIcon($app)?>" width="128" height="128" border="0"/></a>
        <center><?php echo Html::a($w->localUrl("/forms/app/".$app->slug),$app->title);?></center>
        <?php if ($w->Auth->hasRole("forms_admin")):?>
        <center><?php echo Html::a($w->localUrl("/forms-app/view/".$app->id),"Edit");?></center>
        <?php endif;?>
        </div>
<?php endforeach;
}
?>