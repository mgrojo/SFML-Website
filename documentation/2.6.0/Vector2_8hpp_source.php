<?php
    $version = '2.6.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Vector2.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_dd2e492ad64d241b969bca3fa8d4cd6d.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">Vector2.hpp</div></div>
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
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_VECTOR2_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_VECTOR2_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00028" name="l00028"></a><span class="lineno">   28</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00030" name="l00030"></a><span class="lineno">   30</span>{</div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php">   37</a></span><span class="keyword">class </span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2</a></div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span>{</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00040" name="l00040"></a><span class="lineno">   40</span> </div>
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">   47</a></span>    <a class="code hl_function" href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">Vector2</a>();</div>
<div class="line"><a id="l00048" name="l00048"></a><span class="lineno">   48</span> </div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#aed26a72164e59e8a4a0aeee2049568f1">   56</a></span>    <a class="code hl_function" href="classsf_1_1Vector2.php#aed26a72164e59e8a4a0aeee2049568f1">Vector2</a>(T X, T Y);</div>
<div class="line"><a id="l00057" name="l00057"></a><span class="lineno">   57</span> </div>
<div class="line"><a id="l00069" name="l00069"></a><span class="lineno">   69</span>    <span class="keyword">template</span> &lt;<span class="keyword">typename</span> U&gt;</div>
<div class="line"><a id="l00070" name="l00070"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a3da455e0ae3f8ff6d2fe36d10b332d10">   70</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1Vector2.php#a3da455e0ae3f8ff6d2fe36d10b332d10">Vector2</a>(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;U&gt;</a>&amp; vector);</div>
<div class="line"><a id="l00071" name="l00071"></a><span class="lineno">   71</span> </div>
<div class="line"><a id="l00073" name="l00073"></a><span class="lineno">   73</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00075" name="l00075"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a1e6ad77fa155f3753bfb92699bd28141">   75</a></span><span class="comment"></span>    T <a class="code hl_variable" href="classsf_1_1Vector2.php#a1e6ad77fa155f3753bfb92699bd28141">x</a>; </div>
<div class="line"><a id="l00076" name="l00076"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a420f2481b015f4eb929c75f2af564299">   76</a></span>    T <a class="code hl_variable" href="classsf_1_1Vector2.php#a420f2481b015f4eb929c75f2af564299">y</a>; </div>
<div class="line"><a id="l00077" name="l00077"></a><span class="lineno">   77</span>};</div>
<div class="line"><a id="l00078" name="l00078"></a><span class="lineno">   78</span> </div>
<div class="line"><a id="l00088" name="l00088"></a><span class="lineno">   88</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00089" name="l00089"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a3885c2e66dc427cec7eaa178d59d8e8b">   89</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00090" name="l00090"></a><span class="lineno">   90</span> </div>
<div class="line"><a id="l00104" name="l00104"></a><span class="lineno">  104</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00105" name="l00105"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#ad4b7a9d355d57790bfc7df0ade8bb628">  105</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; operator +=(<a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00106" name="l00106"></a><span class="lineno">  106</span> </div>
<div class="line"><a id="l00120" name="l00120"></a><span class="lineno">  120</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00121" name="l00121"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a30a5a12ad03c9a3a982a0a313bf84e6f">  121</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; operator -=(<a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00122" name="l00122"></a><span class="lineno">  122</span> </div>
<div class="line"><a id="l00133" name="l00133"></a><span class="lineno">  133</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00134" name="l00134"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a72421239823c38a6b780c86a710ead07">  134</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator +(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00135" name="l00135"></a><span class="lineno">  135</span> </div>
<div class="line"><a id="l00146" name="l00146"></a><span class="lineno">  146</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00147" name="l00147"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#ad027adae53ec547a86c20deeb05c9e85">  147</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator -(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00148" name="l00148"></a><span class="lineno">  148</span> </div>
<div class="line"><a id="l00159" name="l00159"></a><span class="lineno">  159</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00160" name="l00160"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a5f48ca928995b41c89f155afe8d16b02">  160</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator *(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, T right);</div>
<div class="line"><a id="l00161" name="l00161"></a><span class="lineno">  161</span> </div>
<div class="line"><a id="l00172" name="l00172"></a><span class="lineno">  172</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00173" name="l00173"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#ad8b3e1cf7b156a984bc1427539ca8605">  173</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator *(T left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00174" name="l00174"></a><span class="lineno">  174</span> </div>
<div class="line"><a id="l00188" name="l00188"></a><span class="lineno">  188</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00189" name="l00189"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#abea24cb28c0d6e2957e259ba4e65d70e">  189</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; operator *=(<a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, T right);</div>
<div class="line"><a id="l00190" name="l00190"></a><span class="lineno">  190</span> </div>
<div class="line"><a id="l00201" name="l00201"></a><span class="lineno">  201</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00202" name="l00202"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a7409dd89cb3aad6c3bc6622311107311">  202</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a> operator /(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, T right);</div>
<div class="line"><a id="l00203" name="l00203"></a><span class="lineno">  203</span> </div>
<div class="line"><a id="l00217" name="l00217"></a><span class="lineno">  217</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00218" name="l00218"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#ac4d293c9dc7954ccfd5e373972f38b03">  218</a></span><a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; operator /=(<a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, T right);</div>
<div class="line"><a id="l00219" name="l00219"></a><span class="lineno">  219</span> </div>
<div class="line"><a id="l00232" name="l00232"></a><span class="lineno">  232</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00233" name="l00233"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a9a7b2d36c3850828fdb651facfd25136">  233</a></span><span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00234" name="l00234"></a><span class="lineno">  234</span> </div>
<div class="line"><a id="l00247" name="l00247"></a><span class="lineno">  247</span><span class="keyword">template</span> &lt;<span class="keyword">typename</span> T&gt;</div>
<div class="line"><a id="l00248" name="l00248"></a><span class="lineno"><a class="line" href="classsf_1_1Vector2.php#a01673da35ef9c52d0e54b8263549a956">  248</a></span><span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; left, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;T&gt;</a>&amp; right);</div>
<div class="line"><a id="l00249" name="l00249"></a><span class="lineno">  249</span> </div>
<div class="line"><a id="l00250" name="l00250"></a><span class="lineno">  250</span><span class="preprocessor">#include &lt;SFML/System/Vector2.inl&gt;</span></div>
<div class="line"><a id="l00251" name="l00251"></a><span class="lineno">  251</span> </div>
<div class="line"><a id="l00252" name="l00252"></a><span class="lineno">  252</span><span class="comment">// Define the most common types</span></div>
<div class="line"><a id="l00253" name="l00253"></a><span class="lineno">  253</span><span class="keyword">typedef</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;int&gt;</a>          <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2i</a>;</div>
<div class="line"><a id="l00254" name="l00254"></a><span class="lineno">  254</span><span class="keyword">typedef</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;unsigned int&gt;</a> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2u</a>;</div>
<div class="line"><a id="l00255" name="l00255"></a><span class="lineno">  255</span><span class="keyword">typedef</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2&lt;float&gt;</a>        <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2f</a>;</div>
<div class="line"><a id="l00256" name="l00256"></a><span class="lineno">  256</span> </div>
<div class="line"><a id="l00257" name="l00257"></a><span class="lineno">  257</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00258" name="l00258"></a><span class="lineno">  258</span> </div>
<div class="line"><a id="l00259" name="l00259"></a><span class="lineno">  259</span> </div>
<div class="line"><a id="l00260" name="l00260"></a><span class="lineno">  260</span><span class="preprocessor">#endif </span><span class="comment">// SFML_VECTOR2_HPP</span></div>
<div class="line"><a id="l00261" name="l00261"></a><span class="lineno">  261</span> </div>
<div class="line"><a id="l00262" name="l00262"></a><span class="lineno">  262</span> </div>
<div class="ttc" id="aclasssf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2</a></div><div class="ttdoc">Utility template class for manipulating 2-dimensional vectors.</div><div class="ttdef"><b>Definition:</b> <a href="Vector2_8hpp_source.php#l00037">Vector2.hpp:38</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php_a1e6ad77fa155f3753bfb92699bd28141"><div class="ttname"><a href="classsf_1_1Vector2.php#a1e6ad77fa155f3753bfb92699bd28141">sf::Vector2::x</a></div><div class="ttdeci">T x</div><div class="ttdoc">X coordinate of the vector.</div><div class="ttdef"><b>Definition:</b> <a href="Vector2_8hpp_source.php#l00075">Vector2.hpp:75</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php_a3da455e0ae3f8ff6d2fe36d10b332d10"><div class="ttname"><a href="classsf_1_1Vector2.php#a3da455e0ae3f8ff6d2fe36d10b332d10">sf::Vector2::Vector2</a></div><div class="ttdeci">Vector2(const Vector2&lt; U &gt; &amp;vector)</div><div class="ttdoc">Construct the vector from another type of vector.</div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php_a420f2481b015f4eb929c75f2af564299"><div class="ttname"><a href="classsf_1_1Vector2.php#a420f2481b015f4eb929c75f2af564299">sf::Vector2::y</a></div><div class="ttdeci">T y</div><div class="ttdoc">Y coordinate of the vector.</div><div class="ttdef"><b>Definition:</b> <a href="Vector2_8hpp_source.php#l00076">Vector2.hpp:76</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php_a58c32383b5291380db4b43a289f75988"><div class="ttname"><a href="classsf_1_1Vector2.php#a58c32383b5291380db4b43a289f75988">sf::Vector2::Vector2</a></div><div class="ttdeci">Vector2()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php_aed26a72164e59e8a4a0aeee2049568f1"><div class="ttname"><a href="classsf_1_1Vector2.php#aed26a72164e59e8a4a0aeee2049568f1">sf::Vector2::Vector2</a></div><div class="ttdeci">Vector2(T X, T Y)</div><div class="ttdoc">Construct the vector from its coordinates.</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
