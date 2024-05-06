<!DOCTYPE html>
<html lang="en">
<head>
	<title>Music Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css?52423">
</head>
<body>
	<style>
		header a{
			color: white;
		}

		.dropdown-list{
			background-color: #444;
		}
	</style>
	<header style="background-color: #3e344e; color: white;">
		<div class="logo-holder">
			<a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/images/logo.jpg"></a>
		</div>
		<div class="header-div">
			<div class="main-title">
				Felhasználó oldal
				<div class="socials">
				
				</div>
			</div>
			<div class="main-nav">
				<div class="nav-item"><a href="<?=ROOT?>/admin">Kezdőoldal</a></div>
				<div class="nav-item"><a href="<?=ROOT?>/admin/users">Felhasználó</a></div>
				<div class="nav-item"><a href="<?=ROOT?>/admin/songs">Dalok</a></div>
				<div class="nav-item"><a href="<?=ROOT?>/admin/categories">Kategóriák</a></div>
				<div class="nav-item"><a href="<?=ROOT?>/admin/artists">Előadók</a></div>
				<div class="nav-item dropdown">
					<a href="#">Hi, <?=user('username')?></a>
					<div class="dropdown-list">
						<div class="nav-item"><a href="<?=ROOT?>/profile">Profil</a></div>
						<div class="nav-item"><a href="<?=ROOT?>">Weboldal</a></div>
						<div class="nav-item"><a href="<?=ROOT?>/logout">Kijelentkezés</a></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(message()):?>
		<div class="alert"><?=message('',true)?></div>
	<?php endif;?>