<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
    header("Location: register.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <title>Welcome to SpotifyClone</title>
</head>
<body>

    <script>
        var audioElement = new Audio();
        audioElement.setTrack("assets/music/the-four-horsemen.mp3");
        audioElement.audio.play();
    </script>

    <div id="mainContainer">
        <div id="topContainer">
           <?php include("includes/navBarContainer.php"); ?>
           <div id="mainViewContainer">
               <div id="mainContent">