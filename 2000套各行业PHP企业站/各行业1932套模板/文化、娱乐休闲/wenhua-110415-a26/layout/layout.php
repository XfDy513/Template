<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//鍔犺浇椤甸潰澶撮儴
include_once('view/common/header.php');
?>
<!--box-->
<div id="box">
<!--main-->
<div id="main">
     <!--header-->
	<div id="header">

     <!--logo-->
		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?></div>
       <!--logo end-->    
<!-- 站点语言模块Start -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->       
     <!--nav-->
<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
    <!--nav end-->
    	</div>
    <!--header end-->
    
   <div id="banner"><?php 
		if (Content::countModules('banner') > 0 || Toolkit::editMode()) 
		{
			echo Content::loadModules('banner');
		} 
		else 
		{ ?>
		<img src="<?php echo P_TPL_WEB; ?>/images/banner.jpg" border="0" />
		<?php }?>
        </div>
 <?php 
		//--------------棣栭〉鏍峰紡銆恠tart銆?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
<!--main_con-->
	<div id="main_con" class="web_bg">	
   <!--main_c--> 
    <div class="main_c">
    <!--main_c_top-->
    <div class="main_c_top">

         <div id="left">
        
          <?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
          
        </div>
        
         <div id="center">
        
          <?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
        </div>
       
        <div id="right">
          <?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        </div>
                    </div>
                    <!--main_c_top end-->
                    </div>
                    <!--main_c end--> 
  <div class="main_c_bottom"></div>
                    
	</div>
   <!--main_con end--> 
   
     <?php } 
		//--------------棣栭〉鏍峰紡銆恊nd銆?---------------------	
		//--------------鍐呴〉鏍峰紡銆恠tart銆?-------------------
		else 
		{?>
        <!--main_con-->
	<div id="main_con2">	
   <!--main_c--> 
    <div class="main_c2">
    <!--main_c_top-->
    <div class="main_c_top2">
        
          <div id="web_left">
          <?php include_once($_content_); ?>
        </div>
         <div id="right">
          <?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        </div>
        
      
        </div>
                    <!--main_c_top end-->
                    </div>
                    <!--main_c end--> 
  <div class="main_c_bottom2"></div>
    </div>
     <!--main_con2-->
             <?php 
		//--------------鍐呴〉鏍峰紡銆恊nd銆?---------------------
		}?>
    </div>
   <!--main-->
   <?php 
//鍔犺浇椤甸潰灏鹃儴
include_once('view/common/footer.php');
?>
    </div>
    <!--box end-->

