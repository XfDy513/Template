<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//åŠ è½½é¡µé¢å¤´éƒ¨
include_once('view/common/header.php');
?>
<div id="top">
  <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>    
<div id="header">
		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?>
            </div> 
           <!-- Õ¾µãÓïÑÔÄ£¿éStart -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- Õ¾µãÓïÑÔÄ£¿éEnd -->
   </div>
     </div>
    <!--top end-->
 <!--main_div-->
<div id="main_div">
  <!--top-->
<!--mainmain-->
    <div id="mainmain"> 
   
	<div id="main_con" class="web_bg">
     		<div id="left">
        		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
            <?php 
		//--------------é¦–é¡µæ ·å¼ã€startã€?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        <div id="right">
         <div id="banner_bg">
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
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>
 		<?php } 
		//--------------é¦–é¡µæ ·å¼ã€endã€?---------------------	
		//--------------å†…é¡µæ ·å¼ã€startã€?-------------------
		else 
		{?>
        
        <div id="right">
               <div id="right2">
                <div id="banner_bg">
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
		<?php include_once($_content_); ?>
		</div>
        </div>
		<?php 
		//--------------å†…é¡µæ ·å¼ã€endã€?---------------------
		}?>
       
        <div class="blankbar"></div>
	</div>
</div>
 <!--mainmain end-->   
</div>
<!--main_div end--> 
<div id="footer_bg"> 
<?php 
//åŠ è½½é¡µé¢å°¾éƒ¨
include_once('view/common/footer.php');
?>
</div>
