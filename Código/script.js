let count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImage();
}, 5000)


function nextImage(){
    count++;
if(count > 4){
    count = 1;
}

document.getElementById("radio"+count).checked = true;

}



const comments = [
    "Que bela foto!",
    "Adorei essa paisagem.",
    "Que fofura!",
    "Uau, que incrível!",
  ];
  
  const slideContents = document.querySelectorAll(".slide-content");
  
  function updateComment(slideIndex) {
    const comment = comments[Math.floor(Math.random() * comments.length)];
    slideContents.forEach((content, index) => {
      if (index === slideIndex) {
        content.querySelector(".comment").textContent = comment;
      }
    });
  }
  
  let slideIndex = 0;
  const slideWidth = document.querySelector(".slide").clientWidth;
  const numSlides = document.querySelectorAll(".slide").length;
  const slides = document.querySelector(".slides");
  
  function slide() {
    if (slideIndex === numSlides - 1) {
      slideIndex = 0;
    } else {
      slideIndex++;
    }
    slides.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
    updateComment(slideIndex);
  }
  
  updateComment(slideIndex);
  
  setInterval(slide, 5000);
  