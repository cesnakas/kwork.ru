!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=1222)}({1222:function(e,t,n){e.exports=n(1223)},1223:function(e,t,n){n(1224)},1224:function(e,t){var n=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:992,n=$(e);if(!e||!n.length)return!1;var o=function(){return $(window).width()<t?n.hasClass("slick-initialized")?void 0:n.slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:3e3,arrows:!0,prevArrow:'<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>',nextArrow:'<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>'}):(n.hasClass("slick-initialized")&&n.slick("unslick"),!1)};o(),$(window).resize((function(){o()}))};$((function(){n(".js-workbay-statistics-slider",767),n(".js-workbay-advantages-slider"),$(".footer-workbay__slide").on("click tap",".footer-workbay__title",(function(){if($(window).width()>=992)return!1;var e=$(this).closest(".footer-workbay__slide");e.hasClass("active")?e.removeClass("active"):($(".footer-workbay__slide").removeClass("active"),e.addClass("active"))}))}))}});