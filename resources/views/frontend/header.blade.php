<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

<meta charset="utf-8">
<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ $description }}">
<meta name="author"  content="EShop">
<meta name="keyword" content="{{ $keyword }}">

<link rel="shortcut icon" href="images/favicon.ico">

<!-- CSS -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/flexslider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/fancySelect.css') }}" rel="stylesheet" media="screen, projection" />
<link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
	
<!-- SCRIPTS -->

<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>	


<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,
700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link href="{{ asset('/font-awesome/css/font-awesome.css') }}" rel="stylesheet">


</head>
<body>

	<!-- PRELOADER -->
	<div id="preloader">
		<img src="{{ url('images/preloader.gif') }}" alt="" />
	</div>
	<!-- //PRELOADER -->
	<div class="preloader_hide">

		<!-- PAGE -->
		<div id="page">

			<!-- HEADER -->
			<header>

				<!-- TOP INFO -->
				<div class="top_info">

					<!-- CONTAINER -->					
					<div class="container clearfix">
						<ul class="secondary_menu">
					<?php if (Auth::check() && Auth::user()->is('admin')): ?>					
			            <li><a href=""><?= _('Admin Panel')?></a></li>
							<li><a href=""><?= _('Register')?></a></li>
					<?php elseif(Auth::check() && Auth::user()->is('user')): ?>
							<li><a href=""><?= _('User Panel')?></a></li>
							<li><a href=""><?= _('Logout')?></a></li>																		
					<?php else: ?>						
						    <li><a href=""><?= _('my account')?></a></li>
							<li><a href=""><?= _('Logout')?></a></li>						
							
						<?php endif ?>
					</ul>
					</div>
					<!-- //CONTAINER -->
				</div>
				<!-- TOP INFO -->


				<!-- MENU BLOCK -->
				<div class="menu_block">

					<!-- CONTAINER -->
					<div class="container clearfix">									
					<!-- MENU -->
						<ul class="navmenu center">
							<li class="sub-menu first"><a href="{{ url('cms') }}"><?= _('Home')?></a>
								<!-- MEGA MENU -->
								<ul class="mega_menu megamenu_col1 clearfix">
									<li class="col">
										<ol>
											<li class="active"><a href="index.html"><?= _('Home slider')?></a></li>
										</ol>
									</li>
								</ul>
								</li>
								<!-- //MEGA MENU -->
								<!-- MEGA MENU-->																																
								<?php foreach($menu as $row) : ?>							
								<li class="sub-menu"><a><?= _($row['name'])?></a>							
									<ul class="mega_menu megamenu_col1 clearfix">
										<li class="col">
										<?php foreach($row['sub_cat'] as $item) : ?>									
											<ol>
								        <li>
											<a href="{{ url('') }}/<?php echo $row['name']."/".$item['name']."/".$item['parent_id'];?>
												?categ[]=<?php echo $item['id'];?>"><?php echo $item['name'];?></a></li>
											</ol>
											<?php endforeach; ?>										
										</li>
									</ul>
								</li>
								<?php endforeach; ?>								
								<!-- //MEGA MENU -->
								<!-- MEGA MENU -->																							
							<li class="sub-menu"><a href="{{ url('blog') }}"><?= _('Blog')?></a>
								<ul class="mega_menu megamenu_col1 clearfix">
									<li class="col">
										<ol>
											<li><a href="{{ url('blog') }}"><?= _('Blog')?></a></li>											
										</ol>
									</li>
								</ul>
								</li>
								<!-- //MEGA MENU -->
							<li class="last sale_menu"><a href="{{ url('eshop') }}"><?= _('Sale')?></a></li>
							<li class="normal menu"><a
								href="{{ url('contacts') }}"><?= _('Contacts')?></a>							
							<li class="normal menu"><a
								href="{{ url('aboutus') }}"><?= _('About Us')?></a>							
							<li class="normal menu"><a href="{{ url('login') }}"><?= _('Login')?></a>													
						</ul>
						<!-- //MENU -->
					</div>
					<!-- //MENU BLOCK -->
				</div>
				<!-- //CONTAINER -->
			</header>
			<!-- //HEADER -->