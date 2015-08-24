<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vertex.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.10 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c35206ee16f5142ebcf86ff0b09d4086.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Vertex.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2015 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VERTEX_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_VERTEX_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Color.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php">   42</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Vertex.php">Vertex</a></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>();</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition);</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; theColor);</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; theTexCoords);</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <a class="code" href="classsf_1_1Vertex.php">Vertex</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; thePosition, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; theColor, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; theTexCoords);</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00097"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">   97</a></span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>  <a class="code" href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">position</a>;  </div>
<div class="line"><a name="l00098"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">   98</a></span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>     <a class="code" href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">color</a>;     </div>
<div class="line"><a name="l00099"></a><span class="lineno"><a class="line" href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">   99</a></span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>  <a class="code" href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">texCoords</a>; </div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;};</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;<span class="preprocessor">#endif // SFML_VERTEX_HPP</span></div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates. </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:42</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php_a8a4e0f4dfa7f1eb215c92e93d04f0ac0"><div class="ttname"><a href="classsf_1_1Vertex.php#a8a4e0f4dfa7f1eb215c92e93d04f0ac0">sf::Vertex::position</a></div><div class="ttdeci">Vector2f position</div><div class="ttdoc">2D position of the vertex </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00097">Vertex.hpp:97</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php_a9e79bd05818d36c4789751908037097c"><div class="ttname"><a href="classsf_1_1Vertex.php#a9e79bd05818d36c4789751908037097c">sf::Vertex::texCoords</a></div><div class="ttdeci">Vector2f texCoords</div><div class="ttdoc">Coordinates of the texture&#39;s pixel to map to the vertex. </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00099">Vertex.hpp:99</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php_a799faa0629442e90f07cd2edb568ff80"><div class="ttname"><a href="classsf_1_1Vertex.php#a799faa0629442e90f07cd2edb568ff80">sf::Vertex::color</a></div><div class="ttdeci">Color color</div><div class="ttdoc">Color of the vertex. </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00098">Vertex.hpp:98</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
