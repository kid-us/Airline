// Manager panel btns
const scheduleBtn = document.getElementById("schedule");
const newsBtn = document.getElementById("news");
const profileBtn = document.getElementById("profile");
const editBtn = document.getElementById("edit");
// const dashboardBtn = document.getElementById("dashboard");
const postponeBtn = document.getElementById("postpone");

// Manager pages containers
const schedulePage = document.getElementById("schedule-page");
const newsPage = document.getElementById("news-page");
const profilePage = document.getElementById("profile-page");
// const dashboardPage = document.getElementById('dashboard-page');
const editPage = document.getElementById("edit-page");
const postponePage = document.getElementById("postpone-page");

// dashboardBtn.addEventListener("click", function () {
//     dashboardPage.classList.remove("hidden");
//     editPage.classList.add("hidden");
//     schedulePage.classList.add("hidden");
//     postponePage.classList.add("hidden");
//     profilePage.classList.add("hidden");
//     newsPage.classList.add("hidden");
// });

scheduleBtn.addEventListener("click", function () {
    schedulePage.classList.remove("hidden");
    newsPage.classList.add("hidden");
    profilePage.classList.add("hidden");
    // editPage.classList.add("hidden");
    postponePage.classList.add("hidden");
    // dashboardPage.classList.add("hidden");
});

// editBtn.addEventListener("click", function () {
//     editPage.classList.remove("hidden");
//     schedulePage.classList.add("hidden");
//     // postponePage.classList.add("hidden");
//     // dashboardPage.classList.add("hidden");
//     newsPage.classList.add("hidden");
//     profilePage.classList.add("hidden");
// });

postponeBtn.addEventListener("click", function () {
    postponePage.classList.remove("hidden");
    // editPage.classList.add("hidden");
    schedulePage.classList.add("hidden");
    newsPage.classList.add("hidden");
    //  profilePage.classList.add("hidden");
    // dashboardPage.classList.add("hidden");
});

newsBtn.addEventListener("click", function () {
    newsPage.classList.remove("hidden");
    schedulePage.classList.add("hidden");
    profilePage.classList.add("hidden");
    // editPage.classList.add("hidden");
    postponePage.classList.add("hidden");
    // dashboardPage.classList.add("hidden");
});
