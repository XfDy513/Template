<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>
<!--box-->
<div id="box">
<div id="main_div">
<div id="top">
<!-- վ������ģ��Start -->
<div class="switch_langbar" style="float:right;margin-top:25px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->

		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?>
            </div>
</div>
   
    
        <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
 </div>  
<div class="nav_b_bg"></div>

    <div id="banner">
	<?php 
		if (Content::countModules('banner') > 0 || Toolkit::editMode()) 
		{
			echo Content::loadModules('banner');
		} 
		else 
		{ ?>
		<img src="<?php echo P_TPL_WEB; ?>/images/banner.jpg" border="0" />
		<?php }?>
	</div>
   
	<div id="main_con" class="web_bg">
    
    <?php 
		//--------------首页样式【start�?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        <div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
        <div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>

 		<?php } 
		//--------------首页样式【end�?---------------------	
		//--------------内页样式【start�?-------------------
		else 
		{?>
<div id="left">
<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		
		<div id="right">
		<?php include_once($_content_); ?>
		</div>
        <?php 
		//--------------内页样式【end�?---------------------
		}?>


	</div>
</div>


<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>