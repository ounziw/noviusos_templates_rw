/* ---------------------------------------------------------------------
FileName: common.js
--------------------------------------------------------------------- */

// *** pagetop scroll
$(function(){
	$('a[href^=#]').on('click', function(){
		//クリックした要素の#を変数に入れる
		var Target = $(this.hash);
		//行き先までの画面上の高さの数値を変数に入れる
		var TargetOffset = $(Target).offset().top;
		//アニメーション時間ミリ秒
		var Time = 700;
		//集めた情報を元にアニメーション
		$('html, body').animate({
			scrollTop: TargetOffset
		}, Time);
		return false;
	});
});

$(document).ready(function(){
    $('.box_txt_q').click(function(){
        $(this).next('.box_txt_a').stop(true, true).slideToggle("fast");
    });


$(".txt_q").hover(
	function () {
		$(this).addClass("color01");
	},
	function () {
		$(this).removeClass("color01");
	}
);

});


