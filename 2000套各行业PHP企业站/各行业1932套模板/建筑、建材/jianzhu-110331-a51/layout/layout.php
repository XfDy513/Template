<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//åŠ è½½é¡µé¢å¤´éƒ¨
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
        <!-- Õ¾µãÓïÑÔÄ£¿éStart -->
<div class="switch_langbar" style="float:right;margin-top:45px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- Õ¾µãÓïÑÔÄ£¿éEnd -->

        
	</div>
    <div id="main_top">
        <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
    </div>
   
     </div>
	<div id="main_con">	
    <div class="web_bg">
		<div id="left">		
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
         <?php 
		//--------------é¦–é¡µæ ·å¼ã€startã€?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>	
		<div id="right">
        <div id="banner_1"></div>
        <div id="bannermain">
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
    </div>
        <div id="banner_2"></div>
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>
		 <?php } 
		//--------------é¦–é¡µæ ·å¼ã€endã€?---------------------
		
		//--------------å†…é¡µæ ·å¼ã€startã€?-------------------
		else 
		{?> 
        		<div id="right1">
				<div id="right2">
                <div id="banner_1"></div>
                <div id="bannermain">
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
	</div></div>
                <div id="banner_2"></div>
				<?php include_once($_content_); ?>
				</div>
			</div>
               <?php 
		//--------------å†…é¡µæ ·å¼ã€endã€?---------------------
		}?>
        
		<div class="blankbar1"></div>
        <div id="foot_1"></div>
        <div class="footermain">
<?php 
//åŠ è½½é¡µé¢å°¾éƒ¨
include_once('view/common/footer.php');
?>
</div>
<div id="foot_2"></div>
	</div>
	
</div></div>


