<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
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
           <!-- վ������ģ��Start -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->
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
		//--------------首页样式【start�?------------------
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
		//--------------首页样式【end�?---------------------	
		//--------------内页样式【start�?-------------------
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
		//--------------内页样式【end�?---------------------
		}?>
       
        <div class="blankbar"></div>
	</div>
</div>
 <!--mainmain end-->   
</div>
<!--main_div end--> 
<div id="footer_bg"> 
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>
