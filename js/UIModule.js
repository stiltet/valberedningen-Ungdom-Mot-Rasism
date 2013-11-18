// / <reference path="jquery-1.9.1.min.js" />
// / <reference path="jquery-ui.min.js" />

var uiObject = function() {
  return {
    ChangeDivPrecentScreenHeight: function(divID,precent) {
      "use strict";
      var newHeight;

      if (precent < 99)
        newHeight = $(window).height() * ("0." + precent);
      else
        newHeight = $(window).height();

      $("#" + divID).css("height", newHeight + "px");
    },
    
    SelectLogoScreenWidth: function(width) {
      "use strict";
      
      if(window.innerWidth >= width) {
        $("#umr_vb_logo").attr("src", "img/umr_vb_logo.png");
      }
      else {
        $("#umr_vb_logo").attr("src", "img/umr_vb_logo_2.png");
      }
    }
  };
};