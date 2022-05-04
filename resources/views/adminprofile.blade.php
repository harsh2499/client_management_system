
<!DOCTYPE HTML>
<html>
<head>
	<title>Client Management Sysytem|| Admin Profile</title>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
<div class="page-container">
<!--/content-inner-->
<div class="left-content">
<div class="inner-content">
	
<div class="header-section">
        <!--menu-right-->
        <div class="top_menu">
          
          <!--/profile_details-->
          <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown note dra-down">
                
                <script type="text/javascript">

                  function DropDown(el) {
                    this.dd = el;
                    this.placeholder = this.dd.children('span');
                    this.opts = this.dd.find('ul.dropdown > li');
                    this.val = '';
                    this.index = -1;
                    this.initEvents();
                  }
                  DropDown.prototype = {
                    initEvents : function() {
                      var obj = this;

                      obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        return false;
                      });

                      obj.opts.on('click',function(){
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                      });
                    },
                    getValue : function() {
                      return this.val;
                    },
                    getIndex : function() {
                      return this.index;
                    }
                  }

                  $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        ;
                                });

                  });

                </script>
              </li>
              <p style="padding-top: 10px;color: white;text-align: center;">Client Management System</p>                   
              <div class="clearfix"></div>  
            </ul>
          </div>
          <div class="clearfix"></div>  
          <!--//profile_details-->
        </div>
        <!--//menu-right-->
        <div class="clearfix"></div>
      </div>				<!--//outer-wp-->
<div class="outter-wp">
					<!--/sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="dashboard.php">Home</a></li>
<li class="active">Profile</li>
</ol>
</div>	
					<!--/sub-heard-part-->	
					<!--/forms-->
<div class="forms-main">
<h2 class="inner-tittle">Admin Profile </h2>
<div class="graph-form">
<div class="form-body">
<form method="post" action="uprofile">
    @csrf 
	<div class="form-group"> <label for="exampleInputEmail1">User Name</label> <input type="text" name="username" value="{{$data->username}}" class="form-control" readonly=""> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Contact Number</label><input type="text" name="mobilenumber" value="{{$data->mobile}}"  class="form-control" maxlength='10' required='true' pattern="[0-9]+"> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" name="email" value="{{$data->email   }}" class="form-control" required='true'> </div> 
	 <button type="submit" class="btn btn-default" name="submit" id="submit">Update</button> </form> 
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
