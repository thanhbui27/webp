<div class="web-content">
    <div class="custom-container tertiary-bg">
        <a href="/diendan">&lt; Quay lại diễn đàn</a>
    </div>

    <div class="custom-container pt-3 pb-5 tertiary-bg">
        <div class="account-form custom-container-small">
            <h3>Đổi Mật Khẩu</h3>
            <p style="color: red; font-weight: 900; font-size:24px;"><?= isset($data['error']) ? $data['error'] : '' ?></p>
            <form action="/change-password" method="POST">
                <div class="account-input mb-2">
                    <label class="font-weight-bold">Mật khẩu hiện tại:</label>
                    <input type="password" class="form-control" name="current_password" id="password" placeholder="Mật khẩu hiện tại" required="">
                </div>
                <div class="account-input mb-2">
                    <label class="font-weight-bold">Mật khẩu mới:</label>
                    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Mật khẩu mới" required="">
                </div>
                <div class="account-input mb-2">
                    <label class="font-weight-bold">Xác nhận mật khẩu mới:</label>
                    <input type="password" class="form-control" name="confirm_password" id="new_password_confirmation" placeholder="Xác nhận mật khẩu mới" required="">
                </div>
                <button type="submit" class="custom-btn w-100">Thực hiện</button>
            </form>
        </div>
    </div>
<!-- Footer -->
<footer class="footer custom-container tertiary-bg">
    <p>Cổng game chính thức: <a href="">Cổng game Ngọc Rồng Ping</a></p>
    <p>Fanpage chính thức: <a href="">Fanpage Ngọc Rồng Ping</a></p>
    <p>© 2025 - Bản quyền thuộc về ThanhDi.Top</p>
</footer>
<!-- Footer -->
</div>