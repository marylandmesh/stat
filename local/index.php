<!DOCTYPE>
<html>
    <head>
    	<title>Hyperboria Statistics</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    	<div class="paper">
        	<div class="nums">
            	<div class="numbers">
                    <div class="stat"> <!--Active Nodes-->
                    	0
                    </div>
                    <div class="stat"> <!--Main Nodes-->
                    	0
                    </div>
                    <div class="stat"> <!--Meshlocals-->
						<?php
							$meshlocals=0;
							foreach(glob("*", GLOB_ONLYDIR) as $derp)
								$meshlocals++;
							echo $meshlocals;                               
                        ?>
                    </div>
                    <div class="stat"> <!--Recently Down Nodes-->
                        0
                    </div>
                </div>
            </div>
            <div class="names">
                <div class="titles">
                    Active Nodes
                </div>
                <div class="titles">
                    Main Nodes
                </div>
                <div class="titles">
                    Meshlocals
                </div>
                <div class="titles">
                    Recently Down Nodes
                </div>
            </div>
            <div class="paper_wrap">
            	<div class="button_wrap">
                    <a href="/" class="ic" title="Home">a</a>
                </div>
                <div class="content">
                	<?php
						$meshlocals=0;
						$y=scandir(".");
						foreach($y as $z) if(is_dir($z)) $meshlocals++;
					?>
                </div>
            </div>
        </div>
    </body>
</html>
