'use strict'

{
  $(function() {
    $("#submit-btn").on("click", function(e) {
      const inputPasswordConf = $("#password-conf");
      if (inputPasswordConf.val() === "") {
        toastr.error('パスワード再入力が未入力です。');
        e.preventDefault();
      }

      const inputPassword = $("#password");
      if (inputPassword.val() === "") {
        toastr.error('パスワードが未入力です。');
        e.preventDefault();
      }

      const inputEmail = $("#email");
      if (inputEmail.val() === "") {
        toastr.error('メールアドレスが未入力です。');
        e.preventDefault();
      }

      const inputName = $("#name");
      if (inputName.val() === "") {
        toastr.error('ユーザー名が未入力です。');
        e.preventDefault();
      }

      if (inputPassword.val() !== inputPasswordConf.val()) {
        if (inputPassword.val() !== "" && inputPasswordConf.val() !== "") {
          toastr.error('パスワード再入力と一致しません');
          e.preventDefault();
        }
      }
    });
  });
}