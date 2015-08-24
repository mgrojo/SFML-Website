<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'ContextSettings.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">ContextSettings.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_CONTEXTSETTINGS_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_CONTEXTSETTINGS_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div>
<div class="line"><a name="l00036"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php">   36</a></span>&#160;<span class="keyword">struct </span><a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2c">   42</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2c">Attribute</a></div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;    {</div>
<div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cabf868dcb751b909bf031484ed42a93bb">   44</a></span>&#160;        <a class="code" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cabf868dcb751b909bf031484ed42a93bb">Default</a> = 0,      </div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cacb581130734cbd87cbbc9438429f4a8b">   45</a></span>&#160;        <a class="code" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cacb581130734cbd87cbbc9438429f4a8b">Core</a>    = 1 &lt;&lt; 0, </div>
<div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2ca6043f67afb3d48918d5336474eabaafc">   46</a></span>&#160;        <a class="code" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2ca6043f67afb3d48918d5336474eabaafc">Debug</a>   = 1 &lt;&lt; 2  </div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    };</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#aa0174eb022a15d951837297fba753186">   60</a></span>&#160;    <span class="keyword">explicit</span> <a class="code" href="structsf_1_1ContextSettings.php#aa0174eb022a15d951837297fba753186">ContextSettings</a>(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> depth = 0, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> stencil = 0, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> antialiasing = 0, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> major = 1, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> minor = 1, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> attributes = <a class="code" href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cabf868dcb751b909bf031484ed42a93bb">Default</a>) :</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#a4809e22089c2af7276b8809b5aede7bb">depthBits</a>        (depth),</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#ac2e788c201ca20e84fd38a28071abd29">stencilBits</a>      (stencil),</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#ac4a097be18994dba38d73f36b0418bdc">antialiasingLevel</a>(antialiasing),</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#a99a680d5c15a7e34c935654155dd5166">majorVersion</a>     (major),</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#aaeb0efe9d2658b840da93b30554b100f">minorVersion</a>     (minor),</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <a class="code" href="structsf_1_1ContextSettings.php#a0ef3fc53802bc0197d2739466915ada5">attributeFlags</a>   (attributes)</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;    {</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    }</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00073"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#a4809e22089c2af7276b8809b5aede7bb">   73</a></span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1ContextSettings.php#a4809e22089c2af7276b8809b5aede7bb">depthBits</a>;         </div>
<div class="line"><a name="l00074"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#ac2e788c201ca20e84fd38a28071abd29">   74</a></span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1ContextSettings.php#ac2e788c201ca20e84fd38a28071abd29">stencilBits</a>;       </div>
<div class="line"><a name="l00075"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#ac4a097be18994dba38d73f36b0418bdc">   75</a></span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1ContextSettings.php#ac4a097be18994dba38d73f36b0418bdc">antialiasingLevel</a>; </div>
<div class="line"><a name="l00076"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#a99a680d5c15a7e34c935654155dd5166">   76</a></span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1ContextSettings.php#a99a680d5c15a7e34c935654155dd5166">majorVersion</a>;      </div>
<div class="line"><a name="l00077"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#aaeb0efe9d2658b840da93b30554b100f">   77</a></span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> <a class="code" href="structsf_1_1ContextSettings.php#aaeb0efe9d2658b840da93b30554b100f">minorVersion</a>;      </div>
<div class="line"><a name="l00078"></a><span class="lineno"><a class="line" href="structsf_1_1ContextSettings.php#a0ef3fc53802bc0197d2739466915ada5">   78</a></span>&#160;    Uint32       <a class="code" href="structsf_1_1ContextSettings.php#a0ef3fc53802bc0197d2739466915ada5">attributeFlags</a>;    </div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;};</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="preprocessor">#endif // SFML_CONTEXTSETTINGS_HPP</span></div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="ttc" id="structsf_1_1ContextSettings_php_af2e91e57e8d26c40afe2ec8efaa32a2cabf868dcb751b909bf031484ed42a93bb"><div class="ttname"><a href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cabf868dcb751b909bf031484ed42a93bb">sf::ContextSettings::Default</a></div><div class="ttdoc">Non-debug, compatibility context (this and the core attribute are mutually exclusive) ...</div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00044">ContextSettings.hpp:44</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_af2e91e57e8d26c40afe2ec8efaa32a2cacb581130734cbd87cbbc9438429f4a8b"><div class="ttname"><a href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2cacb581130734cbd87cbbc9438429f4a8b">sf::ContextSettings::Core</a></div><div class="ttdoc">Core attribute. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00045">ContextSettings.hpp:45</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_aaeb0efe9d2658b840da93b30554b100f"><div class="ttname"><a href="structsf_1_1ContextSettings.php#aaeb0efe9d2658b840da93b30554b100f">sf::ContextSettings::minorVersion</a></div><div class="ttdeci">unsigned int minorVersion</div><div class="ttdoc">Minor number of the context version to create. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00077">ContextSettings.hpp:77</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_a0ef3fc53802bc0197d2739466915ada5"><div class="ttname"><a href="structsf_1_1ContextSettings.php#a0ef3fc53802bc0197d2739466915ada5">sf::ContextSettings::attributeFlags</a></div><div class="ttdeci">Uint32 attributeFlags</div><div class="ttdoc">The attribute flags to create the context with. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00078">ContextSettings.hpp:78</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_a4809e22089c2af7276b8809b5aede7bb"><div class="ttname"><a href="structsf_1_1ContextSettings.php#a4809e22089c2af7276b8809b5aede7bb">sf::ContextSettings::depthBits</a></div><div class="ttdeci">unsigned int depthBits</div><div class="ttdoc">Bits of the depth buffer. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00073">ContextSettings.hpp:73</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_af2e91e57e8d26c40afe2ec8efaa32a2ca6043f67afb3d48918d5336474eabaafc"><div class="ttname"><a href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2ca6043f67afb3d48918d5336474eabaafc">sf::ContextSettings::Debug</a></div><div class="ttdoc">Debug attribute. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00046">ContextSettings.hpp:46</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_ac2e788c201ca20e84fd38a28071abd29"><div class="ttname"><a href="structsf_1_1ContextSettings.php#ac2e788c201ca20e84fd38a28071abd29">sf::ContextSettings::stencilBits</a></div><div class="ttdeci">unsigned int stencilBits</div><div class="ttdoc">Bits of the stencil buffer. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00074">ContextSettings.hpp:74</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_a99a680d5c15a7e34c935654155dd5166"><div class="ttname"><a href="structsf_1_1ContextSettings.php#a99a680d5c15a7e34c935654155dd5166">sf::ContextSettings::majorVersion</a></div><div class="ttdeci">unsigned int majorVersion</div><div class="ttdoc">Major number of the context version to create. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00076">ContextSettings.hpp:76</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php"><div class="ttname"><a href="structsf_1_1ContextSettings.php">sf::ContextSettings</a></div><div class="ttdoc">Structure defining the settings of the OpenGL context attached to a window. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00036">ContextSettings.hpp:36</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_ac4a097be18994dba38d73f36b0418bdc"><div class="ttname"><a href="structsf_1_1ContextSettings.php#ac4a097be18994dba38d73f36b0418bdc">sf::ContextSettings::antialiasingLevel</a></div><div class="ttdeci">unsigned int antialiasingLevel</div><div class="ttdoc">Level of antialiasing. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00075">ContextSettings.hpp:75</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_af2e91e57e8d26c40afe2ec8efaa32a2c"><div class="ttname"><a href="structsf_1_1ContextSettings.php#af2e91e57e8d26c40afe2ec8efaa32a2c">sf::ContextSettings::Attribute</a></div><div class="ttdeci">Attribute</div><div class="ttdoc">Enumeration of the context attribute flags. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00042">ContextSettings.hpp:42</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php_aa0174eb022a15d951837297fba753186"><div class="ttname"><a href="structsf_1_1ContextSettings.php#aa0174eb022a15d951837297fba753186">sf::ContextSettings::ContextSettings</a></div><div class="ttdeci">ContextSettings(unsigned int depth=0, unsigned int stencil=0, unsigned int antialiasing=0, unsigned int major=1, unsigned int minor=1, unsigned int attributes=Default)</div><div class="ttdoc">Default constructor. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00060">ContextSettings.hpp:60</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
