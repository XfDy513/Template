<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>

<div id="main_div">
	<div id="header">
		<div id="logo"><?php 
			if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
				echo Content::loadModules('logo');
			} else { ?>
				<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
		<?php }?>
		</div>
<!-- վ������ģ��Start -->
<div class="switch_langbar" >
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->
	</div>
	<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
        <?php 
		//--------------首页样式【start�?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>	
        <div id="main_con">
        <div class="web_bg">
		<div id="left">
			<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="rightmain">
			<div id="center">
			<div id="banner"><?php 
			if (Content::countModules('banner') > 0 || Toolkit::editMode()) 
			{
				echo Content::loadModules('banner');
			} 
			else 
			{ ?>
			<img src="<?php echo P_TPL_WEB; ?>/images/banner.jpg" border="0" />
			<?php }?>
			</div>
			<?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
			</div>
			<div id="right">			
			<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
			</div>
            <?php } 
		//--------------首页样式【end�?---------------------
		
		//--------------内页样式【start�?-------------------
		else 
		{?>
         <div id="main_con1">
		<div id="left">			
			<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="rightmain">
        <div id="right2">
			<?php include_once($_content_); ?>
			</div>
            
            <?php 
		//--------------内页样式【end�?---------------------
		}?>
		</div>
		<script>				
			$(".mod_block").each(function () {
				$('.newprod_title', this).text($(".blk_t", this).text());
				$('.recent_title', this).text($(".blk_t", this).text());
			});				
			
								
			$(".newprod_title").each(function () {
				if ( $(this).text() == ""){
					$(this).text("产品展示")
				};
			});	
		</script>
		<div class="blankbar1"></div>
	</div>
    </div>
</div>
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>    