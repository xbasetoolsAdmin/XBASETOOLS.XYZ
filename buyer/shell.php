
<html>
	<head>
		<title>How to Dynamically Display Hide DataTables Column with PHP Ajax</title>
		<!-- JS, Popper.js, and jQuery -->
		<script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>  
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<h1 align="center" class="text-primary"><b>How to Dynamically Display Hide DataTables Column with PHP Ajax</b></h1>
			<br />
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-9">Sample Data</div>
						<div class="col-lg-3">
							<select name="column_name" id="column_name" class="form-control selectpicker" multiple>
								<option value="0">ID</option>
						  <option value="1">Country</option>
						  	<option value="2">Price</option>
						   <option value="3">Info</option>
						   	<option value="4">Sitename</option>
							</select>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="lead_data" class="table table-bordered table-striped">
							<thead>
								<tr>
									
                    <th> ID</th>
                    <th>Country</th>								
                    <th>infos</th>
                    <th>Price</th>
																					<th>reseller</th>
																					<th>sitename</th>
																					<th>Date</th>
																						</tr>
						</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br />
		<br />
	</body>
</html>

<script type="text/javascript" language="javascript">

$(document).ready(function(){
	
	var dataTable = $('#lead_data').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"divPage5.php",
			type:"POST"
		}
	});
	
	$('#column_name').selectpicker();

	$('#column_name').change(function(){

		var all_column = ["0", "1", "2", "3", "4", "5", "6", "7"];

		var remove_column = $('#column_name').val();

		var remaining_column = all_column.filter(function(obj) { return remove_column.indexOf(obj) == -1; });

		dataTable.columns(remove_column).visible(false);

		dataTable.columns(remaining_column).visible(true);

	});

});	
</script>

