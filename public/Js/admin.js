const clerkForm = document.getElementById("clerk-form");
const managerForm = document.getElementById("manager-form");

managerForm.addEventListener("click", function () {
    clerkForm.classList.remove("bg-light");
    clerkForm.classList.add("form-bg");
    managerForm.classList.add("bg-light");
    managerForm.classList.remove("mt-4");
    clerkForm.classList.add("mt-4");
});

clerkForm.addEventListener("click", function () {
    managerForm.classList.remove("bg-light");
    managerForm.classList.add("form-bg");
    managerForm.classList.add("disabled");
    clerkForm.classList.add("bg-light");
    managerForm.classList.add("mt-4");
    clerkForm.classList.remove("mt-4");
});

// showing passwords

const showClerkPassword = document.getElementById("show-clerk-password");
const showManagerPassword = document.getElementById("show-manager-password");
const clerkPassword = document.getElementById("clerk-password");
const clerkConfirmPassword = document.getElementById("clerk-confirm-password");
const managerPassword = document.getElementById("manager-password");
const managerConfirmPassword = document.getElementById(
    "manager-confirm-password"
);

showClerkPassword.addEventListener("click", function () {
    if (
        clerkPassword.getAttribute("type") === "password" &&
        clerkConfirmPassword.getAttribute("type") === "password"
    ) {
        clerkPassword.setAttribute("type", "text");
        clerkConfirmPassword.setAttribute("type", "text");
    } else {
        clerkPassword.setAttribute("type", "password");
        clerkConfirmPassword.setAttribute("type", "password");
    }
});

showManagerPassword.addEventListener("click", function () {
    if (
        managerPassword.getAttribute("type") === "password" &&
        managerConfirmPassword.getAttribute("type") === "password"
    ) {
        managerPassword.setAttribute("type", "text");
        managerConfirmPassword.setAttribute("type", "text");
    } else {
        managerPassword.setAttribute("type", "password");
        managerConfirmPassword.setAttribute("type", "password");
    }
});

// checkout link

const checkoutContainer = document.getElementById("checkout");
const sloganStatus = document.getElementById("slogan-status").innerHTML;
if (sloganStatus == "Slogan Updated") {
    checkoutContainer.classList.remove("hidden");
}

const dashboardBtn = document.getElementById("dashboard");
const grantBtn = document.getElementById("grant-btn");
const profileBtn = document.getElementById("profile");
// const revokeBtn = document.getElementById("revoke-btn");

const profilePage = document.getElementById("profile-page");
const grantPage = document.getElementById("grant-page");
const dashboardPage = document.getElementById("dashboard-page");
// const revokePage = document.getElementById("revoke-page");

profileBtn.addEventListener("click", function () {
    profilePage.classList.remove("hidden");
    grantPage.classList.add("hidden");
    dashboardPage.classList.add("hidden");
    // revokePage.classList.add("hidden");
});

grantBtn.addEventListener("click", function () {
    grantPage.classList.remove("hidden");
    profilePage.classList.add("hidden");
    dashboardPage.classList.add("hidden");
    // revokePage.classList.add("hidden");
});

// revokeBtn.addEventListener("click", function () {
//     profilePage.classList.remove("hidden");
//     grantPage.classList.add("hidden");
//      dashboardPage.classList.add("hidden");
//     revokePage.classList.add("hidden");
// });

dashboardBtn.addEventListener("click", function () {
    dashboardPage.classList.remove("hidden");
    grantPage.classList.add("hidden");
    profilePage.classList.add("hidden");
    //     revokePage.classList.add("hidden");
});
