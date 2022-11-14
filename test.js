$(".ahm_three_post_dom_manipulation").map(function () {
  var obj = $(this).children();
  var length = $(this).children().length;
  if (length > 0) {
    var element_one = obj[0].outerHTML;
    $(this).html(
      '<div class="col-8"><figure class="post-thumb ahm_three_post_thumb">' +
        obj[0].outerHTML +
        "</figure></div>"
    );
  }
  if (length > 1) {
    var element_two = obj[1].outerHTML;
    $(this).append('<div class="col-4"><div class="row"></div></div>');

    $(this)
      .find(".row")
      .append(
        '<div class="col-12"><figure class="post-thumb ahm_three_inner_post_thumb">' +
          element_two +
          "</figure></div>"
      );
  }
  if (length > 2) {
    var element_three = obj[2].outerHTML;
    $(this)
      .find(".row")
      .append(
        '<div class="col-12"><figure class="post-thumb ahm_three_inner_post_thumb">' +
          element_three +
          "</figure></div>"
      );
  }
});
// ahm_four_post_dom_manipulation
$(".ahm_four_post_dom_manipulation").map(function () {
  var obj = $(this).children();
  var length = $(this).children().length;
  if (length > 0) {
    var element_one = obj[0].outerHTML;
    $(this).html(
      '<div class="col-8"><figure class="post-thumb ahm_four_post_thumb">' +
        obj[0].outerHTML +
        "</figure></div>"
    );
  }
  if (length > 1) {
    var element_two = obj[1].outerHTML;
    $(this).append('<div class="col-4"><div class="row"></div></div>');

    $(this)
      .find(".row")
      .append(
        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
          element_two +
          "</figure></div>"
      );
  }
  if (length > 2) {
    var element_three = obj[2].outerHTML;
    $(this)
      .find(".row")
      .append(
        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
          element_three +
          "</figure></div>"
      );
  }
  if (length > 3) {
    var element_four = obj[3].outerHTML;
    $(this)
      .find(".row")
      .append(
        '<div class="col-12"><figure class="post-thumb ahm_four_inner_post_thumb">' +
          element_four +
          "</figure></div>"
      );
  }
});
