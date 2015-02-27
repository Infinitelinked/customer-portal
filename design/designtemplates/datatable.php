<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="logo.png">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

	<title>ILS admin section</title>
	<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../css/shCore.css">
	<link rel="stylesheet" type="text/css" href="../css/demo.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="../js/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="../js/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
	$('#example').dataTable( {
		
	} );
} );
</script>
<style type="text/css">
	.bs-example{
					margin: 20px;
				}
				body{
					margin-top:18px;
					margin-left:100px;
					margin-right:100px;
					margin-bottom:40px;
					background-repeat:no-repeat;
					<!--background-attachment: fixed;-->
					background-position: center; 
					background-position: top; 
				}
				.cic{
					max-width: 500px;
					padding: 20px 12px 10px 20px;
					font: 13px Arial, Helvetica, sans-serif;
				}
				.cic-heading{
					font-weight: bold;
					font-style: italic;
					border-bottom: 2px solid #ddd;
					margin-bottom: 10px;
					font-size: 15px;
					padding-bottom: 1px;
				}
				.cic label{
					display: block;
					margin: 0px 0px 15px 0px;
				}
				.cic label > span{
					width:200px;
					font-weight: bold;
					float: left;
					padding-top: 10px;
					padding-right: 5px;
				}
				.cic span.required{
					color:red;
				}
				.cic input.input-field{
					width: 50%;
				}
				.cic input.input-field{
					box-sizing: border-box;
					-webkit-box-sizing: border-box;
					-moz-box-sizing: border-box;
					border: 1px solid #C2C2C2;
					box-shadow: 1px 1px 4px #EBEBEB;
					-moz-box-shadow: 1px 1px 4px #EBEBEB;
					-webkit-box-shadow: 1px 1px 4px #EBEBEB;
					border-radius: 3px;
					-webkit-border-radius: 3px;
					-moz-border-radius: 3px;
					padding: 7px;
					outline: none;
				}
				.cic .input-field:focus{
					border: 1px solid #0C0;
				}
				.cic .text-field{
					height:100px;
					width: 50%;
				}
				.cic input[type=submit],
				.cic input[type=button]{
					border: none;
					padding: 8px 15px 8px 15px;
					background: #FF8500;
					color: #fff;
					box-shadow: 1px 1px 4px #DADADA;
					-moz-box-shadow: 1px 1px 4px #DADADA;
					-webkit-box-shadow: 1px 1px 4px #DADADA;
					border-radius: 3px;
					-webkit-border-radius: 3px;
					-moz-border-radius: 3px;
				}
				.cic input[type=submit]:hover,
				.cic input[type=button]:hover{
					background: #EA7B00;
					color: #fff;
				}
				.center-block
				{
					<!--margin:10px auto;-->
					margin-top:10px;
					text-align:center;
					width:100%;
				}
				#submit
				{
					margin-left:93%;
					height:30px;
					width:80px;
					background-color:#ffa500;
					font-weight: bold;
				}
				.label
				{
					margin-left:90%;
					font-weight:bold;
				}
				#pav
				{
					padding-bottom:10px;
				}
				#footer
				{
					padding-top:1.5%;
					font-weight:bold;
					text-align:center;
					background-color:#CCCCCC;
					width:100%;
					height:60px;
				}
				hr {
					-moz-border-bottom-colors: none;
					-moz-border-image: none;
					-moz-border-left-colors: none;
					-moz-border-right-colors: none;
					-moz-border-top-colors: none;
					border-color: #EEEEEE -moz-use-text-color #FFFFFF;
					border-style: solid none;
					border-width: 1px 0;
					margin: 5px 0;
				}
</style>
</head>
<body class="dt-example">
			<div>
				<div class="center-block">
					<img style="width:300px;height:100px;" src="logo.png">
				</div>
			</div>
			<form method="post" action="../../index.html">
				<div>
					<input type="submit" id="submit" name="submit" class="btn btn-warning" value="LOGOUT" />
				</div>
			</form>
			<hr>
			<div>
				<label class="label">Welcome Admin</label>
			</div>
			<br>
			<br>
	<div class="container">
	<!--<section>
		<div class="header">
			<div>
			<div class="epilogue">
					<img src="../img/ils.png" alt="..." class="img-responsive center-block" /> 
				</div>
			</div>
		</div>
	</section>-->
<section>
  <div class="box box-color box-bordered">
  <section>
  		<table id="example" class="cell-border" cellspacing="0" width="100%">
		
				<thead>
					<tr>
						<th>Sl. No.</th>
						<th>Company Name</th>
						<th>DBA Name</th>
						<th>Owner</th>
                        <th></th>						
                    </tr>
				</thead>

				<!-- <tfoot>
					<tr>
						<th>Sl. No.</th>
						<th>Company Name</th>
						<th>DBA Name</th>
						<th>Owner</th>
						<th></th>
					</tr>
				</tfoot> -->

				<tbody>
					<tr>
						<td>1</td>
						<td>elite</td>
						<td>stores</td>	
						<td>abc</td>
						<td><a href="collapse.php">View</a></td>
                          						
					</tr>
					<tr>
						<td>2</td>
						<td>celkon</td>
						<td>stores</td>	
                        <td>def</td>
						<td><a href="collapse.php">View</a></td></td>
					</tr>
					<tr>
						<td>3</td>
						<td>mobility</td>
						<td>stores</td>		
						<td>ghi</td>
						<td><a href="collapse.php">View</a></td></td>
					</tr>
					<tr>
						<td>4</td>						
						<td>Edinburgh</td>
						<td>developing</td>						
						<td>xyz</td>
						<td><a href="collapse.php">View</a></td></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Accountant</td>
						<td>Tokyo</td>		
                        <td>lmn</td>
						<td><a href="collapse.php">View</a></td></td>
					</tr>
					</tbody>
					</table>
					</section>
					
				 </section>
		<!-- <div class="footer">
			<div class="gradient"></div>
 <p> Infinite Linked Solutions &copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
 </div> -->
 </div>
  
 <section>
		<div class="footer">
			<div>
			<div class="epilogue">
					<p class="copyright">ASG Group Created by <a href="http://www.InfiniteLinkedSolutions.com">Infinite Linked Solutions Ltd</a> &#169; 2007-2015<br>
					ASG is licensed under the <a href="http://www.InfinitelinkedSolutions.com">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
 </body>
</html>