// ハンバーガーメニュー

$(function(){
    var imgHeight =$('.wrapper-outer').outerHeight();
    var bgHeight =$('.primary-container').outerHeight();

    $(".burger-btn").on('click',function(){
        if( $(window).scrollTop() < imgHeight -50){
            //ハンバーガーボタンがprimary-containerより上にあるとき
            $('.bar').toggleClass('cross'); //ハンバーガーボタンのラインをクロスさせるCSSを当てたり外したりする
            $('.header-nav').toggleClass('open'); //ナビゲーションが開くCSSを当てたり外したりする
            $('.burger-musk').fadeToggle(300); //背景を暗くするマスクをフェードイン・フェードアウトさせる
            $('body').toggleClass('noscroll'); //ハンバーガーメニューを開いたときにスクロールしないようにする

            // }else{
        //     //ハンバーガーボタンがprimary-containerより下にあるとき
        //     $(this).toggleClass('white'); //ハンバーガーボタンを黒くしたり白くしたりする
        //     $('.bar').toggleClass('cross');
        //     $('.header-nav').toggleClass('open');
        //     $('.burger-musk').fadeToggle(300);
        //     $('body').toggleClass('noscroll');
        }
    });
});
