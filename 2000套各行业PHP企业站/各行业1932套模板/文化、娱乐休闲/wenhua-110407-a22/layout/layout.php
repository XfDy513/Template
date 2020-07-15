<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//鍔犺浇椤甸潰澶撮儴
include_once('view/common/header.php');
?>
<!--main_div-->
<div id="main_div">
<!--header-->
<div id="header">
		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?>
            </div>
<!-- 站点语言模块Start -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->
	</div>
<!--header end-->
<!--mainmain-->
<div id="mainmain">
<!--nav-->
  <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>  
<!--nav end-->
<!--custom-->
<div class="custom">
<div id="cus_v_01"><?php if (Content::countModules('user1') > 0 || Toolkit::editMode()) Content::loadModules('user1'); ?></div>
<div id="cus_v_02"><?php if (Content::countModules('user2') > 0 || Toolkit::editMode()) Content::loadModules('user2'); ?></div>
</div>
<!--custom end-->
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
		//--------------棣栭〉鏍峰紡銆恠tart銆?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
		<div id="left"><?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?></div>
        <div id="center"><?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?></div>
        <div id="right"><?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?></div>
        
 		<?php } 
		//--------------棣栭〉鏍峰紡銆恊nd銆?---------------------	
		//--------------鍐呴〉鏍峰紡銆恠tart銆?-------------------
		else 
		{?>
        <div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="web_right">
        <?php include_once($_content_); ?>
		</div>
        <?php 
		//--------------鍐呴〉鏍峰紡銆恊nd銆?---------------------
		}?>
       
        <div class="blankbar"></div>
	</div>
        </div>
 <!--mainmain end-->
</div>
<!--main_div end-->  
<?php 
//鍔犺浇椤甸潰灏鹃儴
include_once('view/common/footer.php');
?>