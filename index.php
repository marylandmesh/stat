<!DOCTYPE>
<html>
    <head>
    	<title>Hyperboria Statistics</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    	<div class="paper">
        	<div class="nums">
            	<div class="numbers">
                    <div class="stat"> <!--Active Nodes-->
                    	0
                    </div>
                    <div class="stat"> <!--Dedicated Nodes-->
                    	0
                    </div>
                    <div class="stat"> <!--Connections-->
                        0
                    </div>
                    <div class="stat"> <!--Meshlocals.-->
                    	<?php
							$meshlocals = 0;
							$locals = glob("local/*", GLOB_ONLYDIR);
							foreach($locals as $local)
								$meshlocals++;
							echo $meshlocals;                                
                        ?>
                    </div>
                </div>
            </div>
            <div class="names">
                <div class="titles">
                    Active Nodes
                </div>
                <div class="titles">
                    Dedicated Nodes
                </div>
                <div class="titles">
                   	Connections
                </div>
                <div class="titles">
                    Meshlocals
                </div>
            </div>
            <div class="paper_wrap">
            	<div class="button_wrap">
                    <a href="/local/" class="ic" title="Meshlocals">b</a>
                    <a href="#submit" class="ic" title="Submit">c</a>
                    <a href="#contact" class="ic" title="Contact">d</a>
					<a href="#chart" class="ic" title="Chart">e</a>
                    <a href="#map" class="ic" title="Map">f</a>
                </div>
                <div class="content">
                	<div id="submit" class="box">
                    	submit
                    </div>
                    <div id="contact" class="box">
                    	contact
                    </div>
                    <div id="chart" class="box">
                    	chart
                    </div>
                    <div id="map" class="box">
                    	map
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
