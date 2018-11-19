<?php

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

?><div class="wrap">

<?php
foreach ($messages as $message) {
    if (is_wp_error($message)) { ?>

        <div class="error">
            <p>
                An error occured: <?php echo $message->get_error_message(); ?>
            </p>
        </div>
    <?php } else { ?>
        <div class="updated"><p><?php echo $message; ?></p></div>
    <?php }
}
?>

    <?php include __DIR__ . '/' . $view . '.php'; ?>

    <hr>

    <div style="text-align: center; margin: 20px 0 20px 0;">
        <p>
            Copyright &copy; <?php echo date('Y'); ?>
            <a href="https://nwcybersolutions.com/" target="_blank">Northwest Cyber Solutions</a>
        </p>
        <a href="https://nwcybersolutions.com" target="_blank">
            <img src="https://www.nwcybersolutions.com/Files/Uploads/NWCS-Logo.png" width="50">
        </a>
    </div>
</div>
