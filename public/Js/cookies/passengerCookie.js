const showFlightBtn = document.getElementById("show-flights");
showFlightBtn.addEventListener("click", function () {
    const adultSize = document
        .getElementById("adult-size")
        .getAttribute("value");
    const childSize = document
        .getElementById("child-size")
        .getAttribute("value");
    const infantSize = document
        .getElementById("infant-size")
        .getAttribute("value");
    // cookie
    const passengers = jar.get("passenger");
    if (!passengers) {
        const data = {
            [adultSize]: {
                adult: adultSize,
                child: childSize,
                infant: infantSize,
            },
        };

        jar.set("passenger", JSON.stringify(data));
    } else {
        jar.remove("passenger");
        const data = {
            [adultSize]: {
                adult: adultSize,
                child: childSize,
                infant: infantSize,
            },
        };

        jar.set("passenger", JSON.stringify(data));
    }
});
