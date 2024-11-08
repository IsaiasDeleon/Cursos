document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("[data-choices]").forEach(function(e) {
        new Choices(e,{
            removeItemButton: "true" === e.dataset.choicesRemoveitembutton,
            itemSelectText: "",
            searchEnabled: !1
        })
    })
});