document.addEventListener("DOMContentLoaded", function () {
  const widget = document.querySelector(".ave-slug-widget");
  if (!widget) return;

  const newUrl = widget.dataset.aveUrl;
  if (!newUrl) return;
  const urlReplace = widget.dataset.aveUrlReplace;
  if (!urlReplace) return;

  // Selectores de botones (ajústalos)
  const selectors = [`a[href*="${urlReplace}"]`];

  selectors.forEach((selector) => {
    document.querySelectorAll(selector).forEach((button) => {
      button.setAttribute("href", newUrl);
    });
  });
});
