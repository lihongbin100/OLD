<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><form method="post" action="<?php echo site_url('post,setok');?>id=<?php echo $id;?>&module_id=<?php echo $module_id;?>" onsubmit="return to_submit();">
	<input type="hidden" id="_to_url" name="_to_url" value="<?php echo site_url('index');?>" />
	<ul style=" margin-top:25px;">
		<li><input type="text" name="subject" id="subject" style=" background:#FFF; height:34px; width:329px; line-height:34px; border: none; color:#999999; padding-left:5px;" onblur="if (value ==''){value='请输入您的姓名'}" onfocus="if (value =='请输入您的姓名'){value =''}" value="请输入您的姓名"></li>
        <li style="margin:10px 0"><input type="text" name="lx" id="lx" style=" background:#FFF; height:34px; width:329px; line-height:34px; border:none; color:#999999; padding-left:5px;" onblur="if (value ==''){value='请输入您的联系电话'}" onfocus="if (value =='请输入您的联系电话'){value =''}" value="请输入您的联系电话"></li>
        <li><div style="float:left;"><textarea name="content" id="content" cols="" rows="" onblur="if (value ==''){value='您的孩子在学习方面遇到的难题'}" onfocus="if (value =='您的孩子在学习方面遇到的难题'){value =''}" value="您的孩子在学习方面遇到的难题" style="border:none; width:255px; height:60px;padding-left:5px;color:#999999; line-height:20px;"></textarea>
        </div>
        <div style="float:right;"><input type="submit" style="background:url(../tpl/www/images/27.jpg) no-repeat; width:68px; height:60px; border:none;" id="_phpok_submit" value="  "></div>
        <div class="clear"></div>
        
        </li>
	
	

		
	
</form>