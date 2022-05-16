### New Features

- [Enums](https://php.watch/versions/8.1/enums)
- [Fibers](https://php.watch/versions/8.1/fibers)
- [Readonly Properties](https://php.watch/versions/8.1/readonly)
- [Intersection Types](https://php.watch/versions/8.1/intersection-types)
- [`never`return type](https://php.watch/versions/8.1/never-return-type)
- [`final`class constants](https://php.watch/versions/8.1/final-class-const)
- [New`fsync`and`fdatasync`functions](https://php.watch/versions/8.1/fsync-fdatasync)
- [New`array_is_list`function](https://php.watch/versions/8.1/array_is_list)
- [New Sodium`XChaCha20`functions](https://php.watch/versions/8.1/Sodium-XChaCha20-functions)
- [PDO SQLite:`file:`URI support](https://php.watch/versions/8.1/pdo-sqlite-file-uri)
- [Intl: New`IntlDatePatternGenerator`class](https://php.watch/versions/8.1/IntlDatePatternGenerator)
- [GD: AVIF image support](https://php.watch/versions/8.1/gd-avif)
- [First-class Callable Syntax](https://php.watch/versions/8.1/first-class-callable-syntax)
- [New`#[ReturnTypeWillChange]`attribute](https://php.watch/versions/8.1/ReturnTypeWillChange)
- [Phar: Added OpenSSL-256 and OpenSSL-512 signature algorithms](https://php.watch/versions/8.1/phar-openssl-256-openssl-512)
- [GD: Lossless WebP encoding support](https://php.watch/versions/8.1/gd-webp-lossless)
- [`$_FILES`: New`full_path`value for directory-uploads](https://php.watch/versions/8.1/$_FILES-full-path)
- [Array unpacking support for string-keyed arrays](https://php.watch/versions/8.1/spread-operator-string-array-keys)
- [Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)
- [Hash functions accept algorithm-specific`$options`](https://php.watch/versions/8.1/hash-options)
- [MurmurHash3 hash algorithm support](https://php.watch/versions/8.1/MurmurHash3)
- [xxHash hash algorithms support](https://php.watch/versions/8.1/xxHash)
- [FPM: Configurable child-process spawn rate](https://php.watch/versions/8.1/fpm-pm-max_spawn_rate)
- [Curl: DNS-over-HTTPS support](https://php.watch/versions/8.1/Curl-CURLOPT_DOH_URL)
- [Curl: File uploads from strings with`CURLStringFile`](https://php.watch/versions/8.1/CURLStringFile)
- [MySQLi: New`MYSQLI_REFRESH_REPLICA`constant](https://php.watch/versions/8.1/MYSQLI_REFRESH_REPLICA)

### Syntax/Functionality Changes

- [HTML entity en/decode functions process single quotes and substitute bydefault](https://php.watch/versions/8.1/html-entity-default-value-changes)
- [`$GLOBALS`variable restrictions](https://php.watch/versions/8.1/GLOBALS-restrictions)
- [`SplFixedArray`implements`JsonSerializable`, and json-encodes as an array](https://php.watch/versions/8.1/SplFixedArray-JsonSerializable-json_encode)
- [Phar: Default signature algorithm changed from SHA1 to SHA256](https://php.watch/versions/8.1/phar-default-signature-sha256)
- [CLI: Interactive shell (`php -a`) requires`readline`extension](https://php.watch/versions/8.1/php-a-interactive-readline)
- [MySQLi: Default error mode set to exceptions](https://php.watch/versions/8.1/mysqli-error-mode)
- [Configurable line endings for`fputcsv`and`SplFileObject::fputcsv`](https://php.watch/versions/8.1/fputcsv-eol)
- [`version_compare`operator restrictions](https://php.watch/versions/8.1/version_compare-operator-restrictions)
- [Warning on`compact`function calls with non-string and non-array string parameters](https://php.watch/versions/8.1/compact-non-string-warning)
- [finfo Extension:`file_info`resource are migrated to existing`finfo`objects](https://php.watch/versions/8.1/finfo-resource)
- [IMAP:`imap`resources are`IMAP\Connection`class objects](https://php.watch/versions/8.1/IMAPConnection-resource)
- [FTP Extension: Connection resources are`FTP\Connection`class objects](https://php.watch/versions/8.1/FTPConnection-resource)
- [GD Extension: Font identifiers are`GdFont`class objects](https://php.watch/versions/8.1/GdFont-resource)
- [PostgreSQL:`resource`s migrated to`\PgSql\Connection`,`\PgSql\Result`, and`\PgSql\Lob`objects](https://php.watch/versions/8.1/PgSQL-resource)
- [LDAP:`resource`s migrated to`LDAP\Connection`,`LDAP\Result`, and`LDAP\ResultEntry`objects](https://php.watch/versions/8.1/LDAP-resource)
- [Pspell:`pspell`,`pspell config`resources are`PSpell\Dictionary`,`PSpell\Config`class objects](https://php.watch/versions/8.1/PSpell-resource)

### Deprecations

- [Passing`null`to non-nullable internal function parameters is deprecated](https://php.watch/versions/8.1/internal-func-non-nullable-null-deprecation)
- [Return types in PHP built-in class methods and deprecation notices](https://php.watch/versions/8.1/internal-method-return-types)
- [`Serializable`interface deprecated](https://php.watch/versions/8.1/serializable-deprecated)
- [Implicit incompatible float to int conversion is deprecated](https://php.watch/versions/8.1/deprecate-implicit-conversion-incompatible-float-string)
- [`mysqli::get_client_info`method and`mysqli_get_client_info($param)`is deprecated](https://php.watch/versions/8.1/mysqli_get_client_info-deprecation)
- [`strptime`function is deprecated](https://php.watch/versions/8.1/strptime-deprecation)
- [`strftime`and`gmstrftime`functions are deprecated](https://php.watch/versions/8.1/strftime-gmstrftime-deprecated)
- [`date_sunrise`,`date_sunset`functions and related INI settings are deprecated](https://php.watch/versions/8.1/date_sunrise-date_sunset-funcs-deprecated)
- [`mhash*()`functions (hash extension) are deprecated](https://php.watch/versions/8.1/ext-hash-mhash-deprecated)
- [`filter.default`and`filter.default_options`INI settings are deprecated](https://php.watch/versions/8.1/filter.default-filter.default_options-deprecated)
- [`PDO::FETCH_SERIALIZE`is deprecated](https://php.watch/versions/8.1/PDO-FETCH_SERIALIZE-deprecated)
- [`auto_detect_line_endings`INI directive is deprecated](https://php.watch/versions/8.1/auto_detect_line_endings-ini-deprecated)
- [MySQLi:`mysqli_driver-&gt;driver_version`property is deprecated](https://php.watch/versions/8.1/mysqli_driver-driver_version-deprecation)