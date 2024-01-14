const specialCharsRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
const numbersRegex = /\d/;
const telRegex = /^[0-9+\-()\s]+$/;
const dateFrom = document.getElementById('dateFrom');
const dateTo = document.getElementById('dateTo');

var nameInput = document.getElementById('name'); /* jméno */
var surnameInput = document.getElementById('surname'); /* prijmeni */
var telInput = document.getElementById('telefon'); /* telefon */
var buttonReserve = document.getElementById('reserve');

buttonReserve.addEventListener('click', function() {
  /* ověřovací funkce */
  nameValidity(nameInput);
  nameValidity(surnameInput);
  telValidity(telInput);
  dateValidity(dateFrom, dateTo)
  console.log(dateFrom.value < dateTo.value);
});

/* jmeno a prijmeni */
function nameValidity(inputName) {
  
  if (inputName.value.charAt(0) !== inputName.value.charAt(0).toUpperCase()) {
    inputName.setCustomValidity("První písmeno musí být velké");
  }
  else if (specialCharsRegex.test(inputName.value)) {
    inputName.setCustomValidity('Nesmí obsahovat speciální znaky');
  }
  else if (numbersRegex.test(inputName.value)) {
    inputName.setCustomValidity('Nesmí obsahovat číslice');
  }
  else{
    inputName.setCustomValidity('');
  }

}

/* telefonní číslo */
function telValidity(inputTel){
  if (!telRegex.test(inputTel.value)) {
    inputTel.setCustomValidity('Obsahuje nepovolené znaky');
  }
  else if ((inputTel.value).length > 16) {
    inputTel.setCustomValidity('Musí obsahovat méně než 16 znaků');
  }
  else if ((inputTel.value).length < 9){
    inputTel.setCustomValidity('Nesmí obsahovat méně než 9 znaků');
  }
  else{
    inputTel.setCustomValidity('');
  }
}

/* datum */
function dateValidity(inputDateFrom, inputDateTo) {
  if (inputDateFrom.value > inputDateTo.value) {
      inputDateTo.setCustomValidity('Nemůže obsahovat dřívější datum než je datum "Od"');
  }
  else{
    inputDateTo.setCustomValidity('');
  }
}

/* minimální datum */
setMinDate();
function setMinDate() {
  const dateFrom = document.getElementById('dateFrom');
  const dateTo = document.getElementById('dateTo');
  const today = new Date().toISOString().split('T')[0]; // Získáme aktuální datum ve formátu YYYY-MM-DD
  dateFrom.setAttribute('min', today);
  dateTo.setAttribute('min', today);
}
// Voláme funkci pro nastavení minima hned po načtení stránky

