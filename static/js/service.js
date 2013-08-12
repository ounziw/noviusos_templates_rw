/* ---------------------------------------------------------------------
FileName: common.js
--------------------------------------------------------------------- */

// *** pagetop scroll
$(function(){
	$('.service_pagetop a').on('click', function(){
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

$(function(){
	$('#pagetop a').on('click', function(){
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

$(function(){
	$('.btn_set a').on('click', function(){
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


// *** tab
$(function() {
	$('#container-1 > ul').tabs();
});
