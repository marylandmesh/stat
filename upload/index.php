<!DOCTYPE>
<html>
    <head>
    	<title>Hyperboria Statistics</title>
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="/js/hmac-sha256.js"></script>
        <script type="text/javascript" src="/js/upload.js"></script>
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
							$locals = glob("../local/*", GLOB_ONLYDIR);
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
                	<a href="/" class="ic" title="Home">a</a>
                    <a href="/local/" class="ic" title="Meshlocals">b</a>
                </div>
                <div class="content">
					<form id="upload" method="post" action="/scripts/upload.php" onSubmit="encrypt()">
                    	<input type="text" placeholder="Meshlocal ID" class="upload" name="id"/>
                        <input type="password" placeholder="Password" class="upload" name="password"/>
                        <textarea class="upload" placeholder="JSON data"></textarea>
                        <input type="submit" class="upload"/>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
