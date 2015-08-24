<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Color.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">Color.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div>
<div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php">   40</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a></div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>();</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>(Uint8 red, Uint8 green, Uint8 blue, Uint8 alpha = 255);</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Color.php">Color</a>(Uint32 color);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;    Uint32 toInteger() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00083"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">   83</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">Black</a>;       </div>
<div class="line"><a name="l00084"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca">   84</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca">White</a>;       </div>
<div class="line"><a name="l00085"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a">   85</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a">Red</a>;         </div>
<div class="line"><a name="l00086"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865">   86</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865">Green</a>;       </div>
<div class="line"><a name="l00087"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c">   87</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c">Blue</a>;        </div>
<div class="line"><a name="l00088"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7">   88</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7">Yellow</a>;      </div>
<div class="line"><a name="l00089"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c">   89</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c">Magenta</a>;     </div>
<div class="line"><a name="l00090"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340">   90</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340">Cyan</a>;        </div>
<div class="line"><a name="l00091"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a569b45471737f770656f50ae7bbac292">   91</a></span>&#160;    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a> <a class="code" href="classsf_1_1Color.php#a569b45471737f770656f50ae7bbac292">Transparent</a>; </div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00096"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1">   96</a></span>&#160;<span class="comment"></span>    Uint8 <a class="code" href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1">r</a>; </div>
<div class="line"><a name="l00097"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5">   97</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5">g</a>; </div>
<div class="line"><a name="l00098"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb">   98</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb">b</a>; </div>
<div class="line"><a name="l00099"></a><span class="lineno"><a class="line" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">   99</a></span>&#160;    Uint8 <a class="code" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">a</a>; </div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;};</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;SFML_GRAPHICS_API <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a> operator +(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a> operator -(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a> operator *(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;</div>
<div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a>&amp; operator +=(<a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a>&amp; operator -=(<a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;SFML_GRAPHICS_API <a class="code" href="classsf_1_1Color.php">Color</a>&amp; operator *=(<a class="code" href="classsf_1_1Color.php">Color</a>&amp; left, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; right);</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div>
<div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div>
<div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div>
<div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;<span class="preprocessor">#endif // SFML_COLOR_HPP</span></div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div>
<div class="ttc" id="classsf_1_1Color_php_a4fd874712178d9e206f53226002aa4ca"><div class="ttname"><a href="classsf_1_1Color.php#a4fd874712178d9e206f53226002aa4ca">sf::Color::White</a></div><div class="ttdeci">static const Color White</div><div class="ttdoc">White predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00084">Color.hpp:84</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a591daf9c3c55dea830c76c962d6ba1a5"><div class="ttname"><a href="classsf_1_1Color.php#a591daf9c3c55dea830c76c962d6ba1a5">sf::Color::g</a></div><div class="ttdeci">Uint8 g</div><div class="ttdoc">Green component. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00097">Color.hpp:97</a></div></div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a6707aedd0609c8920e12df5d7abc53cb"><div class="ttname"><a href="classsf_1_1Color.php#a6707aedd0609c8920e12df5d7abc53cb">sf::Color::b</a></div><div class="ttdeci">Uint8 b</div><div class="ttdoc">Blue component. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00098">Color.hpp:98</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_ab03770d4817426b2614cfc33cf0e245c"><div class="ttname"><a href="classsf_1_1Color.php#ab03770d4817426b2614cfc33cf0e245c">sf::Color::Blue</a></div><div class="ttdeci">static const Color Blue</div><div class="ttdoc">Blue predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00087">Color.hpp:87</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a127dbf55db9c07d0fa8f4bfcbb97594a"><div class="ttname"><a href="classsf_1_1Color.php#a127dbf55db9c07d0fa8f4bfcbb97594a">sf::Color::Red</a></div><div class="ttdeci">static const Color Red</div><div class="ttdoc">Red predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00085">Color.hpp:85</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a95629b30de8c6856aa7d3afed12eb865"><div class="ttname"><a href="classsf_1_1Color.php#a95629b30de8c6856aa7d3afed12eb865">sf::Color::Green</a></div><div class="ttdeci">static const Color Green</div><div class="ttdoc">Green predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00086">Color.hpp:86</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a6a5256ca24a4f9f0e0808f6fc23e01e1"><div class="ttname"><a href="classsf_1_1Color.php#a6a5256ca24a4f9f0e0808f6fc23e01e1">sf::Color::r</a></div><div class="ttdeci">Uint8 r</div><div class="ttdoc">Red component. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00096">Color.hpp:96</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a569b45471737f770656f50ae7bbac292"><div class="ttname"><a href="classsf_1_1Color.php#a569b45471737f770656f50ae7bbac292">sf::Color::Transparent</a></div><div class="ttdeci">static const Color Transparent</div><div class="ttdoc">Transparent (black) predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00091">Color.hpp:91</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a64ae9beb0b9a5865dd811cda4bb18340"><div class="ttname"><a href="classsf_1_1Color.php#a64ae9beb0b9a5865dd811cda4bb18340">sf::Color::Cyan</a></div><div class="ttdeci">static const Color Cyan</div><div class="ttdoc">Cyan predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00090">Color.hpp:90</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a56dbdb47d5f040d9b78ac6a0b8b3a831"><div class="ttname"><a href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">sf::Color::a</a></div><div class="ttdeci">Uint8 a</div><div class="ttdoc">Alpha (opacity) component. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00099">Color.hpp:99</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a77c688197b981338f0b19dc58bd2facd"><div class="ttname"><a href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">sf::Color::Black</a></div><div class="ttdeci">static const Color Black</div><div class="ttdoc">Black predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00083">Color.hpp:83</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_af8896b5f56650935f5b9d72d528802c7"><div class="ttname"><a href="classsf_1_1Color.php#af8896b5f56650935f5b9d72d528802c7">sf::Color::Yellow</a></div><div class="ttdeci">static const Color Yellow</div><div class="ttdoc">Yellow predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00088">Color.hpp:88</a></div></div>
<div class="ttc" id="classsf_1_1Color_php_a6fe70d90b65b2163dd066a84ac00426c"><div class="ttname"><a href="classsf_1_1Color.php#a6fe70d90b65b2163dd066a84ac00426c">sf::Color::Magenta</a></div><div class="ttdeci">static const Color Magenta</div><div class="ttdoc">Magenta predefined color. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00089">Color.hpp:89</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
