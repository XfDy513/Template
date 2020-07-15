<?php 
if (!defined('IN_CONTEXT')) die('access violation error!');
//加载页面头部
include_once('view/common/header.php');
?>
<!--main_div-->
<div id="main_div">
<!--mainmain-->
<div id="mainmain">
<!--header-->
<div id="header">
		<div id="logo"><?php 
				if (Content::countModules('logo') > 0 || Toolkit::editMode()) {
					echo Content::loadModules('logo');
				} else { ?>
					<a href="/"><img src="<?php echo P_TPL_WEB; ?>/images/logo.jpg" border="0" /></a>
			<?php }?>
            </div>
            <div class="articel_search">
            <form name="articlesearchform" id="articlesearchform" onsubmit="javascript:return check_articlesearch_info(this);" action="/index.php?_m=mod_article&_a=fullist" method="post">
<input type="text" name="article_keyword" id="article_keyword" value=""  /><input type="submit" name="articlesearch_submit" id="articlesearch_submit" value="搜索"  />						
</form>

<script type="text/javascript" language="javascript">
<!--
function check_articlesearch_info(thisForm)
{
if (/^\s*$/.test(thisForm.elements["article_keyword"].value))
{
	alert("Please give me a keyword!");
	thisForm.elements["article_keyword"].focus();
	return false;
}
return true;
}
-->
</script>

            </div>
	</div>
<!--header end-->
    
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
     <div id="cus_h_01"><?php if (Content::countModules('user1') > 0 || Toolkit::editMode()) Content::loadModules('user1'); ?></div>
    <?php 
		//--------------首页样式【start】-------------------
		if($_flat_module_class_name == 'frontpage'){
		?>
       
		<div id="left">
		<?php if (Content::countModules('left') > 0 || Toolkit::editMode()) Content::loadModules('left'); ?>
		</div>
 		<?php } 
		//--------------首页样式【end】----------------------	
		//--------------内页样式【start】--------------------
		else 
		{?>
<div id="web_left">
		<?php include_once($_content_); ?>
		</div>
		<?php 
		//--------------内页样式【end】----------------------
		}?>
		<div id="right">
		<?php if (Content::countModules('right') > 0 || Toolkit::editMode()) Content::loadModules('right'); ?>
		</div>
        <div class="blankbar"></div>
	</div>
</div>
    <!--mainmain end-->
</div>
<!--main_div end-->  
<?php 
//加载页面尾部
include_once('view/common/footer.php');
?>