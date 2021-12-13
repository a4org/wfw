"use strict";
function convert_posts() {
  $(".blog-post").each(function() {
    $(this).html(marked($(this).text()));
    renderMathInElement($(this).get(0), katexOptions);
  });
}

$(function() {
  $("time.timeago").timeago();
  convert_posts();
});
