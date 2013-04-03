PerchExample-rachelandrew_me
============================

A set of example pages and templates using Blog, Events and the Perch Quill Feather, as used on http://rachelandrew.me.uk 

This also demonstrates the layouts feature new in Perch 2.2.

Usage
-----

Install [Perch](http://grabaperch.com), then install the following add-ons:

* [Quill Feather](http://grabaperch.com/add-ons/feathers/quill)
* [The Blog App](http://grabaperch.com/add-ons/apps/blog)
* [The Events App](http://grabaperch.com/add-ons/apps/events)

From this repository place the files into the root of your site. Then add the contents of perch/templates to your templates folder. The included templates are only those that have been changed as a result of the build.

In Perch Settings:

* Blog post page path: /blog/{postSlug}
* Slug format: %Y-%m-%d-{postTitle}
* Event detail page path: /events/{eventSlug}
