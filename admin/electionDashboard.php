<?php
//ini_set('session.save_path','/home/bengalup/' . '/tmp');
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
?>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Dashboard</h1>
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

			<!--  start table-content  -->
			<div id="table-content">
			<ul class="dashboardmenu">
        <?php if($_SESSION['admintype']=='1'){?>
        <li><span class="post"></span><a href="rajjo_list.php">State Entry</a></li>
		<li><span class="post"></span><a href="district_list.php">District Entry</a></li>
		<li><span class="post"></span><a href="dol_list.php">Party Name Entry</a></li>
		<li><span class="post"></span><a href="election_seats_entry.php">Election Seats Entry</a></li>
		<li><span class="post"></span><a href="state_wise_dol_list.php">State Wise Dol Entry</a></li>
		<li><span class="post"></span><a href="loksabha_kendro_list.php">Lok Sabha Constituency Entry</a></li>
		<li><span class="post"></span><a href="loksabha_folafol_list.php">Lok Sabha Result</a></li>
		<li><span class="post"></span><a href="by_election_loksabha_folafol_list.php">By Election Lok Sabha Result</a></li>
		<li><span class="post"></span><a href="bidhansabha_kendro_list.php">Bidhan Sabha Constituency Entry</a></li>
		<li><span class="post"></span><a href="bidhansabha_folafol_list.php">Bidhan Sabha Result</a></li>
		<li><span class="post"></span><a href="by_election_bidhansabha_folafol_list.php">By Election Bidhan Sabha Result</a></li>
		<li><span class="post"></span><a href="municipality_list.php">Municipality Entry</a></li>
		<li><span class="post"></span><a href="municipality_folafol_list.php">Municipality Election Result</a></li>
		<li><span class="post"></span><a href="panchayat_list.php">Panchayat Entry</a></li>
		<li><span class="post"></span><a href="panchayat_folafol_list.php">Panchayat Election Result</a></li>
		<li><span class="post"></span><a href="scrollcontrol.php">Scroll Control</a></li>
		<?php }?>
        </ul>

			</div>
			<!--  end table-content  -->

			<div class="clear"></div>

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
