<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
include_once('view/common/header.php');
?>
  <!--main_div-->
<div id="main_div"> 
   <!--web_bg-->
<div class="web_bg">    
         
     <!--top-->
<div id="top">
    <div id="header">
		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?>
            </div>
    <!-- 站点语言模块Start -->
<div class="switch_langbar" >
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->

</div>
     
    </div>
  <!--top end-->      


  <!--mainmain-->
<div id="main_all">
<div id="mainmain">
<div id="nav_bg">
 <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
    </div> 
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
   	 <div id="main_con" class="web_bg">
   <?php 

		if($_flat_module_class_name == 'frontpage'){
		?>
      <div id="i_left"><?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?></div>
   	    <div id="center"><?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?></div>
        <div id="i_right"><?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?></div>
 		<?php } 
		else 
		{?>
        <div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="right"><?php include_once($_content_); ?></div>
        <?php 
		}?>
        <div class="blankbar"></div>
	</div>
      <!--main_div end--> 
        </div>
        </div>
 <!--mainmain end-->   
    </div>
<!--web_bg end-->
</div>

 <div id="footer_bg">
<?php 
include_once('view/common/footer.php');
?>
</div>
