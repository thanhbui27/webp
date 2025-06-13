<style>
    .event-wrapper {
        width: 100%;
        border-radius: 12px;
        padding: 30px;
        color: #fff;
        text-align: center;
    }

    .event-image {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .event-btn-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
        gap: 12px;
    }

    .custom-btn {
        background-color: #ffffff;
        color: #ff9933;
        font-weight: bold;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        transition: 0.3s ease;
        display: inline-block;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .custom-btn:hover {
        background-color: #ffe2c1;
        color: #cc6600;
    }

    @media (max-width: 768px) {
        .event-wrapper {
            padding: 20px;
        }

        .event-btn-group {
            flex-direction: column;
        }

        .custom-btn {
            width: 100%;
            text-align: center;
        }
    }
</style>
<div class="web-content">
    <div class="custom-container tertiary-bg">
        <a href="/diendan">← Quay lại diễn đàn</a>
    </div>
    <div class="custom-container tertiary-bg pt-3 pb-5">
        <div class="event-wrapper">
            <h2 class="font-weight-bold mb-3">Tham Gia Sự Kiện Nhận Quà!</h2>
            <img src="<?= BASEURL ?>/img/allevent.png?v=123" alt="Event Banner" class="event-image">

            <div class="event-btn-group">
                <a class="custom-btn" href="/page?e=event1">Tham gia Event Share 1</a>
                <a class="custom-btn" href="/page?e=event2">Tham gia Event Share 2</a>
                <a class="custom-btn" href="/page?e=event4">Tham gia Event Share 3</a>
                <a class="custom-btn" href="/page?e=event6">Tham gia Event Đánh giá</a>
                <a class="custom-btn" href="/page?e=event7">Tham gia Event Zalo</a>
                <a class="custom-btn" href="/page?e=event3">Tham gia Event Fan Cứng</a>
            </div>
        </div>
    </div>
</div>