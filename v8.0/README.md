### New Features

- [Named Parameters](https://php.watch/versions/8.0/named-parameters)
- [Attributes](https://php.watch/versions/8.0/attributes)
- [Class constructor property promotion](https://php.watch/versions/8.0/constructor-property-promotion)
- [JIT](https://php.watch/versions/8.0/JIT)
- [New `%h` and `%H` `printf` specifiers](https://php.watch/versions/8.0/printf-h-specifiers)
- [Stack trace as string - Parameter max length is configurable](https://php.watch/versions/8.0/throwable-stacktrace-param-max-length)
- [New `*` precision and width modifiers in `printf`](https://php.watch/versions/8.0/printf-precision-modifier)
- [New `Stringable` interface](https://php.watch/versions/8.0/stringable)
- [Built-in web server supports dynamic port selection](https://php.watch/versions/8.0/built-in-server-port-zero)
- [WeakMaps](https://php.watch/versions/8.0/weakmap)
- [Null-safe operator](https://php.watch/versions/8.0/null-safe-operator)
- [`static` return type for class methods](https://php.watch/versions/8.0/static-return-type)
- [New `get_resource_id` function](https://php.watch/versions/8.0/get_resource_id)
- [New `str_contains` function](https://php.watch/versions/8.0/str_contains)
- [New `fdiv` function](https://php.watch/versions/8.0/fdiv)
- [New `get_debug_type` function](https://php.watch/versions/8.0/get_debug_type)
- [New `preg_last_error_msg` function](https://php.watch/versions/8.0/preg_last_error_msg)
- [`::class` magic constant is now supported on objects](https://php.watch/versions/8.0/class-constant-on-objects)
- [New `ValueError` Error Exception](https://php.watch/versions/8.0/ValueError)
- [New `PhpToken` Tokenizer class](https://php.watch/versions/8.0/PhpToken)
- [New `str_starts_with` and `str_ends_with` functions](https://php.watch/versions/8.0/str_starts_with-str_ends_with)
- [New `mixed` pseudo type](https://php.watch/versions/8.0/mixed-type)
- [New `p` date format for UTC `Z` time zone designation](https://php.watch/versions/8.0/date-utc-p-format)
- [Match Expressions](https://php.watch/versions/8.0/match-expression)
- [New `DateTime/DateTimeImmutable::createFromInterface()` methods](https://php.watch/versions/8.0/datetime-immutable-createfrominterface)
- [Union Types](https://php.watch/versions/8.0/union-types)

### Syntax/Functionality Changes

- [Default error reporting is set to `E_ALL`](https://php.watch/versions/8.0/error-display-E_ALL)
- [Inheritance rules are not applied to `private` class methods](https://php.watch/versions/8.0/final-private-function)
- [Calling non-static class methods statically result in a fatal error](https://php.watch/versions/8.0/non-static-static-call-fatal-error)
- [Apache Handler: Module name and file path changes](https://php.watch/versions/8.0/mod_php-rename)
- [Locale-independent `float` to `string` casting](https://php.watch/versions/8.0/float-to-string-locale-independent)
- [Class magic method signatures are strictly enforced](https://php.watch/versions/8.0/magic-method-signatures)
- [`substr`, `iconv_substr`, `grapheme_substr` return empty string on out-of-bound offsets](https://php.watch/versions/8.0/substr-out-of-bounds)
- [PHP Startup Errors are displayed by default](https://php.watch/versions/8.0/startup-errors-enabled)
- [GD Extension: Windows DLL file name changed from `php_gd2.dll` to `php_gd.dll`](https://php.watch/versions/8.0/gd2-gd-windows)
- [`crypt()` function requires `$salt` parameter](https://php.watch/versions/8.0/crypt-salt-required-param)
- [PDO: Default error mode set to exceptions](https://php.watch/versions/8.0/PDO-default-errmode)
- [`@` Error Suppression operator does not silent fatal errors](https://php.watch/versions/8.0/fatal-error-suppression)
- [Trailing commas are allowed in parameter lists and closure `use` lists](https://php.watch/versions/8.0/trailing-comma-parameter-use-list)
- [Implicit negative array key increments do not skip negative numbers](https://php.watch/versions/8.0/negative-array-keys)
- [`XMLWriter` objects replace `xmlwriter` resources](https://php.watch/versions/8.0/xmlwriter-resource)
- [OpenSSL: `resource` to object migration](https://php.watch/versions/8.0/OpenSSL-resource)
- [`XMLParser` objects replace `xml` resources](https://php.watch/versions/8.0/XMLParser-resource)
- [String to number comparisons no longer coerce string to a number](https://php.watch/versions/8.0/string-number-comparison)
- [Strict type checks on arithmetic operators](https://php.watch/versions/8.0/arithmetic-operator-type-check)
- [Sorting functions maintain positions of equal value items](https://php.watch/versions/8.0/stable-sorting)
- [`phar://` stream wrapper no longer `unserialize`s meta data automatically](https://php.watch/versions/8.0/phar-stream-wrapper-unserialize)
- [Internal function warnings now throw `TypeError` and `ValueError` exceptions](https://php.watch/versions/8.0/internal-function-exceptions)
- [Expressions can now `throw` Exceptions](https://php.watch/versions/8.0/throw-expressions)
- [JSON extension is always available](https://php.watch/versions/8.0/ext-json)
- [`catch` exceptions only by type](https://php.watch/versions/8.0/catch-exception-type)
- [`+`/`-` operators take higher precedence when used with concat (`.`) operator](https://php.watch/versions/8.0/contact-add-sub-precedence)
- [`CurlHandle` class objects replace curl handlers](https://php.watch/versions/8.0/resource-CurlHandle)
- [Fatal errors on incompatible method signatures](https://php.watch/versions/8.0/lsp-errors)
- [Disabled functions behave as if they do not exist](https://php.watch/versions/8.0/disable_functions-redeclare)
- [`GdImage` class objects replace GD image resources](https://php.watch/versions/8.0/gdimage)
- [Assertions throw exceptions by default](https://php.watch/versions/8.0/assert-throws)
- [Sockets extension resources (`Socket` and `AddressInfo`) are class objects](https://php.watch/versions/8.0/sockets-sockets-addressinfo)

### Deprecations

- [PostgreSQL: Several aliased functions are deprecated](https://php.watch/versions/8.0/pgsql-aliases-deprecated)
- [Deprecate required parameters after optional parameters in function/method signatures](https://php.watch/versions/8.0/deprecate-required-param-after-optional)
- [`ReflectionParameter::getClass())`, `::isArray()`, and `::isCallable()` methods deprecated](https://php.watch/versions/8.0/deprecated-reflectionparameter-methods)
- [Disabled functions: Reflection and `get_defined_functions()` deprecations](https://php.watch/versions/8.0/disable-functions-deprecations)
- [`libxml_disable_entity_loader` function is deprecated](https://php.watch/versions/8.0/libxml_disable_entity_loader-deprecation)

### Removed Features and Functionality

- [XMLRPC extension is moved to PECL](https://php.watch/versions/8.0/xmlrpc)
- [`FILTER_FLAG_SCHEME_REQUIRED` and `FILTER_FLAG_HOST_REQUIRED` flags are removed](https://php.watch/versions/8.0/filter_var-flags)