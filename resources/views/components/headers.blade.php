<div>
<div class="sidebar-menu">
    <header class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="dashboard.php"> <span id="logo"> <h1>CMS</h1></span> 
            <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> 
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">
      
        <a href="dashboard.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlKi-dTKsqe-aBxkOJnNmIGZYcXM0zQDKQOKZmqjDfINherAww6IGqvB8k44XwNhYTSus&usqp=CAU" height="100" width="100"></a>
        <a href="dashboard.php"><span class=" name-caret"> {{Session::get("cname")}}</span></a>
                <p>System Administrator in Company</p>
        <ul>
            <li><a class="tooltips" href="client-profile"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            <li><a class="tooltips" href="/cpassword"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
            <li><a class="tooltips" href="/log"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu" >
            <li><a href="/clientdashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

            
            <li><a href="/clientinvoices"><i class="fa fa-file-text-o"></i> <span>Invoices</span></a></li>

           
            <li><a href="/csearch-invoices"><i class="fa fa-search"></i> <span>Search Invoice</span></a></li>
         
        </ul>
    </div>
</div>	
</div>