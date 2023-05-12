const data = JSON.parse(jar.get("data"));
const parent = document.createElement("div");
parent.className = "text-center border";
Object.keys(data).forEach((d) => {
    // cookie data variables
    const travelPrice = data[d].price;
    const from = data[d].origin;
    const to = data[d].destination;
    const arriveTime = data[d].arrive;
    const departTime = data[d].depart;
    const stops = data[d].travelStop;
    const flightNumber = data[d].number;
    const departDateContainer = data[d].departDate;

    const placeContainer = document.createElement("p");
    placeContainer.className = "font-weight-bold";
    const originPlace = document.createElement("span");
    originPlace.innerText = from + " - ";

    const destinationPlace = document.createElement("span");
    destinationPlace.innerText = to;

    const departingInfo = document.createElement("p");
    departingInfo.innerText =
        "Departing at: " + departTime + " " + departDateContainer;

    const arriveInfo = document.createElement("p");
    arriveInfo.innerText = "Arrive at: " + arriveTime;

    const flightStop = document.createElement("p");
    flightStop.innerText = stops;

    const flightNum = document.createElement("p");
    flightNum.innerText = "Flight Number: " + flightNumber;

    const operated = document.createElement("p");
    operated.innerText = "Operated by: Ethiopian Airlines";

    const priceInfo = document.createElement("p");
    priceInfo.innerText = "Price: " + travelPrice;

    placeContainer.appendChild(originPlace);
    placeContainer.appendChild(destinationPlace);

    parent.appendChild(placeContainer);
    parent.appendChild(departingInfo);
    parent.appendChild(arriveInfo);
    parent.appendChild(flightStop);
    parent.appendChild(flightNum);
    parent.appendChild(operated);
    parent.appendChild(priceInfo);
    document.querySelector(".ticket-preview").appendChild(parent);
});

const shakeInfo = document.getElementById("infos");
const infoLink = document.getElementById("info-link");

infoLink.addEventListener("click", function () {
    if (shakeInfo.classList.contains("hidden")) {
        shakeInfo.classList.remove("hidden");
    } else {
        shakeInfo.classList.add("hidden");
    }
});
