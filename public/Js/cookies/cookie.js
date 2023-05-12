const btnLink = document.querySelectorAll(".btn-link");
btnLink.forEach(function (btn) {
    btn.addEventListener("click", function (event) {
        const flightPrice = this.children[0].getAttribute("data-price");
        const flightOrigin = this.children[0].getAttribute("data-origin");
        const flightStop = this.children[0].getAttribute("data-stops");
        const flightArrive = this.children[0].getAttribute("data-arrive");
        const flightDepart = this.children[0].getAttribute("data-depart");
        const flightNo = this.children[0].getAttribute("data-number");
        const flightDestination =
            this.children[0].getAttribute("data-destination");
        const flightDepartDate =
            this.children[0].getAttribute("data-depart-date");
        const availableSeats = this.children[0].getAttribute("data-seats");
        const classType = this.children[0].getAttribute("data-class");
        const flightDate = this.children[0].getAttribute("data-date");
        const terminalData = this.children[0].getAttribute("data-terminal");

        const flight = jar.get("data");
        if (!flight) {
            console.log("alew");
            const oneWayData = {
                [flightOrigin]: {
                    price: flightPrice,
                    origin: flightOrigin,
                    destination: flightDestination,
                    travelStop: flightStop,
                    depart: flightDepart,
                    arrive: flightArrive,
                    number: flightNo,
                    class: classType,
                    departDate: flightDepartDate,
                    seats: availableSeats,
                    date: flightDate,
                    terminal: terminalData,
                },
            };

            jar.set("data", JSON.stringify(oneWayData));
        } else {
            // console.log("delete");
            jar.remove("data");

            const oneWayData = {
                [flightOrigin]: {
                    price: flightPrice,
                    origin: flightOrigin,
                    destination: flightDestination,
                    travelStop: flightStop,
                    depart: flightDepart,
                    arrive: flightArrive,
                    number: flightNo,
                    class: classType,
                    departDate: flightDepartDate,
                    seats: availableSeats,
                    date: flightDate,
                    terminal: terminalData,
                },
            };

            jar.set("data", JSON.stringify(oneWayData));
            // console.log("delete");
        }
    });
});
