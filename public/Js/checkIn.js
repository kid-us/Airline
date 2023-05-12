const cancelLink = document.getElementById("cancel-link");
const cancelForm = document.getElementById("cancel-form");

cancelLink.addEventListener("click", function () {
    if (cancelForm.classList.contains("hidden")) {
        cancelForm.classList.remove("hidden");
    } else {
        cancelForm.classList.add("hidden");
    }
});
