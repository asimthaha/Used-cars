var formSchema = {
  name: ["isEmpty"],
  address: ["isEmpty"],
  phone: ["isEmpty", "isNumber"],
  email: ["isEmpty", "isEmail"],
  zipcode: ["isEmpty", "isNumber"],
  country: ["isEmpty"],
  firstpassword: ["isEmpty"],
  secondpassword: ["isEmpty"],
};

function validateForm(event) {
  event.preventDefault();
  var elements = document.myform.getElementsByTagName("input");
  var isErrorsInTheForm = false;

  for (var i = 0; i < elements.length; i++) {
    var currentValue = elements[i].value;
    var itemId = elements[i].id;

    var formItem = elements[i].parentElement;

    if (elements[i].type === "radio" || elements[i].type === "checkbox") {
      formItem = elements[i].parentElement.parentElement;
      formItem.getElementsByClassName("error")[0].innerHTML = "";
      var elGroupName = elements[i].name;
      var groupChecked = false;
      for (let j = 0; j < elements.length; j++) {
        const element = elements[j];
        if (element.name === elGroupName) {
          if (element.checked) {
            groupChecked = true;
          }
        }
      }
      if (!groupChecked) {
        formItem.getElementsByClassName("error")[0].innerHTML =
          "One of the item should be checked";
        isErrorsInTheForm = true;
      }
    }

    if (formSchema[itemId] && formSchema[itemId].indexOf("isEmpty") > -1) {
      formItem.getElementsByClassName("error")[0].innerHTML = "";

      var checkIfEmpty = checkEmpty(currentValue);
      if (checkIfEmpty) {
        formItem.getElementsByClassName("error")[0].innerHTML =
          elements[i].name + " shouldn't be empty";
        isErrorsInTheForm = true;
      }
    }
    if (formSchema[itemId] && formSchema[itemId].indexOf("isNumber") > -1) {
      var checkIfNumber = isValueNumber(currentValue);
      if (checkIfNumber) {
        formItem.getElementsByClassName("error")[0].innerHTML =
          elements[i].name + " should be a number";
        isErrorsInTheForm = true;
      }
    }
    if (formSchema[itemId] && formSchema[itemId].indexOf("isEmail") > -1) {
      var checkIfEmail = isEmail(currentValue);
      if (checkIfEmail) {
        formItem.getElementsByClassName("error")[0].innerHTML =
          elements[i].name + " should be a valid email address";
        isErrorsInTheForm = true;
      }
    }
  }

  if (isErrorsInTheForm) return false;

  // if (name == null || name == "") {
  //   alert("Name can't be blank");
  //   return false;
  // } else if (firstpassword.length < 6) {
  //   alert("password must be 6 characters long");
  //   return false;
  // } //  if (firstpassword !== secondpassword) {
  // alert("password must be same");
  // return false;
  // } else if (isNaN(num)) {
  //   document.getElementById("form-control").innerHTML="Enter Numeric value only";
  //   alert("it must be a number");
  //   return false;
  // }

  alert("Form submitted successfully");
  clearForm();
  return true;
}

function checkEmpty(val) {
  if (val === null || val.trim() === "") return true;

  return false;
}

function isValueNumber(val) {
  if (isNaN(val)) return true;

  return false;
}

function isEmail(val) {
  var validRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  if (validRegex.test(val)) return false;

  return true;
}

function clearForm() {
  var elements = document.myform.getElementsByTagName("input");
  var errorElements = document.myform.getElementsByClassName("error");
  for (var i = 0; i < elements.length; i++) {
    elements[i].value = "";
  }
  for (var i = 0; i < errorElements.length; i++) {
    errorElements[i].innerHTML = "";
  }
}