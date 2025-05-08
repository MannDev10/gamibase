<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GamiBase</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

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

	p {
		margin: 0;
	}

	#container {
		margin: 10px;
        padding: 15px;
	}

    .wrapper {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        flex-wrap: wrap;
        width: 100%;
    }
    
    .card {
        width: 15%;
        display: flex;
        flex-direction: column;
        gap: 15px;
        cursor: pointer;
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

    .add-button {
        background-color: #fff;
        border-radius: 100px;
        padding: 15px 25px;
        cursor: pointer;
    }
	</style>
</head>
<body>
    <div id="container">
        <div style="width: 100%; display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px">
            <h2>Library Games</h2>
            <a href="<?= base_url('welcome/create'); ?>">
                <div class="add-button">
                    <h5 style="color: #100f14; margin: 0">Add Game</h5>
                </div>
            </a>
        </div>
        <div class="wrapper">
            <?php foreach ($games as $game): ?>
                <div class="card">
                    <div style="width: 100%; overflow: hidden; border-radius: 20px">
                        <img src="<?= base_url('upload/' . $game['cover']) ?>" alt="" class="cover">
                    </div>
                    <h4 class="title"><?= $game['title'] ?></h4>
                    <p style="color: #ffffff80; font-size: 14px"><?= $game['genre'] ?></p>
                    <img src="<?= base_url('assets/' . $game['platform'] . '.png') ?>" alt="" style="width: 30px; height: auto; object-fit: contain">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
