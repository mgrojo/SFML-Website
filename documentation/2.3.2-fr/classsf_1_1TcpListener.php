<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::TcpListener Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1TcpListener.php">TcpListener</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-types">Protected Types</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1TcpListener-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::TcpListener Class Reference<div class="ingroups"><a class="el" href="group__network.php">Network module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">Socket</a> that listens to new TCP connections.  
 <a href="classsf_1_1TcpListener.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="TcpListener_8hpp_source.php">TcpListener.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::TcpListener:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1TcpListener.png" usemap="#sf::TcpListener_map" alt=""/>
  <map id="sf::TcpListener_map" name="sf::TcpListener_map">
<area href="classsf_1_1Socket.php" title="Base class for all the socket types. " alt="sf::Socket" shape="rect" coords="0,56,105,80"/>
<area href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable. " alt="sf::NonCopyable" shape="rect" coords="0,0,105,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a51bf0fd51057b98a10fbb866246176dc"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> { <br />
&#160;&#160;<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">Done</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09">NotReady</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca181c163fad2eaea927185d127c392706">Partial</a>, 
<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dcab215141f756acdc23c67fad149710eb1">Disconnected</a>, 
<br />
&#160;&#160;<a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1dc9854433a28c22e192721179a2df5d">Error</a>
<br />
 }<tr class="memdesc:a51bf0fd51057b98a10fbb866246176dc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Status codes that may be returned by socket functions.  <a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">More...</a><br /></td></tr>
<tr class="separator:a51bf0fd51057b98a10fbb866246176dc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</td></tr>
<tr class="memitem:a5deb2c955fd347259c3a20d27b2481aa"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom">{ <a class="el" href="classsf_1_1Socket.php#a5deb2c955fd347259c3a20d27b2481aaa5a3c30fd128895403afc11076f461b19">AnyPort</a> = 0
 }<tr class="memdesc:a5deb2c955fd347259c3a20d27b2481aa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Some special values used by sockets.  <a href="classsf_1_1Socket.php#a5deb2c955fd347259c3a20d27b2481aa">More...</a><br /></td></tr>
<tr class="separator:a5deb2c955fd347259c3a20d27b2481aa"><td class="memSeparator" colspan="2">&#160;</td></tr>
</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a59a1db5b6f4711a3e57390da2f8d9630"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1TcpListener.php#a59a1db5b6f4711a3e57390da2f8d9630">TcpListener</a> ()</td></tr>
<tr class="memdesc:a59a1db5b6f4711a3e57390da2f8d9630"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a59a1db5b6f4711a3e57390da2f8d9630">More...</a><br /></td></tr>
<tr class="separator:a59a1db5b6f4711a3e57390da2f8d9630"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3bb62b92684cd1a14b14efdaf0471440"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1TcpListener.php#a3bb62b92684cd1a14b14efdaf0471440">getLocalPort</a> () const </td></tr>
<tr class="memdesc:a3bb62b92684cd1a14b14efdaf0471440"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the port to which the socket is bound locally.  <a href="#a3bb62b92684cd1a14b14efdaf0471440">More...</a><br /></td></tr>
<tr class="separator:a3bb62b92684cd1a14b14efdaf0471440"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a409d9350d3abfea9636df8cf4a61004e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e">listen</a> (unsigned short port)</td></tr>
<tr class="memdesc:a409d9350d3abfea9636df8cf4a61004e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start listening for connections.  <a href="#a409d9350d3abfea9636df8cf4a61004e">More...</a><br /></td></tr>
<tr class="separator:a409d9350d3abfea9636df8cf4a61004e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3a00a850506bd0f9f48867a0fe59556b"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1TcpListener.php#a3a00a850506bd0f9f48867a0fe59556b">close</a> ()</td></tr>
<tr class="memdesc:a3a00a850506bd0f9f48867a0fe59556b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop listening and close the socket.  <a href="#a3a00a850506bd0f9f48867a0fe59556b">More...</a><br /></td></tr>
<tr class="separator:a3a00a850506bd0f9f48867a0fe59556b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae2c83ce5a64d50b68180c46bef0a7346"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1TcpListener.php#ae2c83ce5a64d50b68180c46bef0a7346">accept</a> (<a class="el" href="classsf_1_1TcpSocket.php">TcpSocket</a> &amp;socket)</td></tr>
<tr class="memdesc:ae2c83ce5a64d50b68180c46bef0a7346"><td class="mdescLeft">&#160;</td><td class="mdescRight">Accept a new connection.  <a href="#ae2c83ce5a64d50b68180c46bef0a7346">More...</a><br /></td></tr>
<tr class="separator:ae2c83ce5a64d50b68180c46bef0a7346"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a165fc1423e281ea2714c70303d3a9782"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a165fc1423e281ea2714c70303d3a9782">setBlocking</a> (bool blocking)</td></tr>
<tr class="memdesc:a165fc1423e281ea2714c70303d3a9782"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the blocking state of the socket.  <a href="#a165fc1423e281ea2714c70303d3a9782">More...</a><br /></td></tr>
<tr class="separator:a165fc1423e281ea2714c70303d3a9782"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a0ec0d831b015e32eb5935fd2a9f8c67c">isBlocking</a> () const </td></tr>
<tr class="memdesc:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tell whether the socket is in blocking or non-blocking mode.  <a href="#a0ec0d831b015e32eb5935fd2a9f8c67c">More...</a><br /></td></tr>
<tr class="separator:a0ec0d831b015e32eb5935fd2a9f8c67c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-types"></a>
Protected Types</h2></td></tr>
<tr class="memitem:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">Type</a> { <a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8acc02e97e90234b957eaad4dff7f22214">Tcp</a>, 
<a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8a6ebf3094830db4820191a327f3cc6ce2">Udp</a>
 }<tr class="memdesc:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Types of protocols that the socket can use.  <a href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">More...</a><br /></td></tr>
<tr class="separator:a5d3ff44e56e68f02816bb0fabc34adf8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:ac0c63b13e61da8294bf54e888e97f9a3"><td class="memItemLeft" align="right" valign="top">SocketHandle&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#ac0c63b13e61da8294bf54e888e97f9a3">getHandle</a> () const </td></tr>
<tr class="memdesc:ac0c63b13e61da8294bf54e888e97f9a3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the internal handle of the socket.  <a href="#ac0c63b13e61da8294bf54e888e97f9a3">More...</a><br /></td></tr>
<tr class="separator:ac0c63b13e61da8294bf54e888e97f9a3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#aafbe140f4b1921e0d19e88cf7a61dcbc">create</a> ()</td></tr>
<tr class="memdesc:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the internal representation of the socket.  <a href="#aafbe140f4b1921e0d19e88cf7a61dcbc">More...</a><br /></td></tr>
<tr class="separator:aafbe140f4b1921e0d19e88cf7a61dcbc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Socket.php#af1dd898f7aa3ead7ff7b2d1c20e97781">create</a> (SocketHandle handle)</td></tr>
<tr class="memdesc:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the internal representation of the socket from a socket handle.  <a href="#af1dd898f7aa3ead7ff7b2d1c20e97781">More...</a><br /></td></tr>
<tr class="separator:af1dd898f7aa3ead7ff7b2d1c20e97781"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">Socket</a> that listens to new TCP connections. </p>
<p>A listener socket is a special type of socket that listens to a given port and waits for connections on that port.</p>
<p>This is all it can do.</p>
<p>When a new connection is received, you must call accept and the listener returns a new instance of <a class="el" href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. ">sf::TcpSocket</a> that is properly initialized and can be used to communicate with the new client.</p>
<p><a class="el" href="classsf_1_1Listener.php" title="The audio listener is the point in the scene from where all the sounds are heard. ...">Listener</a> sockets are specific to the TCP protocol, UDP sockets are connectionless and can therefore communicate directly. As a consequence, a listener socket will always return the new connections as <a class="el" href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. ">sf::TcpSocket</a> instances.</p>
<p>A listener is automatically closed on destruction, like all other types of socket. However if you want to stop listening before the socket is destroyed, you can call its <a class="el" href="classsf_1_1TcpListener.php#a3a00a850506bd0f9f48867a0fe59556b" title="Stop listening and close the socket. ">close()</a> function.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Create a listener socket and make it wait for new</span></div>
<div class="line"><span class="comment">// connections on port 55001</span></div>
<div class="line"><a class="code" href="classsf_1_1TcpListener.php">sf::TcpListener</a> listener;</div>
<div class="line">listener.<a class="code" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e">listen</a>(55001);</div>
<div class="line"></div>
<div class="line"><span class="comment">// Endless loop that waits for new connections</span></div>
<div class="line"><span class="keywordflow">while</span> (running)</div>
<div class="line">{</div>
<div class="line">    <a class="code" href="classsf_1_1TcpSocket.php">sf::TcpSocket</a> client;</div>
<div class="line">    <span class="keywordflow">if</span> (listener.<a class="code" href="classsf_1_1TcpListener.php#ae2c83ce5a64d50b68180c46bef0a7346">accept</a>(client) == <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90">sf::Socket::Done</a>)</div>
<div class="line">    {</div>
<div class="line">        <span class="comment">// A new client just connected!</span></div>
<div class="line">        std::cout &lt;&lt; <span class="stringliteral">&quot;New connection received from &quot;</span> &lt;&lt; client.<a class="code" href="classsf_1_1TcpSocket.php#a7904ca6ab9e018021e305a3aeb7a1b9a">getRemoteAddress</a>() &lt;&lt; std::endl;</div>
<div class="line">        doSomethingWith(client);</div>
<div class="line">    }</div>
<div class="line">}</div>
</div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpSocket.php" title="Specialized socket using the TCP protocol. ">sf::TcpSocket</a>, <a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">sf::Socket</a> </dd></dl>

<p>Definition at line <a class="el" href="TcpListener_8hpp_source.php#l00043">43</a> of file <a class="el" href="TcpListener_8hpp_source.php">TcpListener.hpp</a>.</p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a class="anchor" id="a5deb2c955fd347259c3a20d27b2481aa"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">anonymous enum</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Some special values used by sockets. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a5deb2c955fd347259c3a20d27b2481aaa5a3c30fd128895403afc11076f461b19"></a>AnyPort&#160;</td><td class="fielddoc">
<p>Special value that tells the system to pick any available port. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00066">66</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a51bf0fd51057b98a10fbb866246176dc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Status codes that may be returned by socket functions. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca1de3a85bc56d3ae85b3d0f3cfd04ae90"></a>Done&#160;</td><td class="fielddoc">
<p>The socket has sent / received the data. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca8554848daae98f996e131bdeed076c09"></a>NotReady&#160;</td><td class="fielddoc">
<p>The socket is not ready to send / receive data yet. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca181c163fad2eaea927185d127c392706"></a>Partial&#160;</td><td class="fielddoc">
<p>The socket sent a part of the data. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dcab215141f756acdc23c67fad149710eb1"></a>Disconnected&#160;</td><td class="fielddoc">
<p>The TCP socket has been disconnected. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a51bf0fd51057b98a10fbb866246176dca1dc9854433a28c22e192721179a2df5d"></a>Error&#160;</td><td class="fielddoc">
<p>An unexpected error happened. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00053">53</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="classsf_1_1Socket.php#a5d3ff44e56e68f02816bb0fabc34adf8">sf::Socket::Type</a></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Types of protocols that the socket can use. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8acc02e97e90234b957eaad4dff7f22214"></a>Tcp&#160;</td><td class="fielddoc">
<p>TCP protocol. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="a5d3ff44e56e68f02816bb0fabc34adf8a6ebf3094830db4820191a327f3cc6ce2"></a>Udp&#160;</td><td class="fielddoc">
<p>UDP protocol. </p>
</td></tr>
</table>

<p>Definition at line <a class="el" href="Socket_8hpp_source.php#l00114">114</a> of file <a class="el" href="Socket_8hpp_source.php">Socket.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a59a1db5b6f4711a3e57390da2f8d9630"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::TcpListener::TcpListener </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ae2c83ce5a64d50b68180c46bef0a7346"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> sf::TcpListener::accept </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1TcpSocket.php">TcpSocket</a> &amp;&#160;</td>
          <td class="paramname"><em>socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Accept a new connection. </p>
<p>If the socket is in blocking mode, this function will not return until a connection is actually received.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">socket</td><td><a class="el" href="classsf_1_1Socket.php" title="Base class for all the socket types. ">Socket</a> that will hold the new connection</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e" title="Start listening for connections. ">listen</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3a00a850506bd0f9f48867a0fe59556b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::TcpListener::close </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stop listening and close the socket. </p>
<p>This function gracefully stops the listener. If the socket is not listening, this function has no effect.</p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e" title="Start listening for connections. ">listen</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aafbe140f4b1921e0d19e88cf7a61dcbc"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::create </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Create the internal representation of the socket. </p>
<p>This function can only be accessed by derived classes. </p>

</div>
</div>
<a class="anchor" id="af1dd898f7aa3ead7ff7b2d1c20e97781"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::create </td>
          <td>(</td>
          <td class="paramtype">SocketHandle&#160;</td>
          <td class="paramname"><em>handle</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Create the internal representation of the socket from a socket handle. </p>
<p>This function can only be accessed by derived classes.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">handle</td><td>OS-specific handle of the socket to wrap </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ac0c63b13e61da8294bf54e888e97f9a3"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">SocketHandle sf::Socket::getHandle </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the internal handle of the socket. </p>
<p>The returned handle may be invalid if the socket was not created yet (or already destroyed). This function can only be accessed by derived classes.</p>
<dl class="section return"><dt>Returns</dt><dd>The internal (OS-specific) handle of the socket </dd></dl>

</div>
</div>
<a class="anchor" id="a3bb62b92684cd1a14b14efdaf0471440"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short sf::TcpListener::getLocalPort </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the port to which the socket is bound locally. </p>
<p>If the socket is not listening to a port, this function returns 0.</p>
<dl class="section return"><dt>Returns</dt><dd>Port to which the socket is bound</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpListener.php#a409d9350d3abfea9636df8cf4a61004e" title="Start listening for connections. ">listen</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a0ec0d831b015e32eb5935fd2a9f8c67c"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Socket::isBlocking </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Tell whether the socket is in blocking or non-blocking mode. </p>
<dl class="section return"><dt>Returns</dt><dd>True if the socket is blocking, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Socket.php#a165fc1423e281ea2714c70303d3a9782" title="Set the blocking state of the socket. ">setBlocking</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a409d9350d3abfea9636df8cf4a61004e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> sf::TcpListener::listen </td>
          <td>(</td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>port</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Start listening for connections. </p>
<p>This functions makes the socket listen to the specified port, waiting for new connections. If the socket was previously listening to another port, it will be stopped first and bound to the new port.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">port</td><td>Port to listen for new connections</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1TcpListener.php#ae2c83ce5a64d50b68180c46bef0a7346" title="Accept a new connection. ">accept</a>, <a class="el" href="classsf_1_1TcpListener.php#a3a00a850506bd0f9f48867a0fe59556b" title="Stop listening and close the socket. ">close</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a165fc1423e281ea2714c70303d3a9782"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Socket::setBlocking </td>
          <td>(</td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>blocking</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the blocking state of the socket. </p>
<p>In blocking mode, calls will not return until they have completed their task. For example, a call to Receive in blocking mode won't return until some data was actually received. In non-blocking mode, calls will always return immediately, using the return code to signal whether there was data available or not. By default, all sockets are blocking.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">blocking</td><td>True to set the socket as blocking, false for non-blocking</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Socket.php#a0ec0d831b015e32eb5935fd2a9f8c67c" title="Tell whether the socket is in blocking or non-blocking mode. ">isBlocking</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="TcpListener_8hpp_source.php">TcpListener.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
