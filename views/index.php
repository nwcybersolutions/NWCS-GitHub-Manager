<?php

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

?>
<h2>
    <img src="https://www.nwcybersolutions.com/Files/Uploads/Northwest-Cyber-Solutions-White.png" width="250">
</h2>
<h2 class="nav-tab-wrapper">
    <a href="?page=nwcybersolutions_gm&tab=github" title="GitHub" class="nav-tab<?php echo $tab === 'github' ? ' nav-tab-active' : null; ?>"><i class="fa fa-github"></i>&nbsp; GitHub</a>
</h2>

<?php require $tabView; ?>