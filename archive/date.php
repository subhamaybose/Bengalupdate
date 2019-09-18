<!--header section start-->
<?php 
ob_start();
require_once('includes/header.php');
?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1dt.php');?>
<!--menu end-->
	<!--main content start-->
	<?php 
	if(isset($_POST['submit'])){
		$dt=$_POST['date'];
		#echo $dt;
		header('Location: index.php?dt='.$dt);
	}
	if(isset($_POST['submit1'])){
		$p=$_POST['srchitem'];
		#echo $dt;
		header('Location: search.php?srch='.$p);
	}
	?>
	<div class="row">
	
    <div class="election">
		<form action="date.php" method="post" class="election-form">
		<input type="radio" name="srch" id="srchn" value="normal" onClick="javascript:show(this.value)" checked> Search By Date&emsp;
		<input type="radio" name="srch" id="srcha" value="advanced" onClick="javascript:show(this.value)"> Search By Keyword
		<div id="normal">
			
			 <input type="text" name="date" id="date" class="date" placeholder="YYYY-MM-DD">
			 <div class="clear"></div>
			 <input type="Submit" name="submit" value="Submit" class="btn">
			
		</div>
		<div id="advanced">
			 *Please type in <strong>English</strong> only.</br>
			 <input type="text" name="srchitem" id="srchitem" class="date" placeholder="Search" style=" margin-bottom:0px;">
			 <div id="keylist"></div>
			 <div class="clear"></div>
			 <input type="Submit" name="submit1" value="Submit" class="btn">
			</form>
		</div>
    </div>
	</div>
	<!--main content end-->
	<!--responsive ad section start-->
	<div class="span6">
    	<?php require_once('includes/banner-responsive-left.php');?>
    </div>
    <div class="span6">
    	<?php require_once('includes/banner-responsive-right.php');?>
    </div>
    <div class="clear"></div>
	<!--responsive ad section end-->
</div>
<!--footer section start-->
<?php require_once('includes/footer.php');?>
<!--footer section end-->
<script>
$(function()
			{
				$('#date').datepicker({
					dateFormat: 'yy-mm-dd',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#finish').datepicker('option', 'minDate', selectedDate);
					}
				});
				
				document.getElementById("advanced").style.display="none";
				
				$('#srchitem').keyup(function(){
					var prodname = $(this).val();//assign data
						if(prodname!=''){
						$.ajax({
							url:"checkkey.php",
							method:"GET",
							data:{prod_name:prodname},//try to keep var_name=var1_name
							dataType:"text",
							success:function(html){
										$('#keylist').fadeIn();
										$('#keylist').html(html);
									
								}
						});
						}else{
							$('#keylist').html("");
						}
					});
				$(document).on('click', 'li', function(){
					$('#srchitem').val($(this).text());
					$('#keylist').fadeOut();
				});
			});
function show(value){
	if(value=="normal"){
		document.getElementById("normal").style.display="";
		document.getElementById("advanced").style.display="none";
	}else{
		document.getElementById("normal").style.display="none";
		document.getElementById("advanced").style.display="";
	}
}
</script>
</body>
</html>

