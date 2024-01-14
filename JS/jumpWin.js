// Více info
  document.getElementById("openInfo").addEventListener("click", function() {
    document.getElementById("moreInfoJump").style.display = "flex";
  });
  
  document.getElementById("closeButton").addEventListener("click", function() {
    document.getElementById("moreInfoJump").style.display = "none";
  });

// Ceník
  document.getElementById("openPrice").addEventListener("click", function() {
    document.getElementById("priceListJump").style.display = "flex";
  });

  document.getElementById("closeButton2").addEventListener("click", function() {
    document.getElementById("priceListJump").style.display = "none";
  });
