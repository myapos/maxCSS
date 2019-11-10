console.log('Plugin JS Loaded');

function addStylesToDiv (div) {
  div.style.cursor = 'pointer';
  div.style.position = 'absolute';
  div.style.top = '53px';
  div.style.right = '10px';
  div.classList.add('dashicons', 'dashicons-editor-expand');
  // <span class="dashicons dashicons-editor-expand"></span>
}

function createDiv (form) {
  const div = document.createElement('div'); // Create a <button> element
  // div.innerHTML = 'Max Css Editor'; // Insert text

  div.onclick = function () {
    if (!document.fullscreenElement) {
      if (form.requestFullscreen) {
        form.requestFullscreen().catch(err => {
          alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
      } else {
        alert('Maximize css editor is not supported');
      }
    } else {
      document.exitFullscreen();
    }
  };

  addStylesToDiv(div);
  return div;
}

window.addEventListener('DOMContentLoaded', event => {
  console.log('DOM fully loaded and parsed');

  const form = document.getElementById('customize-controls');
  if (form) {
    form.style.maxWidth = 'auto';
    form.style.width = 'auto';

    // get ul

    const ul = document.getElementById('sub-accordion-section-custom_css');

    console.log('ul', ul);

    // get help button

    const helpBtn = ul.getElementsByClassName('customize-help-toggle')[0];

    const div = createDiv(form);

    helpBtn.parentNode.insertBefore(div, helpBtn);
    // debugger;
  }
});

