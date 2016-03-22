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