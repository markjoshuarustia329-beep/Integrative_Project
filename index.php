    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Team | Group Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<?php
    $message = "Welcome to The Humming Bird! 🐦";
    echo "<p>$message</p>";
?>

<header class="header">
    <p class="eyebrow">Muntinlupa City</p>
    <h1>The Humming Bird</h1>
    <p class="header-sub">Three people, three sets of hobbies, one page. Say hi.</p>
</header>

   

    <main class="container">

        <section class="card" style="--accent:#2F6F7E;">
            <div class="card-top">
                <span class="badge-no">No. 01</span>
                <div class="photo-frame">
                    <img src="img/img1.jpg" alt="Mark Joshua Rustia">
                </div>
            </div>
            <div class="card-body">
                <h2>Mark Joshua Rustia</h2>
                <p class="role">Student      20 years old</p>
                <div class="tags">
                    <span class="tag">🎮 Gaming</span>
                    <span class="tag">🎤 Singing</span>
                    <span class="tag">🎵 Music</span>
                </div>
                <p class="about">
                    A cute person who loves to sing, play games, and listening to music whenever the pressure gets hard^^.
                </p>
                <div class="detail-row">
                    <span class="detail-label">Address</span>
                    <span class="detail-value">Phase 1, Bagong Sibol, Putatan, Muntinlupa City</span>
                </div>
            </div>
        </section>

        <section class="card" style="--accent:#E08A2E;">
            <div class="card-top">
                <span class="badge-no">No. 02</span>
                <div class="photo-frame">
                    <img src="img/img2.jpg" alt="Mark Andrew Reyes">
                </div>
            </div>
            <div class="card-body">
                <h2>Mark Andrew Reyes</h2>
                <p class="role">Student &nbsp;·&nbsp; 20 years old</p>
                <div class="tags">
                    <span class="tag">🏀 Basketball</span>
                    <span class="tag">🎬 Movies</span>
                </div>
                <p class="about">
                    Splits his time between the court and the couch — a good game of
                    basketball during the day, a good movie to unwind at night.
                </p>
            </div>
        </section>

        <section class="card" style="--accent:#B23A6B;">
            <div class="card-top">
                <span class="badge-no">No. 03</span>
                <div class="photo-frame">
                    <img src="img/img3.jpg" alt="Nikki Ramboyong">
                </div>
            </div>
            <div class="card-body">
                <h2>Nikki Ramboyong</h2>
                <p class="role">Student &nbsp;·&nbsp; 21 years old</p>
                <div class="tags">
                    <span class="tag">🎬 Movies</span>
                    <span class="tag">🎤 Singing</span>
                    <span class="tag">🍜 Eating</span>
                </div>
                <p class="about">
                    Always up for a movie marathon, a good song, and even better food —
                    usually all three in the same weekend.
                </p>
            </div>
        </section>

    </main>

    <footer class="footer">
        <p>© 2026 The Humming Bird &nbsp;·&nbsp; Group Profile Page</p>
    </footer>
   
    <button onclick="showMessage()">Click Me</button>

<p id="message"></p>

<script>
function showMessage() {
    document.getElementById("message").innerHTML =
        "Welcome to The Humming Bird! 🐦";
}
</script>

</body>
</html>
