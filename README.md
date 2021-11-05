# Coveralls-Visualizer
Lightweight visualization of a coveralls file. The site visitor is presented with a list of files in a git repository. Any file can be selected and the visitor can see which lines have been covered by tests, and how many times.

Setup
-----

Download the project files with git.

Use [composer](http://getcomposer.org) to install the autoloader:

```bash
$ composer install
```

Place a copy of a coveralls-upload.json file in the project root. Configure your web server to use this directory as webroot to visualize the coverage.
