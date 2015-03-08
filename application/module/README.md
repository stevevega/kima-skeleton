Kima modules
=================

Modules can be used to split different apps in a project.
This allows you to have custom controllers and views for each module.

The module can be set with an environment variable or using a SERVER,
both of this can usually be set in the module vhost config.

Url's for a module can be defined as
```
[
	'/' => 'Index', // main app url
	'example' => [
		'/' => 'Index' // example module index
	]
]
```

Example module folder structure
```
_ module
__ example (this is the module name)
___ controller (custom example module controllers)
___ view (custom module views)
```

The application will try to locate the controllers and views first in
the module path, if no controller or view is found there, it will try
to failover to the main controller path.