  <div class="web-content">
        <div class="custom-container tertiary-bg">
            <div class="account-form custom-container-small">
                <h3>Đăng Nhập</h3>
                <p style="color: red; font-weight: 900; font-size:24px;"><?= isset($data['error']) ? $data['error'] : '' ?></p>
                <form action="/dangnhap" method="POST">
                    <div class="account-input mb-2">
                        <label><span class="text-danger">*</span> Tài khoản:</label>
                        <input type="text" name="username" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="account-input mb-2">
                        <label><span class="text-danger">*</span> Mật khẩu:</label>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="accept" id="accept" checked="">
                            <span class="pl-4">Ghi nhớ đăng nhập</span>
                        </label>
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <button type="submit" class="custom-btn w-100">Đăng nhập</button>
                </form>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer custom-container tertiary-bg">
            <p>Cổng game chính thức: <a href="">Cổng game Ngọc Rồng Ping</a></p>
            <p>Fanpage chính thức: <a href="">Fanpage Ngọc Rồng
                    Ping</a></p>
            <p>© 2025 - Bản quyền thuộc về </p>
        </footer>
        <!-- Footer -->
    </div>