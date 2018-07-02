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

let waypointsArray = ['about', 'qualities', 'featured', 'services', 'mission', 'technology', 'leadership', 'vision', 'hero2', 'icons2', 'solutions', 'contact'];

waypointsArray.forEach(function (waypointName) {
    new Waypoint({
        element: document.getElementById(waypointName),
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
            console.log('Scrolled to waypoint!')
            console.log(this.element)
        },
        offset: 420
    });
});

// Current Order: about, qualities, featured, services, mission, technology, leadership, vision, hero2, icons2, solutions, contact