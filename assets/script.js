$(document).ready(function () {
  var $searchInput = $('input[type="search"]');
  var $icon = $('<i class="fa-search"></i>');
  $searchInput.after($icon);

  $searchInput.on("input", function () {
    if ($(this).val() !== "") {
      $icon.addClass("active");
    } else {
      $icon.removeClass("active");
    }
  });
});
