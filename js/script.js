$(function(){
  // クリックしたときの処理をするclick()メソッド
  $('.menu-btn').click(function(){
    $(".menu").slideToggle(200);// メニューが開閉するメソッド。（）内の数字はは開閉の速さ
  });
  return false;
});
