$(function() {
  $(".overlay").hide();
  $("#account").hide();
  $("#navlink").hide();
})

function toggleSideNav() {
  if($("#sidebar").width() < 500) {
    $("#sidebar").css("width", "500px");
    $("#sidebar").attr("class", "navbar navbar-dark bg-dark min-vh-100 position-fixed");
    $("#icon").attr("class", "btn-close btn-close-white p-5");
    $(".overlay").show().css("background-color", "rgba(0,0,0,0.5)");
    $("#navlink").show().css("opacity", "1");
    $("#account").show().css("opacity", "1");
  } else {
    $("#sidebar").css("width", "100px");
    $("#sidebar").attr("class", "navbar navbar-dark min-vh-100 position-fixed");
    $("#icon").attr("class", "navbar-toggler-icon");
    $(".overlay").hide().css("background-color", "rgba(0,0,0,0)");
    $("#navlink").hide().css("opacity", "0");
    $("#account").hide().css("opacity", "0");
  }
}
