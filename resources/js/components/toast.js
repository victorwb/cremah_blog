/**
 * Toast
 * @requires https://getbootstrap.com
 */


import bootstrap from 'bootstrap/dist/js/bootstrap.min.js';

window.bootstrap = bootstrap;
export default (() => {
  const toastElList = [].slice.call(document.querySelectorAll('.toast'))

  /* eslint-disable no-unused-vars, no-undef */
  const toastList = toastElList.map((toastEl) => new bootstrap.Toast(toastEl))
  /* eslint-enable no-unused-vars, no-undef */
})()
