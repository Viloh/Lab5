<header>
	<img src="img/header.jpg" id="headerImg">
	<h1>Bookclub</h1>
	<h2>Home</h2>
	<nav>
		<ul>
			<li>
				<a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" href="index.php">HOME</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'aboutUs.php' ? 'active' : NULL ?>" href="aboutUs.php">ABOUT US</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'browseBooks.php' ? 'active' : NULL ?>" href="browseBooks.php">BROWSE BOOKS</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'myBooks.php' ? 'active' : NULL ?>" href="myBooks.php">MY BOOKS</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'contact.php' ? 'active' : NULL ?>" href="contact.php">CONTACT</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'gallery.php' ? 'active' : NULL ?>" href="gallery.php">GALLERY</a>
			</li>
			<li>
				<a class="<?php echo $current_page == 'login.php' ? 'active' : NULL ?>" href="login.php">LOGIN</a>
			</li>
		</ul>
	</nav>


	<link rel="stylesheet" type="text/css" href="css/header.css">
    