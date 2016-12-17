# Quilisma Consort Music Tracker
An application to help keep my early music ensemble organized. Currently, information about pieces we play is scattered across various e-mail messages, GoogleDocs files, locally saved PDFs, and notes scribbled in the margins of our sheet music. Having a single location to store this information will be a great time saver.

Submitted as a project for the course Dynamic Web Applications.

## Finding My Stuff

* __[Github Repository](https://github.com/ATechWriter/p4-practice)__
* __[Live Site](http://p4-practice.josquinia.org/)__
* __[Demo]()__

Yes, my live site is not at p4.josquinia.org. That's because when I tried to do P3, I ended up with a fatal error, so I needed to start over with a new repository, directory, and subdomain. I assumed something similar might happen again, so I started with p4-practice and planned to rebuild it all on p4 when I knew it wouldn't break.

To my surprise, it didn't break horribly. I've decided the time investment to rebuild the project on a new subdomain is not worth it.

## Project Requirements
I fulfilled the following requirements that are specific to P4:

* __Database__: The 'qcmt' database has two tables: composers and pieces. Composers has a one-to-many relationship with pieces.

* __Migrations and Seeds__: Migrations and seeds are functional. There are seeds for composers and pieces, and the seeder for the users table includes the required Jill and Jamal users.

* __CRUD Actions__: All four actions are included in the app. Guest users can only perform read actions.

  * __Create__: Users can create new composers and new pieces with the Add buttons available in the "View Composers" and "View Pieces" pages and in detail views for individual composers and pieces.

  * __Read__: The "View" buttons in the navigation bar display the entire contents of the composers and pieces tables. From there, click any "View" link to see a detail view. For pieces, this includes information not visible in the table.

  * __Update__: Click any "Edit" link in the tables (or "Edit" button in a detail view) to modify an existing entry.

  * __Delete__: At this time, the delete action is available for pieces only. Use the "Delete" link in the table or the button in a detail view.

* __Planning Document__: [View the planning doc](https://docs.google.com/a/harvard.edu/document/d/1eBd-rmHq3zhbzce4DMGMiPDQfpI8zVB1N6OKRqUis_k/edit?usp=sharing). It was submitted on time and is complete. I made a few very minor tweaks as I worked through the project.

## Highlights

In addition to the requirements described above, there are a few features that deserve attention.

The "View Pieces" table makes use of eager loading to fetch composer information

A guest who is not logged in cannot access create, update, and delete actions.

The two list table views are sortable and have some fancy styling. I accomplished this with the tablesorter jQuery plugin (see Citations for details). My implementation also involves some customization beyond the default settings: applied a style theme, customized the colors to match the website, suppressed sorting on columns where it doesn't make sense, and configured default sorting.

I installed a custom font to make a spiffy banner. The banner is also a link to the home page, following common usability expectations.

## Citations
This project includes or references the following tools, resources, etc.

* __Laravel__: The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

* __Debugbar__: An open-source Laravel debugging tool by Github user Barryvdh (local environment only).
  * [Download](http://jquery.com/download/)
  * [Documentation](http://learn.jquery.com/about-jquery/)

* __Tablesorter jQuery plugin by Christian Bach__:
  * [Download](http://plugins.jquery.com/tablesorter/)
  * [Documentation](https://mottie.github.io/tablesorter/docs/index.html)

* __Font "Blackwood Castle" by Dieter Steffmann__(http://www.fontspace.com/dieter-steffmann/blackwood-castle): Freeware font used in banner

* __[W3Schools](http://www.w3schools.com)__: Reference for CSS, HTML, JavaScript, and jQuery

* __[Paletton](http://paletton.com)__: Color scheme assistance

* __[Susan's Foobooks Repository](https://github.com/susanBuck/foobooks)__: To find patterns

* __[php.net](http://php.net)__: PHP documentation for command and syntax reference

* __[Stack Overflow](http://stackoverflow.com)__: Debugging help
