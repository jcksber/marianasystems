<div class="nav-container">
	<?php
	
		if (isset($usetransparent) && $usetransparent == true) {
			echo '<nav class="nav--absolute nav--transparent">';
		} else {
			echo '<nav class="bg--primary">';
		}
	
	?>
	<div class="nav-bar">
		<div class="col-md-2">
			<div class="nav-module logo-module">
				<a href="/">
					<img class="logo" alt="logo" src="img/logo.png">
				</a>
			</div>
		</div>
		<div class="nav-module menu-module col-md-8 col-xs-12 text-center text-left-xs">
			<ul class="menu">
				<li class="has-dropdown">
					<a>Features</a>
					<ul>
						<li>
							<a href="features-overview" style="color: #333; font-weight: bold;">Features Overview</a>
						</li>
						<li>
							<a href="asset-managers">Asset Managers</a>
						</li>
						<li>
							<a href="fund-managers">Fund Managers</a>
						</li>
						<li>
							<a href="direct-lenders">Direct Lenders</a>
						</li>
					</ul>
				</li>
				<li class="no-dropdown">
					<a href="about">About</a>
				</li>
				<li class="no-dropdown">
					<a href="news">News</a>
				</li>
				<li class="no-dropdown">
					<a href="contact">Contact</a>
				</li>
			</ul>
		</div><!--end nav module-->
		<div class="col-md-2 text-right text-center-xs clearfix">
    	<div class="nav-module">
        <a class="btn btn--sm btn--white btn--unfilled" href="contact">
          <span class="btn__text">Request Demo</span>
          <i class="ion-arrow-right-c"></i>
        </a>
    	</div>
		</div>
	</div><!--end nav bar-->
	<div class="nav-mobile-toggle visible-sm visible-xs"><i class="ion-drag"></i></div>
</div>