Phalcon MVC Skeleton
====================

A skeleton for "Multi Module" Phalcon websites. Has the advantage of using "View Models".

Structure
---------
- src/
 - Common: Contains common elements, layout etc.
  - Config: Config files live here
  - Controllers: Abstract Controller and Commonn controllers
  - Layouts: Contains layout/template files
  - Modules: Abstract module
  - ViewModels: Abstract and common view models, header footer etc.
  - Views: Common view templates, header footer phtml
 - Home: This is the "Home" module, you could add others i.e. "Blog"
  - Module.php: Configures a module for use, allows adding of services for a module etc.
  - Controllers: "Home" Controllers
  - Views: Template files phtml
  - ViewModels: PHP Objects that are used to pass data to the template
  - Models: todo
