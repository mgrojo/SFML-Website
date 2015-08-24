<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Shape.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<div class="title">Shape.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SHAPE_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SHAPE_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Transformable.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/VertexArray.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="classsf_1_1Shape.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Shape.php">Shape</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php">Drawable</a>, <span class="keyword">public</span> <a class="code" href="classsf_1_1Transformable.php">Transformable</a></div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1Shape.php">Shape</a>();</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    <span class="keywordtype">void</span> setTexture(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* texture, <span class="keywordtype">bool</span> resetRect = <span class="keyword">false</span>);</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;    <span class="keywordtype">void</span> setTextureRect(<span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; rect);</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="keywordtype">void</span> setFillColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;    <span class="keywordtype">void</span> setOutlineColor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;    <span class="keywordtype">void</span> setOutlineThickness(<span class="keywordtype">float</span> thickness);</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* getTexture() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; getTextureRect() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getFillColor() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; getOutlineColor() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keywordtype">float</span> getOutlineThickness() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div>
<div class="line"><a name="l00196"></a><span class="lineno">  196</span>&#160;    <span class="keyword">virtual</span> std::size_t getPointCount() <span class="keyword">const</span> = 0;</div>
<div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    <span class="keyword">virtual</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a> getPoint(std::size_t index) <span class="keyword">const</span> = 0;</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div>
<div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getLocalBounds() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div>
<div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a> getGlobalBounds() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;</div>
<div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;</div>
<div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;    <a class="code" href="classsf_1_1Shape.php">Shape</a>();</div>
<div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;</div>
<div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;    <span class="keywordtype">void</span> update();</div>
<div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;</div>
<div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;</div>
<div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div>
<div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;</div>
<div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;    <span class="keywordtype">void</span> updateFillColors();</div>
<div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;</div>
<div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;    <span class="keywordtype">void</span> updateTexCoords();</div>
<div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;</div>
<div class="line"><a name="l00295"></a><span class="lineno">  295</span>&#160;    <span class="keywordtype">void</span> updateOutline();</div>
<div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;</div>
<div class="line"><a name="l00301"></a><span class="lineno">  301</span>&#160;    <span class="keywordtype">void</span> updateOutlineColors();</div>
<div class="line"><a name="l00302"></a><span class="lineno">  302</span>&#160;</div>
<div class="line"><a name="l00303"></a><span class="lineno">  303</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;</div>
<div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;<span class="comment"></span>    <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* m_texture;          </div>
<div class="line"><a name="l00309"></a><span class="lineno">  309</span>&#160;    <a class="code" href="classsf_1_1Rect.php">IntRect</a>        m_textureRect;      </div>
<div class="line"><a name="l00310"></a><span class="lineno">  310</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>          m_fillColor;        </div>
<div class="line"><a name="l00311"></a><span class="lineno">  311</span>&#160;    <a class="code" href="classsf_1_1Color.php">Color</a>          m_outlineColor;     </div>
<div class="line"><a name="l00312"></a><span class="lineno">  312</span>&#160;    <span class="keywordtype">float</span>          m_outlineThickness; </div>
<div class="line"><a name="l00313"></a><span class="lineno">  313</span>&#160;    <a class="code" href="classsf_1_1VertexArray.php">VertexArray</a>    m_vertices;         </div>
<div class="line"><a name="l00314"></a><span class="lineno">  314</span>&#160;    <a class="code" href="classsf_1_1VertexArray.php">VertexArray</a>    m_outlineVertices;  </div>
<div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a>      m_insideBounds;     </div>
<div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;    <a class="code" href="classsf_1_1Rect.php">FloatRect</a>      m_bounds;           </div>
<div class="line"><a name="l00317"></a><span class="lineno">  317</span>&#160;};</div>
<div class="line"><a name="l00318"></a><span class="lineno">  318</span>&#160;</div>
<div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00320"></a><span class="lineno">  320</span>&#160;</div>
<div class="line"><a name="l00321"></a><span class="lineno">  321</span>&#160;</div>
<div class="line"><a name="l00322"></a><span class="lineno">  322</span>&#160;<span class="preprocessor">#endif // SFML_SHAPE_HPP</span></div>
<div class="line"><a name="l00323"></a><span class="lineno">  323</span>&#160;</div>
<div class="line"><a name="l00324"></a><span class="lineno">  324</span>&#160;</div>
<div class="ttc" id="classsf_1_1Transformable_php"><div class="ttname"><a href="classsf_1_1Transformable.php">sf::Transformable</a></div><div class="ttdoc">Decomposed transform defined by a position, a rotation and a scale. </div><div class="ttdef"><b>Definition:</b> <a href="Transformable_8hpp_source.php#l00041">Transformable.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Shape_php"><div class="ttname"><a href="classsf_1_1Shape.php">sf::Shape</a></div><div class="ttdoc">Base class for textured shapes with outline. </div><div class="ttdef"><b>Definition:</b> <a href="Shape_8hpp_source.php#l00044">Shape.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1VertexArray_php"><div class="ttname"><a href="classsf_1_1VertexArray.php">sf::VertexArray</a></div><div class="ttdoc">Define a set of one or more 2D primitives. </div><div class="ttdef"><b>Definition:</b> <a href="VertexArray_8hpp_source.php#l00045">VertexArray.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00047">Texture.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00051">RenderTarget.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
