var id = 'maxCSS';

function addStylesToDiv (div) {
  div.id = id;
  div.classList.add('dashicons', 'dashicons-editor-expand');
}

function createDiv (form) {
  var div = document.createElement('div'); // Create a <div> element

  div.onclick = function () {
    if (!document.fullscreenElement) {
      if (form.requestFullscreen) {
        form.requestFullscreen().catch(err => {
          alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
      } else {
        alert('Maximize css editor feature is not supported');
      }
    } else {
      document.exitFullscreen();
    }
  };

  addStylesToDiv(div);
  return div;
}

window.addEventListener('DOMContentLoaded', event => {

  var form = document.getElementById('customize-controls');
  // get ul
  var ul = document.getElementById('sub-accordion-section-custom_css');

  if (form && ul) {
    form.style.maxWidth = 'auto';
    form.style.width = 'auto';

    // get help button
    const helpBtn = ul.getElementsByClassName('customize-help-toggle')[0];

    // check if element already exists

    var maxCSS = document.getElementById(id);

    if (!maxCSS) {
      var div = createDiv(form);
      helpBtn.parentNode.insertBefore(div, helpBtn);
    }

  }
});

