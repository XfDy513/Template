
<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//åŠ è½½é¡µé¢å¤´éƒ¨
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
<!-- Õ¾µãÓïÑÔÄ£¿éStart -->
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- Õ¾µãÓïÑÔÄ£¿éEnd -->
        
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
	<div id="main_con" class="web_bg">
 <?php 
		//--------------é¦–é¡µæ ·å¼ã€startã€?------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
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
             <?php } 
		//--------------é¦–é¡µæ ·å¼ã€endã€?---------------------	
		//--------------å†…é¡µæ ·å¼ã€startã€?-------------------
		else 
		{?>
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
		//--------------å†…é¡µæ ·å¼ã€endã€?---------------------
		}?>
                    
	</div>
   <!--main_con end--> 
   


    </div>
   <!--main-->
       </div>
    <!--box end-->
   <?php 
//åŠ è½½é¡µé¢å°¾éƒ¨
include_once('view/common/footer.php');
?>


