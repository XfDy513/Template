<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>

<div id="main_div">
       <div id="top"> 
<!-- վ������ģ��Start -->
<div class="switch_langbar" style="float:right;margin-top:10px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->
    	
	<div id="header">
    
        <div id="logo">
			<?php 
            if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
            echo Content::loadModules('logo');
            } else { ?>
            <a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
            <?php }?>
        </div>
        
        <div id="nav">
			<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
            
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
        
	</div>
    </div>
	<div id="main_top"></div>
	<div id="main_con">
    <div class="web_bg">
		<div id="left">			
			<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
        
 		<?php 
		//--------------首页样式【start�?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
               
		<div id="rightmain">
			        
			<div id="right">			
			<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
			</div>
            
           	<div id="about">
  				<?php if (Content::countModules('about') > 0 || Toolkit::editMode()) Content::loadModules('about'); ?>
                <div id="about1">
                    <?php if (Content::countModules('about1') > 0 || Toolkit::editMode()) Content::loadModules('about1'); ?>
                </div>
                 <div id="about2">
                    <?php if (Content::countModules('about2') > 0 || Toolkit::editMode()) Content::loadModules('about2'); ?>
                </div>
    		</div>            
		</div>
        		<?php } 
		//--------------首页样式【end�?---------------------
		
		//--------------内页样式【start�?-------------------
		else 
		{?>
        
        			<div id="right2">
			<?php include_once($_content_); ?>
			</div>
        
        
                    		<?php 
		//--------------内页样式【end�?---------------------
		}?>
        
		<script>				
			$(".mod_block").each(function () {
				$('.newprod_title', this).text($(".blk_t", this).text());
				$('.recent_title', this).text($(".blk_t", this).text());
			});				
			
								
			$(".newprod_title").each(function () {
				if ( $(this).text() == ""){
					$(this).text("产品展示")
				};
			});	
		</script>
		<div class="blankbar1"></div>
	</div>
    </div></div>
		<?php 
        //加载页面尾部
        include_once('view/common/footer.php');
        ?>


