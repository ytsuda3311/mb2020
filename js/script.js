'use strict';

jQuery(function() {

    // wow.min.jsの初期設定
    new WOW().init();

    // // google form
    // // 送信後の挙動
    // let $form = jQuery('#js-form');
    // $form.submit(function (event) {
    //     $.ajax({
    //         url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeXVGqWMAdCuiNALqYhL2CzOReFmPyi7ovbrt9iRPFGey35Ww/formResponse",
    //         data: $form.serialize(),
    //         type: "POST",
    //         dataType: "xml",
    //         statusCode: {
    //             0: function () {
    //                 //送信に成功したときの処理 
    //                 jQuery('.inquirypage-inner').slideUp();
    //                 jQuery('#js-success').slideDown();
    //             },
    //             200: function () {
    //                 //送信に失敗したときの処理 
    //                 jQuery('.inquirypage-inner').slideUp();
    //                 jQuery('#js-error').slideDown();
    //             }
    //         }
    //     });
    //     event.preventDefault();
    // });

    // // formの入力確認
    // let $submit = jQuery('#js-submit');
    // // #js-submitのinputまたは#js-formのtextareaが変更された時の処理
    // jQuery('#js-form input, #js-form textarea').on('change', function () {
    //     // 全ての必須項目が入力されていたら$submitの色が変わる処理
    //     if (
    //         // #js-formのtype="text"があるinputのvalueが空ではない時、且つ、
    //         jQuery('#js-form input[type="text"]').val() !== "" &&
    //         // #js-formのtype="email"があるinputのvalueが空ではない時、且つ、
    //         jQuery('#js-form input[type="email"]').val() !== "" &&
    //         // #js-formのname="entry.1355243199"があるtextareaのvalueが空ではない時
    //         jQuery('#js-form textarea[name="entry.271556336"]').val() !== ""
    //     ) {
    //         // 全ての必須項目が入力された時
    //         // disabled属性をfalseにする
    //         $submit.prop('disabled', false);
    //         $submit.addClass('-active');
    //     } else {
    //         // 必須項目が入力されていない時
    //         // disabled属性をtrueにする
    //         $submit.prop('disabled', true);
    //         $submit.removeClass('-active');
    //     }
    // });

    // jQuery('#js-submit').on('click', function () {
    //     if (jQuery('.latest-news').has('.close')) {
    //         jQuery('.latest-news').removeClass('close');
    //     } else {
    //         jQuery('.latest-news').addClass('close');
    //     }
    // });

    // drawer
    jQuery('html, body').addClass('drawer-close');

    jQuery('.drawer').on('click', function () {
        jQuery('html').toggleClass('drawer-fixed');
        // jQuery('body').toggleClass('drawer-fixed');
        jQuery('.header-nav').toggleClass('open');
        jQuery('.drawer-wrap').removeClass('overflow-hidden');
    });

    jQuery('.drawer.batsu').on('click', function () {
        jQuery('.drawer-wrap').delay(400).queue(function() {
            jQuery(this).addClass('overflow-hidden').dequeue();
        })
    });

    // TOPへ戻るボタン
    const totop = jQuery('#totop');
    // ボタン非表示
    totop.hide();
    // 100px スクロールしたらボタン表示
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            totop.fadeIn(300);
        } else {
            totop.fadeOut(300);
        }
    });
    // totopをクリックしたとき
    totop.on('click', function () {
        const position = 0;
        const speed = 500;
        jQuery('html, body').animate(
            {
                scrollTop: position
            },
            speed
        );
    });

    // youtubeの埋め込み動画をスクロール時にフワッと表示させる処理
    jQuery(window).on('load scroll', function () {
        jQuery('.embed').each(function () {
            // ターゲットの位置を取得
            let target = jQuery(this).offset().top;
            // スクロール量を取得
            let scroll = jQuery(window).scrollTop();
            // ウィンドウの高さを取得
            let height = jQuery(window).height();
            // ターゲットまでスクロールするとfadeInUpする
            if (scroll > target - height) {
                // クラスを付与
                jQuery(this).addClass('animation-fadeInUp');
            }
        });
    });
});
