<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>

		<!-- Ex 1: Number of Songs (Variables) -->
		<?php
			$song_sount = 1011;
			$news_pages=9;

			$news_pages = $_GET["newspages"];
			if ($news_pages==NULL){
				$news_pages=5;
			}
		?>
		<p>
			I love music.
			I have <?php print $song_sount ?>  total songs,
			which is over <?php print (int)($song_sount/10) ?> hours of music!
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Billboard News</h2>

			<ol>

				<?php
				for($i = 0 ; $i < $news_pages; $i++){ ?>
					<li><a href="https://www.billboard.com/archive/article/201<?= 911-$i ?>">2019-<?= 11-$i ?></a></li>
				<?php }
				?>
			</ol>
		</div>
		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
			<ol>
				<?php $artists = array("Guns N' Roses", "Green Day" , "Blink182" , "BlackPink" ); ?>
				<?php for($i = 0;$i < count($artists); $i++){ ?>
					<li><?php print $artists[$i] ?></li>
				<?php }
				?>
			</ol>
		</div>
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
				<li class="mp3item">
					<a href="lab5/musicPHP/songs/paradise-city.mp3">paradise-city.mp3</a>
				</li>

				<li class="mp3item">
					<a href="lab5/musicPHP/songs/basket-case.mp3">basket-case.mp3</a>
				</li>

				<li class="mp3item">
					<a href="lab5/musicPHP/songs/all-the-small-things.mp3">all-the-small-things.mp3</a>
				</li>

				<!-- Exercise 8: Playlists (Files) -->
				<li class="playlistitem">326-13f-mix.m3u:
					<ul>
						<li>Basket Case.mp3</li>
						<li>All the Small Things.mp3</li>
						<li>Just the Way You Are.mp3</li>
						<li>Pradise City.mp3</li>
						<li>Dreams.mp3</li>
					</ul>
			</ul>
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
