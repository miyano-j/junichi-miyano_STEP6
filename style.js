//フォームの取得
const contactForm = document.getElementById("contactForm");

//送信されたことを取得
contactForm.addEventListener("submit", function (event) {
    //入力値を取得
    const name = document.getElementById("name").value;
    const companyName = document.getElementById("companyName").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const message = document.getElementById("message").value;

    //未入力チェック
   if (
    name === "" ||
    companyName === "" ||
    email === "" ||
    age === "" ||
    message === ""
   ) {
    alert("必須項目が未入力です。入力内容をご確認ください。");

    //送信のキャンセル
    event.preventDefault();
    return;
   }

   //確認ダイアログ
   const result = confirm("この内容で送信しますか？");

   //キャンセルされた場合
   if (!result) {
    event.preventDefault();
   }

});

const button = document.querySelector("#changeColorBtn");
const footer = document.querySelector("footer");

//色を配列に保存
const colors = ["blue", "red", "yellow", "gray"];

//現在の番号
let index = 0;

//ボタンが押されたとき
button.addEventListener("click", function () {
    footer.style.backgroundColor = colors[index];
    index++;

    //最後までいったら最初に戻る
    if (index >= colors.length) {
        index = 0;
    }

});