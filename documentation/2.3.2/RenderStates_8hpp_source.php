<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RenderStates.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">RenderStates.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RENDERSTATES_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_RENDERSTATES_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/BlendMode.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Transform.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>Shader;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>Texture;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>();</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>(<span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; theBlendMode);</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Transform.php">Transform</a>&amp; theTransform);</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* theTexture);</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Shader.php">Shader</a>* theShader);</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;    <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a>(<span class="keyword">const</span> <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>&amp; theBlendMode, <span class="keyword">const</span> <a class="code" href="classsf_1_1Transform.php">Transform</a>&amp; theTransform,</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;                 <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* theTexture, <span class="keyword">const</span> <a class="code" href="classsf_1_1Shader.php">Shader</a>* theShader);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;    <span class="comment">// Static member data</span></div>
<div class="line"><a name="l00110"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php#ad29672df29f19ce50c3021d95f2bb062">  110</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a> <a class="code" href="classsf_1_1RenderStates.php#ad29672df29f19ce50c3021d95f2bb062">Default</a>; </div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00115"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php#ad6ac87f1b5006dae7ebfee4b5d40f5a8">  115</a></span>&#160;<span class="comment"></span>    <a class="code" href="structsf_1_1BlendMode.php">BlendMode</a>      <a class="code" href="classsf_1_1RenderStates.php#ad6ac87f1b5006dae7ebfee4b5d40f5a8">blendMode</a>; </div>
<div class="line"><a name="l00116"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php#a1f737981a0f2f0d4bb8dac866a8d1149">  116</a></span>&#160;    <a class="code" href="classsf_1_1Transform.php">Transform</a>      <a class="code" href="classsf_1_1RenderStates.php#a1f737981a0f2f0d4bb8dac866a8d1149">transform</a>; </div>
<div class="line"><a name="l00117"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">  117</a></span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* <a class="code" href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">texture</a>;   </div>
<div class="line"><a name="l00118"></a><span class="lineno"><a class="line" href="classsf_1_1RenderStates.php#ad4f79ecdd0c60ed0d24fbe555b221bd8">  118</a></span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1Shader.php">Shader</a>*  <a class="code" href="classsf_1_1RenderStates.php#ad4f79ecdd0c60ed0d24fbe555b221bd8">shader</a>;    </div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;};</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;<span class="preprocessor">#endif // SFML_RENDERSTATES_HPP</span></div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div>
<div class="ttc" id="classsf_1_1RenderStates_php_a457fc5a41731889de9cf39cf9b3436c3"><div class="ttname"><a href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">sf::RenderStates::texture</a></div><div class="ttdeci">const Texture * texture</div><div class="ttdoc">Texture. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00117">RenderStates.hpp:117</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php_ad4f79ecdd0c60ed0d24fbe555b221bd8"><div class="ttname"><a href="classsf_1_1RenderStates.php#ad4f79ecdd0c60ed0d24fbe555b221bd8">sf::RenderStates::shader</a></div><div class="ttdeci">const Shader * shader</div><div class="ttdoc">Shader. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00118">RenderStates.hpp:118</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php_a1f737981a0f2f0d4bb8dac866a8d1149"><div class="ttname"><a href="classsf_1_1RenderStates.php#a1f737981a0f2f0d4bb8dac866a8d1149">sf::RenderStates::transform</a></div><div class="ttdeci">Transform transform</div><div class="ttdoc">Transform. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00116">RenderStates.hpp:116</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php_ad29672df29f19ce50c3021d95f2bb062"><div class="ttname"><a href="classsf_1_1RenderStates.php#ad29672df29f19ce50c3021d95f2bb062">sf::RenderStates::Default</a></div><div class="ttdeci">static const RenderStates Default</div><div class="ttdoc">Special instance holding the default render states. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00110">RenderStates.hpp:110</a></div></div>
<div class="ttc" id="classsf_1_1Transform_php"><div class="ttname"><a href="classsf_1_1Transform.php">sf::Transform</a></div><div class="ttdoc">Define a 3x3 transform matrix. </div><div class="ttdef"><b>Definition:</b> <a href="Transform_8hpp_source.php#l00042">Transform.hpp:42</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00047">Texture.hpp:47</a></div></div>
<div class="ttc" id="structsf_1_1BlendMode_php"><div class="ttname"><a href="structsf_1_1BlendMode.php">sf::BlendMode</a></div><div class="ttdoc">Blending modes for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="BlendMode_8hpp_source.php#l00041">BlendMode.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php"><div class="ttname"><a href="classsf_1_1Shader.php">sf::Shader</a></div><div class="ttdoc">Shader class (vertex and fragment) </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00051">Shader.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php_ad6ac87f1b5006dae7ebfee4b5d40f5a8"><div class="ttname"><a href="classsf_1_1RenderStates.php#ad6ac87f1b5006dae7ebfee4b5d40f5a8">sf::RenderStates::blendMode</a></div><div class="ttdeci">BlendMode blendMode</div><div class="ttdoc">Blending mode. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00115">RenderStates.hpp:115</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
