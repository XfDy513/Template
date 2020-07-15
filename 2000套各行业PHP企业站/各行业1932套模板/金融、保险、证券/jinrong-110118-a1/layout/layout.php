<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>

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
<div class="switch_langbar">
<?php include_once(P_INC.'/language_switch.php');?>
</div>
<!-- 站点语言模块End -->
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
  <div id="main_con">
<div class="web_bg">
    <div id="left">
      <?php 
	  	if($_flat_module_class_name == 'frontpage'){
			if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); 
		}
			else 
		{
			include_once($_content_);
		}
			?>
    </div>
    <div id="right">
      <?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
    </div>
  </div>
</div>
<div class="footermain">
  <?php 
//加载页面尾部
include_once('view/common/footer.php');
?>
</div>
