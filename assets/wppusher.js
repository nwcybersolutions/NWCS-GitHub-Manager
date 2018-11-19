jQuery(document).ready(function() {

    // Spinning update buttons
    jQuery('.button-update-package').click(function(e) {
        var button = this;

        jQuery(button).html('<i class="fa fa-refresh fa-spin"></i>&nbsp; Updating ...');
        jQuery(button).blur();
    });

    // Show Push-to-Deploy URL
    jQuery('.nwcybersolutions_gm-ptd-show').click(function(e) {
        var link = this;

        e.preventDefault();

        jQuery(link).closest('td').find('.nwcybersolutions_gm-ptd-url-container').show();
        jQuery(link).blur();
    });
});
