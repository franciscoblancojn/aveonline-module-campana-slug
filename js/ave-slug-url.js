document.addEventListener("DOMContentLoaded", function () {
  if (typeof ElementorAveSlugURL === "undefined") return;

  const newUrl = ElementorAveSlugURL.url;

  // Selectores de botones (ajústalos)
  const selectors = ['a[href*="https://guias.aveonline.co/registrarse"]'];

  selectors.forEach((selector) => {
    document.querySelectorAll(selector).forEach((button) => {
      button.setAttribute("href", newUrl);
    });
  });
});
