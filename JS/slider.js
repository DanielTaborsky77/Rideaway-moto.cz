var currentImageIndex = 0;
var images = [
  "motoFotky/IMG_4207.JPEG",
  "motoFotky/IMG_4208.JPEG",
  "motoFotky/IMG_4209.JPEG",
  "motoFotky/IMG_4210.JPEG",
  "motoFotky/IMG_4211.JPEG",
  "motoFotky/IMG_4212.JPEG",
  "motoFotky/IMG_4214.JPEG",
  "motoFotky/IMG_4217.JPEG",
  "motoFotky/IMG_4220.JPEG",
  "motoFotky/IMG_4177.JPEG",
  "motoFotky/IMG_4179.JPEG",
  "motoFotky/IMG_4181.JPEG",
  "motoFotky/IMG_4185.JPEG",
  "motoFotky/IMG_4187.JPEG",
  "motoFotky/IMG_4191.JPEG",
  "motoFotky/IMG_4193.JPEG",
  "motoFotky/IMG_4197.JPEG",
  "motoFotky/IMG_4200.JPEG",
  "motoFotky/IMG_4172.JPEG"
];

function showImage(index) {
  var sliderImage = document.querySelector(".slider-image");
  sliderImage.innerHTML = "<img src='" + images[index] + "' alt='Slider Image'>";
}

document.getElementById("open-button").addEventListener("click", function() {
    document.getElementById("slider").style.display = "block";
    showImage(currentImageIndex);
  });
  
  document.getElementById("close-button").addEventListener("click", function() {
    document.getElementById("slider").style.display = "none";
  });
  
  document.getElementById("prev-button").addEventListener("click", function() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    showImage(currentImageIndex);
  });
  
  document.getElementById("next-button").addEventListener("click", function() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    showImage(currentImageIndex);
  });