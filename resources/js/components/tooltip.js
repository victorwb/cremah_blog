/**
 * Tooltip
 * @requires https://getbootstrap.com
 * @requires https://popper.js.org/
 */

import bootstrap from 'bootstrap/dist/js/bootstrap.min.js';

window.bootstrap = bootstrap;
export default (() => {
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  )

  /* eslint-disable no-unused-vars, no-undef */
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) =>
      new bootstrap.Tooltip(tooltipTriggerEl, { trigger: 'hover' })
  )
  /* eslint-enable no-unused-vars, no-undef */
})()
