<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
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
        
        <!-- 站点语言模块Start -->
<div class="switch_langbar" style="float:right;margin-top:40px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->

            
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
            
			<div id="nav">
                <?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
            </div>
            
            <div id="yd">
				<?php if (Content::countModules('yd') > 0 || Toolkit::editMode()) Content::loadModules('yd'); ?>
        	</div>
        </div>
            

            
	</div>
    
	<div class="main_top"></div>
	

    
	<div class="main_main_main">
	

	

	
	<div id="main_con">
<div class="web_bg">	
    	

        
		<div id="left">        		
			<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
        
        <div style="float:left; width:710px; padding-left:10px;border-left:dashed 1px #ccc;
">
        
       
        
		<div id="centermain">

			<div id="center">
			<?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
			</div>
		</div>
        
            <?php 
		//--------------首页样式【start】-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        
		<div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>	
        
    
                    <?php } 
		//--------------首页样式【end】----------------------
		
		//--------------内页样式【start】--------------------
		else 
		{?>
        			<div id="right1">
			
				<div id="right2">
				<?php include_once($_content_); ?>
				</div>
        
                    <?php 
		//--------------内页样式【end】----------------------
		}?>
    
        
		<div class="blankbar1"></div>
        </div>
	</div>
	
	</div>
	
	<div class="main_bot"></div>
</div>
<div class="footermain">
	<div id="footer"><?php 
//加载页面尾部
include_once('view/common/footer.php');
?></div>
</div>
