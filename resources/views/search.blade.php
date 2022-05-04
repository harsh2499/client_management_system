

<!DOCTYPE HTML>
<html>
<head>
	<title>Client Management Sysytem || Search Invoice </title>
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
	<!-- /js -->
	<script src="/js/jquery-1.10.2.min.js"></script>
	<!-- //js-->

  <style>

.op {
    margin-left: 255px;
    margin-right: 29px;
}
</style>
</head> 
<body>
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
						
					
						<h3 class="inner-tittle two">Search Invoice </h3>
						<div class="graph">

							<div class="tables">
								<form method="post" action="search-invoices">
                  @csrf
								<p style="font-size:16px; color:red" align="center">  </p>

  
							 <div class="form-group"> <label for="exampleInputEmail1">Search by Invoice Number or Billing Number</label> <input id="searchdata" type="text" name="billingid" required="true" class="form-control">
						
							<br>
							  <button type="submit" name="search" class="btn btn-primary btn-sm">Search</button> </form> 
						</div>
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
		<!--/sidebar-menu-->
    <x-header/>
      <div class="op">
                  <h1 class="text-center">Result against "{{$invoice_no}}" keyword  </h1>
          <table class="table" border="1">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Invoice Id</th>
                      <th>Company Name</th>
                      <th>Contact Name</th>
                      <th>Invoice Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if(isset($data))
                
                      @foreach($data as $h1)
                      
                        <tr>
                          <td>{{$h1->ID}}</td>
                          <td>{{$h1->billingid}}</td>
                          <td>{{$h1->CompanyName}}</td>
                          <td>{{$h1->ContactName}}</td>
                          <td>{{$h1->postingdate}}</td>
                          <td><a href="view/{{$h1->billingid}}">View</a></td>
                      </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
                </div>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
  
</body>
</html>
