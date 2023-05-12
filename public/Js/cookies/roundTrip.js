const departFieldset = document.getElementById("depart-container");
const returnFieldset = document.getElementById("return-container");
const roundBtnLink = document.querySelectorAll(".round-trip-btn");
roundBtnLink.forEach(function (roundBtn) {
    roundBtn.addEventListener("click", function (event) {
        // depart
        departFieldset.classList.add("mt-5");
        departFieldset.classList.add("fieldset-cursor");
        departFieldset.classList.remove("bg-dark");
        departFieldset.classList.remove("text-light");
        departFieldset.setAttribute("disabled", true);
        //return
        returnFieldset.classList.remove("mt-5");
        returnFieldset.classList.remove("fieldset-cursor");
        returnFieldset.classList.add("bg-dark");
        returnFieldset.classList.add("text-light");
        returnFieldset.removeAttribute("disabled");

        const roundDepartPrice =
            this.children[0].getAttribute("data-depart-price");
        const roundDepartOrigin =
            this.children[0].getAttribute("data-depart-origin");
        const roundDepartStop =
            this.children[0].getAttribute("data-depart-stops");
        const roundDepartArrive =
            this.children[0].getAttribute("data-depart-arrive");
        const roundDepartDepart =
            this.children[0].getAttribute("data-depart-depart");
        const roundDepartNo =
            this.children[0].getAttribute("data-depart-number");
        const roundDepartDestination = this.children[0].getAttribute(
            "data-depart-destination"
        );
        const roundDepartDepartDate = this.children[0].getAttribute(
            "data-depart-depart-date"
        );
        const availableDepartSeats =
            this.children[0].getAttribute("data-depart-seats");
        const departClassType = this.children[0].getAttribute("data-class");
        const departCalendarDate =
            this.children[0].getAttribute("data-depart-date");
        const departTerminalData = this.children[0].getAttribute(
            "data-depart-terminal"
        );

        // cookie
        const roundDepart = jar.get("round-depart-data");
        if (!roundDepart) {
            const roundTripDepartData = {
                [roundDepartOrigin]: {
                    departPrice: roundDepartPrice,
                    departOrigin: roundDepartOrigin,
                    departDestination: roundDepartDestination,
                    departTravelStop: roundDepartStop,
                    departDepart: roundDepartDepart,
                    departArrive: roundDepartArrive,
                    departNumber: roundDepartNo,
                    departDepartDate: roundDepartDepartDate,
                    departSeats: availableDepartSeats,
                    departClass: departClassType,
                    departCalendar: departCalendarDate,
                    departTerminal: departTerminalData,
                },
            };
            jar.set("round-depart-data", JSON.stringify(roundTripDepartData));
        } else {
            jar.remove("round-depart-data");
            const roundTripDepartData = {
                [roundDepartOrigin]: {
                    departPrice: roundDepartPrice,
                    departOrigin: roundDepartOrigin,
                    departDestination: roundDepartDestination,
                    departTravelStop: roundDepartStop,
                    departDepart: roundDepartDepart,
                    departArrive: roundDepartArrive,
                    departNumber: roundDepartNo,
                    departDepartDate: roundDepartDepartDate,
                    departSeats: availableDepartSeats,
                    departClass: departClassType,
                    departCalendar: departCalendarDate,
                    departTerminal: departTerminalData,
                },
            };
            jar.set("round-depart-data", JSON.stringify(roundTripDepartData));
        }
    });
});
