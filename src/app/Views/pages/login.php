<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet" />
    <!-- css -->
    <link href="<?= base_url('assets/css/login.css') ?>" rel="stylesheet" />
    <!-- FontsAwesome kit -->
    <script src="https://kit.fontawesome.com/0b8b40c4fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <h1>Bloggi</h1>
        <h2>Login</h2>
        <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) : ?>
            <?php echo $msg ?>
        <?php endif; ?>
        <form method="POST" action="<?= base_url('login') ?>">
            <section>
                <i class="fa-solid fa-circle-user fa-3x user_icon"></i>
                <input type="text" class="input" name="email">
            </section>
            <section>
                <i class="fa-solid fa-key fa-3x passwd_icon"></i>
                <input type="password" class="input" name="password">
            </section>
            <section>
                <button class="signin-btn" type="submit">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login
                </button>
            </section>
        </form>
    </main>
</body>
</html>