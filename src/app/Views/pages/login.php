<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title><?= $title ?></title>

    <!-- Site favicon -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/deskapp/vendors/styles/core.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/deskapp/vendors/styles/icon-font.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/deskapp/vendors/styles/style.css') ?>" />
</head>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="<?= base_url('assets/deskapp/vendors/images/login-page-img.png') ?>" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To Bloggi</h2>
                    </div>
                    <?php if (session()->has('message')) : ?>
                        <?php echo session()->getFlashdata('message'); ?>
                    <?php endif; ?>
                    <form method="POST" action="<?= base_url('login') ?>">
                        <?php echo session()->getFlashdata('errors')['email'] ?? ''; ?>
                        <div class="input-group custom">
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <?php echo session()->getFlashdata('errors')['password'] ?? ''; ?>
                        <div class="input-group custom">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>