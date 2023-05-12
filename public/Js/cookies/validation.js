// Token
const tokenValue = Math.random().toString(36).substr(2);
document.getElementById("token-values").innerText = tokenValue;

if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
    const tokenValue = Math.random().toString(36).substr(2);
    document.getElementById("token-values").innerText = tokenValue;
}

let nums = 0;
const tokenInputId = document.getElementById("token-values").innerText;
const passengersNumber = parseInt(
    document.getElementById("all-indicator").innerText
);

// Adult Validation
let passengerBtn = document.querySelectorAll(".done-btn");
passengerBtn.forEach(function (but) {
    but.addEventListener("click", function (e) {
        const submitFormContainer = document.createElement("div");
        let val = but.getAttribute("data-name");
        validate(val, submitFormContainer);
    });
});
function validate(val, submitFormContainer) {
    const adultsNumber = parseInt(
        document.getElementById("adult-indicator").innerText
    );

    const fieldsetContainer = document.getElementById("fieldset" + val);
    const emailVal = document.getElementById("email" + val);
    const dobVal = document.getElementById("dob" + val);
    const fnameVal = document.getElementById("fname" + val);
    const lnameVal = document.getElementById("lname" + val);
    const mdnameVal = document.getElementById("mdname" + val);
    const phoneVal = document.getElementById("phone" + val);
    const genderVal = document.getElementById("gender" + val);
    const titleVal = document.getElementById("title" + val);

    if (
        emailVal.value == "" ||
        emailVal.value.length < 10 ||
        dobVal.value == "" ||
        fnameVal.value == "" ||
        fnameVal.value.length < 3 ||
        lnameVal.value == "" ||
        lnameVal.value.length < 4 ||
        mdnameVal.value == "" ||
        mdnameVal.value.length < 4 ||
        phoneVal.value == ""
    ) {
        const validationMessage = document.getElementById(
            "error-message" + val
        );
        validationMessage.classList.remove("hidden");
    } else {
        const validationMessage = document.getElementById(
            "error-message" + val
        );
        validationMessage.classList.add("hidden");
        // f-name
        const plain = document.createElement("p");
        plain.innerText = "Worked";
        const input1 = document.createElement("input");
        input1.setAttribute("type", "text");
        input1.setAttribute("name", "fname[]");
        input1.setAttribute("value", fnameVal.value);
        // lname
        const input2 = document.createElement("input");
        input2.setAttribute("type", "text");
        input2.setAttribute("name", "lname[]");
        input2.setAttribute("value", lnameVal.value);
        //m-name
        const input3 = document.createElement("input");
        input3.setAttribute("type", "text");
        input3.setAttribute("name", "mname[]");
        input3.setAttribute("value", mdnameVal.value);
        // email
        const input4 = document.createElement("input");
        input4.setAttribute("type", "email");
        input4.setAttribute("name", "email[]");
        input4.setAttribute("value", emailVal.value);
        // phone
        const input5 = document.createElement("input");
        input5.setAttribute("type", "tel");
        input5.setAttribute("name", "phone[]");
        input5.setAttribute("value", phoneVal.value);
        //dob
        const input6 = document.createElement("input");
        input6.setAttribute("type", "text");
        input6.setAttribute("name", "dob[]");
        input6.setAttribute("value", dobVal.value);
        //gender
        const input7 = document.createElement("input");
        input7.setAttribute("type", "text");
        input7.setAttribute("name", "gender[]");
        input7.setAttribute("value", genderVal.value);
        // title
        const input8 = document.createElement("input");
        input8.setAttribute("type", "text");
        input8.setAttribute("name", "title[]");
        input8.setAttribute("value", titleVal.value);

        const input9 = document.createElement("input");
        input9.setAttribute("type", "text");
        input9.setAttribute("name", "token-val[]");
        input9.setAttribute("value", tokenInputId);

        const input10 = document.createElement("input");
        input10.setAttribute("type", "text");
        input10.setAttribute("name", "adult-val[]");
        input10.setAttribute("value", adultsNumber);

        const input11 = document.createElement("input");
        input11.setAttribute("type", "text");
        input11.setAttribute("name", "passenger-type[]");
        input11.setAttribute("value", "adult");

        submitFormContainer.appendChild(input8);
        submitFormContainer.appendChild(input1);
        submitFormContainer.appendChild(input3);
        submitFormContainer.appendChild(input2);
        submitFormContainer.appendChild(input4);
        submitFormContainer.appendChild(input5);
        submitFormContainer.appendChild(input6);
        submitFormContainer.appendChild(input7);
        submitFormContainer.appendChild(input9);
        submitFormContainer.appendChild(input10);
        submitFormContainer.appendChild(input11);
        document
            .querySelector(".sumbitted-form")
            .appendChild(submitFormContainer);
        fieldsetContainer.setAttribute("disabled", true);
        fieldsetContainer.classList.add("fieldset-cursor");
        // nums = nums + 1;
        let lol = parseInt(document.getElementById("lol").innerText);
        lol = lol + 1;
        document.getElementById("lol").innerText = lol;
        console.log(document.getElementById("lol").innerText);
        if (document.getElementById("lol").innerText == passengersNumber) {
            document.getElementById("btn-come").classList.remove("hidden");
        }
    }
}

// child validation
let passengerChildBtn = document.querySelectorAll(".child-done-btn");
passengerChildBtn.forEach(function (childBtn) {
    childBtn.addEventListener("click", function (e) {
        const submitFormContainer = document.createElement("div");
        let val = childBtn.getAttribute("data-name");
        childValidate(val, submitFormContainer);
    });
});
function childValidate(val, submitFormContainer) {
    const childsNumber = parseInt(
        document.getElementById("child-indicator").innerText
    );

    const fieldsetContainer = document.getElementById("child-fieldset" + val);
    const childDobVal = document.getElementById("child-dob" + val);
    const childFnameVal = document.getElementById("child-fname" + val);
    const childLnameVal = document.getElementById("child-lname" + val);
    const childMdnameVal = document.getElementById("child-mdname" + val);
    const childGenderVal = document.getElementById("child-gender" + val);

    if (
        childDobVal.value == "" ||
        childFnameVal.value == "" ||
        childFnameVal.value.length < 3 ||
        childLnameVal.value == "" ||
        childLnameVal.value.length < 4 ||
        childMdnameVal.value == "" ||
        childMdnameVal.value.length < 4
    ) {
        const validationMessage = document.getElementById(
            "child-error-message" + val
        );
        validationMessage.classList.remove("hidden");
    } else {
        const validationMessage = document.getElementById(
            "child-error-message" + val
        );
        validationMessage.classList.add("hidden");
        // f-name

        const input1 = document.createElement("input");
        input1.setAttribute("type", "text");
        input1.setAttribute("name", "fname[]");
        input1.setAttribute("value", childFnameVal.value);
        // lname
        const input2 = document.createElement("input");
        input2.setAttribute("type", "text");
        input2.setAttribute("name", "lname[]");
        input2.setAttribute("value", childLnameVal.value);
        //m-name
        const input3 = document.createElement("input");
        input3.setAttribute("type", "text");
        input3.setAttribute("name", "mname[]");
        input3.setAttribute("value", childMdnameVal.value);
        // dob
        const input6 = document.createElement("input");
        input6.setAttribute("type", "text");
        input6.setAttribute("name", "dob[]");
        input6.setAttribute("value", childDobVal.value);
        //gender
        const input7 = document.createElement("input");
        input7.setAttribute("type", "text");
        input7.setAttribute("name", "gender[]");
        input7.setAttribute("value", childGenderVal.value);

        const input9 = document.createElement("input");
        input9.setAttribute("type", "text");
        input9.setAttribute("name", "token-val[]");
        input9.setAttribute("value", tokenInputId);

        const input10 = document.createElement("input");
        input10.setAttribute("type", "text");
        input10.setAttribute("name", "val[]");
        input10.setAttribute("value", childsNumber);

        const input11 = document.createElement("input");
        input11.setAttribute("type", "text");
        input11.setAttribute("name", "passenger-type[]");
        input11.setAttribute("value", "child");

        // email
        const input4 = document.createElement("input");
        input4.setAttribute("type", "email");
        input4.setAttribute("name", "email[]");
        // input4.setAttribute("value", emailVal.value);
        // phone
        const input5 = document.createElement("input");
        input5.setAttribute("type", "tel");
        input5.setAttribute("name", "phone[]");
        // input5.setAttribute("value", );
        // title
        const input8 = document.createElement("input");
        input8.setAttribute("type", "text");
        input8.setAttribute("name", "title[]");
        // input8.setAttribute("value", titleVal.value);

        submitFormContainer.appendChild(input1);
        submitFormContainer.appendChild(input3);
        submitFormContainer.appendChild(input2);
        submitFormContainer.appendChild(input6);
        submitFormContainer.appendChild(input7);
        submitFormContainer.appendChild(input9);
        submitFormContainer.appendChild(input8);
        submitFormContainer.appendChild(input5);
        submitFormContainer.appendChild(input4);
        submitFormContainer.appendChild(input10);
        submitFormContainer.appendChild(input11);
        document
            .querySelector(".sumbitted-form")
            .appendChild(submitFormContainer);
        fieldsetContainer.setAttribute("disabled", true);
        fieldsetContainer.classList.add("fieldset-cursor");

        let lol = parseInt(document.getElementById("lol").innerText);
        lol = lol + 1;
        document.getElementById("lol").innerText = lol;
        if (document.getElementById("lol").innerText == passengersNumber) {
            document.getElementById("btn-come").classList.remove("hidden");
        }
    }
}

// infant validation
let passengerInfantBtn = document.querySelectorAll(".infant-done-btn");
passengerInfantBtn.forEach(function (infantBtn) {
    infantBtn.addEventListener("click", function (e) {
        const submitFormContainer = document.createElement("div");
        let val = infantBtn.getAttribute("data-name");
        infantValidate(val, submitFormContainer);
    });
});
function infantValidate(val, submitFormContainer) {
    const infantsNumber = parseInt(
        document.getElementById("infant-indicator").innerText
    );

    const fieldsetContainer = document.getElementById("infant-fieldset" + val);
    const infantDobVal = document.getElementById("infant-dob" + val);
    const infantFnameVal = document.getElementById("infant-fname" + val);
    const infantLnameVal = document.getElementById("infant-lname" + val);
    const infantMdnameVal = document.getElementById("infant-mdname" + val);
    const infantGenderVal = document.getElementById("infant-gender" + val);

    if (
        infantDobVal.value == "" ||
        infantFnameVal.value == "" ||
        infantFnameVal.value.length < 3 ||
        infantLnameVal.value == "" ||
        infantLnameVal.value.length < 4 ||
        infantMdnameVal.value == "" ||
        infantMdnameVal.value.length < 4
    ) {
        const validationMessage = document.getElementById(
            "infant-error-message" + val
        );
        validationMessage.classList.remove("hidden");
    } else {
        const validationMessage = document.getElementById(
            "infant-error-message" + val
        );
        validationMessage.classList.add("hidden");
        // f-name

        const input1 = document.createElement("input");
        input1.setAttribute("type", "text");
        input1.setAttribute("name", "fname[]");
        input1.setAttribute("value", infantFnameVal.value);
        // lname
        const input2 = document.createElement("input");
        input2.setAttribute("type", "text");
        input2.setAttribute("name", "lname[]");
        input2.setAttribute("value", infantLnameVal.value);
        //m-name
        const input3 = document.createElement("input");
        input3.setAttribute("type", "text");
        input3.setAttribute("name", "mname[]");
        input3.setAttribute("value", infantMdnameVal.value);
        // dob
        const input6 = document.createElement("input");
        input6.setAttribute("type", "text");
        input6.setAttribute("name", "dob[]");
        input6.setAttribute("value", infantDobVal.value);
        //gender
        const input7 = document.createElement("input");
        input7.setAttribute("type", "text");
        input7.setAttribute("name", "gender[]");
        input7.setAttribute("value", infantGenderVal.value);

        const input9 = document.createElement("input");
        input9.setAttribute("type", "text");
        input9.setAttribute("name", "token-val[]");
        input9.setAttribute("value", tokenInputId);

        const input10 = document.createElement("input");
        input10.setAttribute("type", "text");
        input10.setAttribute("name", "infant-val[]");
        input10.setAttribute("value", infantsNumber);

        const input11 = document.createElement("input");
        input11.setAttribute("type", "text");
        input11.setAttribute("name", "passenger-type[]");
        input11.setAttribute("value", "infant");
        // email
        const input4 = document.createElement("input");
        input4.setAttribute("type", "email");
        input4.setAttribute("name", "email[]");
        // input4.setAttribute("value", emailVal.value);
        // phone
        const input5 = document.createElement("input");
        input5.setAttribute("type", "tel");
        input5.setAttribute("name", "phone[]");
        // input5.setAttribute("value", );
        // title
        const input8 = document.createElement("input");
        input8.setAttribute("type", "text");
        input8.setAttribute("name", "title[]");
        // input8.setAttribute("value", titleVal.value);
        // submitFormContainer.appendChild(input8);
        submitFormContainer.appendChild(input1);
        submitFormContainer.appendChild(input3);
        submitFormContainer.appendChild(input2);
        submitFormContainer.appendChild(input6);
        submitFormContainer.appendChild(input7);
        submitFormContainer.appendChild(input9);
        submitFormContainer.appendChild(input10);
        submitFormContainer.appendChild(input11);
        submitFormContainer.appendChild(input8);
        submitFormContainer.appendChild(input5);
        submitFormContainer.appendChild(input4);
        document
            .querySelector(".sumbitted-form")
            .appendChild(submitFormContainer);
        fieldsetContainer.setAttribute("disabled", true);
        fieldsetContainer.classList.add("fieldset-cursor");

        let lol = parseInt(document.getElementById("lol").innerText);
        lol = lol + 1;
        document.getElementById("lol").innerText = lol;
        console.log(document.getElementById("lol").innerText);
        if (document.getElementById("lol").innerText == passengersNumber) {
            document.getElementById("btn-come").classList.remove("hidden");
        }
    }
}
