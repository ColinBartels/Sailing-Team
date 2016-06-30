<?php
include("common.php");
create_header();
?>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=501131800034475";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div id="info">
			<div id="description">
				<h2>UW Collegiate Sailing</h2>
				<p>The UW Sailing Team is a club sport at the University of Washington in Seattle. The sailing team is a member of the <a href="http://www.collegesailing.org">Intercollegiate Sailing Association (ICSA)</a> and competes across the US. The sailing team hosts regular practices at <a href="http://www.sailsandpoint.org">Sail Sand Point</a> on Lake Washington.</p>
				<h2>Join The Team</h2>
				<p>If you are interested in competitive sailing at UW, please attend a practice Tu/Th/Fri 3:30-6:30pm during the fall or spring at <a href="http://www.sailsandpoint.org">Sail Sand Point</a> or <a href="contact.php">contact us</a>.</p>
				<p><a href="https://mailman1.u.washington.edu/mailman/listinfo/uwsailingteam">Click here to join our mailing list!</a></p>
			</div>
			<div class="fb-page" data-href="https://www.facebook.com/UWsailingteam" data-width="320" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/UWsailingteam"><a href="https://www.facebook.com/UWsailingteam">UW Sailing Team</a></blockquote>
				</div>
			</div>
			<img id="team" src="team.jpg" alt="Team Picture">
		</div>
<?php 
create_footer();
?>