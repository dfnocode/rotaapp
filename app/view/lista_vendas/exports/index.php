<?php 
include('header.php');
?>
<title>phpzag.com : Demo LExport jQuery Datatable Data To PDF,Excel,CSV and Copy with PHP</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<?php include('container.php');?>
<style>
 .dataTables_length {
  	margin-top:20px;
  }
  div.dt-buttons {
    position: relative;
    float: left;
    margin-left: 20px;
	margin-top:12px;
	font-size:16px;
	font-weight:bold;
 }
 .dataTables_filter {
	 margin-top:20px;
 }
</style>
<div class="container">
	<h2>Export jQuery Datatable Data To PDF,Excel,CSV and Copy with PHP</h2>	
	<div class="row">		
		<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Empid</th>
                <th>Name</th>
                <th>Salary</th>       
                <th>Empid</th>
                <th>Name</th>
                <th>Salary</th>       
                <th>Empid</th>
                <th>Name</th>
                <th>Salary</th>               
            </tr>
        </thead>       
    </table>	
	</div>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/export-jquery-datatable-data-to-pdfexcelcsv-copy-with-php" title="">Back to Tutorial</a>			
	</div>		
</div>
<?php include('footer.php');?>

