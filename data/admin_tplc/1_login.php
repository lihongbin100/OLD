<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("header","","0");?>
<script type="text/javascript">
if (self.location != top.location) top.location = self.location; 
</script>
<style type="text/css">


body {
	background: #E7E7E9;
	font-family: 微软雅黑;
}

</style>
<div class="login">

<div class="login_you">
<form action="<?php echo site_url('login,login_ok');?>" method="post" target="_top" onsubmit="return chklogin()">
<table class="login_nr" cellpadding="0" cellspacing="0" align="center" >
  <tr>
    <td class="left">用户名:</td>
    <td class="username" align="center"><input name="username" id="username" type="text" tabindex="1" /></td>
  </tr>
  <tr>
    <td class="left">密&nbsp;&nbsp;&nbsp;码:</td>
    <td class="password" align="center"><input name="password" id="password" type="password" tabindex="2" /></td>
  </tr>
  <tr>
    <td class="left">验证码:</td>
    <?php if(function_exists("imagecreate") && defined("SYS_VCODE_USE") && SYS_VCODE_USE == true){?>
    <td><div class="chk">
        <input name="chk" id="chk" type="text"  tabindex="3" />
      </div>
      <div id="phpok_update_code"><img src="<?php echo site_url('login,codes');?>" border="0" align="absmiddle" style="cursor:pointer;" onclick="phpok_update_code()"></div></td>
    <?php } ?></tr>
</table>
<table class="btn" align="center" style="margin:0 auto">
  <tr>
    <td><input type="submit" value=""  class="submit"></td>
    <td class="kong"></td>
    <td><input type="reset" value="" class="reset"></td>
  </tr>
</table>
</form>
</div>
</div>


<?php if(function_exists("imagecreate") && defined("SYS_VCODE_USE") && SYS_VCODE_USE == true){?> 
<script type="text/javascript">
function phpok_update_code()
{
	var rand = Math.random();
	var msg = '<img src="'+get_url("login,codes")+'rand='+rand+'" border="0" align="absmiddle" style="cursor:pointer;" onclick="phpok_update_code()">';
	getid("phpok_update_code").innerHTML = msg;
}
</script> 
<?php } ?> 
<script type="text/javascript">
function chklogin()
{
	var username = getid("username").value;
	var password = getid("password").value;
	if(!username)
	{
		alert("账号不允许为空");
		getid("username").focus();
		return false;
	}
	if(!password)
	{
		alert("密码不允许为空");
		getid("password").focus();
		return false;
	}
	<?php if(function_exists("imagecreate") && defined("SYS_VCODE_USE") && SYS_VCODE_USE == true){?>
	var chk = getid("chk").value;
	if(!chk)
	{
		alert("验证码不允许为空");
		getid("chk").focus();
		return false;
	}
	<?php } ?>
}
</script> 
<?php $APP->tpl->p("footer","","0");?>