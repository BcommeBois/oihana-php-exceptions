# Oihana PHP Exceptions library — Change Log

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this
project adheres to [Semantic Versioning](http://semver.org/). Each entry gives a
short description of what the class or change does.

## [Unreleased]

### Changed

- Bump the `phpunit/phpunit` dev dependency from `^12` to `^13` and update the
  `phpunit.xml` schema reference to `13.2`. No production code change; the full
  suite (116 tests) stays green. PHPUnit 13 requires PHP ≥ 8.4, already the
  project's minimum.

## [1.1.0] - 2026-06-10

### Added

- `http\HttpException` — common base class for every HTTP error exception.
  Subclasses declare only their `DEFAULT_CODE` and `DEFAULT_MESSAGE` constants;
  `catch (HttpException $e)` now matches any HTTP error.
- The complete set of HTTP client-error (4xx) exceptions, each carrying the
  standard reason phrase and status code: `Error400` (Bad Request),
  `Error401` (Unauthorized), `Error402` (Payment Required),
  `Error405` (Method Not Allowed), `Error406` (Not Acceptable),
  `Error407` (Proxy Authentication Required), `Error408` (Request Timeout),
  `Error409` (Conflict), `Error410` (Gone), `Error411` (Length Required),
  `Error412` (Precondition Failed), `Error413` (Content Too Large),
  `Error414` (URI Too Long), `Error415` (Unsupported Media Type),
  `Error416` (Range Not Satisfiable), `Error417` (Expectation Failed),
  `Error418` (I'm a teapot), `Error421` (Misdirected Request),
  `Error422` (Unprocessable Content), `Error423` (Locked),
  `Error424` (Failed Dependency), `Error425` (Too Early),
  `Error426` (Upgrade Required), `Error428` (Precondition Required),
  `Error429` (Too Many Requests), `Error431` (Request Header Fields Too Large),
  `Error451` (Unavailable For Legal Reasons).
- The complete set of HTTP server-error (5xx) exceptions:
  `Error501` (Not Implemented), `Error502` (Bad Gateway),
  `Error503` (Service Unavailable), `Error504` (Gateway Timeout),
  `Error505` (HTTP Version Not Supported), `Error506` (Variant Also Negotiates),
  `Error507` (Insufficient Storage), `Error508` (Loop Detected),
  `Error510` (Not Extended), `Error511` (Network Authentication Required).
- Test-coverage tooling: `composer coverage` / `composer coverage:md` and a
  portable Clover → Markdown reporter under `tools/`. Line coverage is now 100%.
- Continuous integration (GitHub Actions) running the test suite on PHP 8.4.
- Online API documentation (phpDocumentor) deployed to GitHub Pages, with a
  custom landing page showing the logo and a README-style overview.
- `CONTRIBUTING.md` describing setup, running the tests and the coverage workflow.

### Changed

- The `Error4xx` / `Error5xx` classes now extend `http\HttpException` and declare
  only their default constants. Behaviour is unchanged for positional callers
  (`new Error404()` still yields the same message and code); the third
  constructor argument is uniformly named `$previous` (was `$notFound`).

### Fixed

- `composer doc` referenced a non-existent assets path and failed before
  phpDocumentor could run; it now copies the project `assets/` directory.
- Corrected the test `autoload-dev` namespace mapping to `tests\oihana\exceptions`.

## [1.0.0] - 2025-08-13

### Added

- `BindException` — thrown when a bind variable is invalid or fails to bind.
- `ResponseException` — thrown when an HTTP response fails.
- `UnsupportedOperationException` — thrown when an operation is not supported.
- `ValidationException` — thrown when a validation fails.
- `http\Error403` — HTTP **403 Forbidden** exception.
- `http\Error404` — HTTP **404 Not Found** exception.
- `http\Error500` — HTTP **500 Internal Server Error** exception.
