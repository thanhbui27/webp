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
         <?php if(!isset($_SESSION['user'])) : ?>
                <div class="header-menu custom-container">
                    <a class="custom-btn" href="/dangnhap">Đăng nhập</a>
                    <a class="custom-btn" href="/dangky">Đăng ký</a>
                </div>
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
    <div class="web-content">
        <div class="custom-modal" id="home-modal">
            <!-- For modal-content, modal-success-msg for green msg and modal-error-msg for red msg, if not then the modal will be the default msg style -->
            <div class="modal-content modal-success-msg">
                <span class="close-btn">×</span>
                <img class="modal-success-icon" src="<?= BASEURL ?>/success-msg.svg" alt="" srcset="">
                <!-- use <p> tag for the message -->
                <p><strong>Giftcode Tân Thủ</strong></p>
                <p>nroping1 -&gt; nroping15</p><br>
                <p><a href="" target="_blank" class="custom-btn custom-btn-primary">Cộng đồng
                        Zalo 1</a></p><br>
                <p><a href="" target="_blank" class="custom-btn custom-btn-primary">Cộng đồng
                        Zalo 2</a></p><br>
                <p><a href="" target="_blank"
                        class="custom-btn custom-btn-primary">Cộng đồng Facebook</a></p>
            </div>
        </div>
        <img class="d-block custom-container p-0" src="<?= BASEURL ?>/img/banner.png" alt="" srcset="">
        <div class="custom-container tertiary-bg">
            <div class="featured mb-4">
                <h2 class="text-center primary-text">Nổi Bật</h2>
                <div class="custom-container-border p-3 rounded">
                    <ul>
                        <li>Tham gia ngay mà <strong>không cần mở thành viên</strong>, bạn vẫn có thể thỏa sức cày cuốc,
                            kiếm tiền, và chinh phục bảng xếp hạng.</li>
                        <li>Đăng ký tài khoản và tải game <strong>hoàn toàn miễn phí</strong>, mang đến cơ hội trải
                            nghiệm
                            hấp dẫn cho tất cả mọi người.</li>
                        <li>Trò chơi chú trọng vào trải nghiệm người chơi, mang lại cảm giác chinh phục đầy thỏa mãn và
                            sự
                            <strong>bền vững theo thời gian</strong>.
                        </li>
                        <li>Quảng bá rộng rãi, mở ra cánh cửa đến với một cộng đồng <strong>đông đảo và sôi
                                động</strong>.
                        </li>
                        <li>Tự do trải nghiệm, hoàn toàn không có sự can thiệp từ Admin, đảm bảo tính <strong>công bằng
                                tuyệt đối</strong> trong mọi hành trình.</li>
                    </ul>
                </div>
            </div>

            <div class="summary mb-4">
                <h2 class="text-center primary-text">Sơ Lược</h2>
                <div class="custom-container-border p-3 rounded">
                    <p><strong><?= $title ?></strong>
                        là một game nhập vai trực tuyến hấp dẫn, được lấy cảm hứng từ bộ manga nổi tiếng Dragon
                        Ball, đã từng chiếm trọn trái tim của nhiều thế hệ độc giả Việt Nam. Trong trò chơi này, bạn sẽ
                        được
                        lựa chọn một hành tinh để bắt đầu cuộc phiêu lưu của mình: Trái Đất, Namếc, hay Xayda. Hành
                        trình
                        tìm kiếm ngọc rồng và chiến đấu chống lại các thế lực hắc ám hoàn toàn nằm trong tay bạn.</p>
                    <p>Với sự hỗ trợ từ các bậc tiền bối và sự cố gắng không ngừng của chính bạn, bạn có thể nâng cao
                        sức
                        mạnh và trở thành những chiến binh siêu hạng. Bên cạnh đó, bạn sẽ có đồng đội và những chiến
                        binh
                        cùng chí hướng, luôn sẵn sàng hỗ trợ và chiến đấu cùng bạn để đối phó với các thế lực đen tối.
                    </p>
                    <p><strong><?= $title ?></strong> là một trò chơi đa nền tảng, có thể chơi
                        trên các thiết bị như PC Windows, iPhone, Android, Windows Phone, và cả các máy chạy hệ điều
                        hành
                        Java như Nokia S40 và S60. Với chất lượng đồ họa cao và hiệu suất mượt mà, trò chơi hoạt động
                        tốt
                        trên các kết nối mạng như ADSL, 3G, và GPRS.</p>
                    <p>Trò chơi phù hợp với người chơi ở mọi lứa tuổi. Điều khiển nhân vật trên màn hình cảm ứng rất dễ
                        dàng, và nếu chơi trên PC, bạn có thể sử dụng chuột hoặc bàn phím. Các thiết bị Nokia S40 và S60
                        cũng cho phép bạn điều khiển nhân vật một cách dễ dàng với bàn phím cứng.</p>
                </div>
            </div>

            <div class="intro mb-4">
                <h2 class="text-center primary-text">Giới Thiệu Chung</h2>
                <div class="custom-container-border p-3 rounded">
                    <p><strong><?= $title ?></strong> là trò chơi trực tuyến hấp dẫn, lấy cảm
                        hứng từ bộ truyện tranh huyền thoại <strong>7 Viên Ngọc Rồng</strong>. Người chơi sẽ nhập vai
                        thành
                        những anh hùng từ ba hành tinh: Trái Đất, Xayda và Namếc. Mỗi hành tinh sẽ có ngoại hình và
                        chiêu
                        thức riêng biệt nổi bật. Bạn sẽ luyện tập, rèn luyện sức mạnh và kỹ năng, đoàn kết chiến đấu
                        chống
                        lại các thế lực hung ác, và tham gia vào các cuộc tranh tài kịch tính.</p>
                    <p><strong><?= $title ?></strong>, game nhập vai Dragon Ball, ngọc rồng
                        online, ngọc rồng chiến binh siêu hạng, game PC Windows, game iPhone, game Android, game Java,
                        đồ
                        họa mượt mà, game đa nền tảng.</p>
                </div>
            </div>
            <div class="skill mb-4">
                <h2 class="text-center primary-text">Hình Ảnh Kỹ Năng</h2>
                <div class="skill-container custom-container-border p-3 rounded">
                    <img src="<?= BASEURL ?>/img/skill-01.gif" alt="">
                    <img src="<?= BASEURL ?>/img/skill-02.gif" alt="">
                    <img src="<?= BASEURL ?>/img/skill-03.gif" alt="">
                    <img src="<?= BASEURL ?>/img/skill-04.gif" alt="">
                    <img src="<?= BASEURL ?>/img/skill-05.gif" alt="">
                </div>
            </div>
        </div><!-- Footer -->
        <footer class="footer custom-container tertiary-bg">
            <p>Cổng game chính thức: <a href="">Cổng game <?= $title ?></a></p>
            <p>Fanpage chính thức: <a href="">Fanpage Ngọc Rồng
                    Ping</a></p>
            <p>© 2025 - Bản quyền thuộc về </p>
        </footer>
        <!-- Footer -->
    </div>

    <script type="text/javascript" src="<?= BASEURL ?>/vendor/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL ?>/vendor/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL ?>/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL ?>/vendor/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL ?>/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
</body>

</html>