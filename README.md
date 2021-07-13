# OriginPHP Rector Sets (Alpha)

This includes `rector` rules from version `3.26` to help with refactoring code.

Usage

Inside your application directory

```bash
$ composer require --dev originphp/rector
```

Do a dry run

```bash
$ vendor/bin/rector process app --dry-run --config vendor/originphp/rector/rector.php
$ vendor/bin/rector process tests --dry-run --config vendor/originphp/rector/rector.php
```
