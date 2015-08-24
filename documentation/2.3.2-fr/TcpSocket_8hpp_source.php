<?php
    $version = '2.3.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'TcpSocket.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_87ca8c5d0d8d239d6322f1e68c22e8c9.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">TcpSocket.hpp</div>  </div>
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
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Network/Socket.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>TcpListener;</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>IpAddress;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>Packet;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="classsf_1_1TcpSocket.php">   46</a></span>&#160;<span class="keyword">class </span>SFML_NETWORK_API <a class="code" href="classsf_1_1TcpSocket.php">TcpSocket</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Socket.php">Socket</a></div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <a class="code" href="classsf_1_1TcpSocket.php">TcpSocket</a>();</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> getLocalPort() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;    <a class="code" href="classsf_1_1IpAddress.php">IpAddress</a> getRemoteAddress() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;</div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> getRemotePort() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> connect(<span class="keyword">const</span> <a class="code" href="classsf_1_1IpAddress.php">IpAddress</a>&amp; remoteAddress, <span class="keywordtype">unsigned</span> <span class="keywordtype">short</span> remotePort, <a class="code" href="classsf_1_1Time.php">Time</a> timeout = <a class="code" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Time::Zero</a>);</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;    <span class="keywordtype">void</span> disconnect();</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> send(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size);</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> send(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; sent);</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> receive(<span class="keywordtype">void</span>* data, std::size_t size, std::size_t&amp; received);</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> send(<a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; packet);</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;    <a class="code" href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">Status</a> receive(<a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; packet);</div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;</div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1TcpListener.php">TcpListener</a>;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <span class="keyword">struct </span>PendingPacket</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;    {</div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;        PendingPacket();</div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;        Uint32            Size;         </div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;        std::size_t       SizeReceived; </div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;        std::vector&lt;char&gt; Data;         </div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;    };</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;<span class="comment"></span>    PendingPacket m_pendingPacket; </div>
<div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;};</div>
<div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;</div>
<div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;</div>
<div class="line"><a name="l00235"></a><span class="lineno">  235</span>&#160;</div>
<div class="line"><a name="l00236"></a><span class="lineno">  236</span>&#160;<span class="preprocessor">#endif // SFML_TCPSOCKET_HPP</span></div>
<div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;</div>
<div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;</div>
<div class="ttc" id="classsf_1_1TcpListener_php"><div class="ttname"><a href="classsf_1_1TcpListener.php">sf::TcpListener</a></div><div class="ttdoc">Socket that listens to new TCP connections. </div><div class="ttdef"><b>Definition:</b> <a href="TcpListener_8hpp_source.php#l00043">TcpListener.hpp:43</a></div></div>
<div class="ttc" id="classsf_1_1TcpSocket_php"><div class="ttname"><a href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></div><div class="ttdoc">Specialized socket using the TCP protocol. </div><div class="ttdef"><b>Definition:</b> <a href="TcpSocket_8hpp_source.php#l00046">TcpSocket.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php_a51bf0fd51057b98a10fbb866246176dc"><div class="ttname"><a href="classsf_1_1Socket.php#a51bf0fd51057b98a10fbb866246176dc">sf::Socket::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Status codes that may be returned by socket functions. </div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00053">Socket.hpp:53</a></div></div>
<div class="ttc" id="classsf_1_1IpAddress_php"><div class="ttname"><a href="classsf_1_1IpAddress.php">sf::IpAddress</a></div><div class="ttdoc">Encapsulate an IPv4 network address. </div><div class="ttdef"><b>Definition:</b> <a href="IpAddress_8hpp_source.php#l00044">IpAddress.hpp:44</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Packet_php"><div class="ttname"><a href="classsf_1_1Packet.php">sf::Packet</a></div><div class="ttdoc">Utility class to build blocks of data to transfer over the network. </div><div class="ttdef"><b>Definition:</b> <a href="Packet_8hpp_source.php#l00047">Packet.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1Time_php_a8db127b632fa8da21550e7282af11fa0"><div class="ttname"><a href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">sf::Time::Zero</a></div><div class="ttdeci">static const Time Zero</div><div class="ttdoc">Predefined "zero" time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00085">Time.hpp:85</a></div></div>
<div class="ttc" id="classsf_1_1Socket_php"><div class="ttname"><a href="classsf_1_1Socket.php">sf::Socket</a></div><div class="ttdoc">Base class for all the socket types. </div><div class="ttdef"><b>Definition:</b> <a href="Socket_8hpp_source.php#l00045">Socket.hpp:45</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
