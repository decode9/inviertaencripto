$(document).ready(function(){
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activef", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " activef";
  }
  $('.prev').click(function(){
    plusSlides(-1);
  })
  $('.next').click(function(){
    plusSlides(1);
  })

  $('.dot:nth-child(1)').click(function(){
    currentSlide(1);
  })

  $('.dot:nth-child(2)').click(function(){
    currentSlide(2);
  })
  $('.dot:nth-child(3)').click(function(){
    currentSlide(3);
  })

  window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
	     animationEnabled: true,
	     data: [{
		   type: "doughnut",
		   startAngle: 60,
		   //innerRadius: 60,
		   indexLabelFontSize: 17,
		   indexLabel: "{label} - #percent%",
		   toolTipContent: "<b>{label}: $ </b> {y} (#percent%)",
		   dataPoints: [
			    { y: 18530, label: "BTC" },
			    { y: 4550, label: "LTC" },
			    { y: 15542, label: "ETH"},
			    { y: 12322, label: "DASH"},
			    { y: 6080, label: "ETC"}
		]
	}]
});
chart.render();

}


})
