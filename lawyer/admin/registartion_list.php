

<?php include('include/top_header.php'); ?>
<!--**********************************
Header end ti-comment-alt
***********************************-->
<!--**********************************
Sidebar start
***********************************-->
<?php include('include/sidebar.php'); ?>

<!--**********************************
Sidebar end
***********************************-->

<!--**********************************
Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="page-titles">
		<ol class="breadcrumb">
			<!-- <li><h5 class="bc-title">Product</h5></li> -->
			<li class="breadcrumb-item active"><a href="Dashboard.php">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
			Contact Data </a>
		</li>
		<!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li> -->
	</ol>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body p-0">
					<div class="table-responsive active-projects style-1">
						<div class="tbl-caption">
							<h4 class="heading mb-0">Product</h4>
							<!-- <div>
									<a class="btn btn-primary btn-sm"  href="add_product.php" role="button" >+ Add Product</a>
									
							</div> -->
						</div>
						<table id="empoloyees-tblwrapper" class="table">
							<thead>
								<tr>
									<th>id</th>
									
									<th>name</th>
									<th>email</th>
									
									<th>mobile_no</th>
									<th>Message</th>
									
									
								</tr>
							</thead>
							<tbody>
								<?php
								include('../db.php');
								$count = 1;
								$query = "SELECT * FROM `contact_data`";
								
								$result = mysqli_query($con , $query);
								while ($res = mysqli_fetch_assoc($result)) {
								
								?>
								<tr>
									<td><span><?php echo $res['id']; ?></span></td>
									<td>
										
								<div>
								 <h6><?php echo $res['name']; ?></h6>
											
											
										</div>
									</td>
									
									<td><span><?php echo $res['email']; ?></span></td>
								
									<td>
										<span><?php echo $res['phone']; ?></span>
										
									</td>
									<td>
										<span><?php echo $res['message']; ?></span>
										
									</td>
									
									
								</tr>
								<?php } ?>
								
								
							</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>



<!--**********************************
Content body end
***********************************-->



<!--**********************************
Footer start
***********************************-->
<div class="footer">
	<div class="copyright">
		<p>Copyright © Developed by <a href="https://www.manasvi.tech/" target="_blank">Manasvi Tech Solutions Pvt Ltd</a> 2023</p>
	</div>
</div>
<!--**********************************
Footer end
***********************************-->





<!--**********************************
Support ticket button start
***********************************-->

<!--**********************************
Support ticket button end
***********************************-->
</div>
<!--**********************************
Main wrapper end
***********************************-->
<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->

<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="vendor/datatables/js/buttons.html5.min.js"></script>
<script src="vendor/datatables/js/jszip.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<!-- Apex Chart -->
<script src="js/custom.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>

<!-- tagify -->
<script src="vendor/tagify/dist/tagify.js"></script>



</body>
<!-- Mirrored from w3crm.Manasvi Tech Solutions Pvt Ltd.com/xhtml/employee.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 03:14:28 GMT -->
</html>