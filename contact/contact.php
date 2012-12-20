<?php session_start() ?>  
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<!-- ABOUT this page -->
	<title>Ian Mathews - Web Developer</title>
	<meta name="description" content="This page contains, etc...">
	<meta name="keywords" content="keyword1, keyword1, keyword1, etc..."  />
	<meta name="author" content="Ian Mathews">
	
	<!--  VIEWPORT optimized specific to content -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="media/img/favicon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="../css/main.css?v=2">
	
</head>

<body>
	<div class="background">
		<div class="box zero2"></div>
		<div class="box zero"></div>
		<div class="box one"></div>
		<div class="box two"></div>
		<div class="box three"></div>
		<div class="box four"></div>
		<div class="box five"></div>
		<div class="box six"></div>
		<div class="box seven"></div>
		<div class="box eight"></div>
		<div class="box nine"></div>
	</div>
<div class="pagewrap">
		<header>
			<div class="logo"><h1><a href="../index.html">Ian Mathews</a></h1></div>
			<nav>
				<ul>
					<li><a href="about.html">/ about</a></li>
					<li><a href="http://ian505c5.tumblr.com">/ blog</a></li>
					<li><a href="../contact/contact.html">/ contact</a></li>
				</ul>
			</nav>
		</header>
<div id="contact-form" class="clearfix">  
    <h1>Get In Touch!</h1>  
    <h2>Fill out our super swanky HTML5 contact form below to get in touch with us! Please provide as much information as possible for us to help you with your enquiry :)</h2>  
    <?php  
    //init variables  
    $cf = array();  
    $sr = false;  
    if(isset($_SESSION['cf_returndata'])){  
        $cf = $_SESSION['cf_returndata'];  
        $sr = true;  
    }  
 <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">  
        <li id="info">There were some problems with your form submission:</li>  
        <?php  
        if(isset($cf['errors']) && count($cf['errors']) > 0) :  
            foreach($cf['errors'] as $error) :  
        ?>  
        <li><?php echo $error ?></li>  
        <?php  
            endforeach;  
        endif;  
        ?>  
    </ul>  
    <form method="post" action="process.php">  
        <label for="name">Name: <span class="required">*</span></label>  
        <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required autofocus />  
        <label for="email">Email Address: <span class="required">*</span></label>  
        <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />  
        <label for="telephone">Telephone: </label>  
        <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />  
        <label for="enquiry">Enquiry: </label>  
        <select id="enquiry" name="enquiry">  
            <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>  
            <option value="Sales" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Sales</option>  
            <option value="Support" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Support') ? "selected='selected'" : '' ?>>Support</option>  
        </select>  
        <label for="message">Message: <span class="required">*</span></label>  
        <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>  
        <span id="loading"></span>  
        <input type="submit" value="Holla!" id="submit-button" />  
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>  
    </form>  
    <?php unset($_SESSION['cf_returndata']); ?>  
	</div>  
</div>

</body>
</html>