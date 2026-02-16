<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consen
 */

?>
<script>
    jQuery(document).ready(function($) {
        $('#service-select').change(function() {
            if ($(this).val() === 'Industrial Projects') {
                $('#industrial-options').show();
            } else {
                $('#industrial-options').hide();
            }
        });
    });
</script>
</body>
</html>