/* Count to a specific number */
function count(els) {
	els.each(function () {
		$(this)
			.prop('Counter', 0)
			.animate(
				{
					Counter: $(this).text(),
				},
				{
					duration: 3000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					},
				}
			);
	});
}
/* Count when the counter section is in viewport */
const counterEls = $('.counter .counter__count');
new Waypoint({
	element: counterEls,

	handler: function () {
		count(counterEls);

		this.destroy();
	},

	offset: 'bottom-in-view',
});

/* Make navbar fixed when scrolled down and hide it when scrolled up */
const navbar = $('.navbar-top');
let previousScroll = 0;
$(window).on('scroll', function (event) {
	let currentScroll = $(window).scrollTop(); //Distance scrolled down the page
	let navHeight = $(navbar).height(); //Height of navbar
	if (currentScroll > 10) {
		$('.navbar-top').addClass('navbar-top--scrolled');
	} else {
		$('.navbar-top').removeClass('navbar-top--scrolled');
	}

	//When scrolling down AND you've scrolled past navHeight * 2.25, add .scrollUp
	if (currentScroll > previousScroll && currentScroll > navHeight * 2.25) {
		$(navbar).addClass('scrollUp');
		//When scrolling up AND you've scrolled less than navHeight, remove .scrollUp
	} else if (previousScroll > currentScroll && !(currentScroll <= navHeight)) {
		$(navbar).removeClass('scrollUp');
	}
	previousScroll = currentScroll;
});

/* Add navbar background color when it is not collapsed */
$('#navbarTopCollapsible').on('show.bs.collapse', function () {
	$('.navbar-top').addClass('bg-dark-trans');
});
$('#navbarTopCollapsible').on('hide.bs.collapse', function () {
	$('.navbar-top').removeClass('bg-dark-trans');
});











//I am a developer typing
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = [
  "Full Stack Developer",
  "Designer",
  "Programmer",
  "Photographer",
  "Drone Pilot",
  "Husband",
  "Dad",
];
const typingDelay = 150;
const erasingDelay = 100;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(
      0,
      charIndex - 1
    );
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  // On DOM Load initiate the effect
  if (textArray.length) setTimeout(type, newTextDelay + 250);
});
