<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::RenderStates Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1RenderStates.php">RenderStates</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#pub-static-attribs">Static Public Attributes</a> &#124;
<a href="classsf_1_1RenderStates-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::RenderStates Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Define the states used for drawing to a <a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...) ">RenderTarget</a>.  
 <a href="classsf_1_1RenderStates.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a885bf14070d0d5391f062f62b270b7d0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a885bf14070d0d5391f062f62b270b7d0">RenderStates</a> ()</td></tr>
<tr class="memdesc:a885bf14070d0d5391f062f62b270b7d0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a885bf14070d0d5391f062f62b270b7d0">More...</a><br /></td></tr>
<tr class="separator:a885bf14070d0d5391f062f62b270b7d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acac8830a593c8a4523ac2fdf3cac8a01"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#acac8830a593c8a4523ac2fdf3cac8a01">RenderStates</a> (const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;theBlendMode)</td></tr>
<tr class="memdesc:acac8830a593c8a4523ac2fdf3cac8a01"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct a default set of render states with a custom blend mode.  <a href="#acac8830a593c8a4523ac2fdf3cac8a01">More...</a><br /></td></tr>
<tr class="separator:acac8830a593c8a4523ac2fdf3cac8a01"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3e99cad6ab05971d40357949930ed890"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a3e99cad6ab05971d40357949930ed890">RenderStates</a> (const <a class="el" href="classsf_1_1Transform.php">Transform</a> &amp;theTransform)</td></tr>
<tr class="memdesc:a3e99cad6ab05971d40357949930ed890"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct a default set of render states with a custom transform.  <a href="#a3e99cad6ab05971d40357949930ed890">More...</a><br /></td></tr>
<tr class="separator:a3e99cad6ab05971d40357949930ed890"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8f4ca3be0e27dafea0c4ab8547439bb1"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a8f4ca3be0e27dafea0c4ab8547439bb1">RenderStates</a> (const <a class="el" href="classsf_1_1Texture.php">Texture</a> *theTexture)</td></tr>
<tr class="memdesc:a8f4ca3be0e27dafea0c4ab8547439bb1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct a default set of render states with a custom texture.  <a href="#a8f4ca3be0e27dafea0c4ab8547439bb1">More...</a><br /></td></tr>
<tr class="separator:a8f4ca3be0e27dafea0c4ab8547439bb1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a39f94233f464739d8d8522f3aefe97d0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a39f94233f464739d8d8522f3aefe97d0">RenderStates</a> (const <a class="el" href="classsf_1_1Shader.php">Shader</a> *theShader)</td></tr>
<tr class="memdesc:a39f94233f464739d8d8522f3aefe97d0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct a default set of render states with a custom shader.  <a href="#a39f94233f464739d8d8522f3aefe97d0">More...</a><br /></td></tr>
<tr class="separator:a39f94233f464739d8d8522f3aefe97d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab5eda13cd8c79c74eba3b1b0df817d67"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#ab5eda13cd8c79c74eba3b1b0df817d67">RenderStates</a> (const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;theBlendMode, const <a class="el" href="classsf_1_1Transform.php">Transform</a> &amp;theTransform, const <a class="el" href="classsf_1_1Texture.php">Texture</a> *theTexture, const <a class="el" href="classsf_1_1Shader.php">Shader</a> *theShader)</td></tr>
<tr class="memdesc:ab5eda13cd8c79c74eba3b1b0df817d67"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct a set of render states with all its attributes.  <a href="#ab5eda13cd8c79c74eba3b1b0df817d67">More...</a><br /></td></tr>
<tr class="separator:ab5eda13cd8c79c74eba3b1b0df817d67"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:ad6ac87f1b5006dae7ebfee4b5d40f5a8"><td class="memItemLeft" align="right" valign="top"><a class="el" href="structsf_1_1BlendMode.php">BlendMode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#ad6ac87f1b5006dae7ebfee4b5d40f5a8">blendMode</a></td></tr>
<tr class="memdesc:ad6ac87f1b5006dae7ebfee4b5d40f5a8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Blending mode.  <a href="#ad6ac87f1b5006dae7ebfee4b5d40f5a8">More...</a><br /></td></tr>
<tr class="separator:ad6ac87f1b5006dae7ebfee4b5d40f5a8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1f737981a0f2f0d4bb8dac866a8d1149"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Transform.php">Transform</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a1f737981a0f2f0d4bb8dac866a8d1149">transform</a></td></tr>
<tr class="memdesc:a1f737981a0f2f0d4bb8dac866a8d1149"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Transform.php" title="Define a 3x3 transform matrix. ">Transform</a>.  <a href="#a1f737981a0f2f0d4bb8dac866a8d1149">More...</a><br /></td></tr>
<tr class="separator:a1f737981a0f2f0d4bb8dac866a8d1149"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a457fc5a41731889de9cf39cf9b3436c3"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1Texture.php">Texture</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#a457fc5a41731889de9cf39cf9b3436c3">texture</a></td></tr>
<tr class="memdesc:a457fc5a41731889de9cf39cf9b3436c3"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a>.  <a href="#a457fc5a41731889de9cf39cf9b3436c3">More...</a><br /></td></tr>
<tr class="separator:a457fc5a41731889de9cf39cf9b3436c3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad4f79ecdd0c60ed0d24fbe555b221bd8"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1Shader.php">Shader</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#ad4f79ecdd0c60ed0d24fbe555b221bd8">shader</a></td></tr>
<tr class="memdesc:ad4f79ecdd0c60ed0d24fbe555b221bd8"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Shader.php" title="Shader class (vertex and fragment) ">Shader</a>.  <a href="#ad4f79ecdd0c60ed0d24fbe555b221bd8">More...</a><br /></td></tr>
<tr class="separator:ad4f79ecdd0c60ed0d24fbe555b221bd8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-attribs"></a>
Static Public Attributes</h2></td></tr>
<tr class="memitem:ad29672df29f19ce50c3021d95f2bb062"><td class="memItemLeft" align="right" valign="top">static const <a class="el" href="classsf_1_1RenderStates.php">RenderStates</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1RenderStates.php#ad29672df29f19ce50c3021d95f2bb062">Default</a></td></tr>
<tr class="memdesc:ad29672df29f19ce50c3021d95f2bb062"><td class="mdescLeft">&#160;</td><td class="mdescRight">Special instance holding the default render states.  <a href="#ad29672df29f19ce50c3021d95f2bb062">More...</a><br /></td></tr>
<tr class="separator:ad29672df29f19ce50c3021d95f2bb062"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Define the states used for drawing to a <a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...) ">RenderTarget</a>. </p>
<p>There are four global states that can be applied to the drawn objects:</p>
<ul>
<li>the blend mode: how pixels of the object are blended with the background </li>
<li>the transform: how the object is positioned/rotated/scaled </li>
<li>the texture: what image is mapped to the object </li>
<li>the shader: what custom effect is applied to the object</li>
</ul>
<p>High-level objects such as sprites or text force some of these states when they are drawn. For example, a sprite will set its own texture, so that you don't have to care about it when drawing the sprite.</p>
<p>The transform is a special case: sprites, texts and shapes (and it's a good idea to do it with your own drawable classes too) combine their transform with the one that is passed in the <a class="el" href="classsf_1_1RenderStates.php" title="Define the states used for drawing to a RenderTarget. ">RenderStates</a> structure. So that you can use a "global" transform on top of each object's transform.</p>
<p>Most objects, especially high-level drawables, can be drawn directly without defining render states explicitly &ndash; the default set of states is ok in most cases. </p><div class="fragment"><div class="line">window.draw(sprite);</div>
</div><!-- fragment --><p>If you want to use a single specific render state, for example a shader, you can pass it directly to the Draw function: <a class="el" href="classsf_1_1RenderStates.php" title="Define the states used for drawing to a RenderTarget. ">sf::RenderStates</a> has an implicit one-argument constructor for each state. </p><div class="fragment"><div class="line">window.draw(sprite, <a class="code" href="classsf_1_1RenderStates.php#ad4f79ecdd0c60ed0d24fbe555b221bd8">shader</a>);</div>
</div><!-- fragment --><p>When you're inside the Draw function of a drawable object (inherited from <a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target. ">sf::Drawable</a>), you can either pass the render states unmodified, or change some of them. For example, a transformable object will combine the current transform with its own transform. A sprite will set its texture. Etc.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...) ">sf::RenderTarget</a>, <a class="el" href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target. ">sf::Drawable</a> </dd></dl>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00045">45</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a885bf14070d0d5391f062f62b270b7d0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Constructing a default set of render states is equivalent to using <a class="el" href="classsf_1_1RenderStates.php#ad29672df29f19ce50c3021d95f2bb062" title="Special instance holding the default render states. ">sf::RenderStates::Default</a>. The default set defines: </p><ul>
<li>the BlendAlpha blend mode </li>
<li>the identity transform </li>
<li>a null texture </li>
<li>a null shader </li>
</ul>

</div>
</div>
<a class="anchor" id="acac8830a593c8a4523ac2fdf3cac8a01"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>theBlendMode</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct a default set of render states with a custom blend mode. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">theBlendMode</td><td>Blend mode to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a3e99cad6ab05971d40357949930ed890"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Transform.php">Transform</a> &amp;&#160;</td>
          <td class="paramname"><em>theTransform</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct a default set of render states with a custom transform. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">theTransform</td><td><a class="el" href="classsf_1_1Transform.php" title="Define a 3x3 transform matrix. ">Transform</a> to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a8f4ca3be0e27dafea0c4ab8547439bb1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Texture.php">Texture</a> *&#160;</td>
          <td class="paramname"><em>theTexture</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct a default set of render states with a custom texture. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">theTexture</td><td><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a39f94233f464739d8d8522f3aefe97d0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Shader.php">Shader</a> *&#160;</td>
          <td class="paramname"><em>theShader</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct a default set of render states with a custom shader. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">theShader</td><td><a class="el" href="classsf_1_1Shader.php" title="Shader class (vertex and fragment) ">Shader</a> to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ab5eda13cd8c79c74eba3b1b0df817d67"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::RenderStates::RenderStates </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> &amp;&#160;</td>
          <td class="paramname"><em>theBlendMode</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Transform.php">Transform</a> &amp;&#160;</td>
          <td class="paramname"><em>theTransform</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Texture.php">Texture</a> *&#160;</td>
          <td class="paramname"><em>theTexture</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Shader.php">Shader</a> *&#160;</td>
          <td class="paramname"><em>theShader</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct a set of render states with all its attributes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">theBlendMode</td><td>Blend mode to use </td></tr>
    <tr><td class="paramname">theTransform</td><td><a class="el" href="classsf_1_1Transform.php" title="Define a 3x3 transform matrix. ">Transform</a> to use </td></tr>
    <tr><td class="paramname">theTexture</td><td><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> to use </td></tr>
    <tr><td class="paramname">theShader</td><td><a class="el" href="classsf_1_1Shader.php" title="Shader class (vertex and fragment) ">Shader</a> to use </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="ad6ac87f1b5006dae7ebfee4b5d40f5a8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="structsf_1_1BlendMode.php">BlendMode</a> sf::RenderStates::blendMode</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Blending mode. </p>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00115">115</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="ad29672df29f19ce50c3021d95f2bb062"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1RenderStates.php">RenderStates</a> sf::RenderStates::Default</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Special instance holding the default render states. </p>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00110">110</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="ad4f79ecdd0c60ed0d24fbe555b221bd8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Shader.php">Shader</a>* sf::RenderStates::shader</td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Shader.php" title="Shader class (vertex and fragment) ">Shader</a>. </p>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00118">118</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a457fc5a41731889de9cf39cf9b3436c3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1Texture.php">Texture</a>* sf::RenderStates::texture</td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a>. </p>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00117">117</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a1f737981a0f2f0d4bb8dac866a8d1149"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Transform.php">Transform</a> sf::RenderStates::transform</td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Transform.php" title="Define a 3x3 transform matrix. ">Transform</a>. </p>

<p>Definition at line <a class="el" href="RenderStates_8hpp_source.php#l00116">116</a> of file <a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="RenderStates_8hpp_source.php">RenderStates.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
