<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('header'); ?>
</head>

<body>

	<!-- Navigation -->
	<div class="container-fluid nav-mob py-3 px-5 position-absolute">
		<div class="row justify-content-between align-items-center">
			<div class="z-in-999">
				<a href="<?= site_url();?>" class="navbar-brand mr-0">
					<img class="logo" src="<?= base_url();?>assets/img/logo/satraw-logo.svg" alt="logo">
				</a>
			</div>
			<div class="button_container" id="toggle">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
		</div>
		<!-- Open content -->
		<div class="overlay" id="overlay">
			<nav class="overlay-menu">
				<ul>
					<li><a href="<?= site_url();?>/" <?php if($this->uri->segment(1)==""){echo 'class="active"';}?>>Home</a></li>
					<li><a href="<?= site_url();?>/about/" <?php if($this->uri->segment(1)=="about"){echo 'class="active"';}?>>About</a></li>
					<li><a href="<?= site_url();?>/case_study/" <?php if($this->uri->segment(1)=="case_study"){echo 'class="active"';}?>>Case Studies</a></li>
					<li><a href="<?= site_url();?>/experiments/" <?php if($this->uri->segment(1)=="experiments"){echo 'class="active"';}?>>Experiments</a></li>
					<li><a href="<?= site_url();?>/contact/" <?php if($this->uri->segment(1)=="contact"){echo 'class="active"';}?>>Contact</a></li>
				</ul>
			</nav>
			<div class="social-navbar px-5">
				<ul class="d-flex justify-content-start social">
					<li><a href="https://www.facebook.com/satraw10" target="_blank"><img
								src="<?= base_url();?>assets/img/social/dark/Facebook@1x.svg" alt=""></a></li>
					<li><a href="https://twitter.com/im_satyamr" target="_blank"><img
								src="<?= base_url();?>assets/img/social/dark/Twitter@2x.svg" alt=""></a></li>
					<li><a href="https://www.instagram.com/sat_raw" target="_blank"><img
								src="<?= base_url();?>assets/img/social/dark/Instagram@2x.svg" alt=""></a></li>
					<li><a href="https://www.linkedin.com/in/satyam-rawat-a5385283" target="_blank"><img
								src="<?= base_url();?>assets/img/social/dark/Linkedin@2x.svg" alt=""></a></li>
					<li><a href="https://dribbble.com/satraw" target="_blank"><img
								src="<?= base_url();?>assets/img/social/dark/Dribbble@2x.svg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="backdrop-shade"></div>
	</div>
	<!-- Navigation End -->

	<!-- Main Page -->
	<main>
		<?php $this->load->view($content); ?>
	</main>
	<!-- Main Page End -->

	<?php $this->load->view('footer'); ?>

</body>

</html>