<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Rect.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.9.6 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Rect.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span><span class="comment"></span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_RECT_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_RECT_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;algorithm&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span> </div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span> </div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span>{</div>
<div class="line"><a id="l00041" name="l00041"></a><span class="lineno">   41</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00042" name="l00042"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php">   42</a></span><span class="keyword">class </span><a class="code hl_class" href="classsf_1_1Rect.php">Rect</a></div>
<div class="line"><a id="l00043" name="l00043"></a><span class="lineno">   43</span>{</div>
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno">   44</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno">   45</span> </div>
<div class="line"><a id="l00053" name="l00053"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37">   53</a></span>    <a class="code hl_function" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37">Rect</a>();</div>
<div class="line"><a id="l00054" name="l00054"></a><span class="lineno">   54</span> </div>
<div class="line"><a id="l00067" name="l00067"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a15cdbc5a1aed3a8fc7be1bd5004f19f9">   67</a></span>    <a class="code hl_function" href="classsf_1_1Rect.php#a15cdbc5a1aed3a8fc7be1bd5004f19f9">Rect</a>(T rectLeft, T rectTop, T rectWidth, T rectHeight);</div>
<div class="line"><a id="l00068" name="l00068"></a><span class="lineno">   68</span> </div>
<div class="line"><a id="l00079" name="l00079"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a27fdf85caa6d12caeeff78913cc59936">   79</a></span>    <a class="code hl_function" href="classsf_1_1Rect.php#a27fdf85caa6d12caeeff78913cc59936">Rect</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; position, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; size);</div>
<div class="line"><a id="l00080" name="l00080"></a><span class="lineno">   80</span> </div>
<div class="line"><a id="l00092" name="l00092"></a><span class="lineno">   92</span>    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> U&gt;</div>
<div class="line"><a id="l00093" name="l00093"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a6fff2bb7e93677839461a66bc2957de0">   93</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1Rect.php#a6fff2bb7e93677839461a66bc2957de0">Rect</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;U&gt;</a>&amp; rectangle);</div>
<div class="line"><a id="l00094" name="l00094"></a><span class="lineno">   94</span> </div>
<div class="line"><a id="l00109" name="l00109"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212">  109</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212">contains</a>(T x, T y) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00110" name="l00110"></a><span class="lineno">  110</span> </div>
<div class="line"><a id="l00124" name="l00124"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a45c77c073a7a4d9232218ab2838f41bb">  124</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Rect.php#a45c77c073a7a4d9232218ab2838f41bb">contains</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; point) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00125" name="l00125"></a><span class="lineno">  125</span> </div>
<div class="line"><a id="l00136" name="l00136"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13">  136</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13">intersects</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; rectangle) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00137" name="l00137"></a><span class="lineno">  137</span> </div>
<div class="line"><a id="l00152" name="l00152"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#ad512c4a1127279e2d7464d0ace62500d">  152</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1Rect.php#ad512c4a1127279e2d7464d0ace62500d">intersects</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; rectangle, <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; intersection) <span class="keyword">const</span>;</div>
<div class="line"><a id="l00153" name="l00153"></a><span class="lineno">  153</span> </div>
<div class="line"><a id="l00162" name="l00162"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a846489bc985f7d1655150cad65961bbd">  162</a></span>    <a class="code hl_class" href="classsf_1_1Vector2.php">sf::Vector2&lt;T&gt;</a> <a class="code hl_function" href="classsf_1_1Rect.php#a846489bc985f7d1655150cad65961bbd">getPosition</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00163" name="l00163"></a><span class="lineno">  163</span> </div>
<div class="line"><a id="l00172" name="l00172"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#ab1fd0936386404646ebe708652a66d09">  172</a></span>    <a class="code hl_class" href="classsf_1_1Vector2.php">sf::Vector2&lt;T&gt;</a> <a class="code hl_function" href="classsf_1_1Rect.php#ab1fd0936386404646ebe708652a66d09">getSize</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00173" name="l00173"></a><span class="lineno">  173</span> </div>
<div class="line"><a id="l00175" name="l00175"></a><span class="lineno">  175</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00177" name="l00177"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">  177</a></span><span class="comment"></span>    T <a class="code hl_variable" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">left</a>;   </div>
<div class="line"><a id="l00178" name="l00178"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">  178</a></span>    T <a class="code hl_variable" href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">top</a>;    </div>
<div class="line"><a id="l00179" name="l00179"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f">  179</a></span>    T <a class="code hl_variable" href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f">width</a>;  </div>
<div class="line"><a id="l00180" name="l00180"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd">  180</a></span>    T <a class="code hl_variable" href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd">height</a>; </div>
<div class="line"><a id="l00181" name="l00181"></a><span class="lineno">  181</span>};</div>
<div class="line"><a id="l00182" name="l00182"></a><span class="lineno">  182</span> </div>
<div class="line"><a id="l00195" name="l00195"></a><span class="lineno">  195</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00196" name="l00196"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#ab3488b5dbd0e587c4d7cb80605affc46">  196</a></span><span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00197" name="l00197"></a><span class="lineno">  197</span> </div>
<div class="line"><a id="l00210" name="l00210"></a><span class="lineno">  210</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00211" name="l00211"></a><span class="lineno"><a class="line" href="classsf_1_1Rect.php#a03fc4c105687b7d0f07b6b4ed4b45581">  211</a></span><span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00212" name="l00212"></a><span class="lineno">  212</span> </div>
<div class="line"><a id="l00213" name="l00213"></a><span class="lineno">  213</span><span class="preprocessor">#include &lt;SFML/Graphics/Rect.inl&gt;</span></div>
<div class="line"><a id="l00214" name="l00214"></a><span class="lineno">  214</span> </div>
<div class="line"><a id="l00215" name="l00215"></a><span class="lineno">  215</span><span class="comment">// Create typedefs for the most common types</span></div>
<div class="line"><a id="l00216" name="l00216"></a><span class="lineno">  216</span><span class="keyword">typedef</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;int&gt;</a>   <a class="code hl_class" href="classsf_1_1Rect.php">IntRect</a>;</div>
<div class="line"><a id="l00217" name="l00217"></a><span class="lineno">  217</span><span class="keyword">typedef</span> <a class="code hl_class" href="classsf_1_1Rect.php">Rect&lt;float&gt;</a> <a class="code hl_class" href="classsf_1_1Rect.php">FloatRect</a>;</div>
<div class="line"><a id="l00218" name="l00218"></a><span class="lineno">  218</span> </div>
<div class="line"><a id="l00219" name="l00219"></a><span class="lineno">  219</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00220" name="l00220"></a><span class="lineno">  220</span> </div>
<div class="line"><a id="l00221" name="l00221"></a><span class="lineno">  221</span> </div>
<div class="line"><a id="l00222" name="l00222"></a><span class="lineno">  222</span><span class="preprocessor">#endif </span><span class="comment">// SFML_RECT_HPP</span></div>
<div class="line"><a id="l00223" name="l00223"></a><span class="lineno">  223</span> </div>
<div class="line"><a id="l00224" name="l00224"></a><span class="lineno">  224</span> </div>
<div class="ttc" id="aclasssf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect</a></div><div class="ttdoc">Utility class for manipulating 2D axis aligned rectangles.</div><div class="ttdef"><b>Definition:</b> <a href="Rect_8hpp_source.php#l00042">Rect.hpp:43</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a0f87ebaef9722a6222fd2e04ce8efb37"><div class="ttname"><a href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37">sf::Rect::Rect</a></div><div class="ttdeci">Rect()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a15cdbc5a1aed3a8fc7be1bd5004f19f9"><div class="ttname"><a href="classsf_1_1Rect.php#a15cdbc5a1aed3a8fc7be1bd5004f19f9">sf::Rect::Rect</a></div><div class="ttdeci">Rect(T rectLeft, T rectTop, T rectWidth, T rectHeight)</div><div class="ttdoc">Construct the rectangle from its coordinates.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a27fdf85caa6d12caeeff78913cc59936"><div class="ttname"><a href="classsf_1_1Rect.php#a27fdf85caa6d12caeeff78913cc59936">sf::Rect::Rect</a></div><div class="ttdeci">Rect(const Vector2&lt; T &gt; &amp;position, const Vector2&lt; T &gt; &amp;size)</div><div class="ttdoc">Construct the rectangle from position and size.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a45c77c073a7a4d9232218ab2838f41bb"><div class="ttname"><a href="classsf_1_1Rect.php#a45c77c073a7a4d9232218ab2838f41bb">sf::Rect::contains</a></div><div class="ttdeci">bool contains(const Vector2&lt; T &gt; &amp;point) const</div><div class="ttdoc">Check if a point is inside the rectangle's area.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a4dd5b9d4333bebbc51bd309298fd500f"><div class="ttname"><a href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f">sf::Rect::width</a></div><div class="ttdeci">T width</div><div class="ttdoc">Width of the rectangle.</div><div class="ttdef"><b>Definition:</b> <a href="Rect_8hpp_source.php#l00179">Rect.hpp:179</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a6fa0fc7de1636d78cae1a1b54eef95cd"><div class="ttname"><a href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd">sf::Rect::height</a></div><div class="ttdeci">T height</div><div class="ttdoc">Height of the rectangle.</div><div class="ttdef"><b>Definition:</b> <a href="Rect_8hpp_source.php#l00180">Rect.hpp:180</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a6fff2bb7e93677839461a66bc2957de0"><div class="ttname"><a href="classsf_1_1Rect.php#a6fff2bb7e93677839461a66bc2957de0">sf::Rect::Rect</a></div><div class="ttdeci">Rect(const Rect&lt; U &gt; &amp;rectangle)</div><div class="ttdoc">Construct the rectangle from another type of rectangle.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a846489bc985f7d1655150cad65961bbd"><div class="ttname"><a href="classsf_1_1Rect.php#a846489bc985f7d1655150cad65961bbd">sf::Rect::getPosition</a></div><div class="ttdeci">sf::Vector2&lt; T &gt; getPosition() const</div><div class="ttdoc">Get the position of the rectangle's top-left corner.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_a910b998c92756157e1407e1363f93212"><div class="ttname"><a href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212">sf::Rect::contains</a></div><div class="ttdeci">bool contains(T x, T y) const</div><div class="ttdoc">Check if a point is inside the rectangle's area.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_aa49960fa465103d9cb7069ceb25c7c32"><div class="ttname"><a href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">sf::Rect::left</a></div><div class="ttdeci">T left</div><div class="ttdoc">Left coordinate of the rectangle.</div><div class="ttdef"><b>Definition:</b> <a href="Rect_8hpp_source.php#l00177">Rect.hpp:177</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_ab1fd0936386404646ebe708652a66d09"><div class="ttname"><a href="classsf_1_1Rect.php#ab1fd0936386404646ebe708652a66d09">sf::Rect::getSize</a></div><div class="ttdeci">sf::Vector2&lt; T &gt; getSize() const</div><div class="ttdoc">Get the size of the rectangle.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_abd3d3a2d0ad211ef0082bd0aa1a5c0e3"><div class="ttname"><a href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">sf::Rect::top</a></div><div class="ttdeci">T top</div><div class="ttdoc">Top coordinate of the rectangle.</div><div class="ttdef"><b>Definition:</b> <a href="Rect_8hpp_source.php#l00178">Rect.hpp:178</a></div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_ac77531698f39203e4bbe023097bb6a13"><div class="ttname"><a href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13">sf::Rect::intersects</a></div><div class="ttdeci">bool intersects(const Rect&lt; T &gt; &amp;rectangle) const</div><div class="ttdoc">Check the intersection between two rectangles.</div></div>
<div class="ttc" id="aclasssf_1_1Rect_php_ad512c4a1127279e2d7464d0ace62500d"><div class="ttname"><a href="classsf_1_1Rect.php#ad512c4a1127279e2d7464d0ace62500d">sf::Rect::intersects</a></div><div class="ttdeci">bool intersects(const Rect&lt; T &gt; &amp;rectangle, Rect&lt; T &gt; &amp;intersection) const</div><div class="ttdoc">Check the intersection between two rectangles.</div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2</a></div><div class="ttdoc">Utility template class for manipulating 2-dimensional vectors.</div><div class="ttdef"><b>Definition:</b> <a href="Vector2_8hpp_source.php#l00037">Vector2.hpp:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
