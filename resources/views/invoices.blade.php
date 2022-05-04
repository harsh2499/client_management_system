<html style="overflow: hidden;"><head>
	<title>Client Management Sysytem || Search Invoice </title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href="//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400" rel="stylesheet" type="text/css">
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type="text/css">
	<!-- /js -->
	<script src="/js/jquery-1.10.2.min.js"></script>
	<!-- //js-->
</head> 
<body style="" data-new-gr-c-s-check-loaded="14.1058.0" data-gr-ext-installed="">
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
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
      </div>				<!-- //header-ends -->
				<!--outter-wp-->
				<div class="outter-wp">
					<!--sub-heard-part-->
					<div class="sub-heard-part">
						<ol class="breadcrumb m-b-0">
							<li><a href="dashboard.php">Home</a></li>
							<li class="active">Search Invoice</li>
						</ol>
					</div>
					<!--//sub-heard-part-->
					<div class="graph-visual tables-main">
						
					
						<h3 class="inner-tittle two">Invoice </h3>
						<div class="graph">

							<div class="tables">
							
						
								<table class="table" border="1"> <thead> <tr> <th>#</th> 
									<th>Invoice Id</th>
									<th>Company Name</th>
									 <th>Contact Name</th> 
									 <th>Invoice Date</th>
									 <th>Action</th>
									  </tr>
									   </thead>
									    <tbody>
									    
                      @foreach($data as $h1)
                    
                    <tr>
                      <td>{{$h1->ID}}</td>
                      <td>{{$h1->billingid}}</td>
                      <td>{{$h1->CompanyName}}</td>
                      <td>{{$h1->ContactName}}</td>
                      <td>{{$h1->postingdate}}</td>
                      <td><a href="aviews/{{$h1->ID}}">View</a></td>
                   </tr>
                  @endforeach
									     									     
            </tbody> </table> 
							</div>

						</div>
				
					</div>
					<!--//graph-visual-->
				</div>
				<!--//outer-wp-->
				 <footer>
            <p>Client Management System @ 2021</p>
        </footer>			</div>
		</div>
		<!--//content-inner-->
    <x-header/>	<!--/sidebar-menu-->
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
	<script src="js/scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: 1000; background: rgb(0, 37, 97); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: block; opacity: 0;"><div style="position: relative; top: 33px; float: right; width: 5px; height: 32px; background-color: rgb(0, 198, 215); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 5px; z-index: 1000; background: rgb(0, 37, 97); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 5px; width: 1920px; background-color: rgb(0, 198, 215); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>


</body></html>