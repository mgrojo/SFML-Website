<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'SoundRecorder.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_985e7cc4f3a776db56f3b932018351f7.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">SoundRecorder.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUNDRECORDER_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOUNDRECORDER_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/AlResource.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Thread.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;{</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1SoundRecorder.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1SoundRecorder.php">SoundRecorder</a> : <a class="code" href="classsf_1_1AlResource.php">AlResource</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1SoundRecorder.php">SoundRecorder</a>();</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordtype">bool</span> start(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sampleRate = 44100);</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;    <span class="keywordtype">void</span> stop();</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getSampleRate() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;    <span class="keyword">static</span> std::vector&lt;std::string&gt; getAvailableDevices();</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;    <span class="keyword">static</span> std::string getDefaultDevice();</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;    <span class="keywordtype">bool</span> setDevice(<span class="keyword">const</span> std::string&amp; name);</div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;    <span class="keyword">const</span> std::string&amp; getDevice() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div>
<div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isAvailable();</div>
<div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div>
<div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;<span class="keyword">protected</span>:</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;    <a class="code" href="classsf_1_1SoundRecorder.php">SoundRecorder</a>();</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <span class="keywordtype">void</span> setProcessingInterval(<a class="code" href="classsf_1_1Time.php">Time</a> interval);</div>
<div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div>
<div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> onStart();</div>
<div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> onProcessSamples(<span class="keyword">const</span> Int16* samples, std::size_t sampleCount) = 0;</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onStop();</div>
<div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div>
<div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;    <span class="keywordtype">void</span> record();</div>
<div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;</div>
<div class="line"><a name="l00247"></a><span class="lineno">  247</span>&#160;    <span class="keywordtype">void</span> processCapturedSamples();</div>
<div class="line"><a name="l00248"></a><span class="lineno">  248</span>&#160;</div>
<div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;    <span class="keywordtype">void</span> cleanup();</div>
<div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;</div>
<div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Thread.php">Thread</a>             m_thread;             </div>
<div class="line"><a name="l00261"></a><span class="lineno">  261</span>&#160;    std::vector&lt;Int16&gt; m_samples;            </div>
<div class="line"><a name="l00262"></a><span class="lineno">  262</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>       m_sampleRate;         </div>
<div class="line"><a name="l00263"></a><span class="lineno">  263</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a>               m_processingInterval; </div>
<div class="line"><a name="l00264"></a><span class="lineno">  264</span>&#160;    <span class="keywordtype">bool</span>               m_isCapturing;        </div>
<div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;    std::string        m_deviceName;         </div>
<div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;};</div>
<div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;</div>
<div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;</div>
<div class="line"><a name="l00270"></a><span class="lineno">  270</span>&#160;</div>
<div class="line"><a name="l00271"></a><span class="lineno">  271</span>&#160;<span class="preprocessor">#endif // SFML_SOUNDRECORDER_HPP</span></div>
<div class="line"><a name="l00272"></a><span class="lineno">  272</span>&#160;</div>
<div class="line"><a name="l00273"></a><span class="lineno">  273</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1AlResource_php"><div class="ttname"><a href="classsf_1_1AlResource.php">sf::AlResource</a></div><div class="ttdoc">Base class for classes that require an OpenAL context. </div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00040">AlResource.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1SoundRecorder_php"><div class="ttname"><a href="classsf_1_1SoundRecorder.php">sf::SoundRecorder</a></div><div class="ttdoc">Abstract base class for capturing sound data. </div><div class="ttdef"><b>Definition:</b> <a href="SoundRecorder_8hpp_source.php#l00045">SoundRecorder.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1Thread_php"><div class="ttname"><a href="classsf_1_1Thread.php">sf::Thread</a></div><div class="ttdoc">Utility class to manipulate threads. </div><div class="ttdef"><b>Definition:</b> <a href="Thread_8hpp_source.php#l00048">Thread.hpp:48</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
