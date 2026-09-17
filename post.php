<?php
$name = "";
$email = "";
$message = "";
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Humming Bird - POST Method</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <p class="eyebrow">Midterm Exercise #4</p>
    <h1>Group Activity Using POST Method</h1>
    <p class="header-sub">The Humming Bird</p>
</header>

<main class="container">

    <section class="card">
        <div class="card-body">
            <h2>Send a Message</h2>

            <form method="POST" action="post.php">

                <p>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" required
                           value="<?php echo $name; ?>">
                </p>

                <p>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required
                           value="<?php echo $email; ?>">
                </p>

                <p>
                    <label for="message">Message</label><br>
                    <textarea id="message" name="message" rows="5" required><?php echo $message; ?></textarea>
                </p>

                <button type="submit">Submit</button>

            </form>

            <?php if ($submitted): ?>
                <div style="margin-top: 25px;">
                    <h2>Submitted Information</h2>
                    <p><strong>Name:</strong> <?php echo $name; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Message:</strong> <?php echo $message; ?></p>
                    <p><strong>Method Used:</strong> POST</p>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<footer class="footer">
    <p>© 2026 The Humming Bird · Midterm Exercise #4</p>
</footer>

</body>
</html>
