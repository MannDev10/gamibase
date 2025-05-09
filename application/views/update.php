<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GamiBase - Input</title>

	<style type="text/css">
    * {
      box-sizing: border-box;
    }

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
        width: 50%;
	}

    .wrapper {
        width: 100%; 
        display: flex; 
        align-items: center; 
        justify-content: center;
    }

    .form-group {
      margin-bottom: 20px;
      width: 100%
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #a7a7a7;
      font-weight: bold;
    }

    .form-group input[type="text"] {
      width: 100%;
      padding: 10px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
    }

    .form-group input[type="text"]:focus {
      border-color: #007BFF;
      outline: none;
    }

    .form-group button {
      width: 100%;
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #0056b3;
    }

    .form-group textarea {
      width: 100%;
      padding: 10px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
      min-height: 200px;
      font-family: inherit;
    }

    .form-group textarea:focus {
      border-color: #007BFF;
      outline: none;
    }

    .form-group input[type="file"] {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #f1f1f1;
    }

    .form-group input[type="file"]::-webkit-file-upload-button {
      background: #007BFF;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group input[type="file"]::-webkit-file-upload-button:hover {
      background-color: #0056b3;
    }

    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #f1f1f1;
      appearance: none;
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%204%205'%3E%3Cpath%20fill='none'%20stroke='%23999'%20stroke-width='1'%20d='M0%200l2%202l2-2'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;
    }

    .form-group select:focus {
      outline: none;
      border-color: #007bff;
      background-color: #fff;
    }
	</style>
</head>
<body>
    <div class="wrapper">
        <div id="container">
            <h3>Edit Game</h3>
            <form action="<?= site_url('welcome/update/'. $game->id); ?>" method="post" enctype="multipart/form-data">
                <div style="display: flex; gap: 15px; flex-direction: column; width: 100%">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Input game title" value="<?php echo $game->title; ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Genre</label>
                        <input type="text" id="genre" name="genre" placeholder="Eg: Action, Adventure, RPG" value="<?php echo $game->genre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea id="desc" name="desc" placeholder="Game description"><?php echo $game->desc; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Game Cover</label>
                        <input type="file" id="cover" name="cover" accept=".jpg,.png,.jpeg" />
                    </div>
                    <div class="form-group">
                        <label for="platform">Platform</label>
                        <select id="platform" name="platform">
                          <?php foreach($platforms as $platform): ?>
                            <option value="<?= $platform['value'] ?>" <?= ($platform['value'] == $game->platform) ? 'selected' : '' ?>>
                                <?= $platform['label'] ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>   
        </div>
    </div>
</body>
</html>
