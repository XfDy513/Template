<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//����ҳ��ͷ��
include_once('view/common/header.php');
?>
<div id="main_div">
	
	<div id="header">
		<div id="logo">
		<?php 
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
		
		</div>	
	
	<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
	
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
	
	<div id="main_con">	
    <div class="web_bg">
    	<?php 
		//--------------��ҳ��ʽ��start��-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
		<div id="left">		
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
         <?php } 
		//--------------��ҳ��ʽ��end��----------------------
		
		//--------------��ҳ��ʽ��start��--------------------
		else 
		{?>
        <div id="left1">		
			<div id="right2">
			<?php include_once($_content_); ?>
			</div>
		</div>
        <?php 
		//--------------��ҳ��ʽ��end��----------------------
		}?>
		<div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>
		<div class="blankbar"></div>			
	</div>
    </div>
</div>
<div class="footermain">
<?php 
//����ҳ��β��
include_once('view/common/footer.php');
?>
</div>