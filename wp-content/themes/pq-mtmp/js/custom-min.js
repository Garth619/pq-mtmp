jQuery(document).ready((function(e){function s(){var s=e(".client_reviews_module_slider .slick-track").height();e(window).width()<768&&e(".client_reviews_module_slide").css("height","auto"),e(window).width()>=768&&e(window).width()<1170&&e(".client_reviews_module_slide").css("height",s+"px"),e(window).width()>=1170&&e(window).width()<1490&&e(".client_reviews_module_slide").css("height","auto"),e(window).width()>=1490&&e(".client_reviews_module_slide").css("height",s+"px")}e("body").addClass("ready"),e(".wistia_embed").click((function(){let s=this;"undefined"==typeof Wistia?jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js",(function(i,t,o){var r=setInterval((function(){e(s).attr("id")&&window._wq&&(_wq.push({id:"_all",onReady:function(e){e.play()}}),clearInterval(r))}),100)})):console.log("wistia is already defined")})),e((function(){e('a[href*="#"]:not([href="#"])').click((function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var s=e(this.hash);if((s=s.length?s:e("[name="+this.hash.slice(1)+"]")).length)return e("html, body").animate({scrollTop:s.offset().top},1e3),!1}}))})),function(e,s,i,t,o,r){if(jQuery("#"+e).length)new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(s).addClass(i),"function"==typeof o&&(o(),this.destroy())):"up"===e&&r&&jQuery(s).removeClass(i)},offset:t})}("header","body#header_trigger","header_fixed",-70,null,!0),e("#sec_one_slider").slick({infinite:!0,slidesToShow:3,slidesToScroll:2,mobileFirst:!0,arrows:!1,dots:!1,autoplay:!0,autoplaySpeed:2e3,responsive:[{breakpoint:767,settings:{slidesToShow:4,slidesToScroll:4}}]}),e("#sec_two_left_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,fade:!0,dots:!1,responsive:[{breakpoint:1180,settings:{arrows:!0,prevArrow:".sec_two_arrow_left",nextArrow:".sec_two_arrow_right"}}]}),e("#sec_two_featured_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,arrows:!0,dots:!1,fade:!0,prevArrow:".sec_two_featured_arrow_left",nextArrow:".sec_two_featured_arrow_right",responsive:[{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:1180,settings:{fade:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:1695,settings:{fade:!1,slidesToShow:3,slidesToScroll:3}}]}),e("#sec_four_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,fade:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:1170,settings:{fade:!1,dots:!1,arrows:!0,slidesToShow:2,slidesToScroll:2,prevArrow:".sec_four_arrow_left",nextArrow:".sec_four_arrow_right"}},{breakpoint:1380,settings:{fade:!1,dots:!1,arrows:!0,slidesToShow:3,slidesToScroll:3,prevArrow:".sec_four_arrow_left",nextArrow:".sec_four_arrow_right"}}]}),e("#sec_six_post_wrapper").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,fade:!0,dots:!0,responsive:[{breakpoint:1180,settings:"unslick"}]}),e(".featured_case_results_module_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,fade:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:1170,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!0,slidesToShow:1,slidesToScroll:1,prevArrow:".featured_case_results_module_arrow_left",nextArrow:".featured_case_results_module_arrow_right"}},{breakpoint:1380,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2,prevArrow:".featured_case_results_module_arrow_left",nextArrow:".featured_case_results_module_arrow_right"}}]}),e(".client_reviews_module_slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,fade:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:1170,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!0,slidesToShow:1,slidesToScroll:1,prevArrow:".client_reviews_module_arrow_left",nextArrow:".client_reviews_module_arrow_right"}},{breakpoint:1490,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2,prevArrow:".client_reviews_module_arrow_left",nextArrow:".client_reviews_module_arrow_right"}}]}),s(),e(window).resize(_.debounce((function(){s()}),100)),e("li").has("select").addClass("custom_select"),e("#select_input").on("click",(function(s){e(this).next("#select_dropdown").toggleClass("open")})),e("#select_dropdown_inner ul li").on("click",(function(s){var i=e(this).text();e(this).closest("#select_dropdown_inner").parent().prev("#select_input").find("span").replaceWith("<span id='select_input_title'>"+i+"<span>"),e("#select_dropdown").removeClass("open")})),e(document).click((function(s){var i=e("#select_dropdown_wrapper");i.is(s.target)||0!==i.has(s.target).length||e("#select_dropdown").removeClass("open")})),e(".tax-case_results_category").length&&e("li.case_results_item").addClass("current-menu-item"),e("ul > li.menu-item-has-children > a[href='#']").removeAttr("href"),e("span.go_back").on("click",(function(e){window.history.back()})),e('<span class="double_line"></span>').insertAfter(".widget h3"),e('<span class="double_line blockquote"></span>').insertBefore("blockquote"),e('<span class="double_line"></span>').insertAfter("ul.pa_directory_top_menu > li > a");var i=window.location.href;function t(){e("header nav").addClass("nav_desktop"),e("header nav li.menu-item-has-children > a").next("ul.sub-menu").removeClass("open"),e("header nav").removeClass("nav_tablet")}function o(){e("header nav").removeClass("nav_desktop"),e("header nav").addClass("nav_tablet")}function r(){e(this).next("ul.sub-menu").slideToggle(350),e(this).parent().toggleClass("active"),e(this).toggleClass("active"),e(this).next("ul.sub-menu").toggleClass("active")}e(".sidebar_box.sidebar_blog ul li").each((function(){e(this).find("a").attr("href")==i&&e(this).addClass("blog-active")})),e(".sidebar_box ul.menu > li.menu-item-has-children > a").on("click",(function(s){e(this).next("ul.sub-menu").slideToggle(300),e(this).parent().toggleClass("active")})),e("#menu_wrapper").on("click",(function(s){e("#header_right").toggleClass("open"),e("nav").toggleClass("open")})),e(window).width()>=1170&&t(),e(window).width()<1170&&(o(),e("header nav li.menu-item-has-children > a").off().on("click",r)),e(window).resize(_.debounce((function(){e(window).width()>=1170&&(t(),e("header nav li.menu-item-has-children > a").off("click",r)),e(window).width()<1170&&(o(),e("header nav li.menu-item-has-children > a").off().on("click",r))}),100))}));