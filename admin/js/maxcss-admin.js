var idMaxCSS = "maxCSS";

function addStylesToDiv(div) {
  div.id = idMaxCSS;
  div.classList.add("dashicons", "dashicons-editor-expand");
}

function createDiv(form) {
  var div = document.createElement("div"); // Create a <div> element

  div.onclick = function () {
    if (!document.fullscreenElement) {
      if (form.requestFullscreen) {
        form.requestFullscreen().catch(function (err) {
          alert(
            "maxCSS:Error attempting to enable full-screen mode:" +
              err.message +
              "(" +
              err.name +
              ")"
          );
        });
      } else {
        alert(
          "maxCSS:Maximize css editor feature is not supported. Please try Chrome or Firefox"
        );
      }
    } else {
      document.exitFullscreen();
    }
  };

  addStylesToDiv(div);
  return div;
}

function setupMaximizeBtn(event) {
  var form = document.getElementById("customize-controls");
  // get ul
  var ul = document.getElementById("sub-accordion-section-custom_css");

  if (form && ul) {
    form.style.maxWidth = "auto";
    form.style.width = "auto";

    // get help button
    const helpBtn = (ul || document).getElementsByClassName(
      "customize-help-toggle"
    )[0];

    // check if element already exists
    var maxCSS = document.getElementById(idMaxCSS);

    if (!maxCSS) {
      var div = createDiv(form);
      helpBtn.parentNode.insertBefore(div, helpBtn);
    }
  } else {
    alert(
      "maxCSS: Not found element to add maximize button. Please contact technical support or submit an issue in https://github.com/myapos/maxCSS"
    );
  }
}

window.document.onreadystatechange = function (event) {
  if (document.readyState === "complete") {
    setupMaximizeBtn(event);
  }
};
