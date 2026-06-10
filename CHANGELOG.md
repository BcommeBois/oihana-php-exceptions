# Oihana PHP Exceptions library — Change Log

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this
project adheres to [Semantic Versioning](http://semver.org/). Each entry gives a
short description of what the class or change does.

## [Unreleased]

### Added

- `http\Error400` — HTTP **400 Bad Request** exception (default message and status code).
- `http\Error401` — HTTP **401 Unauthorized** exception.
- `http\Error402` — HTTP **402 Payment Required** exception.
- `http\Error405` — HTTP **405 Method Not Allowed** exception.
- `http\Error409` — HTTP **409 Conflict** exception.
- Test-coverage tooling: `composer coverage` / `composer coverage:md` and a
  portable Clover → Markdown reporter under `tools/`. Line coverage is now 100%.
- Continuous integration (GitHub Actions) running the test suite on PHP 8.4.
- Online API documentation (phpDocumentor) deployed to GitHub Pages, with a
  custom landing page showing the logo and a README-style overview.
- `CONTRIBUTING.md` describing setup, running the tests and the coverage workflow.

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
