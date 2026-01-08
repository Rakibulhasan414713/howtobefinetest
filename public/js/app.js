document.addEventListener("DOMContentLoaded", function () {

  var hrefNodes = document.querySelectorAll("[data-href]");
  for (var i = 0; i < hrefNodes.length; i++) {
    (function (el) {
      el.addEventListener("click", function (e) {
        e.preventDefault();
        var url = el.getAttribute("data-href");
        if (url) window.location.href = url;
      });
    })(hrefNodes[i]);
  }


  var backNodes = document.querySelectorAll('[data-action="back"]');
  for (var j = 0; j < backNodes.length; j++) {
    (function (el) {
      el.addEventListener("click", function (e) {
        e.preventDefault();
        window.history.back();
      });
    })(backNodes[j]);
  }


  function bindCode(attrName, eventName) {
    var nodes = document.querySelectorAll("[" + attrName + "]");
    for (var k = 0; k < nodes.length; k++) {
      (function (el) {
        var code = el.getAttribute(attrName);
        if (!code) return;

        if (eventName === "load") {
          try { (new Function(code))(); } catch (err) {}
          return;
        }

        el.addEventListener(eventName, function (e) {
          try { (new Function("event", code))(e); } catch (err) {}
        });
      })(nodes[k]);
    }
  }

  bindCode("data-onclick-code", "click");
  bindCode("data-onsubmit-code", "submit");
  bindCode("data-onchange-code", "change");
  bindCode("data-oninput-code", "input");
  bindCode("data-onload-code", "load");
});
