<html>
<title>test</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>themes/easyuithemes/icon.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>themes/easyuithemes/gray/easyui.css" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/manage/reset.css" type="text/css"
	media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/manage/style.css" type="text/css"
	media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/manage/invalid.css"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/jquery-1.8.0.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/manage/simpla.jquery.configuration.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/manage/facebox.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/manage/jquery.wysiwyg.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/manage/jquery.datePicker.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/manage/jquery.date.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/jquery.easyui.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>scripts/easyui-lang-zh_CN.js"></script>
</head>
<body>
	<div id="body-wrapper">
		<!-- Wrapper for the radial gradient background -->

		<div id="sidebar">
			<div id="sidebar-wrapper">
				<!-- Sidebar with logo and menu -->

				<h1 id="sidebar-title">
					<a href="#">Simpla Admin</a>
				</h1>

				<!-- Logo (221px wide) -->
				<a href="#"><img id="logo"
					src="<?php echo base_url();?>images/logo.png"
					alt="Simpla Admin logo" /></a>

				<!-- Sidebar Profile links -->
				<div id="profile-links">
					Hello, <a href="#" title="Edit your profile">John Doe</a>, you have
					<a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
					<br /> <a href="#" title="View the Site">View the Site</a> | <a
						href="#" title="Sign Out">Sign Out</a>
				</div>

				<ul id="main-nav">
					<!-- Accordion Menu -->

					<li><a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
							文章管理
					</a>
						<ul>
							<li><a href="#">文章列表</a></li>
							<li><a class="current" href="#">新增文章</a></li>
						</ul></li>

					<li><a href="#" class="nav-top-item"> Pages </a>
						<ul>
							<li><a href="#">Create a new Page</a></li>
							<li><a href="#">Manage Pages</a></li>
						</ul></li>

					<li><a href="#" class="nav-top-item"> Image Gallery </a>
						<ul>
							<li><a href="#">Upload Images</a></li>
							<li><a href="#">Manage Galleries</a></li>
							<li><a href="#">Manage Albums</a></li>
							<li><a href="#">Gallery Settings</a></li>
						</ul></li>

					<li><a href="#" class="nav-top-item"> Events Calendar </a>
						<ul>
							<li><a href="#">Calendar Overview</a></li>
							<li><a href="#">Add a new Event</a></li>
							<li><a href="#">Calendar Settings</a></li>
						</ul></li>

					<li><a href="#" class="nav-top-item"> Settings </a>
						<ul>
							<li><a href="#">General</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Your Profile</a></li>
							<li><a href="#">Users and Permissions</a></li>
						</ul></li>

				</ul>
				<!-- End #main-nav -->

				<div id="messages" style="display: none">
					<!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

					<h3>3 Messages</h3>

					<p>
						<strong>17th May 2009</strong> by Admin<br /> Lorem ipsum dolor
						sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
						at felis aliquet congue. <small><a href="#" class="remove-link"
							title="Remove message">Remove</a></small>
					</p>

					<p>
						<strong>2nd May 2009</strong> by Jane Doe<br /> Ut a est eget
						ligula molestie gravida. Curabitur massa. Donec eleifend, libero
						at sagittis mollis, tellus est malesuada tellus, at luctus turpis
						elit sit amet quam. Vivamus pretium ornare est. <small><a href="#"
							class="remove-link" title="Remove message">Remove</a></small>
					</p>

					<p>
						<strong>25th April 2009</strong> by Admin<br /> Lorem ipsum dolor
						sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi
						at felis aliquet congue. <small><a href="#" class="remove-link"
							title="Remove message">Remove</a></small>
					</p>

					<form action="#" method="post">

						<h4>New Message</h4>

						<fieldset>
							<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
						</fieldset>

						<fieldset>

							<select name="dropdown" class="small-input">
								<option value="option1">Send to...</option>
								<option value="option2">Everyone</option>
								<option value="option3">Admin</option>
								<option value="option4">Jane Doe</option>
							</select> <input class="button" type="submit" value="Send" />

						</fieldset>

					</form>

				</div>
				<!-- End #messages -->

			</div>
		</div>
		<!-- End #sidebar -->

		<div id="main-content">
			<?php echo $content_for_layout?>
		</div>
	</div>


</body>
</html>
