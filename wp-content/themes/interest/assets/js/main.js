// This code contains the hide/show functionality of the design options

$(".design-info-word").hide();
$("#wordpress-block").click(function() {
  if ($(".design-info-word").is(":hidden")) {
    $(".design-info-scratch").hide();
    $(".design-info-maintain").hide();
    $(".design-info-word").slideDown("slow");
  } else {
    $(".design-info-word").slideUp("fast");
  }
});


$(".design-info-scratch").hide();
$("#custom-work-block").click(function() {
  if ($(".design-info-scratch").is(":hidden")) {
    $(".design-info-word").hide();
    $(".design-info-maintain").hide();
    $(".design-info-scratch").slideDown("slow");
  } else {
    $(".design-info-scratch").slideUp("fast");
  }
});

$(".design-info-maintain").hide();
$("#template-block").click(function() {
  if ($(".design-info-maintain").is(":hidden")) {
    $(".design-info-word").hide();
    $(".design-info-scratch").hide();
    $(".design-info-maintain").slideDown("slow");
  } else {
    $(".design-info-maintain").slideUp("fast");
  }
});

$(".design-option-link").click(function() {
  return false;
});

// This controls show-nav functionality

$(".main-navigation").hide();


$("#show-nav").click(function() {
  if ($(".main-navigation").is(":hidden")) {
    $(".main-navigation").slideDown("slow");
  } else {
    $(".main-navigation").slideUp("fast");
  }
});


$('#show-nav').click(function() {
  $(this).toggleClass('active');

  if ($('#show-nav').hasClass('active')) {
    $(this).text("Hide Navigation");

  } else {
    $(this).text("Show Navigation");
  }
});

// This hides the design option info that slides up in blue.

//Template info
$(".hide-info-button-template").click(function() {
  if ($(".design-info-maintain").is(":hidden")) {
    $(".design-info-maintain").show();
  } else {
    $(".design-info-maintain").hide();
  }
});
// Wordpress info
$(".hide-info-button-word").click(function() {
  if ($(".design-info-word").is(":hidden")) {
    $(".design-info-word").show();
  } else {
    $(".design-info-word").hide();
  }
});
//Scratch info
$(".hide-info-button-scratch").click(function() {
  // return false;
  if ($(".design-info-scratch").is(":hidden")) {
    $(".design-info-scratch").show();
  } else {
    $(".design-info-scratch").hide();
  }
});



// Greensocks Button Animation


// TweenLite.to(div, 1, {x:100});
//
//   $(".template-hidden").hide(); // text of blue section
//   $(".design-info-maintain").hide(); // blue overlay
// });
