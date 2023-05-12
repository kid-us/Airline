// return link
const roundReturnBtnLink = document.querySelectorAll(".return-round-btn");
roundReturnBtnLink.forEach(function (returnRoundBtn) {
    returnRoundBtn.addEventListener("click", function (event) {
        // depart
        returnFieldset.classList.add("mt-5");
        returnFieldset.classList.add("fieldset-cursor");
        returnFieldset.classList.remove("bg-dark");
        returnFieldset.classList.remove("text-light");
        returnFieldset.setAttribute("disabled", true);

        const roundReturnPrice =
            this.children[0].getAttribute("data-return-price");
        const roundReturnOrigin =
            this.children[0].getAttribute("data-return-origin");
        const roundReturnStop =
            this.children[0].getAttribute("data-return-stops");
        const roundReturnArrive =
            this.children[0].getAttribute("data-return-arrive");
        const roundReturnDepart =
            this.children[0].getAttribute("data-return-depart");
        const roundReturnNo =
            this.children[0].getAttribute("data-return-number");
        const roundReturnDestination = this.children[0].getAttribute(
            "data-return-destination"
        );
        const roundReturnDepartDate = this.children[0].getAttribute(
            "data-return-depart-date"
        );
        const roundReturnAvailableSeats =
            this.children[0].getAttribute("data-return-seats");
        const returnClassType = this.children[0].getAttribute("data-class");
        const returnDate = this.children[0].getAttribute("data-return-date");
        const returnTerminalData = this.children[0].getAttribute(
            "data-return-terminal"
        );

        // cookie store
        const roundReturnData = jar.get("round-return-data");
        if (!roundReturnData) {
            const roundTripReturnData = {
                [roundReturnOrigin]: {
                    returnPrice: roundReturnPrice,
                    returnOrigin: roundReturnOrigin,
                    returnDestination: roundReturnDestination,
                    returnTravelStop: roundReturnStop,
                    returnDepart: roundReturnDepart,
                    returnArrive: roundReturnArrive,
                    returnNumber: roundReturnNo,
                    returnDepartDate: roundReturnDepartDate,
                    returnSeats: roundReturnAvailableSeats,
                    returnClass: returnClassType,
                    returningDate: returnDate,
                    returnTerminal: returnTerminalData,
                },
            };
            jar.set("round-return-data", JSON.stringify(roundTripReturnData));
        } else {
            jar.remove("round-return-data");
            const roundTripReturnData = {
                [roundReturnOrigin]: {
                    returnPrice: roundReturnPrice,
                    returnOrigin: roundReturnOrigin,
                    returnDestination: roundReturnDestination,
                    returnTravelStop: roundReturnStop,
                    returnDepart: roundReturnDepart,
                    returnArrive: roundReturnArrive,
                    returnNumber: roundReturnNo,
                    returnDepartDate: roundReturnDepartDate,
                    returnSeats: roundReturnAvailableSeats,
                    returnClass: returnClassType,
                    returningDate: returnDate,
                    returnTerminal: returnTerminalData,
                },
            };
            jar.set("round-return-data", JSON.stringify(roundTripReturnData));
        }
        document.getElementById("next-btn").classList.remove("hidden");
    });
});
