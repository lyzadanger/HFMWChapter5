Chapter 5, Step 1
=================

This step is primarily concerned with getting WURFL up and running and looking
at all of the capabilities of a device by User Agent lookup. WURFL ships with a
simple example page that has similar functionality, but this version shows more
(that is, all) capabilities and is a complete HTML page. It's also responsive
and should work on phones.

The challenge here is not so much with the specifics of getting the HTML, CSS
and PHP all nice, but with getting WURFL set up.

Installation
------------

* You _must_ already have WURFL's PHP API installed and running.
* You should download the latest WURFL XML (Repository) at http://wurfl.sourceforge.net/
if you haven't already
* You should have a working _WURFL resources_ directory (part of the install process
involves getting a sample page to work at examples/demo, which uses examples/resources
as its resources directory). This resources directory should contain:
** wurfl.xml - Main WURFL data file
** wurfl-config.xml - Config file
** web_browsers_patch.xml - Optional WURFL patch for desktop browsers
NB: These examples assume the use of unzipped WURFL xml files. If you have a .zip file,
please unzip and use the resultant XML file for these examples. Also check your `wurfl-config.xml`
file for the following:
    <main-file>wurfl.xml</main-file>
** OK