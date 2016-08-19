// jsロード後に実行される処理
(function(){
  document.write("js is loaded!!<br>");
})();

// DOMロード後に実行される処理
// ウェブ上のあらゆるオブジェクトの読み込みがすべて完了した後で処理をする方法
window.onload = function() {
  // document.write("html is loaded complete!!")
}
