const checkboxes = document.querySelectorAll(".filter-checkbox")
  , clearButton = document.getElementById("clearButton");
function updateClearButtonVisibility() {
    var e = Array.from(checkboxes).some(e => e.checked);
    clearButton.style.display = e ? "block" : "none"
}
checkboxes.forEach(e => {
    e.addEventListener("change", updateClearButtonVisibility)
}
),
clearButton.addEventListener("click", function() {
    checkboxes.forEach(e => e.checked = !1),
    clearButton.style.display = "none"
});
