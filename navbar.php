<!-- navbar.php -->
<?php
?>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<div>
    <nav style="display: flex; 
        justify-content: space-between;  
        padding: 10px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        z-index: 100;
        background-color: white">
        <a href="/Golfstats" style="font-size: 2rem; 
            text-decoration: none; 
            color: inherit;   
            display: flex; 
            align-items: center;">
            <img src="./assets/golfstats.png" alt="Logo" width="34" height="34" style="margin-right: 10px;" />
            Golfstats
        </a>
        <div style="display: flex; 
        margin-top:12.5
       ">
            <form action="/GolfStats/player.php" method="GET" style="display: flex;
            ">
                <input type="search" name="player_name" placeholder="Search" aria-label="Search" style="border-radius: 10px; 
                       padding: 12px; 
                       margin-right: 10px; 
                       border: 1px solid #ccc; 
                       font-size: 1.5rem;" />
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </nav>
</div>