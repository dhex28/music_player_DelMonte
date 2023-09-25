<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music playlist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        #player-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        audio {
            width: 100%;
        }

        #playlist {
            list-style: none;
            padding: 0;
        }

        #playlist li {
            cursor: pointer;
            padding: 10px;
            background-color: #eee;
            margin: 5px 0;
            transition: background-color 0.2s ease-in-out;
        }

        #playlist li:hover {
            background-color: #ddd;
        }

        #playlist li.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<h1>Playlist: <?= $playlist['name'] ?></h1>

<div id="current-music-name" style="margin-top: 20px;"></div>

<audio id="audio" controls autoplay></audio>

<ul id="playlist">
    <?php if (!empty($musicTracks)) : ?>
        <?php foreach ($musicTracks as $track) : ?>
            <li>
                <a href="javascript:void(0);" class="play-music" data-src="<?= base_url($track['file_path']) ?>">
                    <?= $track['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    <?php else : ?>
        <li>No music tracks in this playlist.</li>
    <?php endif; ?>
</ul>

<script>
    // JavaScript code to handle music playback
    const audio = document.getElementById('audio');
    const playlist = document.getElementById('playlist');
    const currentMusicName = document.getElementById('current-music-name');

    // Function to play music
    function playMusic(trackUrl, trackName) {
        audio.src = trackUrl;
        audio.play();
        currentMusicName.textContent = `Now Playing: ${trackName}`;
    }

    // Add click event listeners to the music items
    const musicItems = playlist.querySelectorAll('.play-music');
    musicItems.forEach((item) => {
        item.addEventListener('click', () => {
            const trackUrl = item.getAttribute('data-src');
            const trackName = item.textContent;
            playMusic(trackUrl, trackName);
        });
    });
</script>
</body>
</html>
