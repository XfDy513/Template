<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>
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
<div class="switch_langbar" style="float:right;margin-top:15px; margin-right:15px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->

     
          <div id="nav_bg">
 <div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
    </div>  
            </div>      
</div>
 
    </div>
  <!--top end-->      
  <!--main_div-->
<div id="main_div">

<!--web_bg-->
<div class="web_bg">
  <!--mainmain-->
<div id="main_all">
<div id="mainmain">

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
		//--------------首页样式【start�?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        
        <div id="use"><?php if (Content::countModules('use') > 0 || Toolkit::editMode()) Content::loadModules('use'); ?></div>
        <div id="main_01">
		<div id="i_left"><?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?></div>
     <div id="center"><?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?></div>
        <div id="i_right"><?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?></div>
</div>

        
 		<?php } 
		//--------------首页样式【end�?---------------------	
		//--------------内页样式【start�?-------------------
		else 
		{?>
        
         <div id="use"><?php if (Content::countModules('use') > 0 || Toolkit::editMode()) Content::loadModules('use'); ?></div>
        <div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
		<div id="right">
        <div id="right_bottom">
         <div id="right_mid">
        <?php include_once($_content_); ?>
        </div>
         </div>
		</div>
        <?php 
		//--------------内页样式【end�?---------------------
		}?>
       
        <div class="blankbar"></div>
	</div>

<div id="footer_bg">
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>
  <!--main_div end--> 
        </div>
        </div>
 <!--mainmain end-->   
    </div>
<!--web_bg end-->
</div> 
