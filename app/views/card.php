    <div class="custom-container tertiary-bg">
        <a href="/diendan">< Quay lại diễn đàn</a>
    </div>

    <div class="custom-container pt-3 pb-5 tertiary-bg">
        <div class="payment-card-form d-flex flex-column flex-lg-row">
            <div class="col-12 col-lg-6">
                <h1>Không Tính Chiết Khấu</h1>
                <h4 class="font-weight-bold red-text">Không Tính Chiết Khấu</h4>
                <!-- POPUP -->
            <div class="account-form">
                    <form action="/card" method="post">
                        <div class="form-group">
                            <label for="account">Tài khoản:</label>
                            <div class="account-input">
                                <input type="text" id="account" value="test1234" readonly>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="card-type">Loại thẻ:</label>
                            <div class="account-input">
                                <select name="card_type" id="card-type" required>
                                    <!--<option selected disabled><?/*= $translator->translate('Select Card Type') */?></option>-->
                                    <option selected value="Viettel">Viettel</option>
                                    <option value="Mobifone">Mobifone</option>
                                    <option value="Vinaphone">Vinaphone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="card-value">Mệnh giá:</label>
                            <div class="account-input">
                                <select name="card_value" id="card-value" required>
                                    <!--<option selected disabled><?/*= $translator->translate('Select Card Value') */?></option>-->
                                    <option selected value="10000">10.000đ</option>
                                    <option value="20000">20.000đ</option>
                                    <option value="30000">30.000đ</option>
                                    <option value="50000">50.000đ</option>
                                    <option value="100000">100.000đ</option>
                                    <option value="200000">200.000đ</option>
                                    <option value="300000">300.000đ</option>
                                    <option value="500000">500.000đ</option>
                                    <option value="1000000">1.000.000đ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial">Số seri:</label>
                            <div class="account-input">
                                <input type="text" name="card_serial" id="serial" placeholder="Nhập số seri" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="card-code">Mã thẻ:</label>
                            <div class="account-input">
                                <input type="text" name="card_code" id="card-code" placeholder="Nhập mã thẻ" required>
                            </div>
                        </div>
                        <button type="submit" class="custom-btn w-100" id="paynow-btn">Nạp tiền</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="font-weight-bold">Chi tiết nạp thẻ</h3>
                <div class="payment-card-feature">
                    <a href="/cardhistory" class="custom-btn">Lịch sử nạp thẻ</a>
                    <!--<a href="/gift" class="custom-btn">Xem quà mốc nạp</a>-->
                </div>
                <h4 class="font-weight-bold">Hướng Dẫn Nạp Banking - ATM (Nhanh Và Lời hơn), Auto Banking</h4>
                <p>Bước 1: Bạn có thể nhờ người (có dùng Banking). Ví dụ: người thân, bạn bè, hoặc các cửa hàng chuyển tiền nhanh, tiệm tạp hóa các kiểu</p>
                <p>Bước 2: Bạn <a href="/bank" class="text-primary">bấm vào đây</a> sau đó đưa cho họ xem <span class="red-text">(Chú ý ghi đúng nội dung chuyển khoản)</span>.</p>
                <p><span class="text-important">*Lưu ý:</span> Bạn có thể chụp bill lại để có nhầm lẫn admin sẽ xử lý giúp bạn nhé</p>
                <p><span class="text-important">Lý do:</span> Các nhà mạng Viettel, Mobi, Vina lấy chiết khấu thẻ cào 13%-17%, Nên khuyên bạn hãy dùng Banking</p>
            </div>
        </div>
    </div>