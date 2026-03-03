document.addEventListener("DOMContentLoaded", function () {
  const widget = document.querySelector(".ave-slug-widget");
  if (!widget) return;

  let newUrl = widget.dataset.aveUrl;
  if (!newUrl) return;
  const urlReplace = widget.dataset.aveUrlReplace;
  if (!urlReplace) return;
  const savePropsUrl = widget.dataset.aveSavePropsUrl;
  if(savePropsUrl == "yes"){
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.forEach((value, key) => {
      if (key !== "campana") {
        newUrl += `&${key}=${value}`;
      }
    });
  }

  // Selectores de botones (ajústalos)
  const selectors = [`a[href*="${urlReplace}"]`];

  selectors.forEach((selector) => {
    document.querySelectorAll(selector).forEach((button) => {
      button.setAttribute("href", newUrl);
    });
  });
});
