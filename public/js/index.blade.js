document.addEventListener("DOMContentLoaded", function() {
    // ページの読み込み後、すべてのaタグを無効にする
    var links = document.querySelectorAll("a");
    links.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault(); // デフォルトのクリック動作を無効にする
        });
    });
});