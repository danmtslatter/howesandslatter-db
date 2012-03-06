<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'assets/includes/head.php'; ?>
	</head>
	
	<body>
		<div id="wrap">
			<div class="main-header"><a href="/"></a></div>
			
			<div id="sub-header">
				<h1 id="workspace-title">Current H&amp;S workspaces</h1>
				<div id="search">
					<form action="/search/" method="post">
						<input type="text" class="text" title="Search the database" name="searchterm" value="Search the database" />
						<input type="submit" id="go" />
					</form>
				</div>
			</div>
			<div class="content">
				<div id="workspaces" class="clearfix">
					<ul class="clearfix">
						<li>
							<a href="#">
								<img src="" alt="Workspace name" />
								<span class="workspace-title">Workspace name 1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="" alt="Workspace name" />
								<span class="workspace-title">Workspace name 2</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="" alt="Workspace name" />
								<span class="workspace-title">Workspace name 3</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="" alt="Workspace name" />
								<span class="workspace-title">Workspace name 4</span>
							</a>
						</li>
					</ul>
				</div>
				
				<h1 id="most-recent">Most recent tracks&nbsp;&nbsp;<span class="inline-text"><a href="#">See full track list</a></span></h1>
				
				<table width="790" border="0" cellspacing="0" cellpadding="0" style="padding:0 10px;" id="songlist" class="tablesorter">
					<thead>
					<tr>
						<th width="310">Song title</th>
						<th width="185">Classification</th>
						<th width="200">Date last modified</th>
						<th width="95">Complete</th>
					</tr>
					</thead>
					<tbody>
						<?php
						
							//Query the venues row
							$query = "SELECT contentJSON, contentPage FROM perch_contentItems WHERE contentKey = 'Track details';";
						    $result = mysql_query($query) or die ("Couldn't execute query");
						
							while ($contentArray = mysql_fetch_array($result)) {
								$json = $contentArray[0];
								$songtitlesSORT[] = unwrapJSON('track_title', $json);
								$songtitles[] = unwrapJSON('track_title', $json);
								$classifications[] = unwrapJSON('classification', $json);
								$datemodifieds[] = strtoupper(unwrapJSON('date_modified', $json));
								$completes[] = unwrapJSON('track_completed', $json);
								$pagelinks[] = $contentArray[1];
								
							}
							
							asort($datemodifieds);
							$i = 0;
							foreach ($songtitlesSORT as $key => $songtitlessort) {
								echo '<tr class="data">
									<td><a href="'.$pagelinks[$key].'">'.$songtitles[$key].'</a></td>
									<td>'.$classifications[$key].'</td>
									<td>'.$datemodifieds[$key].'</td>
									<td>'.$completes[$key].'</td>
								</tr>';
								if(++$i > 10) break;
							}
							
						?>
					</tbody>
				</table>
			</div>
			
		</div>
	</body>
</html>