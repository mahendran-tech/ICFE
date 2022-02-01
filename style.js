$(document).ready(function () {
  $(".ms-auto .nav-item a").on("click", function (event) {
    event.preventDefault();
    var clickedItem = $(this);
    $(".ms-auto .nav-item a").each(function () {
      $(this).removeClass("active");
    });
    clickedItem.addClass("active");
  });
});
