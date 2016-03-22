<?php $this->load->view('header')?>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Joli Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class="xn-title">Account</li> 
					<li><a href="<?php echo site_url('page/login'); ?>"><span class="fa fa-sign-in"></span> <span class="xn-text">Login</span></a></li>
					<li><a href="<?php echo site_url('page/signUp'); ?>"><span class="fa fa-sign-out"></span> <span class="xn-text">Sign Up</span></a></li>
					<li><a href="<?php echo site_url('page/forgottenPassword'); ?>"><span class="fa fa-unlock-alt"></span> <span class="xn-text">Forgotten your password?</span></a></li>
                    
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="<?php echo site_url('page/index'); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="<?php echo base_url(); ?>assets/themes/trocdeal/assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <?php //echo $output; ?>
<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="#" name="top">Post Message App</a>
			<ul class="nav">
				<li><a href="#"><i class="icon-home"></i> Home</a></li>
				<li class="divider-vertical"></li>
			</ul>
			<div class="btn-group pull-right">
            <?php if ($is_admin) : ?>
            <a class="btn dropdown-toggle" data-toggle="dropdown"
					href="#"> <i class="icon-wrench"></i> admin <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a data-toggle="modal" href="#myModal"><i class="icon-user"></i>
							New User</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo base_url() ?>/index.php/login/logout_user"><i
							class="icon-share"></i> Logout</a></li>
				</ul>
            <?php else : ?>
              <a class="btn"
					href="<?php echo base_url() ?>/index.php/login/logout_user"><i
					class="icon-share"></i> Logout</a>
            <?php endif; ?>
          </div>
		</div>
	</div>
</div>

<div class="container">

	<div class="span5 offset1">

		<div class="row well userInfo">
			<div class="span1">
				<img
					src="<?php echo base_url(); ?>assets/themes/login/img/avatars/<?php echo $avatar ?>.png"
					alt="">
			</div>
			<div class="span2 userInfoSpan2">
				<p>
					<strong> <?php echo $name ?> </strong>
				</p>
				<span class=" badge badge-warning"> <span class="totalMessageCount"><?php echo $post_count ?></span>
					messages
				</span>
			</div>
			<div class="span2 userInfoSpan2">
				<p id="pTagline" contenteditable="true"><?php echo $tagline ?></p>
			</div>
			<div class="userTeamBadge">
				Team: <span class="badge badge-info"><?php echo $teamId ?></span>
          <?php if($is_admin) :?><span class="badge badge-info">Admin</span><?php endif ?>
        </div>
		</div>

		<div class="row well">
			<textarea class="span4" id="txtNewMessage" name="txtNewMessage"
				placeholder="Type in your message" rows="5"></textarea>
			<h6 class="pull-right">
				<span id="spanNumChars">320</span> characters remaining
			</h6>
			<button id="btnPost" class="btn btn-info">Post New Message</button>
		</div>

      <?php if ( $max_posts ) : ?>
        <div class="row">
			<h4>
				Last <span class="messageCount"><?php echo count($posts) ?></span>
				Messages:
			</h4>
		</div>

		<div class="row well">
			<table id="tblMyMessages" class="table table-condensed table-hover">
				<thead>
					<tr>
						<th class="span2">Messages</th>
						<th class="span1">Sent</th>
					</tr>
				</thead>
				<tbody>

            <?php foreach( $posts as $post ) : ?>
              <tr>
						<td><?php echo $post['body'] ?></td>
						<td><?php echo $post['createdDate'] ?></td>
					</tr>
            <?php endforeach; ?>

            </tbody>
			</table>
		</div>
      <?php else : ?>
        <div class="row">
			<h4>You have posted no messages.</h4>
		</div>
      <?php endif; ?>

      </div>

	<div class="span4 offset1">
		<div class="row">
        <?php if ( isset($other_posts) ) : ?>
          <h4>What Others are Saying:</h4>
			<div id="otherMessages">
              <?php foreach( $other_posts as $o_post ) : ?>
                  <div class="otherPost well">
					<div class="otherAvatar">
						<img
							src="../../assets/img/avatars/<?php echo $o_post['avatar'] ?>.png"
							alt=""
							data-title="&lt;span class='badge badge-info'&gt;<?php echo $o_post['teamId'] ?>&lt;/span&gt; <?php echo $o_post['firstName'] ?> <?php echo $o_post['lastName'] ?>"
							data-content="<?php echo $o_post['tagline'] ?>">
					</div>
					<div class="otherPostInfo">
						<div class="otherPostBody">
							<p></p><?php echo $o_post['body'] ?></p>
						</div>
						<hr />
						<div class="otherPostDate">
							<p class="pull-right"><?php echo $o_post['createdDate'] ?></p>
						</div>
					</div>
				</div>
              <?php endforeach; ?>
            </div>
        <?php else : ?>
          <div>
				<h4>There are no messages from other users!</h4>
			</div>
        <?php endif; ?>
      </div>
	</div>

</div>
</div>

<div class="modal hide" id="myModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">x</button>
		<h3>New User Details</h3>
	</div>
	<div class="modal-body">
		<p>
			<input type="text" class="span4" name="first_name" id="first_name"
				placeholder="First Name">
		</p>
		<p>
			<input type="text" class="span4" name="last_name" id="last_name"
				placeholder="Last Name">
		</p>
		<p>
			<input type="text" class="span4" name="email" id="email"
				placeholder="Email">
		</p>
		<p>
			<select class="span4" name="teamId" id="teamId">
				<option value="">Team Number...</option>
				<option value="1">1</option>
				<option value="2">2</option>
			</select>
		</p>
		<p>
			<label class="checkbox span4"> <input type="checkbox" id="isAdmin"
				name="isAdmin"> Is an admin?
			</label>
		</p>
		<p>
			<input type="password" class="span4" name="password" id="password"
				placeholder="Password">
		</p>
		<p>
			<input type="password" class="span4" name="password2" id="password2"
				placeholder="Confirm Password">
		</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-warning" data-dismiss="modal">Cancel</a> <a
			href="#" id="btnModalSubmit" class="btn btn-primary">Create</a>
	</div>
</div>                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/themes/trocdeal/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/themes/trocdeal/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
<?php $this->load->view('footer') ?>