<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Utf&lt; 8 &gt; Class Template Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Utf_3_018_01_4.php">Utf&lt; 8 &gt;</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1Utf_3_018_01_4-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Utf&lt; 8 &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Specialization of the <a class="el" href="classsf_1_1Utf.php" title="Utility class providing generic functions for UTF conversions. ">Utf</a> template for UTF-8.  
 <a href="classsf_1_1Utf_3_018_01_4.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Utf_8hpp_source.php">Utf.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a59d4e8d5832961e62b263d308b72bf4b"><td class="memTemplParams" colspan="2">template&lt;typename In &gt; </td></tr>
<tr class="memitem:a59d4e8d5832961e62b263d308b72bf4b"><td class="memTemplItemLeft" align="right" valign="top">static In&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a59d4e8d5832961e62b263d308b72bf4b">decode</a> (In begin, In end, Uint32 &amp;output, Uint32 replacement=0)</td></tr>
<tr class="memdesc:a59d4e8d5832961e62b263d308b72bf4b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Decode a single UTF-8 character.  <a href="#a59d4e8d5832961e62b263d308b72bf4b">More...</a><br /></td></tr>
<tr class="separator:a59d4e8d5832961e62b263d308b72bf4b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5fbc6b5a996f52e9e4a14633d0d71847"><td class="memTemplParams" colspan="2">template&lt;typename Out &gt; </td></tr>
<tr class="memitem:a5fbc6b5a996f52e9e4a14633d0d71847"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a5fbc6b5a996f52e9e4a14633d0d71847">encode</a> (Uint32 input, Out output, Uint8 replacement=0)</td></tr>
<tr class="memdesc:a5fbc6b5a996f52e9e4a14633d0d71847"><td class="mdescLeft">&#160;</td><td class="mdescRight">Encode a single UTF-8 character.  <a href="#a5fbc6b5a996f52e9e4a14633d0d71847">More...</a><br /></td></tr>
<tr class="separator:a5fbc6b5a996f52e9e4a14633d0d71847"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0365a0b38700baa161843563d083edf6"><td class="memTemplParams" colspan="2">template&lt;typename In &gt; </td></tr>
<tr class="memitem:a0365a0b38700baa161843563d083edf6"><td class="memTemplItemLeft" align="right" valign="top">static In&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a0365a0b38700baa161843563d083edf6">next</a> (In begin, In end)</td></tr>
<tr class="memdesc:a0365a0b38700baa161843563d083edf6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Advance to the next UTF-8 character.  <a href="#a0365a0b38700baa161843563d083edf6">More...</a><br /></td></tr>
<tr class="separator:a0365a0b38700baa161843563d083edf6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1f15d9a772ee887be39e97431e15d32"><td class="memTemplParams" colspan="2">template&lt;typename In &gt; </td></tr>
<tr class="memitem:af1f15d9a772ee887be39e97431e15d32"><td class="memTemplItemLeft" align="right" valign="top">static std::size_t&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#af1f15d9a772ee887be39e97431e15d32">count</a> (In begin, In end)</td></tr>
<tr class="memdesc:af1f15d9a772ee887be39e97431e15d32"><td class="mdescLeft">&#160;</td><td class="mdescRight">Count the number of characters of a UTF-8 sequence.  <a href="#af1f15d9a772ee887be39e97431e15d32">More...</a><br /></td></tr>
<tr class="separator:af1f15d9a772ee887be39e97431e15d32"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1b62ba85ad3c8ce68746e16192b3eef0"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:a1b62ba85ad3c8ce68746e16192b3eef0"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a1b62ba85ad3c8ce68746e16192b3eef0">fromAnsi</a> (In begin, In end, Out output, const std::locale &amp;locale=std::locale())</td></tr>
<tr class="memdesc:a1b62ba85ad3c8ce68746e16192b3eef0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert an ANSI characters range to UTF-8.  <a href="#a1b62ba85ad3c8ce68746e16192b3eef0">More...</a><br /></td></tr>
<tr class="separator:a1b62ba85ad3c8ce68746e16192b3eef0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa99e636a7addc157b425dfc11b008f42"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:aa99e636a7addc157b425dfc11b008f42"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#aa99e636a7addc157b425dfc11b008f42">fromWide</a> (In begin, In end, Out output)</td></tr>
<tr class="memdesc:aa99e636a7addc157b425dfc11b008f42"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a wide characters range to UTF-8.  <a href="#aa99e636a7addc157b425dfc11b008f42">More...</a><br /></td></tr>
<tr class="separator:aa99e636a7addc157b425dfc11b008f42"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a85dd3643b7109a1a2f802747e55e28e8"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:a85dd3643b7109a1a2f802747e55e28e8"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a85dd3643b7109a1a2f802747e55e28e8">fromLatin1</a> (In begin, In end, Out output)</td></tr>
<tr class="memdesc:a85dd3643b7109a1a2f802747e55e28e8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a latin-1 (ISO-5589-1) characters range to UTF-8.  <a href="#a85dd3643b7109a1a2f802747e55e28e8">More...</a><br /></td></tr>
<tr class="separator:a85dd3643b7109a1a2f802747e55e28e8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3d8b02f29021bd48831e7706d826f0c5"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:a3d8b02f29021bd48831e7706d826f0c5"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a3d8b02f29021bd48831e7706d826f0c5">toAnsi</a> (In begin, In end, Out output, char replacement=0, const std::locale &amp;locale=std::locale())</td></tr>
<tr class="memdesc:a3d8b02f29021bd48831e7706d826f0c5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert an UTF-8 characters range to ANSI characters.  <a href="#a3d8b02f29021bd48831e7706d826f0c5">More...</a><br /></td></tr>
<tr class="separator:a3d8b02f29021bd48831e7706d826f0c5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac6633c64ff1fad6bd1bfe72c37b3a468"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:ac6633c64ff1fad6bd1bfe72c37b3a468"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#ac6633c64ff1fad6bd1bfe72c37b3a468">toWide</a> (In begin, In end, Out output, wchar_t replacement=0)</td></tr>
<tr class="memdesc:ac6633c64ff1fad6bd1bfe72c37b3a468"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert an UTF-8 characters range to wide characters.  <a href="#ac6633c64ff1fad6bd1bfe72c37b3a468">More...</a><br /></td></tr>
<tr class="separator:ac6633c64ff1fad6bd1bfe72c37b3a468"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adf6f6e0a8ee0527c8ab390ce5c0b6b13"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:adf6f6e0a8ee0527c8ab390ce5c0b6b13"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#adf6f6e0a8ee0527c8ab390ce5c0b6b13">toLatin1</a> (In begin, In end, Out output, char replacement=0)</td></tr>
<tr class="memdesc:adf6f6e0a8ee0527c8ab390ce5c0b6b13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert an UTF-8 characters range to latin-1 (ISO-5589-1) characters.  <a href="#adf6f6e0a8ee0527c8ab390ce5c0b6b13">More...</a><br /></td></tr>
<tr class="separator:adf6f6e0a8ee0527c8ab390ce5c0b6b13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aef68054cab6a592c0b04de94e93bb520"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:aef68054cab6a592c0b04de94e93bb520"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#aef68054cab6a592c0b04de94e93bb520">toUtf8</a> (In begin, In end, Out output)</td></tr>
<tr class="memdesc:aef68054cab6a592c0b04de94e93bb520"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a UTF-8 characters range to UTF-8.  <a href="#aef68054cab6a592c0b04de94e93bb520">More...</a><br /></td></tr>
<tr class="separator:aef68054cab6a592c0b04de94e93bb520"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a925ac9e141dcb6f9b07c7b95f7cfbda2"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:a925ac9e141dcb6f9b07c7b95f7cfbda2"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a925ac9e141dcb6f9b07c7b95f7cfbda2">toUtf16</a> (In begin, In end, Out output)</td></tr>
<tr class="memdesc:a925ac9e141dcb6f9b07c7b95f7cfbda2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a UTF-8 characters range to UTF-16.  <a href="#a925ac9e141dcb6f9b07c7b95f7cfbda2">More...</a><br /></td></tr>
<tr class="separator:a925ac9e141dcb6f9b07c7b95f7cfbda2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a79395429baba13dd04a8c1fba745ce65"><td class="memTemplParams" colspan="2">template&lt;typename In , typename Out &gt; </td></tr>
<tr class="memitem:a79395429baba13dd04a8c1fba745ce65"><td class="memTemplItemLeft" align="right" valign="top">static Out&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Utf_3_018_01_4.php#a79395429baba13dd04a8c1fba745ce65">toUtf32</a> (In begin, In end, Out output)</td></tr>
<tr class="memdesc:a79395429baba13dd04a8c1fba745ce65"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a UTF-8 characters range to UTF-32.  <a href="#a79395429baba13dd04a8c1fba745ce65">More...</a><br /></td></tr>
<tr class="separator:a79395429baba13dd04a8c1fba745ce65"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;&gt;<br />
class sf::Utf&lt; 8 &gt;</h3>

<p>Specialization of the <a class="el" href="classsf_1_1Utf.php" title="Utility class providing generic functions for UTF conversions. ">Utf</a> template for UTF-8. </p>

<p>Definition at line <a class="el" href="Utf_8hpp_source.php#l00048">48</a> of file <a class="el" href="Utf_8hpp_source.php">Utf.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="af1f15d9a772ee887be39e97431e15d32"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::size_t <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::count </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Count the number of characters of a UTF-8 sequence. </p>
<p>This function is necessary for multi-elements encodings, as a single character may use more than 1 storage element, thus the total size can be different from (begin - end).</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator pointing to one past the last read element of the input sequence </dd></dl>

</div>
</div>
<a class="anchor" id="a59d4e8d5832961e62b263d308b72bf4b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static In <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::decode </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint32 &amp;&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>replacement</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Decode a single UTF-8 character. </p>
<p>Decoding a character means finding its unique 32-bits code (called the codepoint) in the Unicode standard.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Codepoint of the decoded UTF-8 character </td></tr>
    <tr><td class="paramname">replacement</td><td>Replacement character to use in case the UTF-8 sequence is invalid</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator pointing to one past the last read element of the input sequence </dd></dl>

</div>
</div>
<a class="anchor" id="a5fbc6b5a996f52e9e4a14633d0d71847"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::encode </td>
          <td>(</td>
          <td class="paramtype">Uint32&#160;</td>
          <td class="paramname"><em>input</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>replacement</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Encode a single UTF-8 character. </p>
<p>Encoding a character means converting a unique 32-bits code (called the codepoint) in the target encoding, UTF-8.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">input</td><td>Codepoint to encode as UTF-8 </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence </td></tr>
    <tr><td class="paramname">replacement</td><td>Replacement for characters not convertible to UTF-8 (use 0 to skip them)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="a1b62ba85ad3c8ce68746e16192b3eef0"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::fromAnsi </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::locale &amp;&#160;</td>
          <td class="paramname"><em>locale</em> = <code>std::locale()</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert an ANSI characters range to UTF-8. </p>
<p>The current global locale will be used by default, unless you pass a custom one in the <em>locale</em> parameter.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence </td></tr>
    <tr><td class="paramname">locale</td><td>Locale to use for conversion</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="a85dd3643b7109a1a2f802747e55e28e8"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::fromLatin1 </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert a latin-1 (ISO-5589-1) characters range to UTF-8. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="aa99e636a7addc157b425dfc11b008f42"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::fromWide </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert a wide characters range to UTF-8. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="a0365a0b38700baa161843563d083edf6"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static In <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::next </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Advance to the next UTF-8 character. </p>
<p>This function is necessary for multi-elements encodings, as a single character may use more than 1 storage element.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator pointing to one past the last read element of the input sequence </dd></dl>

</div>
</div>
<a class="anchor" id="a3d8b02f29021bd48831e7706d826f0c5"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toAnsi </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char&#160;</td>
          <td class="paramname"><em>replacement</em> = <code>0</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::locale &amp;&#160;</td>
          <td class="paramname"><em>locale</em> = <code>std::locale()</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert an UTF-8 characters range to ANSI characters. </p>
<p>The current global locale will be used by default, unless you pass a custom one in the <em>locale</em> parameter.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence </td></tr>
    <tr><td class="paramname">replacement</td><td>Replacement for characters not convertible to ANSI (use 0 to skip them) </td></tr>
    <tr><td class="paramname">locale</td><td>Locale to use for conversion</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="adf6f6e0a8ee0527c8ab390ce5c0b6b13"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toLatin1 </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char&#160;</td>
          <td class="paramname"><em>replacement</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert an UTF-8 characters range to latin-1 (ISO-5589-1) characters. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence </td></tr>
    <tr><td class="paramname">replacement</td><td>Replacement for characters not convertible to wide (use 0 to skip them)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="a925ac9e141dcb6f9b07c7b95f7cfbda2"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toUtf16 </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert a UTF-8 characters range to UTF-16. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="a79395429baba13dd04a8c1fba745ce65"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toUtf32 </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert a UTF-8 characters range to UTF-32. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="aef68054cab6a592c0b04de94e93bb520"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toUtf8 </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert a UTF-8 characters range to UTF-8. </p>
<p>This functions does nothing more than a direct copy; it is defined only to provide the same interface as other specializations of the sf::Utf&lt;&gt; template, and allow generic code to be written on top of it.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<a class="anchor" id="ac6633c64ff1fad6bd1bfe72c37b3a468"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename In , typename Out &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Out <a class="el" href="classsf_1_1Utf.php">sf::Utf</a>&lt; 8 &gt;::toWide </td>
          <td>(</td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>begin</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">In&#160;</td>
          <td class="paramname"><em>end</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Out&#160;</td>
          <td class="paramname"><em>output</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">wchar_t&#160;</td>
          <td class="paramname"><em>replacement</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Convert an UTF-8 characters range to wide characters. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">begin</td><td>Iterator pointing to the beginning of the input sequence </td></tr>
    <tr><td class="paramname">end</td><td>Iterator pointing to the end of the input sequence </td></tr>
    <tr><td class="paramname">output</td><td>Iterator pointing to the beginning of the output sequence </td></tr>
    <tr><td class="paramname">replacement</td><td>Replacement for characters not convertible to wide (use 0 to skip them)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Iterator to the end of the output sequence which has been written </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Utf_8hpp_source.php">Utf.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
