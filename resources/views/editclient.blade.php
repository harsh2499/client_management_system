
<!DOCTYPE HTML>
<html>
<head>
	<title>Client Management Sysytem|| Update Clients</title>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="/css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="/css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="/js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
	<script src="/js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="/js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
<div class="page-container">
<!--/content-inner-->
<div class="left-content">
<div class="inner-content">
	
				<!--//outer-wp-->
<div class="outter-wp">
					<!--/sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="dashboard.php">Home</a></li>
<li class="active">Update Clients</li>
</ol>
</div>	
					<!--/sub-heard-part-->	
					<!--/forms-->
<div class="forms-main">
<h2 class="inner-tittle">Update Clients </h2>
<div class="graph-form">
<div class="form-body">

<form method="post" action="/updateclient"> 
    @csrf
    <input type="hidden" name="id" value={{$data['ID']}}>
	<div class="form-group"> <label for="exampleInputEmail1">Account Type</label> <select type="text" name="accounttype" class="form-control" required='true' style="padding:10px 12px;">
		<option value="Contact/Lead"
        @if($data['AccountType'] =="Contact/Lead")
                selected
         @endif
        
        >Contact/Lead</option>
		<option value="Active Account"
        @if($data['AccountType'] =="Active Account")
                selected
         @endif
        
        >Active Account</option>
		<option value="Inactive Account"
        @if($data['AccountType'] =="InActive Account")
                selected
         @endif
        
        >Inactive Account</option>
		<option value="Contact/Lead"
        @if($data['AccountType'] =="Contact/Lead")
                selected
         @endif
        >Contact/Lead</option>
		<option value="Unknown"
        @if($data['AccountType'] =="Unknown")
                selected
         @endif
        >Unknown</option>
		
		
	</select> </div>

   
	<div class="form-group"> <label for="exampleInputEmail1">Contact Name</label> <input type="text" name="cname" value={{$data['ContactName']}} class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Company Name</label> <input type="text" name="comname" value={{$data['CompanyName']}} class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Address</label> <textarea type="text" name="address"  class="form-control" required='true' rows="4" cols="3" >
    {{$data['Address']}}</textarea> </div>
	<div class="form-group"> <label for="exampleInputEmail1">City</label> <input type="text" name="city" value={{$data['City']}} class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">State</label> <input type="text" name="state" value={{$data['State']}} class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Zip Code</label> <input type="text" name="zcode" value={{$data['ZipCode']}} class="form-control" required='true'> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Work Phone Number</label><input type="text" name="wphnumber" value={{$data['Workphnumber']}} class="form-control" maxlength='10' required='true' pattern="[0-9]+"> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Cell Phone Number</label><input type="text" name="cellphnumber" value={{$data['Cellphnumber']}} class="form-control" maxlength='10' pattern="[0-9]+"> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Other Phone Number</label><input type="text" name="ophnumber" value={{$data['Otherphnumber']}} class="form-control" maxlength='10' pattern="[0-9]+"> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value={{$data['Email']}} class="form-control" required='true'> </div> 
	<div class="form-group"> <label for="exampleInputPassword1">Website Address</label> <input type="text" name="websiteadd" value={{$data['WebsiteAddress']}} required='true' class="form-control"> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Notes</label> <textarea type="text" name="notes" class="form-control" required='true' rows="4" cols="3">{{$data['Notes']}}</textarea> </div>
	<div class="form-group"> <label for="exampleInputPassword1">Creation Date</label> <input type="text" name="creationdate" value={{$data['CreationDate']}} required='true' class="form-control" readonly='true'> </div>
		 <button type="submit" class="btn btn-default" name="submit" id="submit">Update</button><input type="button" class="btn btn-default" value="Back" onClick="history.back();return true;"> </form> 
</div>
</div>
</div> 
</div>
 <footer>
            <p>Client Management System @ 2021</p>
        </footer></div>
</div>		
<x-header/>
<div class="clearfix"></div>		
</div>
<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
