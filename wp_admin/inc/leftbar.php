<?php defined("OUR_ENGINE") or die ("FATAL ERROR, ACCESS DENIED"); ?>
<div class="content-main">
	<div class="leftBar">
		<p class="def_menu color">Menu</p>
		<ul class="nav-left">
			<li><a href="<?php echo PATH_ADM?>">Paginile aplicației</a></li>
		</ul>
		
		<?php if($_SESSION['WP_ODS_ADM_AUTH']['ADM_ROLE']==1): ?>
			<p class="def_menu color">Default Menu</p>
			<ul class="nav-left">
				<li><a href="../administratori/">Administratori</a></li>
				<li><a href="sysmessages/?view=sysmess">Mesaje (sistem)</a></li>
				<li><a href="?view=systextes">Text Redactabil</a></li>
				<li><a href="../sysinscriptions/">Inscripții</a></li>
				<li><a href="?view=sysconf">Setări</a></li>
			</ul>
		<?php endif; ?>
	</div> <!-- .leftBar -->