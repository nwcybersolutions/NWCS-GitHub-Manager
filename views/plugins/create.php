<?php

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

?><h2>NWCS GitHub Manager - Install New Plugin</h2>

<form action="" method="POST">
    <?php wp_nonce_field('install-plugin'); ?>
    <input type="hidden" name="nwcybersolutions_gm[action]" value="install-plugin">
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row">
                    <label>Repository host</label>
                </th>
                <td>
                    <input id="radio-gh" name="nwcybersolutions_gm[type]" type="radio" value="gh" checked> <label for="radio-gh"><i class="fa fa-github"></i> GitHub &nbsp;</label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>Plugin repository</label>
                </th>
                <td>
                    <input id="nwcybersolutions_gm-repository-name" name="nwcybersolutions_gm[repository]" type="text" class="regular-text" value="<?php echo (isset($_POST['nwcybersolutions_gm']['repository'])) ? $_POST['nwcybersolutions_gm']['repository'] : ''; ?>">
                    <p class="description">Example: nwcybersolutions/NWCS-GitHub-Manager</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>Repository branch</label>
                </th>
                <td>
                    <input name="nwcybersolutions_gm[branch]" type="text" class="regular-text" placeholder="master" value="<?php echo (isset($_POST['nwcybersolutions_gm']['branch'])) ? $_POST['nwcybersolutions_gm']['branch'] : ''; ?>">
                    <p class="description">Defaults to <strong>master</strong> if left blank</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label>Repository subdirectory</label>
                </th>
                <td>
                    <input name="nwcybersolutions_gm[subdirectory]" type="text" class="regular-text" placeholder="Optional" value="<?php echo (isset($_POST['nwcybersolutions_gm']['subdirectory'])) ? $_POST['nwcybersolutions_gm']['subdirectory'] : ''; ?>">
                    <p class="description">Only relevant if your plugin resides in a subdirectory of the repository.</p>
                    <p class="description">Example: <strong>awesome-plugin</strong> or <strong>plugins/awesome-plugin</strong></p>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>
                    <label><input type="checkbox" name="nwcybersolutions_gm[private]" <?php if (isset($_POST['nwcybersolutions_gm']['private'])) echo 'checked'; ?> > <i class="fa fa-lock" aria-hidden="true"></i> Repository is private</label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label></label>
                </th>
                <td>
                    <label><input type="checkbox" name="nwcybersolutions_gm[ptd]" <?php if (isset($_POST['nwcybersolutions_gm']['ptd'])) echo 'checked'; ?>> <i class="fa fa-refresh" aria-hidden="true"></i> Push-to-Deploy</label>
                    <p class="description">Automatically update on every push.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>
                    <label><input type="checkbox" name="nwcybersolutions_gm[dry-run]" <?php if (isset($_POST['nwcybersolutions_gm']['dry-run'])) echo 'checked'; ?>> <i class="fa fa-link" aria-hidden="true"></i> Link installed plugin</label>
                    <p class="description">Let NWCS GitHub Manager take over an already installed plugin</p>
                    <p class="description">Folder name <strong>must</strong> have the same name as repository</p>
                </td>
            </tr>
        </tbody>
    </table>
    <?php submit_button('Install plugin'); ?>
</form>

<script>
    var ghBtn = document.getElementById('pick-from-gh-btn');
    var ghRadio = document.getElementById('radio-gh');
    var bbRadio = document.getElementById('radio-bb');
    var glRadio = document.getElementById('radio-gl');

    ghRadio.addEventListener('click', function(e) {
        ghBtn.style.display = 'inline-block';
    });
    bbRadio.addEventListener('click', function(e) {
        ghBtn.style.display = 'none';
    });
    glRadio.addEventListener('click', function(e) {
        ghBtn.style.display = 'none';
    });
</script>
