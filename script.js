$(document).ready(function () {
  $("#login-form").submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "login.php",
      data: formData,
      success: function (response) {
        if (response == "success") {
          window.location.href = "dashboard.php";
        } else {
          $("#login-message")
            .text("Invalid username or password")
            .addClass("error");
        }
      },
      error: function (xhr, status, error) {
        $("#login-message")
          .text("An error occurred while logging in")
          .addClass("error");
      },
    });
  });
});
