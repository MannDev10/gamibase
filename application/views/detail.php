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
                    <img src="<?= base_url('upload/re4.png') ?>" alt="" class="cover">
                </div>
                <div style="display: flex; flex-direction: column; gap: 10px">
                    <h4 class="title">Resident Evil 4</h4>
                    <p style="color: #ffffff80; font-size: 14px; margin-bottom: 25px">Action, Shooter</p>
                    <img 
                        src="<?= base_url('assets/xbox.png') ?>" 
                        alt="" 
                        style="width: 30px; height: auto; object-fit: contain"
                    >
                    <div style="display: flex; align-items: center; gap: 5px; margin-top: 15px">
                        <div class="play-button" style="background-color: #f49918">
                            <h6 style="color: #fff; margin: 0">Edit</h6>
                        </div>
                        <div class="play-button" style="background-color: #dc3545">
                            <h6 style="color: #fff; margin: 0">Delete</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Description</h3>
            <p style="color: #ffffff80; font-size: 15px">Elit quis et esse est officia in pariatur excepteur nisi officia mollit sit excepteur. Cillum est non adipisicing sit enim. Aute ipsum aliquip ullamco eu eiusmod officia et. Amet esse occaecat elit ullamco. Esse esse laboris pariatur et tempor eiusmod dolor minim est labore labore. Labore sint proident cillum nisi qui deserunt nisi ipsum commodo. Non dolore aliqua proident nisi proident consectetur elit duis tempor esse. Eu occaecat sit laboris nisi ut veniam. Adipisicing ad laborum nostrud eiusmod aute aute. Consectetur dolore reprehenderit irure aute dolor pariatur laborum nisi qui irure ex enim dolor. Quis tempor labore Lorem et consectetur laboris aliquip aute ut exercitation. Consequat sunt ullamco in qui deserunt do dolore id nostrud.</p>
        </div>
    </div>
</body>
</html>
