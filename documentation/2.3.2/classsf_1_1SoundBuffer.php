<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundBuffer Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1SoundBuffer-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundBuffer Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Storage for audio samples defining a sound.  
 <a href="classsf_1_1SoundBuffer.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundBuffer_8hpp_source.php">SoundBuffer.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::SoundBuffer:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1SoundBuffer.png" usemap="#sf::SoundBuffer_map" alt=""/>
  <map id="sf::SoundBuffer_map" name="sf::SoundBuffer_map">
<area href="classsf_1_1AlResource.php" title="Base class for classes that require an OpenAL context. " alt="sf::AlResource" shape="rect" coords="0,0,99,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a0cabfbfe19b831bf7d5c9592d92ef233"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a0cabfbfe19b831bf7d5c9592d92ef233">SoundBuffer</a> ()</td></tr>
<tr class="memdesc:a0cabfbfe19b831bf7d5c9592d92ef233"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a0cabfbfe19b831bf7d5c9592d92ef233">More...</a><br /></td></tr>
<tr class="separator:a0cabfbfe19b831bf7d5c9592d92ef233"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaf000fc741ff27015907e8588263f4a6"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#aaf000fc741ff27015907e8588263f4a6">SoundBuffer</a> (const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;copy)</td></tr>
<tr class="memdesc:aaf000fc741ff27015907e8588263f4a6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy constructor.  <a href="#aaf000fc741ff27015907e8588263f4a6">More...</a><br /></td></tr>
<tr class="separator:aaf000fc741ff27015907e8588263f4a6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aea240161724ffba74a0d6a9e277d3cd5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#aea240161724ffba74a0d6a9e277d3cd5">~SoundBuffer</a> ()</td></tr>
<tr class="memdesc:aea240161724ffba74a0d6a9e277d3cd5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#aea240161724ffba74a0d6a9e277d3cd5">More...</a><br /></td></tr>
<tr class="separator:aea240161724ffba74a0d6a9e277d3cd5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2be6a8025c97eb622a7dff6cf2594394"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394">loadFromFile</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:a2be6a8025c97eb622a7dff6cf2594394"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the sound buffer from a file.  <a href="#a2be6a8025c97eb622a7dff6cf2594394">More...</a><br /></td></tr>
<tr class="separator:a2be6a8025c97eb622a7dff6cf2594394"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af8cfa5599739a7edae69c5cba273d33f"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#af8cfa5599739a7edae69c5cba273d33f">loadFromMemory</a> (const void *data, std::size_t sizeInBytes)</td></tr>
<tr class="memdesc:af8cfa5599739a7edae69c5cba273d33f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the sound buffer from a file in memory.  <a href="#af8cfa5599739a7edae69c5cba273d33f">More...</a><br /></td></tr>
<tr class="separator:af8cfa5599739a7edae69c5cba273d33f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad292156b1e01f6dabd4c0c277d5e079e"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#ad292156b1e01f6dabd4c0c277d5e079e">loadFromStream</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream)</td></tr>
<tr class="memdesc:ad292156b1e01f6dabd4c0c277d5e079e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the sound buffer from a custom stream.  <a href="#ad292156b1e01f6dabd4c0c277d5e079e">More...</a><br /></td></tr>
<tr class="separator:ad292156b1e01f6dabd4c0c277d5e079e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a42d51ce4bb3b60c7ea06f63c273fd063"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a42d51ce4bb3b60c7ea06f63c273fd063">loadFromSamples</a> (const Int16 *samples, Uint64 sampleCount, unsigned int channelCount, unsigned int sampleRate)</td></tr>
<tr class="memdesc:a42d51ce4bb3b60c7ea06f63c273fd063"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the sound buffer from an array of audio samples.  <a href="#a42d51ce4bb3b60c7ea06f63c273fd063">More...</a><br /></td></tr>
<tr class="separator:a42d51ce4bb3b60c7ea06f63c273fd063"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab2083dc1a934c64959d9e3f162328a76"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#ab2083dc1a934c64959d9e3f162328a76">saveToFile</a> (const std::string &amp;filename) const </td></tr>
<tr class="memdesc:ab2083dc1a934c64959d9e3f162328a76"><td class="mdescLeft">&#160;</td><td class="mdescRight">Save the sound buffer to an audio file.  <a href="#ab2083dc1a934c64959d9e3f162328a76">More...</a><br /></td></tr>
<tr class="separator:ab2083dc1a934c64959d9e3f162328a76"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4ba0c1e5b5be500af42de30b1360eb2e"><td class="memItemLeft" align="right" valign="top">const Int16 *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a4ba0c1e5b5be500af42de30b1360eb2e">getSamples</a> () const </td></tr>
<tr class="memdesc:a4ba0c1e5b5be500af42de30b1360eb2e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the array of audio samples stored in the buffer.  <a href="#a4ba0c1e5b5be500af42de30b1360eb2e">More...</a><br /></td></tr>
<tr class="separator:a4ba0c1e5b5be500af42de30b1360eb2e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2a791e7304553fa96269cc355cc4f7e8"><td class="memItemLeft" align="right" valign="top">Uint64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a2a791e7304553fa96269cc355cc4f7e8">getSampleCount</a> () const </td></tr>
<tr class="memdesc:a2a791e7304553fa96269cc355cc4f7e8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of samples stored in the buffer.  <a href="#a2a791e7304553fa96269cc355cc4f7e8">More...</a><br /></td></tr>
<tr class="separator:a2a791e7304553fa96269cc355cc4f7e8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8cdfaea2ad1d05f81fa67442566c166e"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a8cdfaea2ad1d05f81fa67442566c166e">getSampleRate</a> () const </td></tr>
<tr class="memdesc:a8cdfaea2ad1d05f81fa67442566c166e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the sample rate of the sound.  <a href="#a8cdfaea2ad1d05f81fa67442566c166e">More...</a><br /></td></tr>
<tr class="separator:a8cdfaea2ad1d05f81fa67442566c166e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0a2890747db3811fb8d969d3e3abd0d1"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#a0a2890747db3811fb8d969d3e3abd0d1">getChannelCount</a> () const </td></tr>
<tr class="memdesc:a0a2890747db3811fb8d969d3e3abd0d1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of channels used by the sound.  <a href="#a0a2890747db3811fb8d969d3e3abd0d1">More...</a><br /></td></tr>
<tr class="separator:a0a2890747db3811fb8d969d3e3abd0d1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee681c7a0f3dff4c4d0c9f8bbdb51bb0"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#aee681c7a0f3dff4c4d0c9f8bbdb51bb0">getDuration</a> () const </td></tr>
<tr class="memdesc:aee681c7a0f3dff4c4d0c9f8bbdb51bb0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the total duration of the sound.  <a href="#aee681c7a0f3dff4c4d0c9f8bbdb51bb0">More...</a><br /></td></tr>
<tr class="separator:aee681c7a0f3dff4c4d0c9f8bbdb51bb0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adcc786b60bbd95be1551368fafd274a7"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBuffer.php#adcc786b60bbd95be1551368fafd274a7">operator=</a> (const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;right)</td></tr>
<tr class="memdesc:adcc786b60bbd95be1551368fafd274a7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of assignment operator.  <a href="#adcc786b60bbd95be1551368fafd274a7">More...</a><br /></td></tr>
<tr class="separator:adcc786b60bbd95be1551368fafd274a7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a50914f77c7cf4fb97616c898c5291f4b"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a50914f77c7cf4fb97616c898c5291f4b"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>Sound</b></td></tr>
<tr class="separator:a50914f77c7cf4fb97616c898c5291f4b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Storage for audio samples defining a sound. </p>
<p>A sound buffer holds the data of a sound, which is an array of audio samples.</p>
<p>A sample is a 16 bits signed integer that defines the amplitude of the sound at a given time. The sound is then reconstituted by playing these samples at a high rate (for example, 44100 samples per second is the standard rate used for playing CDs). In short, audio samples are like texture pixels, and a <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> is similar to a <a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">sf::Texture</a>.</p>
<p>A sound buffer can be loaded from a file (see <a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394" title="Load the sound buffer from a file. ">loadFromFile()</a> for the complete list of supported formats), from memory, from a custom stream (see <a class="el" href="classsf_1_1InputStream.php" title="Abstract class for custom file input streams. ">sf::InputStream</a>) or directly from an array of samples. It can also be saved back to a file.</p>
<p><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">Sound</a> buffers alone are not very useful: they hold the audio data but cannot be played. To do so, you need to use the <a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a> class, which provides functions to play/pause/stop the sound as well as changing the way it is outputted (volume, pitch, 3D position, ...). This separation allows more flexibility and better performances: indeed a <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> is a heavy resource, and any operation on it is slow (often too slow for real-time applications). On the other side, a <a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a> is a lightweight object, which can use the audio data of a sound buffer and change the way it is played without actually modifying that data. Note that it is also possible to bind several <a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a> instances to the same <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a>.</p>
<p>It is important to note that the <a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a> instance doesn't copy the buffer that it uses, it only keeps a reference to it. Thus, a <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> must not be destructed while it is used by a <a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a> (i.e. never write a function that uses a local <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a> instance for loading a sound).</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Declare a new sound buffer</span></div>
<div class="line"><a class="code" href="classsf_1_1SoundBuffer.php">sf::SoundBuffer</a> buffer;</div>
<div class="line"></div>
<div class="line"><span class="comment">// Load it from a file</span></div>
<div class="line"><span class="keywordflow">if</span> (!buffer.<a class="code" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394">loadFromFile</a>(<span class="stringliteral">&quot;sound.wav&quot;</span>))</div>
<div class="line">{</div>
<div class="line">    <span class="comment">// error...</span></div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create a sound source and bind it to the buffer</span></div>
<div class="line"><a class="code" href="classsf_1_1Sound.php">sf::Sound</a> sound1;</div>
<div class="line">sound1.<a class="code" href="classsf_1_1Sound.php#a8b395e9713d0efa48a18628c8ec1972e">setBuffer</a>(buffer);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Play the sound</span></div>
<div class="line">sound1.<a class="code" href="classsf_1_1Sound.php#a2953ffe632536e72e696fd880ced2532">play</a>();</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create another sound source bound to the same buffer</span></div>
<div class="line"><a class="code" href="classsf_1_1Sound.php">sf::Sound</a> sound2;</div>
<div class="line">sound2.<a class="code" href="classsf_1_1Sound.php#a8b395e9713d0efa48a18628c8ec1972e">setBuffer</a>(buffer);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Play it with a higher pitch -- the first sound remains unchanged</span></div>
<div class="line">sound2.<a class="code" href="classsf_1_1SoundSource.php#a72a13695ed48b7f7b55e7cd4431f4bb6">setPitch</a>(2);</div>
<div class="line">sound2.<a class="code" href="classsf_1_1Sound.php#a2953ffe632536e72e696fd880ced2532">play</a>();</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">sf::Sound</a>, <a class="el" href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. ">sf::SoundBufferRecorder</a> </dd></dl>

<p>Definition at line <a class="el" href="SoundBuffer_8hpp_source.php#l00049">49</a> of file <a class="el" href="SoundBuffer_8hpp_source.php">SoundBuffer.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a0cabfbfe19b831bf7d5c9592d92ef233"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundBuffer::SoundBuffer </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<a class="anchor" id="aaf000fc741ff27015907e8588263f4a6"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundBuffer::SoundBuffer </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;&#160;</td>
          <td class="paramname"><em>copy</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Copy constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">copy</td><td>Instance to copy </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="aea240161724ffba74a0d6a9e277d3cd5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundBuffer::~SoundBuffer </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a0a2890747db3811fb8d969d3e3abd0d1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundBuffer::getChannelCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the number of channels used by the sound. </p>
<p>If the sound is mono then the number of channels will be 1, 2 for stereo, etc.</p>
<dl class="section return"><dt>Returns</dt><dd>Number of channels</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a8cdfaea2ad1d05f81fa67442566c166e" title="Get the sample rate of the sound. ">getSampleRate</a>, <a class="el" href="classsf_1_1SoundBuffer.php#aee681c7a0f3dff4c4d0c9f8bbdb51bb0" title="Get the total duration of the sound. ">getDuration</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aee681c7a0f3dff4c4d0c9f8bbdb51bb0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Time.php">Time</a> sf::SoundBuffer::getDuration </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the total duration of the sound. </p>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Sound.php" title="Regular sound that can be played in the audio environment. ">Sound</a> duration</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a8cdfaea2ad1d05f81fa67442566c166e" title="Get the sample rate of the sound. ">getSampleRate</a>, <a class="el" href="classsf_1_1SoundBuffer.php#a0a2890747db3811fb8d969d3e3abd0d1" title="Get the number of channels used by the sound. ">getChannelCount</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a2a791e7304553fa96269cc355cc4f7e8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Uint64 sf::SoundBuffer::getSampleCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the number of samples stored in the buffer. </p>
<p>The array of samples can be accessed with the <a class="el" href="classsf_1_1SoundBuffer.php#a4ba0c1e5b5be500af42de30b1360eb2e" title="Get the array of audio samples stored in the buffer. ">getSamples()</a> function.</p>
<dl class="section return"><dt>Returns</dt><dd>Number of samples</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a4ba0c1e5b5be500af42de30b1360eb2e" title="Get the array of audio samples stored in the buffer. ">getSamples</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8cdfaea2ad1d05f81fa67442566c166e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundBuffer::getSampleRate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the sample rate of the sound. </p>
<p>The sample rate is the number of samples played per second. The higher, the better the quality (for example, 44100 samples/s is CD quality).</p>
<dl class="section return"><dt>Returns</dt><dd>Sample rate (number of samples per second)</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a0a2890747db3811fb8d969d3e3abd0d1" title="Get the number of channels used by the sound. ">getChannelCount</a>, <a class="el" href="classsf_1_1SoundBuffer.php#aee681c7a0f3dff4c4d0c9f8bbdb51bb0" title="Get the total duration of the sound. ">getDuration</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a4ba0c1e5b5be500af42de30b1360eb2e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const Int16* sf::SoundBuffer::getSamples </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the array of audio samples stored in the buffer. </p>
<p>The format of the returned samples is 16 bits signed integer (sf::Int16). The total number of samples in this array is given by the <a class="el" href="classsf_1_1SoundBuffer.php#a2a791e7304553fa96269cc355cc4f7e8" title="Get the number of samples stored in the buffer. ">getSampleCount()</a> function.</p>
<dl class="section return"><dt>Returns</dt><dd>Read-only pointer to the array of sound samples</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a2a791e7304553fa96269cc355cc4f7e8" title="Get the number of samples stored in the buffer. ">getSampleCount</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a2be6a8025c97eb622a7dff6cf2594394"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundBuffer::loadFromFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the sound buffer from a file. </p>
<p>See the documentation of <a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a> for the list of supported formats.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file to load</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#af8cfa5599739a7edae69c5cba273d33f" title="Load the sound buffer from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1SoundBuffer.php#ad292156b1e01f6dabd4c0c277d5e079e" title="Load the sound buffer from a custom stream. ">loadFromStream</a>, <a class="el" href="classsf_1_1SoundBuffer.php#a42d51ce4bb3b60c7ea06f63c273fd063" title="Load the sound buffer from an array of audio samples. ">loadFromSamples</a>, <a class="el" href="classsf_1_1SoundBuffer.php#ab2083dc1a934c64959d9e3f162328a76" title="Save the sound buffer to an audio file. ">saveToFile</a> </dd></dl>

</div>
</div>
<a class="anchor" id="af8cfa5599739a7edae69c5cba273d33f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundBuffer::loadFromMemory </td>
          <td>(</td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>sizeInBytes</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the sound buffer from a file in memory. </p>
<p>See the documentation of <a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a> for the list of supported formats.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Pointer to the file data in memory </td></tr>
    <tr><td class="paramname">sizeInBytes</td><td>Size of the data to load, in bytes</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394" title="Load the sound buffer from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1SoundBuffer.php#ad292156b1e01f6dabd4c0c277d5e079e" title="Load the sound buffer from a custom stream. ">loadFromStream</a>, <a class="el" href="classsf_1_1SoundBuffer.php#a42d51ce4bb3b60c7ea06f63c273fd063" title="Load the sound buffer from an array of audio samples. ">loadFromSamples</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a42d51ce4bb3b60c7ea06f63c273fd063"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundBuffer::loadFromSamples </td>
          <td>(</td>
          <td class="paramtype">const Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>sampleCount</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>channelCount</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>sampleRate</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the sound buffer from an array of audio samples. </p>
<p>The assumed format of the audio samples is 16 bits signed integer (sf::Int16).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the array of samples in memory </td></tr>
    <tr><td class="paramname">sampleCount</td><td>Number of samples in the array </td></tr>
    <tr><td class="paramname">channelCount</td><td>Number of channels (1 = mono, 2 = stereo, ...) </td></tr>
    <tr><td class="paramname">sampleRate</td><td>Sample rate (number of samples to play per second)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394" title="Load the sound buffer from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1SoundBuffer.php#af8cfa5599739a7edae69c5cba273d33f" title="Load the sound buffer from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1SoundBuffer.php#ab2083dc1a934c64959d9e3f162328a76" title="Save the sound buffer to an audio file. ">saveToFile</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad292156b1e01f6dabd4c0c277d5e079e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundBuffer::loadFromStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the sound buffer from a custom stream. </p>
<p>See the documentation of <a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a> for the list of supported formats.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394" title="Load the sound buffer from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1SoundBuffer.php#af8cfa5599739a7edae69c5cba273d33f" title="Load the sound buffer from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1SoundBuffer.php#a42d51ce4bb3b60c7ea06f63c273fd063" title="Load the sound buffer from an array of audio samples. ">loadFromSamples</a> </dd></dl>

</div>
</div>
<a class="anchor" id="adcc786b60bbd95be1551368fafd274a7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>&amp; sf::SoundBuffer::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Overload of assignment operator. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">right</td><td>Instance to assign</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Reference to self </dd></dl>

</div>
</div>
<a class="anchor" id="ab2083dc1a934c64959d9e3f162328a76"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundBuffer::saveToFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Save the sound buffer to an audio file. </p>
<p>See the documentation of <a class="el" href="classsf_1_1OutputSoundFile.php" title="Provide write access to sound files. ">sf::OutputSoundFile</a> for the list of supported formats.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the sound file to write</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if saving succeeded, false if it failed</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundBuffer.php#a2be6a8025c97eb622a7dff6cf2594394" title="Load the sound buffer from a file. ">loadFromFile</a>, <a class="el" href="classsf_1_1SoundBuffer.php#af8cfa5599739a7edae69c5cba273d33f" title="Load the sound buffer from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1SoundBuffer.php#a42d51ce4bb3b60c7ea06f63c273fd063" title="Load the sound buffer from an array of audio samples. ">loadFromSamples</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundBuffer_8hpp_source.php">SoundBuffer.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
