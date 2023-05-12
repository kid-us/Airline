// Large item booking check-in flight-info and book-flight script
const bookContainer = document.getElementById("book-page");
const checkInContainer = document.getElementById("check-in-page");
const bookingContainer = document.getElementById("booking-page");
const flightInfoContainer = document.getElementById("flight-info-page");
const flightBtn = document.getElementById("flight");
const bookingBtn = document.getElementById("booking");
const flightInfoBtn = document.getElementById("flight-info");
const checkInBtn = document.getElementById("check-in");

flightBtn.addEventListener("click", function () {
    // btn click script
    flightBtn.classList.add("actived");
    bookingBtn.classList.remove("actived");
    flightInfoBtn.classList.remove("actived");
    checkInBtn.classList.remove("actived");
    // container display script
    bookContainer.classList.remove("hidden");
    bookingContainer.classList.add("hidden");
    flightInfoContainer.classList.add("hidden");
    checkInContainer.classList.add("hidden");
});

bookingBtn.addEventListener("click", function () {
    // btn click script
    bookingBtn.classList.add("actived");
    flightBtn.classList.remove("actived");
    flightInfoBtn.classList.remove("actived");
    checkInBtn.classList.remove("actived");
    // container display script
    bookingContainer.classList.remove("hidden");
    bookContainer.classList.add("hidden");
    flightInfoContainer.classList.add("hidden");
    checkInContainer.classList.add("hidden");
});

flightInfoBtn.addEventListener("click", function () {
    // btn click script
    flightInfoBtn.classList.add("actived");
    checkInBtn.classList.remove("actived");
    bookingBtn.classList.remove("actived");
    flightBtn.classList.remove("actived");
    // container display script
    flightInfoContainer.classList.remove("hidden");
    bookContainer.classList.add("hidden");
    bookingContainer.classList.add("hidden");
    checkInContainer.classList.add("hidden");
});

checkInBtn.addEventListener("click", function () {
    // btn click script
    checkInBtn.classList.add("actived");
    flightBtn.classList.remove("actived");
    bookingBtn.classList.remove("actived");
    flightInfoBtn.classList.remove("actived");
    // container display script
    checkInContainer.classList.remove("hidden");
    bookContainer.classList.add("hidden");
    bookingContainer.classList.add("hidden");
    flightInfoContainer.classList.add("hidden");
});
// Reload

const checkInForm = document.getElementById("ticket-no");

if (checkInForm.classList.contains("border-error")) {
    checkInContainer.classList.remove("hidden");
    bookContainer.classList.add("hidden");
    bookingContainer.classList.add("hidden");
    flightInfoContainer.classList.add("hidden");
}

// Small items booking check-in flight-info and book-flight script
const smBookPage = document.getElementById("book-sm-page");
const smBookingPage = document.getElementById("booking-sm-page");
const smCheckInPage = document.getElementById("check-in-sm-page");
const smFlightBtn = document.getElementById("sm-flight");
const smBookingBtn = document.getElementById("sm-booking");
const smCheckInBtn = document.getElementById("sm-check-in");

smFlightBtn.addEventListener("click", function () {
    // Sm btn click script
    smFlightBtn.classList.add("active-flight-btn");
    smBookingBtn.classList.remove("active-flight-btn");
    smCheckInBtn.classList.remove("active-flight-btn");
    // container display script
    smBookPage.classList.remove("hidden");
    smBookingPage.classList.add("hidden");
    smCheckInPage.classList.add("hidden");
});

smBookingBtn.addEventListener("click", function () {
    smBookingBtn.classList.add("active-flight-btn");
    smFlightBtn.classList.remove("active-flight-btn");
    smCheckInBtn.classList.remove("active-flight-btn");
    // container display script
    smBookingPage.classList.remove("hidden");
    smBookPage.classList.add("hidden");
    smCheckInPage.classList.add("hidden");
});

smCheckInBtn.addEventListener("click", function () {
    smCheckInBtn.classList.add("active-flight-btn");
    smBookingBtn.classList.remove("active-flight-btn");
    smFlightBtn.classList.remove("active-flight-btn");
    // container display script
    smCheckInPage.classList.remove("hidden");
    smBookPage.classList.add("hidden");
    smBookingPage.classList.add("hidden");
});

// Deal buttons or Country name btns
const domesticBtn = document.getElementById("domestic");
const africaBtn = document.getElementById("africa");
const americaBtn = document.getElementById("america");
const europeBtn = document.getElementById("europe");
const asiaBtn = document.getElementById("asia");
const middleEastBtn = document.getElementById("middle-east");
// Country Container
const domesticPage = document.getElementById("domestic-page");
const africaPage = document.getElementById("africa-page");
const americaPage = document.getElementById("america-page");
const europePage = document.getElementById("europe-page");
const asiaPage = document.getElementById("asia-page");
const middleEastPage = document.getElementById("middle-east-page");
domesticBtn.addEventListener("click", function () {
    // btn listeners
    domesticBtn.classList.add("actived");
    africaBtn.classList.remove("actived");
    americaBtn.classList.remove("actived");
    europeBtn.classList.remove("actived");
    asiaBtn.classList.remove("actived");
    middleEastBtn.classList.remove("actived");
    // page listeners
    domesticPage.classList.remove("hidden");
    africaPage.classList.add("hidden");
    americaPage.classList.add("hidden");
    europePage.classList.add("hidden");
    asiaPage.classList.add("hidden");
    middleEastPage.classList.add("hidden");
});
africaBtn.addEventListener("click", function () {
    // btn listeners
    africaBtn.classList.add("actived");
    domesticBtn.classList.remove("actived");
    americaBtn.classList.remove("actived");
    europeBtn.classList.remove("actived");
    asiaBtn.classList.remove("actived");
    middleEastBtn.classList.remove("actived");
    // page listeners
    africaPage.classList.remove("hidden");
    domesticPage.classList.add("hidden");
    americaPage.classList.add("hidden");
    europePage.classList.add("hidden");
    asiaPage.classList.add("hidden");
    middleEastPage.classList.add("hidden");
});
americaBtn.addEventListener("click", function () {
    // btn listeners
    americaBtn.classList.add("actived");
    domesticBtn.classList.remove("actived");
    africaBtn.classList.remove("actived");
    europeBtn.classList.remove("actived");
    asiaBtn.classList.remove("actived");
    middleEastBtn.classList.remove("actived");
    // page listeners
    americaPage.classList.remove("hidden");
    domesticPage.classList.add("hidden");
    africaPage.classList.add("hidden");
    europePage.classList.add("hidden");
    asiaPage.classList.add("hidden");
    middleEastPage.classList.add("hidden");
});
europeBtn.addEventListener("click", function () {
    // btn listeners
    europeBtn.classList.add("actived");
    domesticBtn.classList.remove("actived");
    africaBtn.classList.remove("actived");
    americaBtn.classList.remove("actived");
    asiaBtn.classList.remove("actived");
    middleEastBtn.classList.remove("actived");
    // page listeners
    europePage.classList.remove("hidden");
    domesticPage.classList.add("hidden");
    africaPage.classList.add("hidden");
    americaPage.classList.add("hidden");
    asiaPage.classList.add("hidden");
    middleEastPage.classList.add("hidden");
});
asiaBtn.addEventListener("click", function () {
    // btn listeners
    asiaBtn.classList.add("actived");
    domesticBtn.classList.remove("actived");
    africaBtn.classList.remove("actived");
    americaBtn.classList.remove("actived");
    europeBtn.classList.remove("actived");
    middleEastBtn.classList.remove("actived");
    // page listeners
    asiaPage.classList.remove("hidden");
    domesticPage.classList.add("hidden");
    africaPage.classList.add("hidden");
    americaPage.classList.add("hidden");
    europePage.classList.add("hidden");
    middleEastPage.classList.add("hidden");
});
middleEastBtn.addEventListener("click", function () {
    // btn listeners
    middleEastBtn.classList.add("actived");
    domesticBtn.classList.remove("actived");
    africaBtn.classList.remove("actived");
    americaBtn.classList.remove("actived");
    europeBtn.classList.remove("actived");
    asiaBtn.classList.remove("actived");
    // page listeners
    middleEastPage.classList.remove("hidden");
    domesticPage.classList.add("hidden");
    africaPage.classList.add("hidden");
    americaPage.classList.add("hidden");
    europePage.classList.add("hidden");
    asiaPage.classList.add("hidden");
});

// hover on simple text arrow and title color changer script
const arrowCon1 = document.getElementById("arrow-container-1");
const arrow1 = document.getElementById("arrow-1");
const title1 = document.getElementById("title-1");
arrowCon1.addEventListener("mouseenter", function () {
    arrow1.classList.remove("hidden");
    title1.classList.add("arrow");
});
arrowCon1.addEventListener("mouseleave", function () {
    arrow1.classList.add("hidden");
    title1.classList.remove("arrow");
});
const arrowCon2 = document.getElementById("arrow-container-2");
const title2 = document.getElementById("title-2");
const arrow2 = document.getElementById("arrow-2");
arrowCon2.addEventListener("mouseenter", function () {
    arrow2.classList.remove("hidden");
    title2.classList.add("arrow");
});
arrowCon2.addEventListener("mouseleave", function () {
    arrow2.classList.add("hidden");
    title2.classList.remove("arrow");
});
const arrowCon3 = document.getElementById("arrow-container-3");
const title3 = document.getElementById("title-3");
const arrow3 = document.getElementById("arrow-3");
arrowCon3.addEventListener("mouseenter", function () {
    arrow3.classList.remove("hidden");
    title3.classList.add("arrow");
});
arrowCon3.addEventListener("mouseleave", function () {
    arrow3.classList.add("hidden");
    title3.classList.remove("arrow");
});

// Modal on MD LG and Xl devices
// clicked links
const tripLink = document.getElementById("trip-link");
const passengerLink = document.getElementById("passenger-link");
// const classLink = document.getElementById("class-link");
// Modal container
const tripModalContainer = document.getElementById("trip-modal");
const passengerModalContainer = document.getElementById("passenger-modal");
// const classModalContainer = document.getElementById("class-modal");
const overlay = document.getElementById("overlay");

tripLink.addEventListener("click", function () {
    tripModalContainer.classList.remove("hidden");
    passengerModalContainer.classList.add("hidden");
    // classModalContainer.classList.add("hidden");
    overlay.classList.remove("hidden");
});
passengerLink.addEventListener("click", function () {
    passengerModalContainer.classList.remove("hidden");
    tripModalContainer.classList.add("hidden");
    // classModalContainer.classList.add("hidden");
    overlay.classList.remove("hidden");
});
// classLink.addEventListener("click", function () {
//     classModalContainer.classList.remove("hidden");
//     tripModalContainer.classList.add("hidden");
//     passengerModalContainer.classList.add("hidden");
//     overlay.classList.remove("hidden");
// });

overlay.addEventListener("click", function () {
    tripModalContainer.classList.add("hidden");
    passengerModalContainer.classList.add("hidden");
    // classModalContainer.classList.add("hidden");
    overlay.classList.add("hidden");
});

// Choosing Value scripts
const roundTripWord = document.getElementById("round-trip");
const oneWayWord = document.getElementById("one-way");
const multiCityWord = document.getElementById("multi-city");
// Input id of trip-type class-type and passenger-size
const tripType = document.getElementById("trip-type");

roundTripWord.addEventListener("click", function () {
    tripLink.textContent = roundTripWord.innerText;
    tripType.setAttribute("value", roundTripWord.innerText);
    tripModalContainer.classList.add("hidden");
    overlay.classList.add("hidden");
    document.getElementById("return-date").removeAttribute("hidden");
});
oneWayWord.addEventListener("click", function () {
    tripLink.textContent = oneWayWord.innerText;
    tripType.setAttribute("value", oneWayWord.innerText);
    tripModalContainer.classList.add("hidden");
    overlay.classList.add("hidden");
    document.getElementById("return-date").setAttribute("hidden", true);
});

// const economyWord = document.getElementById("economy-value");
// const businessWord = document.getElementById("business-value");
// Input id of class-type
// const classType = document.getElementById("class-type");

// economyWord.addEventListener("click", function () {
//     classLink.textContent = economyWord.innerText;
//     classType.setAttribute("value", economyWord.innerText);
//     classModalContainer.classList.add("hidden");
//     overlay.classList.add("hidden");
// });
// businessWord.addEventListener("click", function () {
//     classLink.textContent = businessWord.innerText;
//     classType.setAttribute("value", businessWord.innerText);
//     classModalContainer.classList.add("hidden");
//     overlay.classList.add("hidden");
// });

// Passenger btn
const passengerNumberIndicator = document.getElementById("passenger-no");
const adultMinusBtn = document.getElementById("adult-minus");
const adultPlusBtn = document.getElementById("adult-plus");
const adultNumberIndicator = document.getElementById("adult-no");
const childrenMinusBtn = document.getElementById("children-minus");
const childrenPlusBtn = document.getElementById("children-plus");
const childrenNumberIndicator = document.getElementById("children-no");
const infantMinusBtn = document.getElementById("infant-minus");
const infantPlusBtn = document.getElementById("infant-plus");
const infantNumberIndicator = document.getElementById("infant-no");
// Input id passenger-size
const adultSize = document.getElementById("adult-size");
const childSize = document.getElementById("child-size");
const infantSize = document.getElementById("infant-size");

// plus btn
adultPlusBtn.addEventListener("click", function () {
    if (adultNumberIndicator.innerText == "9") {
        adultNumberIndicator.innerText = "9";
    } else {
        if (passengerNumberIndicator.innerText == "10") {
            // do nothing
        } else {
            adultNumberIndicator.innerText =
                Number(adultNumberIndicator.innerText) + 1;
            passengerNumberIndicator.innerText =
                Number(passengerNumberIndicator.innerText) + 1;
            adultSize.setAttribute("value", adultNumberIndicator.innerText);
        }
    }
});

childrenPlusBtn.addEventListener("click", function () {
    if (childrenNumberIndicator.innerText == "8") {
        childrenNumberIndicator.innerText = "8";
    } else {
        if (passengerNumberIndicator.innerText == "10") {
            // do nothing
        } else {
            childrenNumberIndicator.innerText =
                Number(childrenNumberIndicator.innerText) + 1;
            passengerNumberIndicator.innerText =
                Number(passengerNumberIndicator.innerText) + 1;
            childSize.setAttribute("value", childrenNumberIndicator.innerText);
        }
    }
});

infantPlusBtn.addEventListener("click", function () {
    if (infantNumberIndicator.innerText == "1") {
        infantNumberIndicator.innerText = "1";
    } else {
        if (passengerNumberIndicator.innerText == "10") {
            // do nothing
        } else {
            infantNumberIndicator.innerText =
                Number(infantNumberIndicator.innerText) + 1;
            passengerNumberIndicator.innerText =
                Number(passengerNumberIndicator.innerText) + 1;
            infantSize.setAttribute("value", infantNumberIndicator.innerText);
        }
    }
});

// minus btn
adultMinusBtn.addEventListener("click", function () {
    if (adultNumberIndicator.innerText == "1") {
        adultNumberIndicator.innerText = "1";
    } else {
        adultNumberIndicator.innerText =
            Number(adultNumberIndicator.innerText) - 1;
        passengerNumberIndicator.innerText =
            Number(passengerNumberIndicator.innerText) - 1;
        adultSize.setAttribute("value", adultNumberIndicator.innerText);
    }
});

childrenMinusBtn.addEventListener("click", function () {
    if (childrenNumberIndicator.innerText == "0") {
        childrenNumberIndicator.innerText = "0";
    } else {
        childrenNumberIndicator.innerText =
            Number(childrenNumberIndicator.innerText) - 1;
        passengerNumberIndicator.innerText =
            Number(passengerNumberIndicator.innerText) - 1;
        childSize.setAttribute("value", childrenNumberIndicator.innerText);
    }
});

infantMinusBtn.addEventListener("click", function () {
    if (infantNumberIndicator.innerText == "0") {
        infantNumberIndicator.innerText = "0";
    } else {
        infantNumberIndicator.innerText =
            Number(infantNumberIndicator.innerText) - 1;
        passengerNumberIndicator.innerText =
            Number(passengerNumberIndicator.innerText) - 1;
        infantSize.setAttribute("value", infantNumberIndicator.innerText);
    }
});
