$(document).ready(function () {
    $('.login-call').click(function () {
        $('#ahm_loginin_with_section').fadeIn()
    })
    $('textarea').autoResize();
    $('.owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        navText: ["<i class='fas fa-chevron-left'></i>",
            "<i class='fas fa-chevron-right'></i>"
        ],
        responsive: {
            0: {
                items: 1
            }
        }
    })

    $('.modal-backdrop').hide();
     // comment
        $(".comment-btn").click(function () {
          var test1 = $(this)
            .parentsUntil(".ahm_new-comment")
            .children(".ahm_text")
            .children(".comment_textarea");

          if (test1.val() != "") {
            var c_body = $(this)
              .parentsUntil(".ahm_comments_body")
              .children(".ahm_comments_body");

            var imgSrc = $(this)
              .parentsUntil(".ahm_new-comment")
              .find("img")
              .attr("src");

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            if (dd < 10) {
              dd = "0" + dd;
            }
            if (mm < 10) {
              mm = "0" + mm;
            }
            today = dd + "-" + mm + "-" + yyyy;

            var username = "ahmer";
            var test =
              '<div class="ahm_single-comment"><div class="ahm_comment_content d-flex"><div class="ahm_comment_image"><div class="profile-thumb"><a href="#"><figure class="profile-thumb-middle"><img src="' +
              imgSrc +
              '" alt="profile picture"></figure></a></div></div><div class="ahm_comment_text"><div class="d-flex align-items-center"><h6 class="author"><a href="profile.html">' +
              username +
              '</a></h6><span class="ml-auto">' +
              today +
              "</span></div><p>" +
              test1.val() +
              "</p></div></div></div>";

            var targetId = $(this)
              .parentsUntil(".ahm_new-comment")
              .children(".ahm_text")
              .children(".comment_textarea")
              .attr("class");

            targetId = targetId.split(" ");
            moduleComment("#" + targetId[1], imgSrc, username, test1.val());
            
            test1.val("");
            var c2 = $(this)
              .parentsUntil(".ahm_comments_body")
              .children(".ahm_comments_body")
              .append(test);
          }
        });
});