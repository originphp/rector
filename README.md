# Rector Rules for OriginPHP

This is a new package for helping upgrading and automatically refactoring your application from OriginPHP version 3.26.

## Usage

Inside your application directory

```bash
$ composer require --dev originphp/rector
```

Do a dry run

```bash
$ vendor/bin/rector process app --dry-run --config vendor/originphp/rector/rector.php
$ vendor/bin/rector process tests --dry-run --config vendor/originphp/rector/rector.php
```
