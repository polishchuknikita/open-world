$('.header-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: false,
  arrows: true,
  dots: true,
    dotsClass: 'custom_paging',
    customPaging: function (slider, i) {
        console.log(slider);
        return  (i + 1) + '/' + '<span class="total">' + slider.slideCount + '</span>';
    },
  responsive: [
	{
	  breakpoint: 992,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	},
	{
	  breakpoint: 768,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	},
	{
	  breakpoint: 575,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	}
  ]
});
$('.programs-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite: false,
  arrows: false,
  dots: true,
  responsive: [
	{
	  breakpoint: 992,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	},
	{
	  breakpoint: 768,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	},
	{
	  breakpoint: 575,
	  settings: {
	    slidesToShow: 1,
	    slidesToScroll: 1,
	  }
	}
  ]
});
$('.call-btn').click(function (e) {
	e.preventDefault();
    $('#exampleModal').arcticmodal();
});