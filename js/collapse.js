document.addEventListener("DOMContentLoaded", e => {
    var t = document.getElementById("collapseReview");
    const n = document.getElementById("loadMoreButton");
    t && n && t.addEventListener("shown.bs.collapse", () => {
        n.style.display = "none"
    }
    )
}
),
document.addEventListener("DOMContentLoaded", function() {
    const e = document.getElementById("toggleButton");
    var t = document.getElementById("collapseContent");
    e && t && (t.addEventListener("show.bs.collapse", function() {
        e.innerHTML = 'Show Less <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg>',
        e.classList.add("show-more")
    }),
    t.addEventListener("hide.bs.collapse", function() {
        e.innerHTML = 'Show More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg>',
        e.classList.remove("show-more")
    }))
});
