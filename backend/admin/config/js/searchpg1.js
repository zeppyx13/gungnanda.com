$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#container").load("config/php/serchpg1.php?keyword=" + $("#keyword").val());
  });
});
