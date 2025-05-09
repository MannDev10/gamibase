<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GamiBase - Input</title>

	<style type="text/css">
	body {
		background-color: #100f14;
		margin: 40px;
		font: 20px normal Helvetica, Arial, sans-serif;
		color: #fff;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

    a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	p {
		margin: 0;
	}

	#container {
        padding: 15px;
        width: 60%;
	}

    .wrapper {
        width: 100%; 
        display: flex; 
        align-items: center; 
        justify-content: center;
    }
    
    .cover {
        border-radius: 20px;
        width: 100%;
        height: auto;
        aspect-ratio: 3/4;
        object-fit: cover;
        transform: scale(1);
        transition: all 300ms;
    }
    
    .cover:hover {
        transform: scale(1.2);
        transition: all 300ms
    }

    .title {
        color: #fff;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        margin: 0
    }

    .play-button {
        border-radius: 100px;
        padding: 10px 25px;
        cursor: pointer;
    }
	</style>
</head>
<body>
    <div class="wrapper">
        <div id="container">
            <h3>Detail Games</h3>
            <div style="display: flex; align-items: center; gap: 15px">
                <div style="width: 200px; overflow: hidden; border-radius: 20px">
                    <img src="<?= base_url('upload/' . $game->cover) ?>" alt="" class="cover">
                </div>
                <div style="display: flex; flex-direction: column; gap: 10px">
                    <h4 class="title"><?= $game->title; ?></h4>
                    <p style="color: #ffffff80; font-size: 14px; margin-bottom: 25px"><?= $game->genre; ?></p>
                    <img 
                        src="<?= base_url('assets/' . $game->platform . '.png') ?>" 
                        alt="" 
                        style="width: 30px; height: auto; object-fit: contain"
                    >
                    <div style="display: flex; align-items: center; gap: 5px; margin-top: 15px">
                    <a href="<?= base_url('welcome/update/'.$game->id) ?>">
                        <div class="play-button" style="background-color: #f49918">
                            <h6 style="color: #fff; margin: 0">Edit</h6>
                        </div>
                    </a>    
                    <a href="<?= base_url('welcome/delete/'.$game->id) ?>">
                        <div class="play-button" style="background-color: #dc3545">
                            <h6 style="color: #fff; margin: 0">Delete</h6>
                        </div>
                    </a>    
                </div>
                </div>
            </div>
            <h3>Description</h3>
            <p style="color: #ffffff80; font-size: 15px; white-space: pre-line"><?= $game->desc; ?></p>
        </div>
    </div>
</body>
</html>
