Phalcon MVC Skeleton
====================

A skeleton for "Multi Module" Phalcon websites. Has the advantage of using "View Models".

Structure
---------
- src/
 - Common: Contains common elements, layout etc.
 - Home: This is the "Home" module, you could add others i.e. "Blog"
  - Module.php: Configures a module for use, allows adding of services for a module etc.
  - Controllers: "Home" Controllers
  - Views: Template files
  - ViewModels: PHP Objects that are used to pass data to the template
  - Models: todo
