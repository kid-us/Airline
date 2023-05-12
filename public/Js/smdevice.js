// Modal on MD LG and Xl devices
// clicked links
const tripLinkSm = document.getElementById("trip-link-sm");
const passengerLinkSm = document.getElementById("passenger-link-sm");
const classLinkSm = document.getElementById("class-link-sm");
//making plural script
// const adultPlural = document.getElementById("adult-sm");
// Modal container
const tripModalContainerSm = document.getElementById("trip-modal-sm");
const passengerModalContainerSm = document.getElementById("passenger-modal-sm");
const classModalContainerSm = document.getElementById("class-modal-sm");
const overlaySm = document.getElementById("overlay");

tripLinkSm.addEventListener("click", function () {
    tripModalContainerSm.classList.remove("hidden");
    passengerModalContainerSm.classList.add("hidden");
    classModalContainerSm.classList.add("hidden");
    overlaySm.classList.remove("hidden");
});
passengerLinkSm.addEventListener("click", function () {
    passengerModalContainerSm.classList.remove("hidden");
    tripModalContainerSm.classList.add("hidden");
    classModalContainerSm.classList.add("hidden");
    overlaySm.classList.remove("hidden");
});
classLinkSm.addEventListener("click", function () {
    classModalContainerSm.classList.remove("hidden");
    tripModalContainerSm.classList.add("hidden");
    passengerModalContainerSm.classList.add("hidden");
    overlaySm.classList.remove("hidden");
});

overlaySm.addEventListener("click", function () {
    tripModalContainerSm.classList.add("hidden");
    passengerModalContainerSm.classList.add("hidden");
    classModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});

// Choosing Value scripts
const roundTripWordSm = document.getElementById("round-trip-sm");
const oneWayWordSm = document.getElementById("one-way-sm");
const multiCityWordSm = document.getElementById("multi-city-sm");
// Input id of trip-type class-type and passenger-size
const tripTypeSm = document.getElementById("trip-type-sm");

roundTripWordSm.addEventListener("click", function () {
    tripLinkSm.textContent = roundTripWord.innerText;
    tripTypeSm.setAttribute("value", roundTripWord.innerText);
    tripModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});
oneWayWordSm.addEventListener("click", function () {
    tripLinkSm.textContent = oneWayWord.innerText;
    tripTypeSm.setAttribute("value", oneWayWord.innerText);
    tripModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});
multiCityWordSm.addEventListener("click", function () {
    tripLinkSm.textContent = multiCityWord.innerText;
    tripTypeSm.setAttribute("value", multiCityWord.innerText);
    tripModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});

const economyWordSm = document.getElementById("economy-value-sm");
const businessWordSm = document.getElementById("business-value-sm");
// Input id of class-type
const classTypeSm = document.getElementById("class-type-sm");

economyWordSm.addEventListener("click", function () {
    classLinkSm.textContent = economyWord.innerText;
    classTypeSm.setAttribute("value", economyWord.innerText);
    classModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});
businessWordSm.addEventListener("click", function () {
    classLinkSm.textContent = businessWord.innerText;
    classTypeSm.setAttribute("value", businessWord.innerText);
    classModalContainerSm.classList.add("hidden");
    overlaySm.classList.add("hidden");
});

// Passenger btn
const passengerNumberIndicatorSm = document.getElementById("passenger-no-sm");
const adultMinusBtnSm = document.getElementById("adult-minus-sm");
const adultPlusBtnSm = document.getElementById("adult-plus-sm");
const adultNumberIndicatorSm = document.getElementById("adult-no-sm");
const childrenMinusBtnSm = document.getElementById("children-minus-sm");
const childrenPlusBtnSm = document.getElementById("children-plus-sm");
const childrenNumberIndicatorSm = document.getElementById("children-no-sm");
const infantMinusBtnSm = document.getElementById("infant-minus-sm");
const infantPlusBtnSm = document.getElementById("infant-plus-sm");
const infantNumberIndicatorSm = document.getElementById("infant-no-sm");
// Input id passenger-size
const passengerSizeSm = document.getElementById("passenger-size-sm");

// plus btn
adultPlusBtnSm.addEventListener("click", function () {
    if (adultNumberIndicatorSm.innerText == "9") {
        adultNumberIndicatorSm.innerText = "9";
    } else {
        if (passengerNumberIndicatorSm.innerText == "10") {
            // do nothing
        } else {
            adultNumberIndicatorSm.innerText =
                Number(adultNumberIndicatorSm.innerText) + 1;
            passengerNumberIndicatorSm.innerText =
                Number(passengerNumberIndicatorSm.innerText) + 1;
            passengerSizeSm.setAttribute(
                "value",
                passengerNumberIndicatorSm.innerText
            );
        }
    }
});

childrenPlusBtnSm.addEventListener("click", function () {
    if (childrenNumberIndicatorSm.innerText == "8") {
        childrenNumberIndicatorSm.innerText = "8";
    } else {
        if (passengerNumberIndicatorSm.innerText == "10") {
            // do nothing
        } else {
            childrenNumberIndicatorSm.innerText =
                Number(childrenNumberIndicatorSm.innerText) + 1;
            passengerNumberIndicatorSm.innerText =
                Number(passengerNumberIndicatorSm.innerText) + 1;
            passengerSizeSm.setAttribute(
                "value",
                passengerNumberIndicatorSm.innerText
            );
        }
    }
});

infantPlusBtnSm.addEventListener("click", function () {
    if (infantNumberIndicatorSm.innerText == "1") {
        infantNumberIndicatorSm.innerText = "1";
    } else {
        if (passengerNumberIndicatorSm.innerText == "10") {
            // do nothing
        } else {
            infantNumberIndicatorSm.innerText =
                Number(infantNumberIndicatorSm.innerText) + 1;
            passengerNumberIndicatorSm.innerText =
                Number(passengerNumberIndicatorSm.innerText) + 1;
            passengerSizeSm.setAttribute(
                "value",
                passengerNumberIndicatorSm.innerText
            );
        }
    }
});

// minus btn
adultMinusBtnSm.addEventListener("click", function () {
    if (adultNumberIndicatorSm.innerText == "1") {
        adultNumberIndicatorSm.innerText = "1";
    } else {
        adultNumberIndicatorSm.innerText =
            Number(adultNumberIndicatorSm.innerText) - 1;
        passengerNumberIndicatorSm.innerText =
            Number(passengerNumberIndicatorSm.innerText) - 1;
        passengerSizeSm.setAttribute(
            "value",
            passengerNumberIndicatorSm.innerText
        );
    }
});

childrenMinusBtnSm.addEventListener("click", function () {
    if (childrenNumberIndicatorSm.innerText == "0") {
        childrenNumberIndicatorSm.innerText = "0";
    } else {
        childrenNumberIndicatorSm.innerText =
            Number(childrenNumberIndicatorSm.innerText) - 1;
        passengerNumberIndicatorSm.innerText =
            Number(passengerNumberIndicatorSm.innerText) - 1;
        passengerSizeSm.setAttribute(
            "value",
            passengerNumberIndicatorSm.innerText
        );
    }
});

infantMinusBtnSm.addEventListener("click", function () {
    if (infantNumberIndicatorSm.innerText == "0") {
        infantNumberIndicatorSm.innerText = "0";
    } else {
        infantNumberIndicatorSm.innerText =
            Number(infantNumberIndicatorSm.innerText) - 1;
        passengerNumberIndicatorSm.innerText =
            Number(passengerNumberIndicatorSm.innerText) - 1;
        passengerSizeSm.setAttribute(
            "value",
            passengerNumberIndicatorSm.innerText
        );
    }
});
