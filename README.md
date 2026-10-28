# gateseeker-test-php

External validation project for the [Gateseeker](https://github.com/gateseeker-dev/gateseeker) GitHub Action (Sprint 3). A small Composer project with one direct dependency and the Action configured as any user would configure it.

Two pull requests exercise the gate:

- a downgrade of `guzzlehttp/psr7` to a version with known vulnerabilities, which the gate must block with a sticky comment and SARIF results;
- a routine bump of `guzzlehttp/psr7` to the newest release, which the gate must let through.

No code here is meant to run; the lockfile is the input under test.
