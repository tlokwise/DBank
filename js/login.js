const accountNumber = document.querySelector("#userID");
const pin = document.querySelector("#pin");
const loginBtn = document.querySelector("#signin");
const errorMsg = document.querySelector(".error-msg");

loginBtn.addEventListener("click", (e) => {
  if (accountNumber.value.length < 10) {
    errorMsg.innerHTML = "Invalid account number";
    e.preventDefault();
  } else if (pin.value.length == 0) {
    errorMsg.innerHTML = "Invalid PIN";
    e.preventDefault();
  }
});
