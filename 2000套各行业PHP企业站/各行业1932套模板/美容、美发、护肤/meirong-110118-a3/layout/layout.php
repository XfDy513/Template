<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//����ҳ��ͷ��
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
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>upload/image/sitelogo.png" border="0" /></a>
			<?php }?>
            	</div>
<!-- վ������ģ��Start -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->
	</div>
<!--header end-->
    
<!--nav-->
  <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>  
<!--nav end-->

<!--mainmain-->
<div id="mainmain">
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
	<div id="main_con" class="web_bg" class="web_bg">
    <?php 
		//--------------��ҳ��ʽ��start��-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
		<div id="i_left"><?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?></div>
        <div id="center"><?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?></div>
        <div id="i_right"><?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?></div>
        
 		<?php } 
		//--------------��ҳ��ʽ��end��----------------------	
		//--------------��ҳ��ʽ��start��--------------------
		else 
		{?>
        <div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="right">
        <?php include_once($_content_); ?>
		</div>
        <?php 
		//--------------��ҳ��ʽ��end��----------------------
		}?>
       
        <div class="blankbar"></div>
	</div>
        </div>
 <!--mainmain end-->   
</div>
<!--main_div end-->  
<?php 
//����ҳ��β��
include_once('view/common/footer.php');
?>