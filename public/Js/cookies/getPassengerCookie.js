const pass = JSON.parse(jar.get("passenger"));
const formParent = document.createElement("div");
formParent.className = "row mt-1";
// one-way flight info cookie
const data = JSON.parse(jar.get("data"));
// round-trip flight info cookie
// const departRound = JSON.parse(jar.get("round-depart-data"));

// const returnRound = JSON.parse(jar.get("round-return-data"));

const ticketPreviewParent = document.createElement("div");
ticketPreviewParent.className = "text-center";

const travllerType = document.getElementById("passenger-type").innerText;

if (travllerType == "one-way") {
    Object.keys(pass).forEach((p) => {
        Object.keys(data).forEach((d) => {
            // passenger cookie data variables
            const adultNumber = parseInt(pass[p].adult);
            const childNumber = parseInt(pass[p].child);
            const infantNumber = parseInt(pass[p].infant);

            // flightInfo cookie data variables
            const from = data[d].origin;
            const to = data[d].destination;
            const arriveTime = data[d].arrive;
            const departTime = data[d].depart;
            const stops = data[d].travelStop;
            const flightNumber = data[d].number;
            const departDateContainer = data[d].departDate;
            const travelPrice = data[d].price;
            const departCalendarDay = data[d].date;

            const adultIndicator = (document.getElementById(
                "adult-indicator"
            ).innerText = adultNumber);
            const childIndicator = (document.getElementById(
                "child-indicator"
            ).innerText = childNumber);

            const infantIndicator = (document.getElementById(
                "infant-indicator"
            ).innerText = infantNumber);
            const allIndicator = (document.getElementById(
                "all-indicator"
            ).innerText = adultNumber + childNumber + infantIndicator);

            if (adultNumber >= 1) {
                for (let i = 1; i <= adultNumber; i++) {
                    // This is the Form script

                    // div col-12
                    const columnContainer = document.createElement("div");
                    columnContainer.className = "col-12";

                    // fieldset
                    const fieldset = document.createElement("fieldset");
                    fieldset.setAttribute("id", "fieldset" + i);
                    // fieldset.setAttribute("disabled", true);

                    // form
                    const formContainer = document.createElement("form");
                    formContainer.setAttribute("name", "passengerForm");
                    formContainer.className =
                        "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                    const passengerSize = document.createElement("input");
                    passengerSize.setAttribute("name", "passenger-size");
                    passengerSize.setAttribute("type", "hidden");
                    passengerSize.setAttribute("value", adultNumber);

                    const rowContainer = document.createElement("div");
                    rowContainer.className = "row";

                    // formContainer

                    //passenger info
                    const passengerIndicatorContainer =
                        document.createElement("div");
                    passengerIndicatorContainer.className =
                        "col-sm-12 col-md-12 col-lg-12 mb-3";
                    const passengerIndicator = document.createElement("h6");
                    passengerIndicator.className = " mr-4 adult-indicator";
                    passengerIndicator.innerText = "Adult  " + i;

                    // title
                    const titleDiv = document.createElement("div");
                    titleDiv.className = "col-sm-6 col-md-4 col-lg-3";

                    // Title Select
                    const title = document.createElement("p");
                    title.innerText = "Title";
                    const titleSelect = document.createElement("select");
                    titleSelect.setAttribute("id", "title" + i);
                    titleSelect.setAttribute("name", "title" + i);
                    titleSelect.className = "form-control";

                    const option1 = document.createElement("option");
                    option1.setAttribute("value", "Mr");
                    option1.innerText = "Mr";
                    const option2 = document.createElement("option");
                    option2.setAttribute("value", "Mrs");
                    option2.innerText = "Mrs";
                    const option3 = document.createElement("option");
                    option3.setAttribute("value", "Ms");
                    option3.innerText = "Ms";
                    const option4 = document.createElement("option");
                    option4.setAttribute("value", "Dr");
                    option4.innerText = "Dr";
                    const option5 = document.createElement("option");
                    option5.setAttribute("value", "Prof");
                    option5.innerText = "Prof";

                    // first name
                    const fnDiv = document.createElement("div");
                    fnDiv.className = "col-sm-6 col-md-4 col-lg-3 f-name";
                    const fn = document.createElement("p");
                    fn.innerText = "First Name";
                    const fnInput = document.createElement("input");
                    fnInput.setAttribute("type", "text");
                    fnInput.setAttribute("name", "fname" + i);
                    fnInput.setAttribute("id", "fname" + i);
                    fnInput.className = "form-control";

                    // Middle Name
                    const mnDiv = document.createElement("div");
                    mnDiv.className = "col-sm-6 col-md-4 col-lg-3";
                    const mn = document.createElement("p");
                    mn.innerText = "Middle Name";
                    const mnInput = document.createElement("input");
                    mnInput.setAttribute("type", "text");
                    mnInput.setAttribute("name", "mdname" + i);
                    mnInput.setAttribute("id", "mdname" + i);
                    mnInput.className = "form-control";

                    // last name
                    const lnDiv = document.createElement("div");
                    lnDiv.className = "col-sm-6 col-md-4 col-lg-3";
                    const ln = document.createElement("p");
                    ln.innerText = "Last Name";
                    const lnInput = document.createElement("input");
                    lnInput.setAttribute("type", "text");
                    lnInput.setAttribute("id", "lname" + i);
                    lnInput.setAttribute("name", "lname" + i);
                    lnInput.className = "form-control";

                    // date
                    const dateDiv = document.createElement("div");
                    dateDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                    const dob = document.createElement("p");
                    dob.innerText = "DOB";
                    const dobInput = document.createElement("input");
                    dobInput.setAttribute("type", "date");
                    dobInput.setAttribute("name", "dob" + i);
                    dobInput.setAttribute("id", "dob" + i);
                    dobInput.className = "form-control";

                    // gender
                    const genderDiv = document.createElement("div");
                    genderDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                    const gender = document.createElement("p");
                    gender.innerText = "Gender";

                    const genderSelect = document.createElement("select");
                    genderSelect.setAttribute("id", "gender" + i);
                    genderSelect.setAttribute("name", "gender" + i);
                    genderSelect.className = "gender form-control";

                    const genderOption1 = document.createElement("option");
                    genderOption1.setAttribute("value", "Male");
                    genderOption1.innerText = "Male";
                    const genderOption2 = document.createElement("option");
                    genderOption2.setAttribute("value", "Female");
                    genderOption2.innerText = "Female";

                    // email
                    const emailDiv = document.createElement("div");
                    emailDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                    const email = document.createElement("p");
                    email.innerText = "Email";
                    const emailInput = document.createElement("input");
                    emailInput.setAttribute("type", "email");
                    emailInput.setAttribute("name", "email" + i);
                    emailInput.setAttribute("id", "email" + i);
                    emailInput.className = "form-control";

                    // phone
                    const phoneDiv = document.createElement("div");
                    phoneDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                    const phone = document.createElement("p");
                    phone.innerText = "Phone";
                    const phoneInput = document.createElement("input");
                    phoneInput.setAttribute("type", "tel");
                    phoneInput.setAttribute("name", "phone" + i);
                    phoneInput.setAttribute("id", "phone" + i);
                    phoneInput.className = "form-control";

                    // token
                    // const tokenInput = document.createElement("input");
                    // tokenInput.setAttribute("name", "token");
                    // tokenInput.setAttribute("type", "hidden");
                    // tokenInput.setAttribute("value", tokenVal);

                    // validation text
                    const validationDiv = document.createElement("div");
                    validationDiv.className = "col-sm-6 col-md-8 col-lg-8 mt-4";
                    const validationParagraph = document.createElement("p");
                    validationParagraph.setAttribute("id", "error-message" + i);
                    validationParagraph.className =
                        "hidden alert alert-danger p-2";
                    validationParagraph.innerText =
                        "You Must fill the forms correctly unless you will not allowed!";

                    // done-btn
                    const adultDiv = document.createElement("div");
                    adultDiv.className = "col-sm-6 col-md-4 col-lg-4 mt-4";
                    adultDiv;
                    const adultBtn = document.createElement("a");
                    // adultBtn.setAttribute("type", "submit");
                    // adultBtn.setAttribute("name", "submit" + i);
                    adultBtn.setAttribute("data-name", i);
                    adultBtn.innerText = "Done";
                    adultBtn.className = "done-btn btn btn-danger w-75 p-2";

                    // done-btn append
                    adultDiv.appendChild(adultBtn);
                    // phone append
                    phoneDiv.appendChild(phone);
                    phoneDiv.appendChild(phoneInput);
                    // email append
                    emailDiv.appendChild(email);
                    emailDiv.appendChild(emailInput);
                    // gender append
                    genderDiv.appendChild(gender);
                    genderDiv.appendChild(genderSelect);
                    genderSelect.appendChild(genderOption1);
                    genderSelect.appendChild(genderOption2);
                    // date append
                    dateDiv.appendChild(dob);
                    dateDiv.appendChild(dobInput);
                    // last name append
                    lnDiv.appendChild(ln);
                    lnDiv.appendChild(lnInput);
                    // middle name append
                    mnDiv.appendChild(mn);
                    mnDiv.appendChild(mnInput);
                    // first name append
                    fnDiv.appendChild(fn);
                    fnDiv.appendChild(fnInput);
                    // tittle append
                    titleDiv.appendChild(title);
                    titleDiv.appendChild(titleSelect);
                    titleSelect.appendChild(option1);
                    titleSelect.appendChild(option2);
                    titleSelect.appendChild(option3);
                    titleSelect.appendChild(option4);
                    titleSelect.appendChild(option5);

                    passengerIndicatorContainer.appendChild(passengerIndicator);

                    validationDiv.appendChild(validationParagraph);
                    // row container
                    rowContainer.appendChild(passengerIndicatorContainer);
                    rowContainer.appendChild(titleDiv);
                    rowContainer.appendChild(fnDiv);
                    rowContainer.appendChild(mnDiv);
                    rowContainer.appendChild(lnDiv);
                    rowContainer.appendChild(dateDiv);
                    rowContainer.appendChild(genderDiv);
                    rowContainer.appendChild(emailDiv);
                    rowContainer.appendChild(phoneDiv);
                    // rowContainer.appendChild(tokenInput);
                    rowContainer.appendChild(validationDiv);
                    rowContainer.appendChild(adultDiv);

                    // formContainer.appendChild(csrf);
                    formContainer.appendChild(passengerSize);
                    formContainer.appendChild(rowContainer);
                    // fieldset append
                    fieldset.appendChild(formContainer);
                    // col
                    columnContainer.appendChild(fieldset);

                    formParent.appendChild(columnContainer);
                    document
                        .querySelector(".adult-forms")
                        .appendChild(formParent);

                    // Form Script End here
                }
                // Ticket Preview Script
                // ticket container
                const ticketDiv = document.createElement("div");
                ticketDiv.className = "rounded shadow-lg p-4 mb-5";

                // ticket title
                const ticketTitle = document.createElement("h5");
                ticketTitle.className = "text-success text-center";
                ticketTitle.innerText = "Ticket Preview";

                // date
                const departDay = document.createElement("h4");
                departDay.innerText = "Depart On " + departDateContainer;
                // city Container
                const cities = document.createElement("h5");
                cities.innerText = from + " " + " " + "-" + " " + " " + to;

                // time container
                const timeContainer = document.createElement("h6");

                timeContainer.innerText =
                    departTime + " " + "" + "-" + " " + "" + arriveTime;
                const planeStops = document.createElement("h6");
                planeStops.innerText = stops;
                // flight no
                const planeInfo = document.createElement("h6");
                planeInfo.innerText = flightNumber;
                // operated
                const operatedBy = document.createElement("h6");
                operatedBy.innerText = "Operated by:  Ethiopian Airlines";
                // price
                const flightCost = document.createElement("p");
                flightCost.className =
                    "bg-danger m-2 w-50 p-2 text-light rounded";
                flightCost.innerText = "Price:  " + travelPrice;

                // cities.appendChild(originCity);
                // cities.appendChild(destinationCity);
                ticketDiv.appendChild(ticketTitle);
                ticketDiv.appendChild(departDay);
                ticketDiv.appendChild(cities);
                ticketDiv.appendChild(timeContainer);
                ticketDiv.appendChild(planeStops);
                ticketDiv.appendChild(planeInfo);
                ticketDiv.appendChild(operatedBy);
                ticketDiv.appendChild(flightCost);

                ticketPreviewParent.appendChild(ticketDiv);
                document
                    .querySelector(".ticket-preview")
                    .appendChild(ticketPreviewParent);
            } //end of adult form

            // Child
            if (childNumber >= 1) {
                for (let i = 1; i <= childNumber; i++) {
                    // This is the Form script

                    // div col-12
                    const childColumnContainer = document.createElement("div");
                    childColumnContainer.className = "col-12";

                    // fieldset
                    const childFieldset = document.createElement("fieldset");
                    childFieldset.setAttribute("id", "child-fieldset" + i);

                    // form
                    const childFormContainer = document.createElement("form");
                    // childFormContainer.setAttribute("name", "passengerForm");
                    childFormContainer.className =
                        "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                    const childRowContainer = document.createElement("div");
                    childRowContainer.className = "row";

                    // childFormContainer

                    //passenger info
                    const childIndicatorContainer =
                        document.createElement("div");
                    childIndicatorContainer.className =
                        "col-sm-12 col-md-12 col-lg-12 mb-3";
                    const childIndicator = document.createElement("h6");
                    childIndicator.className = " mr-4 adult-indicator";
                    childIndicator.innerText = "Child  " + i;

                    // first name
                    const childFnDiv = document.createElement("div");
                    childFnDiv.className = "col-sm-6 col-md-4 col-lg-4 f-name";
                    const childFn = document.createElement("p");
                    childFn.innerText = "First Name";
                    const childFnInput = document.createElement("input");
                    childFnInput.setAttribute("type", "text");
                    childFnInput.setAttribute("name", "child-fname" + i);
                    childFnInput.setAttribute("id", "child-fname" + i);
                    childFnInput.className = "form-control";

                    // Middle Name
                    const childMnDiv = document.createElement("div");
                    childMnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                    const childMn = document.createElement("p");
                    childMn.innerText = "Middle Name";
                    const childMnInput = document.createElement("input");
                    childMnInput.setAttribute("type", "text");
                    childMnInput.setAttribute("name", "child-mdname" + i);
                    childMnInput.setAttribute("id", "child-mdname" + i);
                    childMnInput.className = "form-control";

                    // last name
                    const childLnDiv = document.createElement("div");
                    childLnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                    const childLn = document.createElement("p");
                    childLn.innerText = "Last Name";
                    const childLnInput = document.createElement("input");
                    childLnInput.setAttribute("type", "text");
                    childLnInput.setAttribute("id", "child-lname" + i);
                    childLnInput.setAttribute("name", "child-lname" + i);
                    childLnInput.className = "form-control";

                    // date
                    const childDateDiv = document.createElement("div");
                    childDateDiv.className = "col-sm-6 col-md-4 col-lg-4 mt-4";
                    const childDob = document.createElement("p");
                    childDob.innerText = "DOB";
                    const childDobInput = document.createElement("input");
                    childDobInput.setAttribute("type", "date");
                    childDobInput.setAttribute("name", "child-dob" + i);
                    childDobInput.setAttribute("id", "child-dob" + i);
                    childDobInput.className = "form-control";

                    // gender
                    const childGenderDiv = document.createElement("div");
                    childGenderDiv.className =
                        "col-sm-6 col-md-4 col-lg-4 mt-4";
                    const childGender = document.createElement("p");
                    childGender.innerText = "Gender";

                    const childGenderSelect = document.createElement("select");
                    childGenderSelect.setAttribute("id", "child-gender" + i);
                    childGenderSelect.setAttribute("name", "child-gender" + i);
                    childGenderSelect.className = "gender form-control";

                    const childGenderOption1 = document.createElement("option");
                    childGenderOption1.setAttribute("value", "Male");
                    childGenderOption1.innerText = "Male";
                    const childGenderOption2 = document.createElement("option");
                    childGenderOption2.setAttribute("value", "Female");
                    childGenderOption2.innerText = "Female";

                    // done-btn
                    const childAdultDiv = document.createElement("div");
                    childAdultDiv.className = "col-sm-6 col-md-4 col-lg-4 mt-4";

                    // adultDiv
                    const childAdultBtn = document.createElement("a");
                    childAdultBtn.setAttribute("data-name", i);
                    childAdultBtn.innerText = "Done";
                    childAdultBtn.className =
                        "child-done-btn btn btn-danger w-75 p-2";

                    // validation text
                    const childValidationDiv = document.createElement("div");
                    childValidationDiv.className =
                        "col-sm-6 col-md-8 col-lg-8 mt-4";
                    const childValidationParagraph =
                        document.createElement("p");
                    childValidationParagraph.setAttribute(
                        "id",
                        "child-error-message" + i
                    );
                    childValidationParagraph.className =
                        "hidden alert alert-danger p-2";
                    childValidationParagraph.innerText =
                        "You Must fill the forms correctly unless you will not allowed!";
                    // done-btn append
                    childAdultDiv.appendChild(childAdultBtn);
                    // phone append

                    // gender append
                    childGenderDiv.appendChild(childGender);
                    childGenderDiv.appendChild(childGenderSelect);
                    childGenderSelect.appendChild(childGenderOption1);
                    childGenderSelect.appendChild(childGenderOption2);
                    // date append
                    childDateDiv.appendChild(childDob);
                    childDateDiv.appendChild(childDobInput);
                    // last name append
                    childLnDiv.appendChild(childLn);
                    childLnDiv.appendChild(childLnInput);
                    // middle name append
                    childMnDiv.appendChild(childMn);
                    childMnDiv.appendChild(childMnInput);
                    // first name append
                    childFnDiv.appendChild(childFn);
                    childFnDiv.appendChild(childFnInput);

                    childIndicatorContainer.appendChild(childIndicator);

                    childValidationDiv.appendChild(childValidationParagraph);
                    // row container
                    childRowContainer.appendChild(childIndicatorContainer);
                    childRowContainer.appendChild(childFnDiv);
                    childRowContainer.appendChild(childMnDiv);
                    childRowContainer.appendChild(childLnDiv);
                    childRowContainer.appendChild(childDateDiv);
                    childRowContainer.appendChild(childGenderDiv);
                    childRowContainer.appendChild(childValidationDiv);
                    childRowContainer.appendChild(childAdultDiv);

                    // childFormContainer.appendChild(csrf);
                    // childFormContainer.appendChild(passengerSize);
                    childFormContainer.appendChild(childRowContainer);
                    // childFieldset append
                    childFieldset.appendChild(childFormContainer);
                    // col
                    childColumnContainer.appendChild(childFieldset);

                    formParent.appendChild(childColumnContainer);
                    document
                        .querySelector(".child-forms")
                        .appendChild(formParent);
                }
            } // end of child

            // // Infant
            if (infantNumber >= 1) {
                for (let i = 1; i <= infantNumber; i++) {
                    // This is the Form script

                    // div col-12
                    const infantColumnContainer = document.createElement("div");
                    infantColumnContainer.className = "col-12";

                    // fieldset
                    const infantFieldset = document.createElement("fieldset");
                    infantFieldset.setAttribute("id", "infant-fieldset" + i);

                    // form
                    const infantFormContainer = document.createElement("form");
                    infantFormContainer.setAttribute("name", "passengerForm");
                    infantFormContainer.className =
                        "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                    const infantRowContainer = document.createElement("div");
                    infantRowContainer.className = "row";

                    // infantFormContainer

                    //passenger info
                    const infantIndicatorContainer =
                        document.createElement("div");
                    infantIndicatorContainer.className =
                        "col-sm-12 col-md-12 col-lg-12 mb-3";
                    const infantIndicator = document.createElement("h6");
                    infantIndicator.className = " mr-4 adult-indicator";
                    infantIndicator.innerText = "Infant  " + i;

                    // first name
                    const infantFnDiv = document.createElement("div");
                    infantFnDiv.className = "col-sm-6 col-md-4 col-lg-4 f-name";
                    const infantFn = document.createElement("p");
                    infantFn.innerText = "First Name";
                    const infantFnInput = document.createElement("input");
                    infantFnInput.setAttribute("type", "text");
                    infantFnInput.setAttribute("name", "infant-fname" + i);
                    infantFnInput.setAttribute("id", "infant-fname" + i);
                    infantFnInput.className = "form-control";

                    // Middle Name
                    const infantMnDiv = document.createElement("div");
                    infantMnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                    const infantMn = document.createElement("p");
                    infantMn.innerText = "Middle Name";
                    const infantMnInput = document.createElement("input");
                    infantMnInput.setAttribute("type", "text");
                    infantMnInput.setAttribute("name", "infant-mdname" + i);
                    infantMnInput.setAttribute("id", "infant-mdname" + i);
                    infantMnInput.className = "form-control";

                    // last name
                    const infantLnDiv = document.createElement("div");
                    infantLnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                    const infantLn = document.createElement("p");
                    infantLn.innerText = "Last Name";
                    const infantLnInput = document.createElement("input");
                    infantLnInput.setAttribute("type", "text");
                    infantLnInput.setAttribute("id", "infant-lname" + i);
                    infantLnInput.setAttribute("name", "infant-lname" + i);
                    infantLnInput.className = "form-control";

                    // date
                    const infantDateDiv = document.createElement("div");
                    infantDateDiv.className = "col-sm-6 col-md-4 col-lg-4 mt-4";
                    const infantDob = document.createElement("p");
                    infantDob.innerText = "DOB";
                    const infantDobInput = document.createElement("input");
                    infantDobInput.setAttribute("type", "date");
                    infantDobInput.setAttribute("name", "infant-dob" + i);
                    infantDobInput.setAttribute("id", "infant-dob" + i);
                    infantDobInput.className = "form-control";

                    // gender
                    const infantGenderDiv = document.createElement("div");
                    infantGenderDiv.className =
                        "col-sm-6 col-md-4 col-lg-4 mt-4";
                    const infantGender = document.createElement("p");
                    infantGender.innerText = "Gender";

                    const infantGenderSelect = document.createElement("select");
                    infantGenderSelect.setAttribute("id", "infant-gender" + i);
                    infantGenderSelect.setAttribute(
                        "name",
                        "infant-gender" + i
                    );
                    infantGenderSelect.className = "gender form-control";

                    const infantGenderOption1 =
                        document.createElement("option");
                    infantGenderOption1.setAttribute("value", "Male");
                    infantGenderOption1.innerText = "Male";
                    const infantGenderOption2 =
                        document.createElement("option");
                    infantGenderOption2.setAttribute("value", "Female");
                    infantGenderOption2.innerText = "Female";

                    // done-btn
                    const infantAdultDiv = document.createElement("div");
                    infantAdultDiv.className =
                        "col-sm-6 col-md-4 col-lg-4 mt-4";

                    // adultDiv
                    const infantAdultBtn = document.createElement("a");
                    infantAdultBtn.setAttribute("data-name", i);
                    infantAdultBtn.innerText = "Done";
                    infantAdultBtn.className =
                        "infant-done-btn btn btn-danger w-75 p-2";

                    // validation text
                    const infantValidationDiv = document.createElement("div");
                    infantValidationDiv.className =
                        "col-sm-6 col-md-8 col-lg-8 mt-4";
                    const infantValidationParagraph =
                        document.createElement("p");
                    infantValidationParagraph.setAttribute(
                        "id",
                        "infant-error-message" + i
                    );
                    infantValidationParagraph.className =
                        "hidden alert alert-danger p-2";
                    infantValidationParagraph.innerText =
                        "You Must fill the forms correctly unless you will not allowed!";
                    // done-btn append
                    infantAdultDiv.appendChild(infantAdultBtn);
                    // phone append

                    // gender append
                    infantGenderDiv.appendChild(infantGender);
                    infantGenderDiv.appendChild(infantGenderSelect);
                    infantGenderSelect.appendChild(infantGenderOption1);
                    infantGenderSelect.appendChild(infantGenderOption2);
                    // date append
                    infantDateDiv.appendChild(infantDob);
                    infantDateDiv.appendChild(infantDobInput);
                    // last name append
                    infantLnDiv.appendChild(infantLn);
                    infantLnDiv.appendChild(infantLnInput);
                    // middle name append
                    infantMnDiv.appendChild(infantMn);
                    infantMnDiv.appendChild(infantMnInput);
                    // first name append
                    infantFnDiv.appendChild(infantFn);
                    infantFnDiv.appendChild(infantFnInput);

                    infantIndicatorContainer.appendChild(infantIndicator);

                    infantValidationDiv.appendChild(infantValidationParagraph);
                    // row container
                    infantRowContainer.appendChild(infantIndicatorContainer);
                    infantRowContainer.appendChild(infantFnDiv);
                    infantRowContainer.appendChild(infantMnDiv);
                    infantRowContainer.appendChild(infantLnDiv);
                    infantRowContainer.appendChild(infantDateDiv);
                    infantRowContainer.appendChild(infantGenderDiv);
                    infantRowContainer.appendChild(infantValidationDiv);
                    infantRowContainer.appendChild(infantAdultDiv);

                    // childFormContainer.appendChild(csrf);
                    // childFormContainer.appendChild(passengerSize);
                    infantFormContainer.appendChild(infantRowContainer);
                    // infantFieldset append
                    infantFieldset.appendChild(infantFormContainer);
                    // col
                    infantColumnContainer.appendChild(infantFieldset);

                    formParent.appendChild(infantColumnContainer);
                    document
                        .querySelector(".infant-forms")
                        .appendChild(formParent);
                }
            } //infant End here
        });
    });
} else {
    const departRound = JSON.parse(jar.get("round-depart-data"));
    const returnRound = JSON.parse(jar.get("round-return-data"));

    Object.keys(pass).forEach((p) => {
        Object.keys(departRound).forEach((dr) => {
            Object.keys(returnRound).forEach((rr) => {
                // passenger cookie data variables
                const adultNumber = parseInt(pass[p].adult);
                const childNumber = parseInt(pass[p].child);
                const infantNumber = parseInt(pass[p].infant);

                // round trip Depart flightInfo cookie data variables
                const from = departRound[dr].departOrigin;
                const to = departRound[dr].departDestination;
                const arriveTime = departRound[dr].departArrive;
                const departTime = departRound[dr].departDepart;
                const stops = departRound[dr].departTravelStop;
                const flightNumber = departRound[dr].departNumber;
                const departDateContainer = departRound[dr].departDepartDate;
                const travelPrice = departRound[dr].departPrice;
                const flightSeats = departRound[dr].departSeats;

                // round trip return flightInfo cookie data variables
                const returnFrom = returnRound[rr].returnOrigin;
                const returnTo = returnRound[rr].returnDestination;
                const returnArriveTime = returnRound[rr].returnArrive;
                const returnDepartTime = returnRound[rr].returnDepart;
                const returnStops = returnRound[rr].returnTravelStop;
                const returnFlightNumber = returnRound[rr].returnNumber;
                const returnDepartDateContainer =
                    returnRound[rr].returnDepartDate;
                const returnTravelPrice = returnRound[rr].returnPrice;
                const returnFlightSeats = returnRound[rr].returnSeats;

                const adultIndicator = (document.getElementById(
                    "adult-indicator"
                ).innerText = adultNumber);
                const childIndicator = (document.getElementById(
                    "child-indicator"
                ).innerText = childNumber);

                const infantIndicator = (document.getElementById(
                    "infant-indicator"
                ).innerText = infantNumber);
                const allIndicator = (document.getElementById(
                    "all-indicator"
                ).innerText = adultNumber + childNumber + infantIndicator);

                if (adultNumber >= 1) {
                    for (let i = 1; i <= adultNumber; i++) {
                        // This is the Form script

                        // div col-12
                        const columnContainer = document.createElement("div");
                        columnContainer.className = "col-12";

                        // fieldset
                        const fieldset = document.createElement("fieldset");
                        fieldset.setAttribute("id", "fieldset" + i);
                        // fieldset.setAttribute("disabled", true);

                        // form
                        const formContainer = document.createElement("form");
                        formContainer.setAttribute("name", "passengerForm");
                        formContainer.className =
                            "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                        const passengerSize = document.createElement("input");
                        passengerSize.setAttribute("name", "passenger-size");
                        passengerSize.setAttribute("type", "hidden");
                        passengerSize.setAttribute("value", adultNumber);

                        const rowContainer = document.createElement("div");
                        rowContainer.className = "row";

                        // formContainer

                        //passenger info
                        const passengerIndicatorContainer =
                            document.createElement("div");
                        passengerIndicatorContainer.className =
                            "col-sm-12 col-md-12 col-lg-12 mb-3";
                        const passengerIndicator = document.createElement("h6");
                        passengerIndicator.className = " mr-4 adult-indicator";
                        passengerIndicator.innerText = "Adult  " + i;

                        // title
                        const titleDiv = document.createElement("div");
                        titleDiv.className = "col-sm-6 col-md-4 col-lg-3";

                        // Title Select
                        const title = document.createElement("p");
                        title.innerText = "Title";
                        const titleSelect = document.createElement("select");
                        titleSelect.setAttribute("id", "title" + i);
                        titleSelect.setAttribute("name", "title" + i);
                        titleSelect.className = "form-control";

                        const option1 = document.createElement("option");
                        option1.setAttribute("value", "Mr");
                        option1.innerText = "Mr";
                        const option2 = document.createElement("option");
                        option2.setAttribute("value", "Mrs");
                        option2.innerText = "Mrs";
                        const option3 = document.createElement("option");
                        option3.setAttribute("value", "Ms");
                        option3.innerText = "Ms";
                        const option4 = document.createElement("option");
                        option4.setAttribute("value", "Dr");
                        option4.innerText = "Dr";
                        const option5 = document.createElement("option");
                        option5.setAttribute("value", "Prof");
                        option5.innerText = "Prof";

                        // first name
                        const fnDiv = document.createElement("div");
                        fnDiv.className = "col-sm-6 col-md-4 col-lg-3 f-name";
                        const fn = document.createElement("p");
                        fn.innerText = "First Name";
                        const fnInput = document.createElement("input");
                        fnInput.setAttribute("type", "text");
                        fnInput.setAttribute("name", "fname" + i);
                        fnInput.setAttribute("id", "fname" + i);
                        fnInput.className = "form-control";

                        // Middle Name
                        const mnDiv = document.createElement("div");
                        mnDiv.className = "col-sm-6 col-md-4 col-lg-3";
                        const mn = document.createElement("p");
                        mn.innerText = "Middle Name";
                        const mnInput = document.createElement("input");
                        mnInput.setAttribute("type", "text");
                        mnInput.setAttribute("name", "mdname" + i);
                        mnInput.setAttribute("id", "mdname" + i);
                        mnInput.className = "form-control";

                        // last name
                        const lnDiv = document.createElement("div");
                        lnDiv.className = "col-sm-6 col-md-4 col-lg-3";
                        const ln = document.createElement("p");
                        ln.innerText = "Last Name";
                        const lnInput = document.createElement("input");
                        lnInput.setAttribute("type", "text");
                        lnInput.setAttribute("id", "lname" + i);
                        lnInput.setAttribute("name", "lname" + i);
                        lnInput.className = "form-control";

                        // date
                        const dateDiv = document.createElement("div");
                        dateDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                        const dob = document.createElement("p");
                        dob.innerText = "DOB";
                        const dobInput = document.createElement("input");
                        dobInput.setAttribute("type", "date");
                        dobInput.setAttribute("name", "dob" + i);
                        dobInput.setAttribute("id", "dob" + i);
                        dobInput.className = "form-control";

                        // gender
                        const genderDiv = document.createElement("div");
                        genderDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                        const gender = document.createElement("p");
                        gender.innerText = "Gender";

                        const genderSelect = document.createElement("select");
                        genderSelect.setAttribute("id", "gender" + i);
                        genderSelect.setAttribute("name", "gender" + i);
                        genderSelect.className = "gender form-control";

                        const genderOption1 = document.createElement("option");
                        genderOption1.setAttribute("value", "Male");
                        genderOption1.innerText = "Male";
                        const genderOption2 = document.createElement("option");
                        genderOption2.setAttribute("value", "Female");
                        genderOption2.innerText = "Female";

                        // email
                        const emailDiv = document.createElement("div");
                        emailDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                        const email = document.createElement("p");
                        email.innerText = "Email";
                        const emailInput = document.createElement("input");
                        emailInput.setAttribute("type", "email");
                        emailInput.setAttribute("name", "email" + i);
                        emailInput.setAttribute("id", "email" + i);
                        emailInput.className = "form-control";

                        // phone
                        const phoneDiv = document.createElement("div");
                        phoneDiv.className = "col-sm-6 col-md-4 col-lg-3 mt-4";
                        const phone = document.createElement("p");
                        phone.innerText = "Phone";
                        const phoneInput = document.createElement("input");
                        phoneInput.setAttribute("type", "tel");
                        phoneInput.setAttribute("name", "phone" + i);
                        phoneInput.setAttribute("id", "phone" + i);
                        phoneInput.className = "form-control";

                        // token
                        // const tokenInput = document.createElement("input");
                        // tokenInput.setAttribute("name", "token");
                        // tokenInput.setAttribute("type", "hidden");
                        // tokenInput.setAttribute("value", tokenVal);

                        // validation text
                        const validationDiv = document.createElement("div");
                        validationDiv.className =
                            "col-sm-6 col-md-8 col-lg-8 mt-4";
                        const validationParagraph = document.createElement("p");
                        validationParagraph.setAttribute(
                            "id",
                            "error-message" + i
                        );
                        validationParagraph.className =
                            "hidden alert alert-danger p-2";
                        validationParagraph.innerText =
                            "You Must fill the forms correctly unless you will not allowed!";

                        // done-btn
                        const adultDiv = document.createElement("div");
                        adultDiv.className = "col-sm-6 col-md-4 col-lg-4 mt-4";
                        adultDiv;
                        const adultBtn = document.createElement("a");
                        // adultBtn.setAttribute("type", "submit");
                        // adultBtn.setAttribute("name", "submit" + i);
                        adultBtn.setAttribute("data-name", i);
                        adultBtn.innerText = "Done";
                        adultBtn.className = "done-btn btn btn-danger w-75 p-2";

                        // done-btn append
                        adultDiv.appendChild(adultBtn);
                        // phone append
                        phoneDiv.appendChild(phone);
                        phoneDiv.appendChild(phoneInput);
                        // email append
                        emailDiv.appendChild(email);
                        emailDiv.appendChild(emailInput);
                        // gender append
                        genderDiv.appendChild(gender);
                        genderDiv.appendChild(genderSelect);
                        genderSelect.appendChild(genderOption1);
                        genderSelect.appendChild(genderOption2);
                        // date append
                        dateDiv.appendChild(dob);
                        dateDiv.appendChild(dobInput);
                        // last name append
                        lnDiv.appendChild(ln);
                        lnDiv.appendChild(lnInput);
                        // middle name append
                        mnDiv.appendChild(mn);
                        mnDiv.appendChild(mnInput);
                        // first name append
                        fnDiv.appendChild(fn);
                        fnDiv.appendChild(fnInput);
                        // tittle append
                        titleDiv.appendChild(title);
                        titleDiv.appendChild(titleSelect);
                        titleSelect.appendChild(option1);
                        titleSelect.appendChild(option2);
                        titleSelect.appendChild(option3);
                        titleSelect.appendChild(option4);
                        titleSelect.appendChild(option5);

                        passengerIndicatorContainer.appendChild(
                            passengerIndicator
                        );

                        validationDiv.appendChild(validationParagraph);
                        // row container
                        rowContainer.appendChild(passengerIndicatorContainer);
                        rowContainer.appendChild(titleDiv);
                        rowContainer.appendChild(fnDiv);
                        rowContainer.appendChild(mnDiv);
                        rowContainer.appendChild(lnDiv);
                        rowContainer.appendChild(dateDiv);
                        rowContainer.appendChild(genderDiv);
                        rowContainer.appendChild(emailDiv);
                        rowContainer.appendChild(phoneDiv);
                        // rowContainer.appendChild(tokenInput);
                        rowContainer.appendChild(validationDiv);
                        rowContainer.appendChild(adultDiv);

                        // formContainer.appendChild(csrf);
                        formContainer.appendChild(passengerSize);
                        formContainer.appendChild(rowContainer);
                        // fieldset append
                        fieldset.appendChild(formContainer);
                        // col
                        columnContainer.appendChild(fieldset);

                        formParent.appendChild(columnContainer);
                        document
                            .querySelector(".adult-forms")
                            .appendChild(formParent);

                        // Form Script End here
                    }
                    // Ticket Preview Script
                    // ticket container
                    const ticketDiv = document.createElement("div");
                    ticketDiv.className = "rounded shadow-lg p-4 mb-5";

                    // ticket title
                    const ticketTitle = document.createElement("h5");
                    ticketTitle.className = "text-success text-center";
                    ticketTitle.innerText = "Ticket Preview";

                    // date
                    const departDay = document.createElement("h5");
                    departDay.innerText = "Depart On " + departDateContainer;
                    // city Container
                    const cities = document.createElement("h5");
                    cities.innerText = from + " " + " " + "-" + " " + " " + to;

                    // time container
                    const timeContainer = document.createElement("h6");

                    timeContainer.innerText =
                        departTime + " " + "" + "-" + " " + "" + arriveTime;
                    const planeStops = document.createElement("h6");
                    planeStops.innerText = stops;
                    // flight no
                    const planeInfo = document.createElement("h6");
                    planeInfo.innerText = flightNumber;
                    // operated
                    const operatedBy = document.createElement("h6");
                    operatedBy.innerText = "Operated by:  Ethiopian Airlines";
                    // price
                    const flightCost = document.createElement("p");
                    flightCost.className =
                        "bg-danger m-2 w-50 p-2 text-light rounded";
                    flightCost.innerText = "Price:  " + travelPrice;

                    // cities.appendChild(originCity);
                    // cities.appendChild(destinationCity);
                    ticketDiv.appendChild(ticketTitle);
                    ticketDiv.appendChild(departDay);
                    ticketDiv.appendChild(cities);
                    ticketDiv.appendChild(timeContainer);
                    ticketDiv.appendChild(planeStops);
                    ticketDiv.appendChild(planeInfo);
                    ticketDiv.appendChild(operatedBy);
                    ticketDiv.appendChild(flightCost);

                    // Return preview
                    // Ticket Preview Script
                    // ticket container
                    const returnTicketDiv = document.createElement("div");
                    returnTicketDiv.className = "rounded shadow-lg p-4 mb-5";

                    // ticket title
                    const returnTicketTitle = document.createElement("h5");
                    returnTicketTitle.className = "text-success text-center";
                    returnTicketTitle.innerText = "Ticket Preview";

                    // date
                    const returnDepartDay = document.createElement("h4");
                    returnDepartDay.innerText =
                        "Return On " + returnDepartDateContainer;
                    // city Container
                    const returnCities = document.createElement("h5");
                    returnCities.innerText =
                        returnFrom + " " + " " + "-" + " " + " " + returnTo;

                    // time container
                    const returnTimeContainer = document.createElement("h6");

                    returnTimeContainer.innerText =
                        returnDepartTime +
                        " " +
                        "" +
                        "-" +
                        " " +
                        "" +
                        returnArriveTime;
                    const returnPlaneStops = document.createElement("h6");
                    returnPlaneStops.innerText = returnStops;
                    // flight no
                    const returnPlaneInfo = document.createElement("h6");
                    returnPlaneInfo.innerText = returnFlightNumber;
                    // operated
                    const returnOperatedBy = document.createElement("h6");
                    returnOperatedBy.innerText =
                        "Operated by:  Ethiopian Airlines";
                    // price
                    const returnFlightCost = document.createElement("p");
                    returnFlightCost.className =
                        "bg-danger m-2 w-50 p-2 text-light rounded";
                    returnFlightCost.innerText = "Price:  " + returnTravelPrice;

                    // cities.appendChild(originCity);
                    // cities.appendChild(destinationCity);
                    returnTicketDiv.appendChild(returnTicketTitle);
                    returnTicketDiv.appendChild(returnDepartDay);
                    returnTicketDiv.appendChild(returnCities);
                    returnTicketDiv.appendChild(returnTimeContainer);
                    returnTicketDiv.appendChild(returnPlaneStops);
                    returnTicketDiv.appendChild(returnPlaneInfo);
                    returnTicketDiv.appendChild(returnPlaneStops);
                    returnTicketDiv.appendChild(returnFlightCost);

                    ticketPreviewParent.appendChild(ticketDiv);
                    ticketPreviewParent.appendChild(returnTicketDiv);

                    document
                        .querySelector(".ticket-preview")
                        .appendChild(ticketPreviewParent);
                } //end of adult form

                // Child
                if (childNumber >= 1) {
                    for (let i = 1; i <= childNumber; i++) {
                        // This is the Form script

                        // div col-12
                        const childColumnContainer =
                            document.createElement("div");
                        childColumnContainer.className = "col-12";

                        // fieldset
                        const childFieldset =
                            document.createElement("fieldset");
                        childFieldset.setAttribute("id", "child-fieldset" + i);

                        // form
                        const childFormContainer =
                            document.createElement("form");
                        // childFormContainer.setAttribute("name", "passengerForm");
                        childFormContainer.className =
                            "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                        const childRowContainer = document.createElement("div");
                        childRowContainer.className = "row";

                        // childFormContainer

                        //passenger info
                        const childIndicatorContainer =
                            document.createElement("div");
                        childIndicatorContainer.className =
                            "col-sm-12 col-md-12 col-lg-12 mb-3";
                        const childIndicator = document.createElement("h6");
                        childIndicator.className = " mr-4 adult-indicator";
                        childIndicator.innerText = "Child  " + i;

                        // first name
                        const childFnDiv = document.createElement("div");
                        childFnDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 f-name";
                        const childFn = document.createElement("p");
                        childFn.innerText = "First Name";
                        const childFnInput = document.createElement("input");
                        childFnInput.setAttribute("type", "text");
                        childFnInput.setAttribute("name", "child-fname" + i);
                        childFnInput.setAttribute("id", "child-fname" + i);
                        childFnInput.className = "form-control";

                        // Middle Name
                        const childMnDiv = document.createElement("div");
                        childMnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                        const childMn = document.createElement("p");
                        childMn.innerText = "Middle Name";
                        const childMnInput = document.createElement("input");
                        childMnInput.setAttribute("type", "text");
                        childMnInput.setAttribute("name", "child-mdname" + i);
                        childMnInput.setAttribute("id", "child-mdname" + i);
                        childMnInput.className = "form-control";

                        // last name
                        const childLnDiv = document.createElement("div");
                        childLnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                        const childLn = document.createElement("p");
                        childLn.innerText = "Last Name";
                        const childLnInput = document.createElement("input");
                        childLnInput.setAttribute("type", "text");
                        childLnInput.setAttribute("id", "child-lname" + i);
                        childLnInput.setAttribute("name", "child-lname" + i);
                        childLnInput.className = "form-control";

                        // date
                        const childDateDiv = document.createElement("div");
                        childDateDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";
                        const childDob = document.createElement("p");
                        childDob.innerText = "DOB";
                        const childDobInput = document.createElement("input");
                        childDobInput.setAttribute("type", "date");
                        childDobInput.setAttribute("name", "child-dob" + i);
                        childDobInput.setAttribute("id", "child-dob" + i);
                        childDobInput.className = "form-control";

                        // gender
                        const childGenderDiv = document.createElement("div");
                        childGenderDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";
                        const childGender = document.createElement("p");
                        childGender.innerText = "Gender";

                        const childGenderSelect =
                            document.createElement("select");
                        childGenderSelect.setAttribute(
                            "id",
                            "child-gender" + i
                        );
                        childGenderSelect.setAttribute(
                            "name",
                            "child-gender" + i
                        );
                        childGenderSelect.className = "gender form-control";

                        const childGenderOption1 =
                            document.createElement("option");
                        childGenderOption1.setAttribute("value", "Male");
                        childGenderOption1.innerText = "Male";
                        const childGenderOption2 =
                            document.createElement("option");
                        childGenderOption2.setAttribute("value", "Female");
                        childGenderOption2.innerText = "Female";

                        // done-btn
                        const childAdultDiv = document.createElement("div");
                        childAdultDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";

                        // adultDiv
                        const childAdultBtn = document.createElement("a");
                        childAdultBtn.setAttribute("data-name", i);
                        childAdultBtn.innerText = "Done";
                        childAdultBtn.className =
                            "child-done-btn btn btn-danger w-75 p-2";

                        // validation text
                        const childValidationDiv =
                            document.createElement("div");
                        childValidationDiv.className =
                            "col-sm-6 col-md-8 col-lg-8 mt-4";
                        const childValidationParagraph =
                            document.createElement("p");
                        childValidationParagraph.setAttribute(
                            "id",
                            "child-error-message" + i
                        );
                        childValidationParagraph.className =
                            "hidden alert alert-danger p-2";
                        childValidationParagraph.innerText =
                            "You Must fill the forms correctly unless you will not allowed!";
                        // done-btn append
                        childAdultDiv.appendChild(childAdultBtn);
                        // phone append

                        // gender append
                        childGenderDiv.appendChild(childGender);
                        childGenderDiv.appendChild(childGenderSelect);
                        childGenderSelect.appendChild(childGenderOption1);
                        childGenderSelect.appendChild(childGenderOption2);
                        // date append
                        childDateDiv.appendChild(childDob);
                        childDateDiv.appendChild(childDobInput);
                        // last name append
                        childLnDiv.appendChild(childLn);
                        childLnDiv.appendChild(childLnInput);
                        // middle name append
                        childMnDiv.appendChild(childMn);
                        childMnDiv.appendChild(childMnInput);
                        // first name append
                        childFnDiv.appendChild(childFn);
                        childFnDiv.appendChild(childFnInput);

                        childIndicatorContainer.appendChild(childIndicator);

                        childValidationDiv.appendChild(
                            childValidationParagraph
                        );
                        // row container
                        childRowContainer.appendChild(childIndicatorContainer);
                        childRowContainer.appendChild(childFnDiv);
                        childRowContainer.appendChild(childMnDiv);
                        childRowContainer.appendChild(childLnDiv);
                        childRowContainer.appendChild(childDateDiv);
                        childRowContainer.appendChild(childGenderDiv);
                        childRowContainer.appendChild(childValidationDiv);
                        childRowContainer.appendChild(childAdultDiv);

                        // childFormContainer.appendChild(csrf);
                        // childFormContainer.appendChild(passengerSize);
                        childFormContainer.appendChild(childRowContainer);
                        // childFieldset append
                        childFieldset.appendChild(childFormContainer);
                        // col
                        childColumnContainer.appendChild(childFieldset);

                        formParent.appendChild(childColumnContainer);
                        document
                            .querySelector(".child-forms")
                            .appendChild(formParent);
                    }
                } // end of child

                // // Infant
                if (infantNumber >= 1) {
                    for (let i = 1; i <= infantNumber; i++) {
                        // This is the Form script

                        // div col-12
                        const infantColumnContainer =
                            document.createElement("div");
                        infantColumnContainer.className = "col-12";

                        // fieldset
                        const infantFieldset =
                            document.createElement("fieldset");
                        infantFieldset.setAttribute(
                            "id",
                            "infant-fieldset" + i
                        );

                        // form
                        const infantFormContainer =
                            document.createElement("form");
                        infantFormContainer.setAttribute(
                            "name",
                            "passengerForm"
                        );
                        infantFormContainer.className =
                            "rounded shadow-lg bg-info mt-2 mb-5 p-4";

                        const infantRowContainer =
                            document.createElement("div");
                        infantRowContainer.className = "row";

                        // infantFormContainer

                        //passenger info
                        const infantIndicatorContainer =
                            document.createElement("div");
                        infantIndicatorContainer.className =
                            "col-sm-12 col-md-12 col-lg-12 mb-3";
                        const infantIndicator = document.createElement("h6");
                        infantIndicator.className = " mr-4 adult-indicator";
                        infantIndicator.innerText = "Infant  " + i;

                        // first name
                        const infantFnDiv = document.createElement("div");
                        infantFnDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 f-name";
                        const infantFn = document.createElement("p");
                        infantFn.innerText = "First Name";
                        const infantFnInput = document.createElement("input");
                        infantFnInput.setAttribute("type", "text");
                        infantFnInput.setAttribute("name", "infant-fname" + i);
                        infantFnInput.setAttribute("id", "infant-fname" + i);
                        infantFnInput.className = "form-control";

                        // Middle Name
                        const infantMnDiv = document.createElement("div");
                        infantMnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                        const infantMn = document.createElement("p");
                        infantMn.innerText = "Middle Name";
                        const infantMnInput = document.createElement("input");
                        infantMnInput.setAttribute("type", "text");
                        infantMnInput.setAttribute("name", "infant-mdname" + i);
                        infantMnInput.setAttribute("id", "infant-mdname" + i);
                        infantMnInput.className = "form-control";

                        // last name
                        const infantLnDiv = document.createElement("div");
                        infantLnDiv.className = "col-sm-6 col-md-4 col-lg-4";
                        const infantLn = document.createElement("p");
                        infantLn.innerText = "Last Name";
                        const infantLnInput = document.createElement("input");
                        infantLnInput.setAttribute("type", "text");
                        infantLnInput.setAttribute("id", "infant-lname" + i);
                        infantLnInput.setAttribute("name", "infant-lname" + i);
                        infantLnInput.className = "form-control";

                        // date
                        const infantDateDiv = document.createElement("div");
                        infantDateDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";
                        const infantDob = document.createElement("p");
                        infantDob.innerText = "DOB";
                        const infantDobInput = document.createElement("input");
                        infantDobInput.setAttribute("type", "date");
                        infantDobInput.setAttribute("name", "infant-dob" + i);
                        infantDobInput.setAttribute("id", "infant-dob" + i);
                        infantDobInput.className = "form-control";

                        // gender
                        const infantGenderDiv = document.createElement("div");
                        infantGenderDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";
                        const infantGender = document.createElement("p");
                        infantGender.innerText = "Gender";

                        const infantGenderSelect =
                            document.createElement("select");
                        infantGenderSelect.setAttribute(
                            "id",
                            "infant-gender" + i
                        );
                        infantGenderSelect.setAttribute(
                            "name",
                            "infant-gender" + i
                        );
                        infantGenderSelect.className = "gender form-control";

                        const infantGenderOption1 =
                            document.createElement("option");
                        infantGenderOption1.setAttribute("value", "Male");
                        infantGenderOption1.innerText = "Male";
                        const infantGenderOption2 =
                            document.createElement("option");
                        infantGenderOption2.setAttribute("value", "Female");
                        infantGenderOption2.innerText = "Female";

                        // done-btn
                        const infantAdultDiv = document.createElement("div");
                        infantAdultDiv.className =
                            "col-sm-6 col-md-4 col-lg-4 mt-4";

                        // adultDiv
                        const infantAdultBtn = document.createElement("a");
                        infantAdultBtn.setAttribute("data-name", i);
                        infantAdultBtn.innerText = "Done";
                        infantAdultBtn.className =
                            "infant-done-btn btn btn-danger w-75 p-2";

                        // validation text
                        const infantValidationDiv =
                            document.createElement("div");
                        infantValidationDiv.className =
                            "col-sm-6 col-md-8 col-lg-8 mt-4";
                        const infantValidationParagraph =
                            document.createElement("p");
                        infantValidationParagraph.setAttribute(
                            "id",
                            "infant-error-message" + i
                        );
                        infantValidationParagraph.className =
                            "hidden alert alert-danger p-2";
                        infantValidationParagraph.innerText =
                            "You Must fill the forms correctly unless you will not allowed!";
                        // done-btn append
                        infantAdultDiv.appendChild(infantAdultBtn);
                        // phone append

                        // gender append
                        infantGenderDiv.appendChild(infantGender);
                        infantGenderDiv.appendChild(infantGenderSelect);
                        infantGenderSelect.appendChild(infantGenderOption1);
                        infantGenderSelect.appendChild(infantGenderOption2);
                        // date append
                        infantDateDiv.appendChild(infantDob);
                        infantDateDiv.appendChild(infantDobInput);
                        // last name append
                        infantLnDiv.appendChild(infantLn);
                        infantLnDiv.appendChild(infantLnInput);
                        // middle name append
                        infantMnDiv.appendChild(infantMn);
                        infantMnDiv.appendChild(infantMnInput);
                        // first name append
                        infantFnDiv.appendChild(infantFn);
                        infantFnDiv.appendChild(infantFnInput);

                        infantIndicatorContainer.appendChild(infantIndicator);

                        infantValidationDiv.appendChild(
                            infantValidationParagraph
                        );
                        // row container
                        infantRowContainer.appendChild(
                            infantIndicatorContainer
                        );
                        infantRowContainer.appendChild(infantFnDiv);
                        infantRowContainer.appendChild(infantMnDiv);
                        infantRowContainer.appendChild(infantLnDiv);
                        infantRowContainer.appendChild(infantDateDiv);
                        infantRowContainer.appendChild(infantGenderDiv);
                        infantRowContainer.appendChild(infantValidationDiv);
                        infantRowContainer.appendChild(infantAdultDiv);

                        // childFormContainer.appendChild(csrf);
                        // childFormContainer.appendChild(passengerSize);
                        infantFormContainer.appendChild(infantRowContainer);
                        // infantFieldset append
                        infantFieldset.appendChild(infantFormContainer);
                        // col
                        infantColumnContainer.appendChild(infantFieldset);

                        formParent.appendChild(infantColumnContainer);
                        document
                            .querySelector(".infant-forms")
                            .appendChild(formParent);
                    }
                } //infant End here
            });
        });
    });
}

const shakeInfo = document.getElementById("infos");
const infoLink = document.getElementById("info-link");

infoLink.addEventListener("click", function () {
    if (shakeInfo.classList.contains("hidden")) {
        shakeInfo.classList.remove("hidden");
    } else {
        shakeInfo.classList.add("hidden");
    }
});
