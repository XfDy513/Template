

<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>
     <!--header-->
	<div id="header">
    <!--top_s-->
    <div class="top_s">
    
    <div class="logo_lang">
     <!--logo-->
		<div id="logo">
         <?php 
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
       <!--lang end-->                
    </div>
	</div>
    <!--top_s end-->
    <div class="nav_bg">
	<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
    </div>
    <!--nav_bg end-->
	</div>
    <!--header end-->
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
             <!--nav_bg-->
    
	<div id="main_div">	
	<div id="main_con">
<div class="web_bg">
		<div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>	
			
		<div id="right">
         <?php 
		//--------------首页样式【start】-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>	
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        <?php } 
		//--------------首页样式【end】----------------------
		
		//--------------内页样式【start】--------------------
		else 
		{?>
        
        <div id="right2">
				<?php include_once($_content_); ?>
				</div>	
            <?php 
		//--------------内页样式【end】----------------------
		}?>    
        
		</div>


		<div class="blankbar1"></div>
	
	</div>
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>

