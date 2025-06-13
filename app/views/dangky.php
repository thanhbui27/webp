   <div class="web-content">
        <div class="custom-container tertiary-bg">
            <div class="account-form custom-container-small">
                <h3>Đăng Ký</h3>
                 <p style="color: red; font-weight: 900; font-size:24px;"><?=  isset($data['error']) ? $data['error'] : '' ?></p>
                <form action="/dangky" method="POST" onsubmit="return validateRecaptcha()">
                    <div class="account-input mb-2">
                        <label>Tài khoản:</label>
                        <p>(không dùng kí tự đặc biệt @,./#%)</p>
                        <input type="text" name="username" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="account-input mb-2">
                        <label>Mật khẩu:</label>
                        <p>phải có chữ và số (vidu: ngocrong001) và (không dùng kí tự đặc biệt @,./#%)</span></p>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="account-input mb-3">
                        <label>Chọn Server:</label>
                        <select class="form-control form-control-alternative" name="server" required="">
                            <option value="">Chọn Server</option>
                            <option value="1">Vào Game Chọn Server Ping</option>
                        </select>
                    </div>
                    <div class="d-flex align-item-center mb-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="accepttnc" id="accepttnc" checked="">
                            <span class="pl-4">Đồng ý</span>
                        </label>
                        <span><a class="text-primary pl-1" href="/registertnc" target="_blank">Điều khoản sử
                                dụng</a></span>
                    </div>
                    <input type="hidden" name="utm_campaign" id="utm_campaign">
                    <input type="hidden" name="utm_source" id="utm_source">
                    <!-- <div class="g-recaptcha" data-sitekey="6Lemp9sqAAAAANkCHBMyBDKikMPvxqxGUIYiJBlC"></div> -->
                    <button type="submit" class="custom-btn w-100">Đăng ký</button>
                </form>
            </div>
        </div>
        <script>
            function validateRecaptcha() {
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    alert("Please verify that you are not a robot.");
                    return false;
                }
                return true;
            }
        </script><!-- Footer -->
        <footer class="footer custom-container tertiary-bg">
            <p>Cổng game chính thức: <a href="">Cổng game <?= $title ?></a></p>
            <p>Fanpage chính thức: <a href="">Fanpage Ngọc Rồng
                    Ping</a></p>
            <p>© 2025 - Bản quyền thuộc về </p>
        </footer>
        <!-- Footer -->
    </div>