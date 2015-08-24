<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Joystick.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_c6bbad27641286b84fe3bd1ab85ed533.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Joystick.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_JOYSTICK_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_JOYSTICK_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Window/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;{</div>
<div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php">   41</a></span>&#160;<span class="keyword">class </span>SFML_WINDOW_API <a class="code" href="classsf_1_1Joystick.php">Joystick</a></div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="keyword">enum</span></div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    {</div>
<div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a6e0a2a95bc1da277610c04d80f52715e">   51</a></span>&#160;        Count       = 8,  </div>
<div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65a2f1b8a0a59f2c12a4775c0e1e69e1816">   52</a></span>&#160;        ButtonCount = 32, </div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a951a7c775921304a5f3443c6e2bb4d65accf3e487c9f6ee2f384351323626a42c">   53</a></span>&#160;        AxisCount   = 8   </div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    };</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">   60</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a></div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    {</div>
<div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">   62</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">X</a>,    </div>
<div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">   63</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">Y</a>,    </div>
<div class="line"><a name="l00064"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">   64</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">Z</a>,    </div>
<div class="line"><a name="l00065"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">   65</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">R</a>,    </div>
<div class="line"><a name="l00066"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">   66</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">U</a>,    </div>
<div class="line"><a name="l00067"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">   67</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">V</a>,    </div>
<div class="line"><a name="l00068"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">   68</a></span>&#160;        <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">PovX</a>, </div>
<div class="line"><a name="l00069"></a><span class="lineno"><a class="line" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0f8ffb2dcddf91b98ab910a4f8327ad9">   69</a></span>&#160;        PovY  </div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    };</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00076"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php">   76</a></span>&#160;    <span class="keyword">struct </span>SFML_WINDOW_API <a class="code" href="structsf_1_1Joystick_1_1Identification.php">Identification</a></div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    {</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        <a class="code" href="structsf_1_1Joystick_1_1Identification.php">Identification</a>();</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;</div>
<div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">   80</a></span>&#160;        <a class="code" href="classsf_1_1String.php">String</a>       <a class="code" href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">name</a>;      </div>
<div class="line"><a name="l00081"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">   81</a></span>&#160;        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">vendorId</a>;  </div>
<div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">   82</a></span>&#160;        <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">productId</a>; </div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    };</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isConnected(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getButtonCount(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> hasAxis(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis);</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isButtonPressed(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> button);</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">float</span> getAxisPosition(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick, <a class="code" href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">Axis</a> axis);</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;</div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;    <span class="keyword">static</span> <a class="code" href="structsf_1_1Joystick_1_1Identification.php">Identification</a> getIdentification(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> joystick);</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> update();</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;};</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;<span class="preprocessor">#endif // SFML_JOYSTICK_HPP</span></div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;</div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a06420f7714e4dfd8b841885a0b5f3954">sf::Joystick::PovX</a></div><div class="ttdoc">The X axis of the point-of-view hat. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00068">Joystick.hpp:68</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a7c37a1240b2dafbbfc5c1a0e23911315">sf::Joystick::Z</a></div><div class="ttdoc">The Z axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00064">Joystick.hpp:64</a></div></div>
<div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00044">String.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aa2e2c8ffa1837e7911ee0c7d045bf8f4">sf::Joystick::V</a></div><div class="ttdoc">The V axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00067">Joystick.hpp:67</a></div></div>
<div class="ttc" id="structsf_1_1Joystick_1_1Identification_php_a135a9a3a4dc11c2b5cde51159b4d136d"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a135a9a3a4dc11c2b5cde51159b4d136d">sf::Joystick::Identification::name</a></div><div class="ttdeci">String name</div><div class="ttdoc">Name of the joystick. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00080">Joystick.hpp:80</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a51ef1455f7511ad4a78ba241d66593ce">sf::Joystick::Y</a></div><div class="ttdoc">The Y axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00063">Joystick.hpp:63</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php"><div class="ttname"><a href="classsf_1_1Joystick.php">sf::Joystick</a></div><div class="ttdoc">Give access to the real-time state of the joysticks. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00041">Joystick.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7">sf::Joystick::Axis</a></div><div class="ttdeci">Axis</div><div class="ttdoc">Axes supported by SFML joysticks. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00060">Joystick.hpp:60</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a95dc8b9bf7b0a2157fc67891c54c401e">sf::Joystick::X</a></div><div class="ttdoc">The X axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00062">Joystick.hpp:62</a></div></div>
<div class="ttc" id="structsf_1_1Joystick_1_1Identification_php"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php">sf::Joystick::Identification</a></div><div class="ttdoc">Structure holding a joystick&#39;s identification. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00076">Joystick.hpp:76</a></div></div>
<div class="ttc" id="structsf_1_1Joystick_1_1Identification_php_a18c21317789f51f9a5f132677727ff77"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a18c21317789f51f9a5f132677727ff77">sf::Joystick::Identification::productId</a></div><div class="ttdeci">unsigned int productId</div><div class="ttdoc">Product identifier. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00082">Joystick.hpp:82</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7aeebbcdb0828850f4d69e6a084801fab8">sf::Joystick::R</a></div><div class="ttdoc">The R axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00065">Joystick.hpp:65</a></div></div>
<div class="ttc" id="structsf_1_1Joystick_1_1Identification_php_a827caf37a56492e3430e5ca6b15b5e9f"><div class="ttname"><a href="structsf_1_1Joystick_1_1Identification.php#a827caf37a56492e3430e5ca6b15b5e9f">sf::Joystick::Identification::vendorId</a></div><div class="ttdeci">unsigned int vendorId</div><div class="ttdoc">Manufacturer identifier. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00081">Joystick.hpp:81</a></div></div>
<div class="ttc" id="classsf_1_1Joystick_php_a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214"><div class="ttname"><a href="classsf_1_1Joystick.php#a48db337092c2e263774f94de6d50baa7a0a901f61e75292dd2f642b6e4f33a214">sf::Joystick::U</a></div><div class="ttdoc">The U axis. </div><div class="ttdef"><b>Definition:</b> <a href="Joystick_8hpp_source.php#l00066">Joystick.hpp:66</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
