<?php

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

?><h2>NWCS GitHub Manager - Plugins</h2>

<hr>
<br>

<table class="wp-list-table widefat plugins">
	<thead>
    <tr>
        <th></th>
        <th scope="col" class="manage-column">Plugin</th>
        <th scope="col" class="manage-column">Deploy Info</th>
        <th>Actions</th>
        <th></th>
        <th></th>
    </tr>
	</thead>

	<tbody id="the-list">
        <?php if (count($plugins) < 1) { ?>
            <tr><td></td><td>No plugins installed with NWCS GitHub Manager yet.</td></tr>
        <?php } ?>
        <?php foreach ($plugins as $plugin) { ?>
        <tr>
            <td></td>
            <td class="plugin-title column-primary"><strong><?php echo $plugin->name; ?></strong><i class="fa <?php echo getHostIcon($plugin->host); ?>"></i>&nbsp; <?php echo $plugin->repository; ?></td>
            <td class="column-description desc" style="width: 100%;">
                <div class="inactive second plugin-version-author-uri">
                    Branch: <code class="nwcybersolutions_gm-code"><?php echo $plugin->repository->getBranch(); ?></code>
                    | Push-to-Deploy: <code class="nwcybersolutions_gm-code <?php echo ($plugin->pushToDeploy) ? 'nwcybersolutions_gm-green' : 'nwcybersolutions_gm-red'; ?>"><?php echo ($plugin->pushToDeploy) ? 'enabled' : 'disabled'; ?></code>
                    <?php if ($plugin->hasSubdirectory()) { ?>| Subdirectory: <code class="nwcybersolutions_gm-code"><?php echo $plugin->getSubdirectory(); ?></code><?php } ?>
                </div>
                <?php if ($plugin->pushToDeploy) { ?>
                    <br>
                    <a href="#" class="nwcybersolutions_gm-ptd-show">&raquo; Show Push-to-Deploy URL</a><div class="nwcybersolutions_gm-ptd-url-container"><code class="ptd-url nwcybersolutions_gm-code"><?php echo $plugin->getPushToDeployUrl(); ?></code></div>
                <?php } ?>
            </td>
            <td>
                <a href="?page=nwcybersolutions_gm-plugins&package=<?php echo urlencode($plugin->file); ?>" type="submit" class="button button-secondary"><i class="fa fa-wrench"></i>&nbsp; Edit plugin</a>
            </td>
            <td>
                <form action="" method="POST">
                    <?php wp_nonce_field('update-plugin'); ?>
                    <input type="hidden" name="nwcybersolutions_gm[action]" value="update-plugin">
                    <input type="hidden" name="nwcybersolutions_gm[repository]" value="<?php echo $plugin->repository; ?>">
                    <input type="hidden" name="nwcybersolutions_gm[file]" value="<?php echo $plugin->file; ?>">
                    <button type="submit" class="button button-primary button-update-package"><i class="fa fa-refresh"></i>&nbsp; Update plugin</button>
                </form>
            </td>
            <td></td>
        </tr>
        <?php } ?>
	</tbody>
</table>
