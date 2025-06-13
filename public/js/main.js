$(document).ready(function () {
    function getQueryParam(param) {
        let urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    let utm_source = getQueryParam('utm_source');
    let utm_campaign = getQueryParam('utm_campaign');

    if (utm_source) {
        Cookies.set('utm_source', utm_source, { expires: 1/24 });
    }
    if (utm_campaign) {
        Cookies.set('utm_campaign', utm_campaign, { expires: 1/24 });
    }
    if (!Cookies.get('popup_shown')) {
        $('#home-modal').addClass('modal-show');
        Cookies.set('popup_shown', 'true', { expires: 1/24 });
    }

    if (Cookies.get('utm_source')) {
        $('#utm_source').val(Cookies.get('utm_source'));
    }
    if (Cookies.get('utm_campaign')) {
        $('#utm_campaign').val(Cookies.get('utm_campaign'));
    }
    $('.online-payment-container input').click(function() {
        let inputValue = $(this).val();
        navigator.clipboard.writeText(inputValue).then(function() {
            $("#copy-message").text("Đã sao chép: " + inputValue).fadeIn().delay(1500).fadeOut();
        }).catch(function(err) {
            console.error("Lỗi khi sao chép: ", err);
        });
    });

    // Close modal
    $('.close-btn').on('click', function () {
        $(this).closest('.modal-show').removeClass('modal-show');
    })


    $("#copyBtn").click(function () {
        var content = $("#descriptionContent").val();
        var tempTextArea = $("<textarea>");
        $("body").append(tempTextArea);
        tempTextArea.val(content).select();
        document.execCommand("copy");
        tempTextArea.remove();
        $('#event-modal').addClass('modal-show');
    });
});
