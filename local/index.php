<!DOCTYPE>
<html>
    <head>
    	<title>Hyperboria Statistics</title>
        <link rel="stylesheet" href="/css/style.css">
        <script type="text/javascript" src="/js/jquery.js"></script> 
		<script type="text/javascript" src="/js/sort.js"></script> 
        <script type="text/javascript" src="/js/table.js"></script> 
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
                    <div class="stat"> <!--Meshlocals-->
						<?php
							$meshlocals = 0;
							$locals = glob("*", GLOB_ONLYDIR);
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
                </div>
                <div class="content">
                	<table id="table" class="tablesorter">
                    	<thead>
                    	<th>Location</th>
                        <th>Active Nodes</th>
                        <th>Dedicated Nodes</th>
                        <th>Connections</th>
                        <th>Recently Down Nodes</th>
                        </thead>
                        <tbody>
                    	<?php
							foreach ($locals as $local) {
								echo "<tr onClick=\"document.location.href='".$local."'\">";
									//location
									echo "<td>";
									echo $local;
									echo "</td>";
									//active nodes
									echo "<td>";
									echo "0";
									echo "</td>";
									//main nodes
									echo "<td>";
									echo "0";
									echo "</td>";
									//connections
									echo "<td>";
									echo "0";
									echo "</td>";
									//recently down nodes
									echo "<td>";
									echo "0";
									echo "</td>";
								echo "</tr>";
							}
						?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
