const pass = JSON.parse(jar.get("passenger"));

const data = JSON.parse(jar.get("data"));
// const returnRound = JSON.parse(jar.get("round-return-data"));
// const departRound = JSON.parse(jar.get("round-depart-data"));

const travelType = document.getElementById("travel-type").innerText;
const parent = document.createElement("div");
Object.keys(pass).forEach((p) => {
    Object.keys(data).forEach((d) => {
        // passenger cookie data variables
        const adultNumber = parseInt(pass[p].adult);
        const childNumber = parseInt(pass[p].child);
        const infantNumber = parseInt(pass[p].infant);
        const allPassengers = parseInt(
            adultNumber + childNumber + infantNumber
        );
        // flightInfo cookie data variables
        const from = data[d].origin;
        const to = data[d].destination;
        const classType = data[d].class;
        // const arriveTime = data[d].arrive;
        // const departTime = data[d].depart;
        const stops = data[d].travelStop;
        const flightNumber = data[d].number;
        const departDateContainer = data[d].departDate;
        const travelPrice = data[d].price;
        const calendarDate = data[d].date;
        const flightTerminal = data[d].terminal;
        const departAt = data[d].depart;
        const arriveAt = data[d].arrive;

        let flightCost =
            travelPrice * adultNumber + (travelPrice * childNumber * 50) / 100;

        if (travelType == "one-way") {
            for (let i = 1; i <= allPassengers; i++) {
                document
                    .getElementById("price")
                    .setAttribute("value", flightCost);

                const formInput = document.createElement("input");
                formInput.setAttribute("name", "from[]");
                formInput.setAttribute("value", from);

                const calendarDateInput = document.createElement("input");
                calendarDateInput.setAttribute("name", "date[]");
                calendarDateInput.setAttribute("value", calendarDate);

                const toInput = document.createElement("input");
                toInput.setAttribute("name", "to[]");
                toInput.setAttribute("value", to);

                const dateInput = document.createElement("input");
                dateInput.setAttribute("name", "departDate[]");
                dateInput.setAttribute("value", departDateContainer);

                const fightNoInput = document.createElement("input");
                fightNoInput.setAttribute("name", "flightNo[]");
                fightNoInput.setAttribute("value", flightNumber);

                const classInput = document.createElement("input");
                classInput.setAttribute("name", "class[]");
                classInput.setAttribute("value", classType);

                const oneWayTerminal = document.createElement("input");
                oneWayTerminal.setAttribute("name", "terminal[]");
                oneWayTerminal.setAttribute("value", flightTerminal);

                const arriveInput = document.createElement("input");
                arriveInput.setAttribute("name", "arriveAt[]");
                arriveInput.setAttribute("value", arriveAt);

                const departInput = document.createElement("input");
                departInput.setAttribute("name", "departAt[]");
                departInput.setAttribute("value", departAt);

                const priceInput = document.createElement("input");
                priceInput.setAttribute("name", "cost");
                priceInput.setAttribute("value", flightCost);

                parent.appendChild(calendarDateInput);
                parent.appendChild(formInput);
                parent.appendChild(toInput);
                parent.appendChild(dateInput);
                parent.appendChild(classInput);
                parent.appendChild(dateInput);
                parent.appendChild(fightNoInput);
                parent.appendChild(departInput);
                parent.appendChild(arriveInput);
                parent.appendChild(oneWayTerminal);
                parent.appendChild(priceInput);

                // document.querySelectorAll(".reserve").appendChild(parent);
                document.querySelector(".reserve").appendChild(parent);
            }
        } else {
        }
    });
});
