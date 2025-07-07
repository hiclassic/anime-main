<?php
require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../config/config.php";

if (isset($_POST['submit'])) {
    // Basic input validation
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password_raw = $_POST['password'] ?? '';

    if (empty($email) || empty($username) || empty($password_raw)) {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        try {
            $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");

            $stmt->execute([
                ':email' => $email,
                ':username' => $username,
                ':password' => $password_hashed,
            ]);

            // Redirect only if no output has been sent
            header("Location: login.php");
            exit;

        } catch (PDOException $e) {
            $error = "Something went wrong: " . $e->getMessage(); // In production, log this instead
        }
    }
}
?>

<!-- UI Part -->

<section class="normal-breadcrumb set-bg" data-setbg="<?php echo defined('APPURL') ? APPURL : ''; ?>/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Sign Up</h2>
                    <p>Welcome to the official Anime blog.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="signup spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login__form">
                    <h3>Sign Up</h3>

                    <?php if (!empty($error)): ?>
                        <div style="color: red; margin-bottom: 15px;"><?php echo htmlspecialchars($error); ?></div>
                    <?php endif; ?>

                    <form action="signup.php" method="POST">
                        <div class="input__item">
                            <input name="email" type="text" placeholder="Email address" required>
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input name="username" type="text" placeholder="Your Name" required>
                            <span class="icon_profile"></span>
                        </div>
                        <div class="input__item">
                            <input name="password" type="password" placeholder="Password" required>
                            <span class="icon_lock"></span>
                        </div>
                        <button name="submit" type="submit" class="site-btn">Register Now</button>
                    </form>

                    <h5>Already have an account? <a href="login.php">Log In!</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . "/../includes/footer.php"; ?>
