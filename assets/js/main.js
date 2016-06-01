// This code contains the hide/show functionality of the design options

$(".design-info-word").hide();
$("#wordpress-block").click(function() {
  if ( $(".design-info-word").is(":hidden") ) {
  $(".design-info-word").slideDown("slow");
} else {
  $(".design-info-word").slideUp("fast");
}
});

$(".design-info-scratch").hide();
$("#custom-work-block").click(function() {
  if ( $(".design-info-scratch").is(":hidden") ) {
  $(".design-info-scratch").slideDown("slow");
} else {
  $(".design-info-scratch").slideUp("fast");
}
});

$(".design-info-maintain").hide();
$("#maintainance-block").click(function() {
  if ( $(".design-info-maintain").is(":hidden") ) {
  $(".design-info-maintain").slideDown("slow");
} else {
  $(".design-info-maintain").slideUp("fast");
}
  if ( $(".design-info-maintain").is(":visible") ) {
    $("design-info-word").hide();
    $("design-info-scratch").hide();
  }
});

$(".design-option-link").click(function() {
  return false;
});

// This controls smaller screen's show-nav function
$("#show-nav").click(function() {
  if ( $(".main-navigation").is(":hidden") ) {
  $(".main-navigation").slideDown("slow");
} else {
  $(".main-navigation").slideUp("fast");
}
});
