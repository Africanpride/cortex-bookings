# Cortex Bookings Change Log

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](CONTRIBUTING.md).


## [v4.2.0] - 2020-06-15
- Autoload config, views, language, menus, breadcrumbs, and migrations
  - This is now done automatically through cortex/foundation, so no need to manually wire it here anymore
- Merge additional fillable, casts, and rules instead of overriding
- Drop PHP 7.2 & 7.3 support from travis

## [v4.1.1] - 2020-05-30
- Update composer dependencies

## [v4.1.0] - 2020-05-30
- With the significance of recent updates, new minor release required

## [v4.0.8] - 2020-05-30
- Add datatables checkbox column for bulk actions
- Use getRouteKey() attribute for all redirect identifiers
- Drop using strip_tags on redirect identifiers as they will use ->getRouteKey() which is already safe
- Add support for datatable listing get and post requests
- Refactor model CRUD dispatched events
- Remove useless "DT_RowId" fielld from transformers
- Register channel broadcasting routes
- Fire custom model events from CRUD actions
- Rename datatables container names
- Load module routes automatically
- Explicitly define relationship name
- Strip tags breadcrumbs of potential user inputs
- Strip tags of language phrase parameters with potential user inputs
- Escape language phrases
- Update model validation rules
- Add strip_tags validation rule to string fields
- Remove default indent size config

## [v4.0.7] - 2020-04-12
- Fix ServiceProvider registerCommands method compatibility

## [v4.0.6] - 2020-04-09
- Tweak artisan command registration
- Add missing config publishing command
- Refactor publish command and allow multiple resource values

## [v4.0.5] - 2020-04-04
- Enforce consistent artisan command tag namespacing
- Enforce consistent package namespace
- Drop laravel/helpers usage as it's no longer used
- Upgrade silber/bouncer composer package

## [v4.0.4] - 2020-03-20
- Add shortcut -f (force) for artisan publish commands
- Fix migrations path condition
- Convert database int fields into bigInteger
- Upgrade spatie/laravel-medialibrary to v8.x
- Fix couple issues and enforce consistency

## [v4.0.3] - 2020-03-16
- Update proengsoft/laravel-jsvalidation composer package

## [v4.0.2] - 2020-03-15
- Fix incompatible package version league/fractal

## [v4.0.1] - 2020-03-15
- Fix wrong package version laravelcollective/html

## [v4.0.0] - 2020-03-15
- Upgrade to Laravel v7.1.x & PHP v7.4.x

## [v3.0.5] - 2020-03-13
- Tweak TravisCI config
- Add migrations autoload option to the package
- Tweak service provider `publishesResources` & `autoloadMigrations`
- Add webpack module requirements
- Update StyleCI config
- Drop using global helpers
- Check if ability exists before seeding

## [v3.0.4] - 2019-12-18
- Add DT_RowId field to datatables
- Fix route regex pattern to include underscores
  - This way it's compatible with validation rule `alpha_dash`
- Fix `migrate:reset` args as it doesn't accept --step

## [v3.0.3] - 2019-10-14
- Update menus & breadcrumbs event listener to accessarea.ready
- Fix wrong dependencies letter case

## [v3.0.2] - 2019-10-06
- Refactor menus and breadcrumb bindings to utilize event dispatcher

## [v3.0.1] - 2019-09-24
- Add missing laravel/helpers composer package

## [v3.0.0] - 2019-09-23
- Upgrade to Laravel v6 and update dependencies

## [v2.2.3] - 2019-09-03
- Skip Javascrip validation for file input fields to avoid size validation conflict with jquery.validator
- Fix size validation rule

## [v2.2.2] - 2019-09-03
- Update media config options
- Use $_SERVER instead of $_ENV for PHPUnit

## [v2.2.1] - 2019-08-03
- Tweak menus & breadcrumbs performance

## [v2.2.0] - 2019-08-03
- Upgrade composer dependencies

## [v2.1.3] - 2019-06-03
- Enforce latest composer package versions

## [v2.1.2] - 2019-06-03
- Update publish commands to support both packages and modules natively

## [v2.1.1] - 2019-06-02
- Fix yajra/laravel-datatables-fractal and league/fractal compatibility

## [v2.1.0] - 2019-06-02
- Update composer deps
- Drop PHP 7.1 travis test
- Refactor migrations and artisan commands, and tweak service provider publishes functionality

## [v2.0.0] - 2019-03-03
- Require PHP 7.2 & Laravel 5.8
- Rename environment variable QUEUE_DRIVER to QUEUE_CONNECTION
- Fix wrong media destroy route
- Simplify and flatten create & edit form controller actions
- Tweak and simplify FormRequest validations
- Enable tinymce on all description and text area fields
- Utilize includeWhen blade directive
- Refactor abilities seeding

## [v1.0.3] - 2018-12-23
- Update composer dependencies

## [v1.0.2] - 2018-12-22
- Fix wrong silber/bouncer dependency version

## [v1.0.1] - 2018-12-22
- Update composer dependencies
- Add PHP 7.3 support to travis
- Simplify and flatten resources/public directories

## [v1.0.0] - 2018-10-01
- Support Laravel v5.7, bump versions and enforce consistency

## v0.0.1 - 2018-09-22
- Tag first release

[v4.2.0]: https://github.com/rinvex/cortex-bookings/compare/v4.1.1...v4.2.0
[v4.1.1]: https://github.com/rinvex/cortex-bookings/compare/v4.1.0...v4.1.1
[v4.1.0]: https://github.com/rinvex/cortex-bookings/compare/v4.0.8...v4.1.0
[v4.0.8]: https://github.com/rinvex/cortex-bookings/compare/v4.0.7...v4.0.8
[v4.0.7]: https://github.com/rinvex/cortex-bookings/compare/v4.0.6...v4.0.7
[v4.0.6]: https://github.com/rinvex/cortex-bookings/compare/v4.0.5...v4.0.6
[v4.0.5]: https://github.com/rinvex/cortex-bookings/compare/v4.0.4...v4.0.5
[v4.0.4]: https://github.com/rinvex/cortex-bookings/compare/v4.0.3...v4.0.4
[v4.0.3]: https://github.com/rinvex/cortex-bookings/compare/v4.0.2...v4.0.3
[v4.0.2]: https://github.com/rinvex/cortex-bookings/compare/v4.0.1...v4.0.2
[v4.0.1]: https://github.com/rinvex/cortex-bookings/compare/v4.0.0...v4.0.1
[v4.0.0]: https://github.com/rinvex/cortex-bookings/compare/v3.0.5...v4.0.0
[v3.0.5]: https://github.com/rinvex/cortex-bookings/compare/v3.0.4...v3.0.5
[v3.0.4]: https://github.com/rinvex/cortex-bookings/compare/v3.0.3...v3.0.4
[v3.0.3]: https://github.com/rinvex/cortex-bookings/compare/v3.0.2...v3.0.3
[v3.0.2]: https://github.com/rinvex/cortex-bookings/compare/v3.0.1...v3.0.2
[v3.0.1]: https://github.com/rinvex/cortex-bookings/compare/v3.0.0...v3.0.1
[v3.0.0]: https://github.com/rinvex/cortex-bookings/compare/v2.2.3...v3.0.0
[v2.2.3]: https://github.com/rinvex/cortex-bookings/compare/v2.2.2...v2.2.3
[v2.2.2]: https://github.com/rinvex/cortex-bookings/compare/v2.2.1...v2.2.2
[v2.2.1]: https://github.com/rinvex/cortex-bookings/compare/v2.2.0...v2.2.1
[v2.2.0]: https://github.com/rinvex/cortex-bookings/compare/v2.1.2...v2.2.0
[v2.1.2]: https://github.com/rinvex/cortex-bookings/compare/v2.1.1...v2.1.2
[v2.1.1]: https://github.com/rinvex/cortex-bookings/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/rinvex/cortex-bookings/compare/v2.0.0...v2.1.0
[v2.0.0]: https://github.com/rinvex/cortex-bookings/compare/v1.0.3...v2.0.0
[v1.0.3]: https://github.com/rinvex/cortex-bookings/compare/v1.0.2...v1.0.3
[v1.0.2]: https://github.com/rinvex/cortex-bookings/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/rinvex/cortex-bookings/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/rinvex/cortex-bookings/compare/v0.0.1...v1.0.0
