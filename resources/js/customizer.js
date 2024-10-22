(() => {
  const getConfigFromStorage = (e) => localStorage.getItem(e),
    updateStorageConfig = (key, value) => {
      localStorage.setItem(key, value);
    },
    prefix = "ar-",
    customizerHeadStyle = document.getElementById("customizer-styles"),
    showStylesPreElement = document.getElementById("custom-generated-styles"),
    defaultConfigFromStorage = `
      \n    :root {
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}primary: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary-rgb") && `--${prefix}primary-rgb: ${getConfigFromStorage("theme-primary-rgb")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}warning-rgb: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning-rgb") && `--${prefix}warning-rgb: ${getConfigFromStorage("theme-warning-rgb")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}info-rgb: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info-rgb") && `--${prefix}info-rgb: ${getConfigFromStorage("theme-info-rgb")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}success-rgb: ${getConfigFromStorage("success-info")};`}
      \n      ${getConfigFromStorage("theme-success-rgb") && `--${prefix}success-rgb: ${getConfigFromStorage("success-info-rgb")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}danger-rgb: ${getConfigFromStorage("danger-info")};`}
      \n      ${getConfigFromStorage("theme-danger-rgb") && `--${prefix}danger-rgb: ${getConfigFromStorage("danger-info-rgb")};`}
      \n      ${getConfigFromStorage("theme-font-family") && `--${prefix}body-font-family: ${getConfigFromStorage("theme-font-family")};`}
      \n      ${getConfigFromStorage("theme-root-font-size") && `--${prefix}root-font-size: ${getConfigFromStorage("theme-root-font-size")};`}
      \n      ${getConfigFromStorage("theme-body-font-size") && `--${prefix}body-font-size: ${getConfigFromStorage("theme-body-font-size")};`}
      \n      ${getConfigFromStorage("theme-border-width") && `--${prefix}border-width: ${getConfigFromStorage("theme-border-width")};`}
      \n      ${getConfigFromStorage("theme-border-radius") && `--${prefix}border-radius: ${getConfigFromStorage("theme-border-radius")};`}
      \n      ${getConfigFromStorage("theme-border-radius-sm") && `--${prefix}border-radius-sm: ${getConfigFromStorage("theme-border-radius-sm")};`}
      \n      ${getConfigFromStorage("theme-border-radius-lg") && `--${prefix}border-radius-lg: ${getConfigFromStorage("theme-border-radius-lg")};`}
      \n      ${getConfigFromStorage("theme-border-radius-xl") && `--${prefix}border-radius-xl: ${getConfigFromStorage("theme-border-radius-xl")};`}
      \n      ${getConfigFromStorage("theme-border-radius-xxl") && `--${prefix}border-radius-xxl: ${getConfigFromStorage("theme-border-radius-xxl")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}link-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color") && `--${prefix}link-hover-color: ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color")};`}
      \n    }
      \n    .btn-primary {
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-bg: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-primary-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-disabled-bg: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n    }
      \n    .btn-warning {
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-bg: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-warning-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-disabled-bg: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n    }
      \n    .btn-info {
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-bg: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-info-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-disabled-bg: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-info")};`}
      \n    }
      \n    .btn-success {
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-bg: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-success-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-disabled-bg: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-success")};`}
      \n    }
      \n    .btn-danger {
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-bg: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-danger-btn-hover-active-border-bg-color")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-disabled-bg: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n    }
      \n    .btn-outline-primary {
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-disabled-color: ${getConfigFromStorage("theme-primary")};`}
      \n      ${getConfigFromStorage("theme-primary") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-primary")};`}
      \n    }
      \n    .btn-outline-warning {
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-disabled-color: ${getConfigFromStorage("theme-warning")};`}
      \n      ${getConfigFromStorage("theme-warning") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-warning")};`}
      \n    }
      \n    .btn-outline-info {
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-disabled-color: ${getConfigFromStorage("theme-info")};`}
      \n      ${getConfigFromStorage("theme-info") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-info")};`}
      \n    }
      \n    .btn-outline-success {
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-disabled-color: ${getConfigFromStorage("theme-success")};`}
      \n      ${getConfigFromStorage("theme-success") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-success")};`}
      \n    }
      \n    .btn-outline-danger {
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-hover-bg: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-hover-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-active-bg: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-active-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-disabled-color: ${getConfigFromStorage("theme-danger")};`}
      \n      ${getConfigFromStorage("theme-danger") && `--${prefix}btn-disabled-border-color: ${getConfigFromStorage("theme-danger")};`}
      \n    }
      \n    .accordion-button:not(.collapsed)::after {
      \n      ${getConfigFromStorage("theme-accordion-btn-active-icon") && `--${prefix}accordion-btn-active-icon: ${getConfigFromStorage("theme-accordion-btn-active-icon")}`}
      \n    }
      \n  `;
  let i = defaultConfigFromStorage;
  (i = defaultConfigFromStorage.replace(/null|\s*(?![A-Z])/g, "")),
    customizerHeadStyle.append(i),
    i.split("}").map((e) => {
      -1 !== e.indexOf("{--") && showStylesPreElement.append(e + "}");
    });
  const styleSheetRules = {
      root: customizerHeadStyle.sheet.cssRules[0],
      primaryBtn: customizerHeadStyle.sheet.cssRules[1],
      warningBtn: customizerHeadStyle.sheet.cssRules[2],
      infoBtn: customizerHeadStyle.sheet.cssRules[3],
      successBtn: customizerHeadStyle.sheet.cssRules[4],
      dangerBtn: customizerHeadStyle.sheet.cssRules[5],
      primaryOutlineBtn: customizerHeadStyle.sheet.cssRules[6],
      warningOutlineBtn: customizerHeadStyle.sheet.cssRules[7],
      infoOutlineBtn: customizerHeadStyle.sheet.cssRules[8],
      successOutlineBtn: customizerHeadStyle.sheet.cssRules[9],
      dangerOutlineBtn: customizerHeadStyle.sheet.cssRules[10],
      accordion: customizerHeadStyle.sheet.cssRules[11],
    },
    appendStylesToPreElement = () => {
      (showStylesPreElement.innerHTML = styleSheetRules.root.cssText.replace(/null|\s*(?![A-Z])/g, "")),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.primaryBtn.cssText.indexOf("{ }") ? styleSheetRules.primaryBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.warningBtn.cssText.indexOf("{ }") ? styleSheetRules.warningBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.infoBtn.cssText.indexOf("{ }") ? styleSheetRules.infoBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.successBtn.cssText.indexOf("{ }") ? styleSheetRules.successBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.dangerBtn.cssText.indexOf("{ }") ? styleSheetRules.dangerBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.primaryOutlineBtn.cssText.indexOf("{ }") ? styleSheetRules.primaryOutlineBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.warningOutlineBtn.cssText.indexOf("{ }") ? styleSheetRules.warningOutlineBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.infoOutlineBtn.cssText.indexOf("{ }") ? styleSheetRules.infoOutlineBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.successOutlineBtn.cssText.indexOf("{ }") ? styleSheetRules.successOutlineBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.dangerOutlineBtn.cssText.indexOf("{ }") ? styleSheetRules.dangerOutlineBtn.cssText.replace(/ /g, "") : ""),
        (showStylesPreElement.innerHTML += -1 === styleSheetRules.accordion.cssText.indexOf("{ }") ? styleSheetRules.accordion.cssText.replace(/ /g, "") : "");
    },
    getRGBHex = (e) => {
      var t = 0,
        r = 0,
        n = 0;
      return 4 == e.length ? ((t = "0x" + e[1] + e[1]), (r = "0x" + e[2] + e[2]), (n = "0x" + e[3] + e[3])) : 7 == e.length && ((t = "0x" + e[1] + e[2]), (r = "0x" + e[3] + e[4]), (n = "0x" + e[5] + e[6])), +t + "," + +r + "," + +n;
    },
    getHoverActiveOrBorderColor = (e, t) => {
      var r = parseInt(e.replace("#", ""), 16),
        n = Math.round(2.55 * t),
        o = (r >> 16) + n,
        a = ((r >> 8) & 255) + n,
        i = (255 & r) + n;
      return "#" + (16777216 + 65536 * (o < 255 ? (o < 1 ? 0 : o) : 255) + 256 * (a < 255 ? (a < 1 ? 0 : a) : 255) + (i < 255 ? (i < 1 ? 0 : i) : 255)).toString(16).slice(1);
    },
    colorElements = document.querySelectorAll("#theme-colors .color-swatch");
  for (let n = 0; n < colorElements.length; n++) {
    const o = colorElements[n].querySelector("label"),
      colorInputElement = colorElements[n].querySelector('input[type="color"]'),
      textColorInputElement = colorElements[n].querySelector('input[type="text"]');
    (textColorInputElement.value = getConfigFromStorage(colorElements[n].id) || textColorInputElement.value),
      (colorInputElement.value = getConfigFromStorage(colorElements[n].id) || colorInputElement.value),
      (o.style.backgroundColor = getConfigFromStorage(colorElements[n].id) || colorInputElement.value),
      colorInputElement.addEventListener("input", (e) => {
        const parentLabelElement = e.target.parentElement.querySelector("label"),
          parentInputElement = e.target.parentElement.querySelector('input[type="text"]'),
          eValue = e.target.value;
        updateStorageConfig(" -" + e.target.id, eValue),
          updateStorageConfig("theme-" + e.target.id + "-rgb", getRGBHex(eValue)),
          updateStorageConfig("theme-" + e.target.id + "-btn-hover-active-border-bg-color", getHoverActiveOrBorderColor(eValue, -10)),
          (parentLabelElement.style.backgroundColor = eValue),
          (parentInputElement.value = eValue),
          styleSheetRules.root.style.setProperty("--" + prefix + e.target.id, eValue),
          styleSheetRules.root.style.setProperty("--" + prefix + e.target.id + "-rgb", getRGBHex(eValue)),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-bg", eValue),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-border-color", eValue),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-hover-bg", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-hover-border-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-active-bg", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-active-border-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", eValue),
          styleSheetRules[e.target.id + "Btn"].style.setProperty("--ar-btn-disabled-border-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-border-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-bg", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-border-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-active-bg", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-active-border-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-color", eValue),
          styleSheetRules[e.target.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color", eValue),
        "primary" === e.target.id &&
        (updateStorageConfig("theme-link-hover-color", getHoverActiveOrBorderColor(eValue, -10)),
          updateStorageConfig(
            "theme-accordion-btn-active-icon",
            `url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${eValue.replace(
              /#/g,
              "%23"
            )}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`
          ),
          styleSheetRules.root.style.setProperty("--ar-link-color", eValue),
          styleSheetRules.root.style.setProperty("--ar-link-hover-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules.accordion.style.setProperty(
            "--ar-accordion-btn-active-icon",
            `url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${eValue.replace(
              /#/g,
              "%23"
            )}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`
          )),
          appendStylesToPreElement();
      }),
      textColorInputElement.addEventListener("change", (e) => {
        const parentLabelElement = e.target.parentElement.querySelector("label"),
          parentElement = e.target.parentElement.querySelector('input[type="color"]'),
          eValue = e.target.value;
        0 != eValue.length &&
        eValue.startsWith("#") &&
        (updateStorageConfig("theme-" + parentElement.id, eValue),
          updateStorageConfig("theme-" + parentElement.id + "-rgb", getRGBHex(eValue)),
          updateStorageConfig("theme-" + parentElement.id + "-btn-hover-active-border-bg-color", getHoverActiveOrBorderColor(eValue, -10)),
          (parentLabelElement.style.backgroundColor = eValue),
          (parentElement.value = eValue),
          styleSheetRules.root.style.setProperty("--" + prefix + parentElement.id, eValue),
          styleSheetRules.root.style.setProperty("--" + prefix + parentElement.id + "-rgb", getRGBHex(eValue)),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-bg", eValue),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-border-color", eValue),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-hover-bg", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-hover-border-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-active-bg", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-active-border-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", eValue),
          styleSheetRules[parentElement.id + "Btn"].style.setProperty("--ar-btn-disabled-border-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-border-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-bg", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-hover-border-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-active-bg", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-active-border-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-color", eValue),
          styleSheetRules[parentElement.id + "OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color", eValue),
        "primary" === parentElement.id &&
        (updateStorageConfig("theme-link-hover-color", getHoverActiveOrBorderColor(eValue, -10)),
          updateStorageConfig(
            "theme-accordion-btn-active-icon",
            `url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${eValue.replace(
              /#/g,
              "%23"
            )}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`
          ),
          styleSheetRules.root.style.setProperty("--ar-link-color", eValue),
          styleSheetRules.root.style.setProperty("--ar-link-hover-color", getHoverActiveOrBorderColor(eValue, -10)),
          styleSheetRules.accordion.style.setProperty(
            "--ar-accordion-btn-active-icon",
            `url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${eValue.replace(
              /#/g,
              "%23"
            )}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`
          )),
          appendStylesToPreElement());
      });
  }
  const fontUrlElement = document.getElementById("font-url"),
    headLinkElement = document.getElementById("google-font");
  (headLinkElement.href = getConfigFromStorage("theme-font-url") || fontUrlElement.value),
    (fontUrlElement.value = getConfigFromStorage("theme-font-url") || fontUrlElement.value),
    fontUrlElement.addEventListener("blur", (e) => {
      const eValue = e.target.value;
      updateStorageConfig("theme-font-url", eValue), (headLinkElement.href = eValue);
    });
  const fontFamilyElement = document.getElementById("body-font-family");
  (fontFamilyElement.value = getConfigFromStorage("theme-font-family") || fontFamilyElement.value),
    fontFamilyElement.addEventListener("blur", (e) => {
      var eValue = e.target.value;
      updateStorageConfig("theme-font-family", eValue), styleSheetRules.root.style.setProperty("--ar-body-font-family", eValue), appendStylesToPreElement();
    });
  const rootFontSizeElement = document.getElementById("root-font-size");
  (rootFontSizeElement.value = getConfigFromStorage("theme-root-font-size") || rootFontSizeElement.value),
    rootFontSizeElement.addEventListener("change", (e) => {
      const eValue = e.target.value;
      updateStorageConfig("theme-root-font-size", eValue), styleSheetRules.root.style.setProperty("--ar-root-font-size", eValue), appendStylesToPreElement();
    });
  const bodyFontSizeElement = document.getElementById("body-font-size");
  (bodyFontSizeElement.value = getConfigFromStorage("theme-body-font-size") || bodyFontSizeElement.value),
    bodyFontSizeElement.addEventListener("change", (e) => {
      const eValue = e.target.value;
      updateStorageConfig("theme-body-font-size", eValue), styleSheetRules.root.style.setProperty("--ar-body-font-size", eValue), appendStylesToPreElement();
    });
  const borderWidthElement = document.getElementById("border-width");
  (borderWidthElement.value = parseInt(getConfigFromStorage("theme-border-width")) || borderWidthElement.value),
    borderWidthElement.addEventListener("input", (e) => {
      const eValue = e.target.value;
      updateStorageConfig("theme-border-width", eValue + "px"), styleSheetRules.root.style.setProperty("--ar-border-width", eValue + "px"), appendStylesToPreElement();
    });
  const roundedBaseElement = document.getElementById("border-radius");
  (roundedBaseElement.value = parseFloat(getConfigFromStorage("theme-border-radius")) || roundedBaseElement.value),
    roundedBaseElement.addEventListener("input", (e) => {
      const eValue = e.target.value;
      updateStorageConfig("theme-border-radius", eValue + "rem"), styleSheetRules.root.style.setProperty("--ar-border-radius", eValue + "rem"), appendStylesToPreElement();
    });
  const borderRadiusElements = document.querySelectorAll('#theme-border-radiuses input[type="number"');
  for (let n = 0; n < borderRadiusElements.length; n++)
    (borderRadiusElements[n].value = getConfigFromStorage("theme-" + borderRadiusElements[n].id + "multiplier") || borderRadiusElements[n].value),
      borderRadiusElements[n].addEventListener("input", (e) => {
        const n = e.target.value;
        updateStorageConfig("theme-" + e.target.id, "calc(var(--ar-border-radius) * " + n + ")"),
          updateStorageConfig("theme-" + e.target.id + "multiplier", n),
          styleSheetRules.root.style.setProperty("--" + prefix + e.target.id, "calc(var(--ar-border-radius) * " + n + ")"),
          appendStylesToPreElement();
      });
  const customizerOffcanvasElement = document.getElementById("customizer"),
    customizerBottomButton = document.getElementById("customizer-btns");
  getConfigFromStorage("theme-customizer-btns") && customizerBottomButton.classList.remove("d-none"),
    customizerOffcanvasElement.addEventListener("change", (e) => {
      updateStorageConfig("theme-customizer-btns", !0), customizerBottomButton.classList.remove("d-none");
    });
  document.getElementById("customizer-reset-btn").addEventListener("click", () => {
    let e = [];
    for (let t = 0; t < localStorage.length; t++) "theme" == localStorage.key(t).substring(0, 5) && e.push(localStorage.key(t));
    for (let t = 0; t < e.length; t++) localStorage.removeItem(e[t]);
    window.location.reload();
  });
  const copyStylesButtonElement = document.getElementById("copy-styles-btn");
  copyStylesButtonElement.addEventListener("click", (e) => {
    const docRange = document.createRange();
    docRange.selectNode(showStylesPreElement),
      window.getSelection().removeAllRanges(),
      window.getSelection().addRange(docRange),
      navigator.clipboard.writeText(showStylesPreElement.innerHTML),
      (e.currentTarget.innerHTML = '<i class="ai-check me-2 ms-n1"></i>Copied!'),
      setTimeout(function () {
        copyStylesButtonElement.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copy styles';
      }, 2e3);
  });
})();
