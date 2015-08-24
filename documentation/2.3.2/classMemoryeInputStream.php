<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'MemoryeInputStream Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">MemoryeInputStream Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>This class is a specialization of InputStream that reads from data in memory.  
 <a href="classMemoryeInputStream.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="MemoryInputStream_8hpp_source.php">MemoryInputStream.hpp</a>&gt;</code></p>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>This class is a specialization of InputStream that reads from data in memory. </p>
<p>It wraps a memory chunk in the common InputStream interface and therefore allows to use generic classes or functions that accept such a stream, with content already loaded in memory.</p>
<p>In addition to the virtual functions inherited from InputStream, MemoryInputStream adds a function to specify the pointer and size of the data in memory.</p>
<p>SFML resource classes can usually be loaded directly from memory, so this class shouldn't be useful to you unless you create your own algorithms that operate on a InputStream.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keywordtype">void</span> process(InputStream&amp; stream);</div>
<div class="line"></div>
<div class="line">MemoryStream stream;</div>
<div class="line">stream.open(thePtr, theSize);</div>
<div class="line">process(stream);</div>
</div><!-- fragment --><p>InputStream, FileStream </p>
</div><hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="MemoryInputStream_8hpp_source.php">MemoryInputStream.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
