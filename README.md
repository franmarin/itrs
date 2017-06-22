# ITRS Training

_Web developer test_

This project is meant to answer a web developer test with a quick solution 
developed from scratch.

Goal of the test is proving the experience with the use of different 
technologies, ability to make MVC application using PHP and (to me) overcoming
the challenge of illustrating all business layers clearly with OO PHP with no
framework.

## Languages, Technologies and IDE

* OO PHP 5.x
* [Composer](https://getcomposer.org/download/)
* JavaScript and [jQuery](https://jquery.com/)
* MySQL 5.5+
* [Bootstrap 3.3.7](http://getbootstrap.com/)
* CSS3
* HTML5
* JSON
* [GIMP 2.8.16](https://www.gimp.org/)
* [NetBeans 8.2](https://netbeans.org/)

## How to run this project

1. Clone it and pull the master branch.
2. Deploy the code on your web server (e.g. Apache).
3. From the root dir of this project, install [Composer](https://getcomposer.org/download/).
4. Set up an accessible MySQL database and update the *resources/database.json* file accordingly.
5. Run the MySQL script placed on *resources/testdb.php* to have the initial database schema.
6. Access the site *index.php* script from browser.

## TO-DO

### Responsive Design

  * The site has been tested against different device screen dimensions through desktop Google Chrome device simulator. Tests from real devices should be run.
  * A solution to automatically return site images with the size that better fits the device capabilities (not only the screen), should be used (e.g [DeviceAtlas NGINX module](https://deviceatlas.com/deviceatlas-nginx-module)).
  * Additional optimizations could be run from server-side to return the optimal content for each device type.
  * Usage of SVG images to minimize the web size and traffic.
  * Optimise and polish CSS, especially for IE.

### OO Programming

 * Addition of Unit tests (this is crucial!).
 * Usage of frameworks that let us work with templates to properly separate both view and controller.

### Others

 * Save text for the front-page slider (static image) and learn-more section on database.
 * Make section to display courses flexible to more than 3 elements (responsive grid).
 * Control repeated requests from the Contact form from server-side (via IP and/or content).
 * Avoid temporary and fake email addresses validating them against a specialized service (e.g. [Email-Validator](https://www.email-validator.net/)).

* * *
Copyright (c) 2017 Fran Marín
