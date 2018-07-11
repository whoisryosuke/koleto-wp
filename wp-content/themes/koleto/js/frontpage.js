// docs: http://imakewebthings.com/waypoints/guides/getting-started/
// var waypoint = new Waypoint({
//     element: document.getElementById('about'),
//     handler: function (direction) {
//         var a = document.body, c = ' not-animated';
//         // Remove the foreced fade out class
//         this.element.className = this.element.className.replace(c, '');
//         this.element.className = this.element.className + c;

//         // Animate it
//         if (this.element.classList) {
//             this.element.classList.add('animated');
//             this.element.classList.add('fadeIn');
//         } else {
//             this.element.className += ' animated';
//             this.element.className += ' fadeIn';
//         }
//         console.log('Scrolled to waypoint!')
//         console.log(this.element)
//     },
//     offset: 350
// })

/**
 * Fixed header on scroll
 */

 // When the user scrolls the page, execute stickyHeader
window.onscroll = function() {stickyHeader()};
// When page loads, check if we sticky (just in case page loads halfway down)
window.onload = function() {stickyHeader()};

// Get the header
var header = document.getElementById("SiteHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

console.log(header)

/**
 * Animation
 * 
 * Create "waypoints" to activate animation on user scroll to certain positions
 */

let waypointsArray = ['about', 'qualities', 'featured', 'services', 'mission', 'leadership', 'vision', 'hero2', 'icons2', 'solutions', 'contact'];

waypointsArray.forEach(function (waypointName) {
    let element = document.getElementById(waypointName);

    if (element)
    {
        new Waypoint({
            element: element,
            handler: function (direction) {
                var a = document.body, c = ' not-animated';
                // Remove the foreced fade out class
                this.element.className = this.element.className.replace(c, '');
                this.element.className = this.element.className + c;

                // Animate it
                if (this.element.classList) {
                    this.element.classList.add('animated');
                    this.element.classList.add('fadeIn');
                } else {
                    this.element.className += ' animated';
                    this.element.className += ' fadeIn';
                }
                // console.log('Scrolled to waypoint!')
                // console.log(this.element)
            },
            offset: 600
        });
    }
});

// Current Order: about, qualities, featured, services, mission, technology, leadership, vision, hero2, icons2, solutions, contact