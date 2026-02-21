<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/styles/styles.css">
    <style>
      .preloader{position:fixed;top:0;left:0;width:100%;height:100%;background:#000;z-index:99999;display:flex;justify-content:center;align-items:center;transition:opacity .4s ease}
      .preloader.fade-out{opacity:0;pointer-events:none}
      .preloader-spinner{width:40px;height:40px;border:3px solid rgba(255,166,0,.2);border-top-color:orange;border-radius:50%;animation:spin .8s linear infinite}
      @keyframes spin{to{transform:rotate(360deg)}}
    </style>
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 
      <!-- Fav Icon -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Swiper Js -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      <!-- animate css -->
      <link rel="stylesheet" href="<?php bloginfo("template_url")?>/plugins/animate.css/animate.css">
      <link rel="stylesheet" href="<?php bloginfo("template_url")?>/plugins/simple-lightbox.min.css">
  	  <link rel="stylesheet" href="<?php bloginfo("template_url")?>/plugins/fashion-slider.css">
      <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <!-- Fav Icon -->
    <script src="https://kit.fontawesome.com/0144f75b4e.js" crossorigin="anonymous"></script>
   	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url")?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url")?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url")?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo("template_url")?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo("template_url")?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  	<meta name="description" content="Bienvenue sur le site d'Annick Van Endert, artiste peintre & sculpteur belge. Découvrez ses projets persos touchant divers supports et outils créatifs : Toiles, dessins, sculptures et fresques.">
    <title><?php bloginfo("name")?></title>
</head>