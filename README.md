# Koleto Wordpress Theme

## Development

### Production

Project is setup for git deployment to WP-Engine. Just push master to prod.

`git push production master`

### Docker

Uses Wordpress Docker image and MariaDB to spin up a Wordpress compatible container.

#### Spin up Docker

`docker-compose up -d`

http://localhost:8080/

### SASS

SASS files are stored in a `/sass/` folder in the theme folder. Gulp is run from the root and configured for the theme subdirectory. All SASS files in folder are compiled down into a single `style.css` file in theme root.

#### Watch SASS files

`gulp sass:watch`

#### Build SASS files

`gulp sass`

#### Media Queries using Bootstrap Mixins

Instead of using CSS media queries, use the Bootstrap mixins `media-breakpoint-down`, `media-breakpoint-up`, and `media-breakpoint-between`. See the Bootstrap docs under [Responsive Breakpoints and the SASS section](https://getbootstrap.com/docs/4.1/layout/overview/#responsive-breakpoints)

```sass
.container {
    @include media-breakpoint-down(sm) {
        width:50%;
    }
}

@include media-breakpoint-up(sm) { ... }
@include media-breakpoint-between(md, lg) { ... }
@include media-breakpoint-down(lg) { ... }
@include media-breakpoint-only(xl) { ... }
```


### Underscores Base Theme

### Wordpress

#### Include images inside a theme page

`<img src="<?php echo get_template_directory_uri(); ?>/img/your_image.jpg" alt="" />`

### Animation

Uses animate.css library with waypoints.js for scroll-activated animations.

* First items on page have animate.css classes added
* Anything you want animated beyond "the fold" has a `.not-animated` class added to it, which makes it transparent (not visible). Add an unique ID to the element. The go to the waypoints file (`~theme/js/frontpage.js`) and use the current function as a basis (removes `.not-animated` class and adds necessary classes -- IE8 friendly!)


### Icons

Icon font uses assorted icons from Font Awesome 4.4 and other sets. Any icons that is SVG has to be SVG because of the lack of multi-color functionality on icon fonts (they can be converted to static images if necessary though).