  // inputy
  var dateInput1 = document.getElementById("dateFrom");
  var dateInput2 = document.getElementById("dateTo");

  // aktuální datum
  var currentDate = new Date();
  var year = currentDate.getFullYear();
  var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Měsíce začínají od 0
  var day = currentDate.getDate().toString().padStart(2, '0');

  // formát
  var formattedDate = year + "-" + month + "-" + day;

  // vložení do input value
  dateInput1.value = formattedDate;
  dateInput2.value = formattedDate;