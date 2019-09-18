<?php 
session_start();

include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['update'])&& $_POST['update']=='set'){
	
if(file_exists("epaper/epaper.pdf")){
	chmod('epaper/epaper.pdf',0755);
	unlink('epaper/epaper.pdf');
}
$uploaddir = 'epaper/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$extension = pathinfo($_FILES['userfile']['name'],PATHINFO_EXTENSION);
if ($extension=='pdf'){
$uploadname = $uploaddir.'epaper.pdf';
move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadname);
#error_log($_FILES['userfile']['error'], 3, "News/admin/error_log.txt");
if ($_FILES["userfile"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["userfile"]["error"] . "<br>";
    }
}

}
?>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

    <!--  start page-heading -->
    <div id="page-heading">
        <h1>Update Epaper</h1>
    </div>
    <!-- end page-heading -->

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
        <!--  start content-table-inner ...................................................................... START -->

        <div id="content-table-inner">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="update" value="set" />  
       <!--<input type="hidden" name="MAX_FILE_SIZE" value="419430400" /> -->
        <input type="file" name="userfile" />
        <input type="submit" name="submit" value="Upload the latest epaper">
        </form>

        </div>

        <!--  end content-table-inner ............................................END  -->
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
