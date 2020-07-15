<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>

        <div id="header">
         <div class="logo_version"><div class="logo">
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
           <div id="top">
                <?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
             </div>
            </div>

    
        <div class="air"></div>
        <div class="wrap_main">
     <div class="web_bg">
        
        <div class="wrap">
            
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
        	<div id="left">
            	<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
            </div>
		<?php 
		//--------------首页样式【start】-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
        <div class="main">
        
       
        	<div id="center">
			<?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
            </div>

    <div id="right">
            	<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
            </div>
            </div>
            		<?php } 
		//--------------首页样式【end】----------------------
		
		//--------------内页样式【start】--------------------
		else 
		{?>
        <div id="main">
              
        	<div id="right2">
            
            	<?php
                include_once($_content_);
                ?>
            </div>
            
        <script>				
					$(".mod_block").each(function () {
						$('.chanpin_name', this).text($(".blk_t", this).text());
					});
					
										
					$(".chanpin_name").each(function () {
						if ( $(this).text() == ""){
							$(this).text("产品展示")
						};
					});	
				</script>
        </div>
        
        		
		<?php 
		//--------------内页样式【end】----------------------
		}?>
             <div class="clear"></div>
            </div>
       </div></div>
        <div class="clear"></div>
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
