<p><strong># CI-HTMLPurifier</strong><br /><strong>implement HTMLPurifier into Codeigniter and use it direct from the security class</strong></p>
<p><strong>---------------------------------------------</strong></p>
<p><strong>Hello</strong><br />Many Codeigniter users wants to use htmlpurifier rathere than the xss_clean function in Codeigniter.<br />in this you will find a file called MY_Security.php witch you need to put it in (core) folder in your ci application<br />then you need to download htmlpurifier standalone from here<br />http://htmlpurifier.org/download<br />and extract it into (third_party) folder<br />so it will look like this<br />application/third_party/htmlpurifier-4.10.0-standalone<br />Hint .. it dose not require to rename it as MY_Security.php will try to find it automaticlly</p>
<p><br /><strong>You can use it later in your code like this</strong></p>
<p><strong>$clean_html = $this-&gt;security-&gt;htmlpurify($dirty_html);</strong></p>
