# UZU Child Theme Template
### Version 1.0.1

## Installation Instructions

1. Make sure Git, Sass and Grunt are installed (these require node.js and ruby).
2. Clone this repository to the wp-themes directory using ("git clone git@bitbucket.org:uzumedia/uzuchild.git themeName").
2.1. Replace themeName with whatever you plan on naming the theme folder.
3. Open a command line, point to the theme folder and run "npm install --save-dev"
4. Open gruntfile.js and change the globalConfig src and dest to the new theme name folder.
5. On the command line, run grunt, or grunt watch (grunt watch is set to the default grunt task).

## Optional steps and tips

1. Install livereload browser extenstions. Grunt watch starts a livereload server automatically, and any changes to the files while grunt watch is running will trigger a compile and livereload.
2. Set up chrome inspector to map to your project folder to enable editing the code from the browser.
3. Update screenshot.png
4. Install yeoman (via "npm install -g yo"), and yeopress (via "npm install -g generator-wordpress"), and generate a wordpress install that has a custom wp-config which you can then make a custom local-config.php file. A sample of these files are included in the lib/sample folder. This way you can still upload the same wp-config.php file to the remote server without it breaking the connection to the database.