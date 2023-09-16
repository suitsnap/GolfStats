<!-- player.php -->

<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Golfstats</title>
    <link rel="icon" href="./assets/favicon.ico" />
    <script src="https://bs-community.github.io/skinview3d/js/skinview3d.bundle.js"></script>
    <style>
        #player-skin-viewer {
            width: 300px;
            height: 600px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['player_name'])) {
        $playerName = $_GET['player_name'];

        $apiUrl = "https://api.mojang.com/users/profiles/minecraft/$playerName";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the cURL request and store the response
        $response = curl_exec($ch);

        if ($response === false) {
            echo "<h1>Error: Unable to fetch player data.</h1>";
        } else {
            $playerData = json_decode($response, true);

            if ($playerData === null || !isset($playerData['id'])) {
                echo "<h1>Player Not Found</h1>";
            } else {
                $playerUUID = $playerData['id'];
                $playerUsername = $playerData['name'];
                echo "<h1> $playerUsername's MCCI Statistics</h1>
                <canvas id='skin' width='300' height='600'></canvas>
                <script>
                    const skinViewer = new skinview3d.SkinViewer({
                        canvas: document.getElementById('skin'),
                        width: 300,
                        height: 600,
                        skin: 'https://mc-heads.net/skin/$playerUUID'
                    });
                    skinViewer.animation = new skinview3d.IdleAnimation();
                    skinViewer.controls.enableRotate = true;
                    skinViewer.controls.enableZoom = false;
                </script>"; ?>
                <?php
            }
        }
    } else {
        echo "<h1>Player Name Not Provided</h1>";
    }
    ?>
</body>

</html>