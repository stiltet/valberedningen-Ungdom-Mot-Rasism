// / <reference path="jquery-1.9.1.min.js" />
// / <reference path="jquery-ui.min.js" />
// / <reference path="UIModule.js" />
/*global uiObject:true*/

$(document).ready(function() {
  "use strict";
  
  var UI = uiObject();

  responsiveFunc();
  
  $(window).resize(function() {
    responsiveFunc();
  });
  
  function responsiveFunc() {
    UI.SelectLogoScreenWidth(650);
    UI.ChangeDivPrecentScreenHeight("umr_vb_logo_container",60);
  }
});