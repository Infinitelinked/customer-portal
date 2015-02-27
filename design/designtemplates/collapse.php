<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Infinite Linked Solutions</title>
  <!-- <link href="../css/jumbotron-narrow.css" rel="stylesheet"> -->
	
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
				#submit
				{
					margin-left:93%;
					height:30px;
					width:80px;
					background-color:#ffa500;
					font-weight: bold;
				}
				.anchor
				{
					height:30px;
					width:80px;
					background-color:#ffa500;
					font-weight: bold;
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
				.center-block
				{
					<!--margin:10px auto;-->
					margin-top:5px;
					text-align:center;
					width:80%;
				}
  </style>
</head>
<body>

<div class="container">
  <div class="page-header">
			<div class="epilogue">
	    <img style="width:300px;height:100px;" src="logo.png" alt="..." class="img-responsive center-block" />     
	</div>
	<form method="post" action="../../index.html">
	<div>  
    <input type="submit" id="submit" name="submit" class="btn btn-warning" value="LOGOUT" />
	</div>
	</form>
	<hr>
	<form method="post" action="datatable.php">
	<div>  
		<input type="submit" id="anchor" name="submit" class="btn btn-warning" value="BACK" />
	</div>
	</form>
    <!--<h1>Collapse <small>Bootstrap Visual Test</small></h1>-->
	<h1>Client <small>Details</small></h1>
  </div>
   <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            Carrier
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
         <div>
	      <label class="col-sm-4 control-label">Carrier Name</label>
            <div>
              <label class="col-sm-8 control-label">Sri Ram</label>
            </div>
       </div>
       <div>
          <label class="col-sm-4 control-label">Carrier Representatives Contact Details</label>
            <div>
              <label class="col-sm-8 control-label">+919948836893</label>
            </div>
	   </div>
	   <div>
	      <label class="col-sm-4 control-label">Point Of Sales System</label>
            <div>
              <label class="col-sm-8 control-label">Hyderabd</label>
            </div>
       </div>
       <div>
          <label class="col-sm-4 control-label">Portals </label>
            <div>
              <label class="col-sm-8 control-label">admin</label>
            </div>
	   </div>
       <div>
	      <label class="col-sm-4 control-label">Web Address</label>
            <div>
              <label class="col-sm-8 control-label">http://www.infinitelinkedsolutions.com</label>
            </div>
       </div>
      </div>
    </div>
	</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            Company Details
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <div>
          <label class="col-sm-4 control-label">Company DBA Name</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
           </div>
	   </div>
	   <div>
	      <label class="col-sm-4 control-label">Company Logo</label>
            <div>
              <label class="col-sm-8 control-label">logo</label>
            </div>
       </div>
       <div>
          <label class="col-sm-4 control-label">Company Name</label>
            <div>
              <label class="col-sm-8 control-label">Infinite Lined Solutions</label>
            </div>
		</div>
		<div>
	      <label class="col-sm-4 control-label">Company Org Chart</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
           </div>
        </div>
        <div>
          <label class="col-sm-4 control-label">Company Website Address</label>
            <div>
              <label class="col-sm-8 control-label">www.ils.com</label>
            </div>
		</div>
		<div>
	      <label class="col-sm-4 control-label">Dealer Owner Contact Details</label>
            <div>
              <label class="col-sm-8 control-label">Upender</label>
            </div>
        </div>
        <div>
          <label class="col-sm-4 control-label">Decision Making Authority</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
		</div>
        <div>		
	      <label class="col-sm-4 control-label">Operation Point Of Contact</label>
            <div>
              <label class="col-sm-8 control-label">Varun</label>
            </div>
		</div>	
		<div>
	      <label class="col-sm-4 control-label">Owner Phone Number</label>
            <div>
              <label class="col-sm-8 control-label">+919948836893</label>
            </div>
        </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            Customer Roles
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
         <div>
          <label class="col-sm-4 control-label">Customer Id</label>
            <div>
              <label class="col-sm-8 control-label">1001</label>
            </div>
        </div>
        <div>
          <label class="col-sm-4 control-label">Rooles Path</label>
            <div>
              <label class="col-sm-8 control-label">Manager</label>
            </div>
	    </div>
        </div>
      </div>
    </div>
  
  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
            Employee Details
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
        <div class="panel-body">
          <div>
          <label class="col-sm-4 control-label">Employee Id</label>
            <div>
              <label class="col-sm-8 control-label">1010</label>
            </div>
        </div>
        <div>
          <label class="col-sm-4 control-label">Employee Path</label>
            <div>
              <label class="col-sm-8 control-label">Developer</label>
            </div>
	    </div>
        </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
            Markets Details
          </a>
        </h4>
      </div>
      <div id="collapseFive" class="panel-collapse collapse">
        <div class="panel-body">
          <div>
          <label class="col-sm-4 control-label">Market Names</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
        </div>
		<div>
          <label class="col-sm-4 control-label">Market Path</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
	    </div>
		<div>
	      <label class="col-sm-4 control-label">Number Of Markets</label>
            <div>
              <label class="col-sm-8 control-label">50</label>
            </div>
	    </div>
	</div>
        </div>
      </div>
    
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
            Smart Solutions
          </a>
        </h4>
      </div>
      <div id="collapseSix" class="panel-collapse collapse">
        <div class="panel-body">
           <div>
          <label class="col-sm-4 control-label">Employee Id</label>
            <div>
              <label class="col-sm-8 control-label">1011</label>
            </div>
        </div>
		<div>
          <label class="col-sm-4 control-label">Solution Id</label>
            <div>
              <label class="col-sm-8 control-label">10011</label>
            </div>
		</div>
        </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
            Stores
          </a>
        </h4>
      </div>
      <div id="collapseSeven" class="panel-collapse collapse">
        <div class="panel-body">
          <div>
          <label class="col-sm-4 control-label">Address Phone Number</label>
            <div>
              <label class="col-sm-8 control-label">040-114433</label>
            </div>
        </div>
		<div>
          <label class="col-sm-4 control-label">Calling Tree</label>
            <div>
              <label class="col-sm-8 control-label"><a href="../images/ils.png" download>download</a></label>
            </div>
        </div>
		<div>
	      <label class="col-sm-4 control-label">Store Email</label>
            <div>
              <label class="col-sm-8 control-label">ils@infinitelinked.com</label>
            </div>
        </div>
		<div>
   	      <label class="col-sm-4 control-label">Store Name</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
	    </div>
		<div>
	  	  <label class="col-sm-4 control-label">Store Number</label>
            <div>
              <label class="col-sm-8 control-label">143</label>
            </div>
	    </div>
		<div>
	      <label class="col-sm-4 control-label">Store Path</label>
            <div>
              <label class="col-sm-8 control-label">ILs Madhapur</label>
            </div>
	    </div>
        </div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
            Vendors System
          </a>
        </h4>
      </div>
      <div id="collapseEight" class="panel-collapse collapse">
        <div class="panel-body">
          <div>
          <label class="col-sm-4 control-label">Bill Payment Portal</label>
            <div>
              <label class="col-sm-8 control-label">Infinite Linked.Solutions</label>
            </div>
        </div>
		<div>
          <label class="col-sm-4 control-label">Carriers Commission Portal</label>
            <div>
              <label class="col-sm-8 control-label">Infinite Linked Solutions</label>
            </div>
        </div>
        <div>		
	      <label class="col-sm-4 control-label">Device Leasing Program</label>
            <div>
              <label class="col-sm-8 control-label">5 years</label>
            </div>
	    </div>
		<div>
	      <label class="col-sm-4 control-label">Inventory Ordering Portal</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
	    </div>
		<div>
	      <label class="col-sm-4 control-label">Trade Up Program</label>
            <div>
              <label class="col-sm-8 control-label">Services</label>
            </div>
	    </div>
		<div>
	      <label class="col-sm-4 control-label">Store Path</label>
            <div>
              <label class="col-sm-8 control-label">ILS</label>
            </div>
        </div>	
        </div>
      </div>
    </div>
	</div>
	<footer class="footer">
	        <p>&copy; &nbsp;ASG Group Created by <a href="http://www.InfiniteLinkedSolutions.com">Infinite Linked Solutions Ltd</a></p>
	</footer>
</div>
<!-- JavaScript Includes -->
<script src="../js/jquery.min.js"></script>
<script src="../js/transition.js"></script>
<script src="../js/collapse.js"></script>
<hr>
</body>
</html>
