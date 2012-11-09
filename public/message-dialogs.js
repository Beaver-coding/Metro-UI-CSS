function md(content) {
                            // $("#metro-alert").fadeOut("slow");
                             $("#metro-alert-content").html(content);
                             $("#metro-alert").fadeIn("slow");
                             $("#metro-black").fadeIn("slow");
                             
                         }
                         function mdClose(){
                             $("#metro-alert").fadeOut("slow");
                             $("#metro-black").fadeOut("slow");
                             
                         }
$(document).ready(function(){
   metroAlertAddCss('#metro-alert{z-index: 5000; display: none;}#metro-black{height: 50000px;position:fixed; top:0px; left: 0px; display: none; width: 50000px; z-index: 4000; background-color: rgba(0,0,0,.8); }');
});
function metroAlertAddCss(cssCode) {
var styleElement = document.createElement("style");
  styleElement.type = "text/css";
  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = cssCode;
  } else {
    styleElement.appendChild(document.createTextNode(cssCode));
  }
  document.getElementsByTagName("head")[0].appendChild(styleElement);
    
    $('.page-region-content').append('<div id="metro-alert" style="" class="message-dialog bg-color-green fg-color-white" > <p id="metro-alert-content" > </p><button class="place-right" onclick="mdClose()" >Close </button></div> <div id="metro-black" style="display: none;" ></div> ');
}

