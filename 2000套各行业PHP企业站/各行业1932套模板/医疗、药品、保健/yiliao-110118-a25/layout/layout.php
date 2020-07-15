<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
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
<!-- վ������ģ��Start -->
<div class="switch_langbar" style="float:right;margin-top:15px;">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- վ������ģ��End -->

       <!--logo end-->           
    	</div>
    <!--header end-->
             <!--nav-->
<div id="nav">
	<?php if (Content::countModules('nav') > 0 || Toolkit::editMode()) Content::loadModules('nav'); ?>
	</div>
    <!--nav end-->
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

<!--main_con-->
 <?php 
		//--------------首页样式【start�?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
	 <div id="main_con" class="web_bg">

        <div class="left_w">

         <div id="left">
        
          <?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
          
        </div>
        
        </div>
        
        <div class="center_w">
        
         <div id="center">
        
          <?php if (Content::countModules('center') > 0 || Toolkit::editMode()) Content::loadModules('center'); ?>
        </div>
        
        </div>
        
        <div class="right_w">
       
        <div id="right">
          <?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        </div>
        </div>
        </div>
             <?php } 
		//--------------首页样式【end�?---------------------	
		//--------------内页样式【start�?-------------------
		else 
		{?>
        	<div id="main_con_02">
        <div class="web_left_w">
        <div id="web_left">
          <?php include_once($_content_); ?>
        </div>
        </div>
         <div class="right_w">
         <div id="right">
          <?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
        </div>
        </div>
         <?php 
		//--------------内页样式【end�?---------------------
		}?>
                    
	</div>
   <!--main_con end--> 
   


    </div>
   <!--main-->
       </div>
    <!--box end-->
   <?php 
//加载页面尾部
include_once('view/common/footer.php');
?>


