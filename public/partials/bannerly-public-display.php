<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Bannerly
 * @subpackage Bannerly/public/partials
 */
?>
<?php if (get_option('bannerly_api_key')) : ?>
  <script type="text/javascript" defer>
    Bannerly.mount({
      site_key: '<?php echo esc_attr(get_option('bannerly_api_key')); ?>',
    });
  </script>
<?php endif; ?>
