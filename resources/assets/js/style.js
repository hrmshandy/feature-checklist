// Add Style
(function (d, l, id) {
    var css, fcss = d.getElementsByTagName(l)[0];
    if (d.getElementById(id)) { return; }
    css = d.createElement(l); css.id = id;
    css.href = "/vendor/feature-checklist/css/style.css";
    css.rel = "stylesheet"
    fcss.parentNode.insertBefore(css, fcss);
}(document, 'link', 'feature-checklist-style'));

