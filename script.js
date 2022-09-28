

$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("#navber").addClass("sticky");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("#navber").removeClass("sticky");
    }
});

/*function displayblock() {
  $(".res").css("display",'block');
}

function displaynone(){
       $('.res').css('display','none');

}*/

$( ".currentpage" ).addClass( "foreverline" );

/*$("input[type=text]").click(function(){
  $('input[type=text]').css("border-bottom",'1px solid #fff');
});*/
/*
$(function() {
  var $touch = $("#cross");
  var $res = $(".res")
  $touch.click(function() {
    $res.addClass('slide');
    setTimeout(function() {
    $touch.removeClass('slide');
    }, 300);
  });
});

*/


  
 
function TextRandomAnimeControl() {
  $('.random').each(function () {

    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appear");

    } else {
      $(this).removeClass("appear");
    }
  });
}

$(window).scroll(function () {
  TextRandomAnimeControl();
});

$(window).on('load', function () {
  //spanタグを追加する
  var element = $(".random");
  element.each(function () {
    var text = $(this).text();
    var textbox = '';
    text.split('').forEach(function (t) {
      textbox += '<span>' + t + '</span>';
    });
    $(this).html(textbox);
  });

  TextRandomAnimeControl();
});

function SmoothTextAnime() {
  $('.smoothTextTrigger').each(function(){ //smoothTextTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('smoothTextAppear');// 画面内に入ったらsmoothTextAppearというクラス名を追記
    }else{
    $(this).removeClass('smoothTextAppear');// 画面外に出たらsmoothTextAppearというクラス名を外す
    }
    }); 
}



// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  SmoothTextAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  SmoothTextAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述


function delayScrollAnime() {
  var time = 0.2;//遅延時間を増やす秒数の値
  var value = time;
  $('.row').each(function () {
    var parent = this;          //親要素を取得
    var elemPos = $(this).offset().top;//要素の位置まで来たら
    var scroll = $(window).scrollTop();//スクロール値を取得
    var windowHeight = $(window).height();//画面の高さを取得
    var childs = $(this).children();  //子要素を取得
    
    if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
      $(childs).each(function () {
        
        if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック
          
          $(parent).addClass("play"); //親要素にクラス名playを追加
          $(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
          $(this).addClass("fadeUp");//アニメーションのクラス名を追加
          value = value + time;//delay時間を増加させる
          
          //全ての処理を終わったらplayを外す
          var index = $(childs).index(this);
          if((childs.length-1) == index){
            $(parent).removeClass("play");
          }
        }
      })
    }else {
      $(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
      value = time;//delay初期値の数値に戻す
    }
  });
}

/*
function removeClass(){
  $('box').removeClass("fadeUp");
}*/

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    delayScrollAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

/*// 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    $('box').removeClass("fadeUp");
  });//*/

 
  
 function Mukou(){
/*  $("#splash-logo").css("opacity","0");
  $("#splash").css("opacity","0");
  $("#wrap").css("opacity","1");*/
  const number = 1;
  return number;
 }

 // function removeAt() {
 //   document.getElementById('b').removeAttribute('onload');
 //   // targetAtt.removeAttribute("onload");
 // }


$(window).on('load',function(){
    
    if(sessionStorage.getItem('splash') !== 'true')
    {
      
      $("#splash").css("display","block");
      $("#splash-logo").css("display","block");
      
      // $("#wrap").css("opacity","0");
      $("#splash-logo").delay(1200).fadeOut('slow');//logo fading out in 1.2sec
  
    //=====loading part（splash area）
      $("#splash").delay(1500).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
    
      $('body').addClass('appear');//after fading out this function, give body class appear
       sessionStorage.setItem('splash','true');
    });
    }

    else{
    //   $("#splash-logo").css("display","none");
    //   $("#splash").css("display","none");
    //   $('body').addClass('appear');//after fading out this function, give body class appear
       $("#wrap").css("opacity","1");
    ;
      
      
    }



 });



/*$(window).on('load',function(){
    
    const result = Mukou();

    if(result!=1)
    {
      /*  $("#splash-logo").css("display","none");
        $("#splash").css("display","none");
        $("#wrap").css("opacity","1");
        // alert('he');
    }

    else if(result==1){

    $("#splash-logo").css("opacity","1");
    $("#splash").css("opacity","1");
    $("#wrap").css("opacity","0");

    $("#splash-logo").delay(1200).fadeOut('slow');//logo fading out in 1.2sec
  
    //=====loading part（splash area）
    $("#splash").delay(1500).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
    
        $('body').addClass('appear');//after fading out this function, give body class appear
        
    });
    //=====loading part end（splash area）
    
   //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
    $('.splashbg').on('animationend', function() {    
  
    });
    //=====ここまで背景が伸びた後に動かしたいJSをまとめる
  }
        
});

*/

$(".openbtn1").click(function () {
    $(this).toggleClass('active');

    $('.res').toggleClass('panelactive');
   /* if ($('.res').hasClass('display')) {
        ($('.res')).removeClass('display');
        ($('.res')).addClass('displaynone');
    }
    else{
      ($('.res')).addClass('display');
    } */
});

$("#not").click(function(){
   $('.openbtn1').toggleClass('active');

    $('.res').toggleClass('panelactive');
    window.location.href="#work";

});

$(document).ready(function() {
    $("#not").click(function(event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: $($('#work').attr("href")).offset().top
          }, 500);
      });
});