# CI-HTMLPurifier
implement HTMLPurifier into Codeigniter and use it direct from the security class

---------------------------------------------

Hello
Many Codeigniter users wants to use htmlpurifier rathere than the xss_clean function in Codeigniter.
in this you will find a file called MY_Security.php witch you need to put it in (core) folder in your ci application
then you need to download htmlpurifier standalone from here
http://htmlpurifier.org/download
and extract it into (third_party) folder
so it will be like this
application/third_party/htmlpurifier-4.10.0-standalone
Hint .. it dose not require to rename it as MY_Security.php will try to find it automaticlly


You can use it latter in your code like this

$clean_html = $this->security->htmlpurify($dirty_html);
