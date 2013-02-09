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
							$meshlocals = 0;
							$locals = glob("*", GLOB_ONLYDIR);
							foreach($locals as $local)
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
                	<table>
                    	<th>Location</th>
                        <th>Active Nodes</th>
                        <th>Main Nodes</th>
                        <th>Recently Down Nodes</th>
                    	<?php
							foreach ($locals as $local) {
								echo "<a href=\"".$local."\">";
								echo "<tr>";
									//location
									echo "<td>";
									echo $local;
									echo "</td>";
									//active nodes
									echo "<td>";
									echo "active";
									echo "</td>";
									//main nodes
									echo "<td>";
									echo "mainnode";
									echo "</td>";
									//down nodes
									echo "<td>";
									echo "downnode";
									echo "</td>";
								echo "</tr>";
								echo "</a>";
							}
						?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
