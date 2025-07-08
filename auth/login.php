<?php
session_start(); // SESSION must be started first
require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../config/config.php";

if (!defined('APPURL')) {
    define('APPURL', 'http://localhost/anime-main'); // change as needed
}

$error = "";

// Handle POST form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Save session data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Redirect to homepage
                header("Location: " . APPURL . "/index.php");
                exit;
            } else {
                $error = "Incorrect email or password.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="<?= APPURL ?>/img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Login</h2>
                    <p>Welcome to the official Anime blog.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Login</h3>

                    <?php if (!empty($error)): ?>
                        <div style="color: red; margin-bottom: 15px;">
                            <?= htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="input__item">
                            <input name="email" type="email" placeholder="Email address" required>
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input name="password" type="password" placeholder="Password" required>
                            <span class="icon_lock"></span>
                        </div>
                        <button name="submit" type="submit" class="site-btn">Login Now</button>
                    </form>

                    <a href="/auth/signup.php" class="forget_pass">Forgot Your Password?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Don’t Have An Account?</h3>
                    <a href="/auth/signup.php" class="primary-btn">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->

<?php require __DIR__ . "/../includes/footer.php"; ?>
