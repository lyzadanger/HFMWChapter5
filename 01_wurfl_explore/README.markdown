Chapter 5, Step 1 (wurfl_explore)
=================

This step is primarily concerned with getting WURFL up and running and looking at all of the capabilities of a device by User Agent lookup. WURFL ships with a simple example page that has similar functionality, but this version shows more (that is, all) capabilities and is a complete HTML page. It's also responsive and should work on phones.

The challenge here is not so much with the specifics of getting the HTML, CSS and PHP all nice, but with getting WURFL set up.

Installation
------------

1. You _must_ already have the **WURFL PHP API [installed and running (instructions soon)] [wurfl-install]**. Several of the following steps reference files and stuff that are set up in that installation process.
1. You should download the latest WURFL XML (Repository) at [the sourceforge project page](http://wurfl.sourceforge.net/)
if you haven't already (or recently).
1. You should have a working *WURFL resources* directory. You might consider using the `examples/resources` directory that comes as part of the WURFL PHP API. The resources directory you use for this step should contain:
  1. `wurfl.xml` - Main WURFL data file
  1. `wurfl-config.xml` - Config file
  1. `web_browsers_patch.xml` - Optional WURFL patch for desktop browsers
1. Rename `config.php.example`. You need to edit the paths for the `WURFL_DIR` and `RESOURCES_DIR` constants. These need to point to the installation directory for the WURFL PHP API and the resources directory we were talking about above, respectively.

Troubleshooting
---------------

For more installation help for WURFL itself, see [the installation instructions from the appendix][wurfl-install].
  
* These examples assume the use of _unzipped_ WURFL xml files, as not all of us have the right configuration to handle the zip files. If you have a .zip file,
please unzip and use the resultant XML file for these examples. If you really know what you're doing, you can use ZIP source, but make sure to check your `wurfl-config.xml`
file's value for the element:
`<main-file>wurfl.xml</main-file>`


[wurfl-install]: http://www.example.com "I will provide a link to more instructions soon"