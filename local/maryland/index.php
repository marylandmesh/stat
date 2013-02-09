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
                    <div class="stat"> <!--....-->
						0
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
                    Dedicated Nodes
                </div>
                <div class="titles">
                    ....
                </div>
                <div class="titles">
                    Recently Down Nodes
                </div>
            </div>
            <div class="paper_wrap">
            	<div class="button_wrap">
                    <a href="/" class="ic" title="Home">a</a>
                    <a href=".." class="ic" title="Meshlocals">b</a>
                    <a href="#about" class="ic" title="About">i</a>
                    <a href="#contact" class="ic" title="Contact">d</a>
                    <a href="#chart" class="ic" title="Chart">e</a>
                    <a href="#nodes" class="ic" title="Nodes">g</a>
                    <a href="#map" class="ic" title="Map">f</a>
                </div>
                <div class="content">
                    <div id="contact" class="box">
                    	contact
                    </div>
                    <div id="chart" class="box">
                    	chart
                    </div>
                    <div id="map" class="box">
                    	map
                    </div>
                    <div id="about" class="box">
                    	about
                    </div>
                    <div id="nodes" class="box">
                    	<table id="table" class="tablesorter">
                        <thead>
                        <th>IPv6</th> <!--"X" if N/A-->
                        <th>Domain</th> <!--"X" if N/A-->
                        <th>Status</th> <!--Active/Inactive-->
                        <th>Connections</th> <!--Node/Dedicated Node-->
                        </thead>
                        <tbody>
                        <?php
							//get shit
							//for loooop, probably for each
								echo "<tr>";
									//ipv6
									echo "<td>";
									echo "";
									echo "</td>";
									//domain
									echo "<td>";
									echo "";
									echo "</td>";
									//status
									echo "<td>";
									echo "";
									echo "</td>";
									//connections
									echo "<td>";
									echo "";
									echo "</td>";
								echo "</tr>";
						?>
                        </tbody>
                    	</table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
