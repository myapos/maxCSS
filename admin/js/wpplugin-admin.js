console.log('Plugin JS Loaded');

function addStylesToDiv (div) {
  div.id='maxCSS';
  div.classList.add('dashicons', 'dashicons-editor-expand');
}

function createDiv (form) {
  const div = document.createElement('div'); // Create a <div> element

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
  }
});

