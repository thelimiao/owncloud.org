<?php get_template_part('templates/parts/title'); ?>
<h2>How you can contribute:</h2>
<ul>
	<li><a href="https://github.com/owncloud/core/issues">Report an issue on our bug tracker</a></li>
	<li><a href="http://owncloud.org/dev/translation/">Translate ownCloud to your language</a></li>
	<li>Help coding (see below) and check the <a href="http://owncloud.org/dev/junior-jobs/">Junior Jobs</a></li>
	<li>Check out the <a href="https://github.com/owncloud/core/wiki/GSoC,-GCI-and-OPW">project ideas page</a> (and don't hesitate to contact the mentor of the project you're interested in!)</li>
	<li><a href="http://owncloud.org/dev/apps/getting-started/">Develop Apps</a>, if you're looking for ideas you can check what users reported at the <a href="http://bugs.owncloud.org/thebuggenie/owncloud/issues/find/saved_search/4/search/1">App Opportunities Page</a>.</li>
	<li>Help out with the website and write documentation (contact tpn or deryo in the irc channel)</li>
	<li>Spread the word, tell your friends about it, write a blog post!</li>
</ul>
If you have any questions, <a href="/contact/">we are happy to help you</a>.
<h2>Set up your development environment</h2>
<ol>
	<li>Install git, for example by: <code>sudo apt-get install git</code></li>
	<li>The following folder structure is suggested:<br />
<code>/path/to/webserver/owncloud - core repo<br />
/path/to/webserver/apps - apps repo<br />
/path/to/webserver/3rdparty - 3rdparty repo</code><br />
Open a terminal and:<br />
<code>cd /path/to/webserver<br />
git clone https://github.com/owncloud/core ./owncloud<br />
git clone https://github.com/owncloud/apps<br />
git clone https://github.com/owncloud/3rdparty</code><br />
ownCloud will automatically detect the 3rdparty folder if it's either in <code>/path/to/webserver/owncloud</code> or in <code>/path/to/webserver/.</code></li>
	<li>If you want to use an app from the app repository, you have to <a href="https://github.com/owncloud/documentation/blob/master/developer_manual/configfile.rst">setup multiple app directories</a> or symlink each app like e.g.
<code>ln -s /path/to/webserver/apps/news /path/to/webserver/owncloud/apps/news</code></li>
	<li><a href="/install/">Install ownCloud</a></li>
	<li>Dive into the code!</li>
</ol>
If you are new to git, do the <a href="http://git-scm.com/course/svn.html">git crash course</a>.
<h2>Contribution guidelines</h2>
<ul>
	<li>we use <a href="https://github.com/owncloud">Github</a>, get an account there and clone the ownCloud repository</li>
	<li>ideally please communicate your ideas to the <a href="http://mailman.owncloud.org/mailman/listinfo/devel">mailing list</a></li>
	<li>fixes go directly to master, nevertheless they need to be tested thoroughly</li>
	<li>new features are always developed in a branch and only merged to master once they are fully done</li>
	<li>when you are finished, use the merge request function on Github. The other developers will look at it and give you feedback. Ideally also post your merge request to the mailing list to let people know.</li>
	<li>when you <code>git pull</code>, always <code>git pull --rebase</code> to not generate extra commits like: <em>merged master into master</em></li>
	<li>We need a signed contributor agreement from you to commit into the core repository. But no worries. It´s a nice one. ;-) All the information is <a href="http://owncloud.org/about/contributor-agreement/">here</a></li>
</ul>
<h2>Design guidelines</h2>
<ul>
	<li>Software should work. Only put features into master when they are complete. It’s better to not have a feature instead of having one that works poorly.</li>
	<li>Software should get out of the way. Do things automatically instead of offering configuration options.</li>
	<li>Software should be easy to use. Show only the most important elements. Secondary elements only on hover or via »Advanced« function.</li>
	<li>User data is sacred. Provide undo instead of asking for confirmation – <a href="http://www.alistapart.com/articles/neveruseawarning/">which might be dismissed</a>.</li>
	<li>The state of the application should be clear. If something loads, provide feedback.</li>
	<li>Do not adapt broken concepts (for example design of desktop apps) just for the sake of »consistency«. We provide a better interface.</li>
	<li>Regularly reset your installation to see how the first-run experience is like. And improve it.</li>
	<li>Ideally do <a href="http://jancborchardt.net/usability-in-free-software">usability testing</a> to know how people use the software.</li>
	<li>For further UX principles, read <a href="http://uxmag.com/articles/quantifying-usability">Alex Faaborg from Mozilla</a>.</li>
</ul>
<h2>Coding guidelines</h2>
<ul>
	<li>use tabs, not spaces</li>
	<li>java doc style documentation always required!</li>
	<li>function names in camelCase starting with a lower character</li>
	<li>class names are CamelCase starting with an upper case character</li>
	<li>opening brackets in the same line as the statement</li>
	<li>closing brackets in a sepearate line</li>
	<li>no global variables</li>
	<li>no global functions</li>
	<li>double quotes in HTML, single quotes in JavaScript &amp; PHP</li>
	<li>HTML should be HTML5 compliant</li>
	<li>CSS in single-line notation</li>
	<li>provide unit tests</li>
</ul>