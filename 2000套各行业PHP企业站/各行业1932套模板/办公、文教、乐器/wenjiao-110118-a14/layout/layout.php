<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>
<div id="mainpic">

<div id="main_div">
	<div id="header">
		<!-- 加载logo【start】 -->
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
                        
		<!-- 加载logo【end】 -->
		<div id="nav">
		<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
		</div>
	</div>
	
	<!-- 加载banner 【start】-->
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
	<!-- 加载banner【end】 -->	
	<div id="main_con">
    <div class="web_bg">
		<!-- 页面左部【start】 -->
		<div id="left">		
		<?php 
		if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); 
		?>
		</div>
		<!-- 页面左部【end】 -->
		
		<!-- 页面右部【start】 -->
		<?php 
		//--------------首页样式【start】-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        <div id="centermain">
			<div id="center">
            <?php include_once($_content_); ?>
            <div style="clear:both;"></div>
			<?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
			</div>
		</div>
		<div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		<div>
			
		</div>
		</div>
		<?php } 
		//--------------首页样式【end】----------------------
		
		//--------------内页样式【start】--------------------
		else 
		{?>
		<div id="rightmain">
			<div id="right21">
			
				<div id="right2">
				<?php include_once($_content_); ?>
				</div>	
			</div>
		</div>
		
		<?php 
		//--------------内页样式【end】----------------------
		}?>
		<!-- 页面右部【end】 -->
		<!-- 清理左右浮动区域 -->
		<div class="blankbar1"></div>
	</div>
    </div>
</div>
</div>
<div class="footermain">
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>