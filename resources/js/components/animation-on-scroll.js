/**
 * Animation on scroll (AOS)
 *
 * @requires https://github.com/michalsnik/aos
 */

import AOS from 'aos'
export default (() => {
  const animationToggle = document.querySelector('[data-aos]')

  if (animationToggle === null) return

  AOS.init() // eslint-disable-line no-undef
})()
