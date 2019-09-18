<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
	foreach($_POST as $k=>$v){
		if($v!='set'){
		$sqls=mysql_query("select * from `option` where `name`='".$k."'");
			if(mysql_num_rows($sqls)>0){
			mysql_query("update `option` set `value`='".$v."' where `name`='".$k."'",$conn);
			mysql_query("update `option` set `value`='".$v."' where `name`='".$k."'",$conn_archive);
			}else{
			mysql_query("insert into `option` set `value`='".$v."',`name`='".$k."'",$conn);
			mysql_query("insert into `option` set `value`='".$v."',`name`='".$k."'",$conn_archive);
			}
		}
	}
}
include("includes/header.php");
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Main Settings</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">			
			<div class="step-dark-left"><a href="">Site Settings</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
        <?php 
		$set=mysql_query("select * from `option`");
		if(mysql_num_rows($set)>0){

		

		?>
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Facebook Link:</th>
			<td><input type="text" class="inp-form" name="facebook" id="fb" value="<?php 
$set=mysql_query("select * from `option` where `name`='facebook'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Twitter Link:</th>
			<td><input type="text" class="inp-form" name="twitter" id="twt" value="<?php $set=mysql_query("select * from `option` where `name`='twitter'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Youtube Link:</th>
			<td><input type="text" class="inp-form" name="youtube" id="yt" value="<?php $set=mysql_query("select * from `option` where `name`='youtube'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Google Plus Link:</th>
			<td><input type="text" class="inp-form" name="googleplus" id="linkedin" value="<?php $set=mysql_query("select * from `option` where `name`='googleplus'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>" /></td>
			<td></td>
		</tr>
         <tr>
			<th valign="top">Rss Link:</th>
			<td><input type="text" class="inp-form" name="rss" id="wp" value="<?php $set=mysql_query("select * from `option` where `name`='rss'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>"  /></td>
			<td></td>
		</tr>
         <tr>
			<th valign="top">Instagram Link:</th>
			<td><input type="text" class="inp-form" name="instagram" id="insta" value="<?php $set=mysql_query("select * from `option` where `name`='instagram'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>" /></td>
			<td></td>
		</tr>        
        
        <tr>
			<th valign="top">Phone Number:</th>
			<td><input type="text" class="inp-form" name="phone" id="phn" value="<?php $set=mysql_query("select * from `option` where `name`='phone'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>"/></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Email Address :</th>
			<td><input type="text" class="inp-form" name="email" id="em" value="<?php $set=mysql_query("select * from `option` where `name`='email'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?>"/></td>
			<td></td>
		</tr>
        <tr>
                <th valign="top">Address:</th>
                <td><textarea rows="" cols="" class="form-textarea" id="addr" name="address"><?php $set=mysql_query("select * from `option` where `name`='address'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?></textarea></td>
                <td></td>
            </tr>
 <tr>
                <th valign="top">Team scroll:</th>
                <td><textarea rows="" cols="" class="form-textarea" id="addr" name="team"><?php $set=mysql_query("select * from `option` where `name`='team'");
if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);echo $setf->value;}?></textarea></td>
                <td>

</td>
            </tr>
		
	 
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
    <?php }else{?>
    	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Facebook Link:</th>
			<td><input type="text" class="inp-form" name="facebook" id="fb" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Twitter Link:</th>
			<td><input type="text" class="inp-form" name="twitter" id="twt" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Youtube Link:</th>
			<td><input type="text" class="inp-form" name="youtube" id="yt" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Google Plus Link:</th>
			<td><input type="text" class="inp-form" name="googleplus" id="linkedin" /></td>
			<td></td>
		</tr>
         <tr>
			<th valign="top">Rss Link:</th>
			<td><input type="text" class="inp-form" name="rss" id="wp" /></td>
			<td></td>
		</tr>
         <tr>
			<th valign="top">Instagram Link:</th>
			<td><input type="text" class="inp-form" name="instagram" id="insta" /></td>
			<td></td>
		</tr>        
        
        <tr>
			<th valign="top">Phone Number:</th>
			<td><input type="text" class="inp-form" name="phone" id="phn" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Email Address :</th>
			<td><input type="text" class="inp-form" name="email" id="em" /></td>
			<td></td>
		</tr>
        <tr>
                <th valign="top">Address:</th>
                <td><textarea rows="" cols="" class="form-textarea" id="addr" name="address"></textarea></td>
                <td></td>
            </tr>
 <tr>
                <th valign="top">Team scroll:</th>
                <td><textarea rows="" cols="" class="form-textarea" id="addr" name="team"></textarea></td>
                <td></td>
            </tr>
		
	 
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
    <?php }?>
     </form >
	<!-- end id-form  -->

	</td>
	<td>

	

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->
<?php 
include("includes/footer.php");
?>