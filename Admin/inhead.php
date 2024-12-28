<?php
session_start();
include("../dbconn/Connt.php");
if(isset($_SESSION['username']))
{
	header("location:login.php");
}
?>
  <div class="header">
                <div class="header-left">
                    <a href="../Admin/index.php" class="logo">
						<img src="../Admin/assets/img/rslogo.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="../Admin/assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<ul class="nav user-menu">
					
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="../Admin/assets/img/profiles/avatar-01.png" width="31" alt="hungbs"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="../Admin/assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
								
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="../Admin/login.php">Logout</a>
						</div>
					</li>
				</ul>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="../Admin/index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="menu-title"> 
								<span>All Users</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="../Admin/adminlist.php"> Admin </a></li>
									<li><a href="../Admin/owerlist.php"> Owner </a></li>
									<li><a href="../Admin/tenantlist.php"> Tenant </a></li>
									<li><a href="../Admin/rating.php"> Rating </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>House Management</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> House</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="../Admin/addhouse.php"> Add House</a></li>
									<li><a href="../Admin/viewhouse.php"> View House </a></li>
									
								</ul>
							</li>
						
							
							<li class="menu-title"> 
								<span>About</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> List view </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="../Admin/addab.php"> Add </a></li>
									<li><a href="../Admin/viewab.php"> View </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
