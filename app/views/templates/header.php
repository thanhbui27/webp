<!DOCTYPE html>
<!-- saved from url=(0025)<?= BASEURL ?> -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="origin-trial"
        content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASEURL ?>">
    <title><?= $title ?></title>
    <meta name="description"
        content="<?= $title ?> - Trải nghiệm game nhập vai trực tuyến hấp dẫn, lấy cảm hứng từ Dragon Ball. Tham gia ngay để chiến đấu và khám phá thế giới Ngọc Rồng!">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/css/bootstrap-combined.no-icons.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/vendor/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/vendor/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/main.css">
    <meta property="og:image" content="<?= BASEURL ?>/static/sonic/img/graph_ping.png?v=12345">
    <meta property="og:image:secure_url" content="<?= BASEURL ?>/static/sonic/img/graph_ping.png?v=12345">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <link rel="icon" type="image/x-icon" href="<?= BASEURL ?>static/sonic/img/favicon_4.png">
    <script type="text/javascript" async="" charset="utf-8" src="<?= BASEURL ?>/vendor/js/recaptcha__vi.js"
        crossorigin="anonymous" integrity="sha384-WzJKh6n6iYSGcgyIFp684JKGvHKOgUW25JiPgoRiLFnJMvzWHYygWbnf/Ou5o1qR"
        nonce="abc123"></script>
    <script src="<?= BASEURL ?>/vendor/js/sdk.js" async="" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header class="header custom-container secondary-bg">
        <div class="header-top mb-4">
            <a class="logo" href="<?= BASEURL ?>"><img src="<?= BASEURL ?>/img/ping.png" alt=""></a>
        </div>
        <div class="header-menu custom-container"
            style="display: flex; gap: 10px; justify-content: center; margin: 4px 0; padding: 0;">
            <a class="custom-btn" href="." style="flex: 1; text-align: center;">Trang chủ</a>
            <a class="custom-btn" href="/diendan" style="flex: 1; text-align: center;">Diễn đàn</a>
            <a class="custom-btn" href="/gioithieu" style="flex: 1; text-align: center;">Giới thiệu</a>
            <a class="custom-btn" href="" target="_blank"
                style="flex: 1; text-align: center;">Fanpage</a>
        </div>
        <?php if(isset($data['isShow'])): ?>
            <?php if(!isset($_SESSION['user'])) : ?>
                <div class="header-menu custom-container">
                    <a class="custom-btn" href="/dangnhap">Đăng nhập</a>
                    <a class="custom-btn" href="/dangky">Đăng ký</a>
                </div>
            <?php else: ?>
                <div class="header-menu custom-container"></div>
            <?php endif; ?>
        <?php else: ?>
            <div class="header-menu custom-container"></div>
        <?php endif; ?>
        <div class="header-menu custom-container"
            style="display: flex; gap: 10px; justify-content: center; margin: 4px 0; padding: 0;">
            <div style="text-align: center;">
                <a href="<?= BASEURL ?>page?e=java">
                    <img src="<?= BASEURL ?>/img/jar.png" alt="Jar" style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Jar</div>
            </div>

            <div style="text-align: center;">
                <a href="<?= BASEURL ?>page?e=android">
                    <img src="<?= BASEURL ?>/img/android.png" alt="Android" style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Android</div>
            </div>

            <div style="text-align: center;">
                <a href="<?= BASEURL ?>page?e=pc">
                    <img src="<?= BASEURL ?>/img/pc.png" alt="Windows" style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Windows</div>
            </div>

            <div style="text-align: center;">
                <a href="<?= BASEURL ?>page?e=iphone">
                    <img src="<?= BASEURL ?>/img/iptestflight.png" alt="iPhone Testflight"
                        style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">iPhone TestFlight</div>
            </div>
        </div>
        <div class="header-menu custom-container"
            style="display: flex; gap: 10px; justify-content: center; margin: 4px 0; padding: 0;">

            <div style="text-align: center;">
                <a href="">
                    <img src="<?= BASEURL ?>/img/groupfacebook.png" alt="Group Facebook"
                        style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Group Facebook</div>
            </div>
            <div style="text-align: center;">
                <a href="<?= BASEURL ?>page?e=zalo">
                    <img src="<?= BASEURL ?>/img/zalo1.png" alt="Android" style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Cộng đồng</div>
            </div>

            <div style="text-align: center;">
                <a href="">
                    <img src="<?= BASEURL ?>/img/baoloi.png" alt="iPhone Testflight"
                        style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Báo lỗi</div>
            </div>

            <div style="text-align: center;">
                <a href="https://portal.vietnix.vn/aff.php?aff=3515">
                    <img src="<?= BASEURL ?>/img/muavps.png" alt="iPhone Testflight"
                        style="height: 35px; border-radius: 2px;">
                </a>
                <div style="font-size: 10px; color:rgb(94, 0, 0);">Mua Vps</div>
            </div>

        </div>

    </header>
<?php if(isset($data['isShow'])): ?>
<?php if(isset($_SESSION['user'])): ?>
 <div class="header-account">
        <br>
        <div
            class="header-account-info py-0 secondary-bg custom-container d-flex flex-column justify-content-center align-items-center text-center">
            <img class="account-avatar" src="<?= BASEURL ?>/img/<?= $_SESSION['user']["gender"] ?>.png" alt="">

            <p class="light-brown-text font-weight-bold mt-1 mb-1"><?= $_SESSION['user']["player_name"] ?> </p>
            <!--        <small>(1 sao)</small>-->
            <p>Số dư: <?= $_SESSION['user']["vnd"] ?></p><br>
            <p style="font-weight: bold; font-size: 16px; animation: blink 1s infinite;">
                🎉 Khuyến mãi 30% nạp từ bây giờ đến hết ngày 13/06/2025! 🎉
            </p><br>

            <style>
                @keyframes blink {
                    0% {
                        color: black;
                    }

                    50% {
                        color: white;
                    }

                    100% {
                        color: black;
                    }
                }
            </style>
        </div>
        <div class="header-account-menu secondary-bg custom-container">
            <a class="custom-btn" href="/card">Nạp Thẻ cào</a>
            <a class="custom-btn" href="/bank">Nạp qua ATM/Momo</a>
            <a class="custom-btn" href="/change-password">Đổi mật khẩu</a>
            <a class="custom-btn" href="/dangxuat">Đăng xuất</a>
        </div>
    </div>
 <?php endif; ?>
<?php endif;?>