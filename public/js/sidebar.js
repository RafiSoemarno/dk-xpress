$(function() {
  if($(window).width() < 1000) {
    $("#sidebar").show();
    $("#navbar").hide();
  } else {
    $("#sidebar").hide();
    $("#navbar").show();
  }
});

$(window).on("resize", function() {
  if($(window).width() < 1000) {
    $("#sidebar").show();
    $("#navbar").hide();
  } else {
    $("#sidebar").hide();
    $("#navbar").show();
  }
});

function showNav() {
  if(!($("#sidebar").css("width") == "500px")) {
    $("#sidebar").css("width", "500px");
    $("#sidebar").attr("class", "navbar navbar-dark bg-dark min-vh-100 position-fixed");
    $("body").css("background-color", "rgba(0,0,0,0.4)");
    $("#icon").attr("class", "btn-close btn-close-white p-5");
    $(".overlay").css("background-color", "rgba(0,0,0,0.5)");
    $("#navlink").css("opacity", "1");
  } else {
    $("#sidebar").css("width", "100px");
    $("#sidebar").attr("class", "navbar navbar-dark min-vh-100 position-fixed");
    $("body").css("background-color", "white");
    $("#icon").attr("class", "navbar-toggler-icon");
    $(".overlay").css("background-color", "rgba(0,0,0,0)");
    $("#navlink").css("opacity", "0");
  }
}
