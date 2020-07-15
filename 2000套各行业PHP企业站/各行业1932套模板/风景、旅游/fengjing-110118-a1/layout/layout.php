<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//åŠ è½½é¡µé¢å¤´éƒ¨
include_once('view/common/header.php');
?>

<div id="mainmaindiv">
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
		<!-- Õ¾µãÓïÑÔÄ£¿éStart -->
<div class="switch_langbar" style="float:right;margin-top:15px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- Õ¾µãÓïÑÔÄ£¿éEnd -->

	</div>
	<div class="main_top"></div>
	
	<div class="main_main_main">
	
	<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
	
	<div id="main_con">	
    <div class="web_bg">
    <?php 
		//--------------é¦–é¡µæ ·å¼ã€startã€?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
		<div id="left">		
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="centermain">
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
	
			<div id="center">
			<?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
			</div>
		</div>
		<div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>	
        <?php } 
		//--------------é¦–é¡µæ ·å¼ã€endã€?---------------------
		
		//--------------å†…é¡µæ ·å¼ã€startã€?-------------------
		else 
		{?>
        <div id="left">		
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="rightmain">
			<div id="banner1">
	<img src="<?php echo P_TPL_WEB; ?>/images/banner1.jpg" border="0" />
	</div>
			<div id="right1">
			
				<div id="right2">
				<?php include_once($_content_); ?>
				</div>
				
			</div>
		</div>
		
		<?php 
		//--------------å†…é¡µæ ·å¼ã€endã€?---------------------
		}?>
		<div class="blankbar1"></div>
	</div>
	
	</div></div>
	
	<div class="main_bot"></div>
</div>
<div class="footermain">
<?php 
//åŠ è½½é¡µé¢å°¾éƒ¨
include_once('view/common/footer.php');
?>
</div>