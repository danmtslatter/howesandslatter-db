<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include '../assets/includes/head.php'; ?>
	</head>
	
	<body>
		<div id="wrap">
			<div class="main-header"><a href="/"></a></div>
			
			<div class="content">
				<!-- BEGIN -->
				<h1>Wake up happy</h1>
				<div id="player"><a href=""></a></div>
				<div id="jplayer"></div>
				<script type="text/javascript">
				//<![CDATA[
				$(document).ready(function(){
				
					$("#jplayer").jPlayer({
						ready: function (event) {
							$(this).jPlayer("setMedia", {
								m4a:"http://www.jplayer.org/audio/m4a/TSP-01-Cro_magnon_man.m4a"
							});
						},
						swfPath: "/assets/flash",
						supplied: "m4a",
						mode: "window"
					});
				});
				//]]>
				</script>
				<table width="770" border="0" cellspacing="0" cellpadding="0" id="songdata">
					<tr>
						<td>
							<table width="385" border="0" cellspacing="0" cellpadding="0" id="left">
								<tr valign="top">
									<td><span class="datatitle">Length:</span><span class="datapoint">3min:37sec</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Tempo:</span><span class="datapoint">110bpm</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Classification:</span><span class="datapoint">Song</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Sub classification:</span><span class="datapoint subclass">TV advert, Female vocal, The ideal placement for all mankind</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Genre:</span><span class="datapoint">Pop, Indie</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Date started:</span><span class="datapoint">2010-05-18</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Date last modified:</span><span class="datapoint">2010-08-17</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Completed:</span><span class="datapoint">Yes</span></td>
								</tr>
							</table>
						</td>
						<td>
							<table width="385" border="0" cellspacing="0" cellpadding="0" id="right" valign="top">
								<tr>
									<td><span class="datatitle">PRS tunecode:</span><span class="datapoint">0123456789</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">ISRC tunecode:</span><span class="datapoint">0987654321</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Placements:</span><span class="datapoint placements">Music Dealers / Mc Donalds (March 2011)<br />Music Dealers / Mc Donalds (March 2011)<br />Music Dealers / Mc Donalds (March 2011)<br /></span></td>
								</tr>
								<tr>
									<td><span class="datatitle">Exclusive:</span><span class="datapoint">No</span></td>
								</tr>
								<tr>
									<td><span class="datatitle">H&amp;S Rating:</span><span class="datapoint rating"></span></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="notes clearfix">
					<h2>Notes &amp; comments:</h2>

					<img class="packshot" src="/assets/images/packshot.jpg" alt="" />
					<div class="comments">
						<p>First placed in March 2010, we ended up doing a second version of this with different lyrics. This was called <a href="#">End up happy</a>.</p>
						<p>Other stuff to say about this track.</p>
					</div>

				</div>
				<!-- END CM -->
			</div>
			
		</div>
	</body>
</html>