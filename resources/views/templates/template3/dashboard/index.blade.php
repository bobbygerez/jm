<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Juan Merkado Online</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="{{ asset('template3/dashboard/assets/css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/checkbox-awesome.css') }}" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .user-table tr:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="wrapper" id="app">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    Juan Merkado
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="fa fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                   
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">All Users</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <user-data-viewer source="{{ url('api/user/admin') }}" v-on:mymodal="showModal" userid="{{ url('api/user/admin/userid') }}" >

                            </user-data-viewer>
                        </div>
                    </div>

           <modal v-model="show" effect="fade">
              <!-- custom header -->
              <div slot="modal-header" class="modal-header">
                <h4 class="modal-title">
                @{{ myUser.user.lastname }}, @{{ myUser.user.firstname }}
                </h4>
                
              </div>

              <div class="modal-body">
                    <form>
                        
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control border-input" v-model="myUser.user.lastname">
                        </div>
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" class="form-control border-input" v-model="myUser.user.firstname">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control border-input" v-model="myUser.user.email">
                        </div>
                        <div class="form-group" style="padding: 15px;">
                            <label>Roles: </label>
                            <br />
                            <span v-for="role in myUser.roles">
                                <div class="checkbox checkbox-success" style="display: inline; margin: 5px;">
                                    <input :id="role.id" class="styled " type="checkbox" :value="role.id" v-model="checkedRoles">
                                    <label :for="role.id">
                                        @{{ role.name }}
                                    </label>
                                </div>
                            </span>
                             
                        </div>
                       
                     </form>
                </div>

          <!-- custom buttons -->
          <div slot="modal-footer" class="modal-footer">
            <button type="button" class="btn btn-default" @click="show = false">Exit</button>
            <button type="button" class="btn btn-success" @click="saveMethod">Save</button>
          </div>
        </modal>
                   

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">

           
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>


    </div>
</div>


</body>

   
	<script src="{{ asset('template3/dashboard/assets/js/dashboard.js') }}"></script>


</html>
