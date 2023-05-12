const clerkLogin = document.getElementById("clerk-login");
const managerLogin = document.getElementById("manager-login");
const adminLogin = document.getElementById("admin-login");
const userParagraph = document.getElementById("user-loader").innerText;
const browserTitle = document.getElementById("browser-title");
if (userParagraph == "clerk") {
    managerLogin.classList.add("hidden");
    adminLogin.classList.add("hidden");
    browserTitle.innerHTML = "Clerk Login";
} else if (userParagraph == "manager") {
    clerkLogin.classList.add("hidden");
    adminLogin.classList.add("hidden");
    browserTitle.innerHTML = "Manager Login";
} else {
    clerkLogin.classList.add("hidden");
    managerLogin.classList.add("hidden");
    browserTitle.innerHTML = "Admin Login";
}
