<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Angorithm4</title>
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
    <div class="main_page">
      <div class="page_header floating_element">
        <img src="/icons/ubuntu-logo.png" alt="Ubuntu Logo" class="floating_element"/>
        <span class="floating_element">
          Page Under Development
        </span>
      </div>
      <div class="content_section floating_element">

        <div class="section_header section_header_red">
          <div id="about"></div>
          SMA Earn Money Test
        </div>
        <div class="content_section_text">
	    <form action="sma.php" method="post">
	     <p><b>Which Company:</b>                       <input type="text" name="company" /></p>
	     <p><b>Frequency:(Daily/Weekly/Monthly)</b>     <input type="text" name='freq' /></p>
	     <p><b>SMA Interval:</b>                        <input type="number" name = 'inter' /></p>
	     <p><b>Start Date (DD/MM/YY)</b>                <input type="text" name="start" /></p>
	     <p><b>End Date (DD/MM/YY)</b>                  <input type="text" name="end" /></p>
	     <p><b><input type="submit" value="Calculate!"/></b></p>
	    </form>

          <p>
                If you are a normal user of this web site and don't know what this page is
                about, this probably means that the site is currently unavailable due to
                maintenance.
                If the problem persists, please contact the site's <a href="https://github.com/Angold-4">administrator</a>.
          </p>

        </div>
        <div class="section_header">
          <div id="changes"></div>
		Acknowledgement
        </div>
        <div class="content_section_text">
          <p>

          </p>
          <p>
		This site is build by <a href="http://github.com/Angold-4">Angold Wang</a> and current host in a <a href="https://en.wikipedia.org/wiki/Raspberry_Pi"><b>Raspberry Pi 4B</b></a>.<br>
		You can find the source code <a href="https://github.com/Angorithm4/wfw">here</a> and below is the current basic structure of this project:
          </p>
          <pre>
.
├── LICENSE
├── action.php
├── index.css
├── index.php
├── main.cpp
├── sma.exe
├── sma.php
└── src
    └── modules
        ├── rtstock
        │   ├── a.out
        │   └── main.cpp
        └── sma
            ├── HandleObj.cpp
            ├── a.out
            └── main.cpp
          </pre>

          <ul>
                        <li>
                           <tt>index.php</tt> is the index page
                           file. It puts the pieces together by including all the features, but still on the construction
                        </li>

                        <li>
                           <tt>sma.php</tt> is the page which tell the server to run the sma module code (written in C++)
                        </li>

                        <li>
			   Inside <tt>src</tt> folder is the module code and other stuff, which is the core of this project
                        </li>
          </ul>
        </div>


      </div>
    </div>
    <div class="validator">
    </div>
  </body>
</html>

