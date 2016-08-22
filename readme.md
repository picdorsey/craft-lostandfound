# Craft Lost and Found
Down with the old website and up with the new, but what are you going to do with all now broken links? This Craft Plugin gives you the ability to map 404 pages to the correct entry using an "old url", "legacy url", etc. field.

## Usage
1. Have your content migration team migrate the entrie's previous url along with the rest of the information. Inside the plugin's settings select which field this is being mapped to.
2. Add `{% do craft.lostAndFound.map404() %}` somewhere on your 404 page template.

## Installation
1. Download & unzip the file and place the `lostandfound` directory into your `craft/plugins` directory
2.  -OR- do a `git@github.com:picdorsey/craft-lostandfound.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `lostandfound` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

## Screenshots
![Screenshot](https://raw.github.com/picdorsey/craft-lostandfound/master/images/screenshot.png)