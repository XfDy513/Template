<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//����ҳ��ͷ��
include_once('view/common/header.php');
?>
     <!--header-->
<div id="headermain">
	<div id="header">
		
		<div id="logo">
		<?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?></div>
            <div id="nav">
		<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
		</div>
	</div>
    <div class="lang_w">
	   <!-- վ������ģ��Start -->
        <div class="switch_langbar">
         <?php include_once(P_INC.'/language_switch.php');?>
         </div>
        <!-- վ������ģ��End -->
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
             <!--nav_bg-->
    
	<div id="main_div">	
	<div id="main_con">
    <div class="web_bg">
		<div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>	
			
		<div id="right">
         <?php 
		//--------------��ҳ��ʽ��start��-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>	
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        <?php } 
		//--------------��ҳ��ʽ��end��----------------------
		
		//--------------��ҳ��ʽ��start��--------------------
		else 
		{?>
        
        <div id="right2">
				<?php include_once($_content_); ?>
				</div>	
            <?php 
		//--------------��ҳ��ʽ��end��----------------------
		}?>    
        
		</div>


		<div class="blankbar1"></div>
        </div>
        </div>
	</div>
	
	</div>
	
	<div class="main_bot"></div>
</div>
<div class="footermain">
	<div id="footer"><?php 
//����ҳ��β��
include_once('view/common/footer.php');
?></div>
</div>
