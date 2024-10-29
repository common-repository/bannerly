<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://bannerly.app
 * @since      1.0.0
 *
 * @package    Bannerly
 * @subpackage Bannerly/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
  <h1>Bannerly Settings</h1>
  <form action="options.php" method="post">
    <?php
    settings_fields('bannerly_options');
    do_settings_sections('bannerly'); ?>

    <h3>This plugin is an integration with <a href="https://bannerly.app" target="_blank">bannerly.app</a>. It displays banners created using the Bannerly dashboard directly into your Wordpress sites! In order to use this plugin you'll need to register for a <a href="https://bannerly.app">free account</a>.</h3>
    <h4>Free account</h4>
    <p>If you sign up for our free tier you can create unlimited banners with <strong>Bannerly branding</strong></p>
    <h4>Paid account</h4>
    <p>Our paid tier allows you to remove the Bannerly branding along with other paid features.</p>

    <h4>Once I've created an account how do I get started?</h4>
    <p>Once you've created your first banner, visit the install tab to find your site key. Paste the site key into the field below,<br>and click save to start using you banner right away! If the banner is not showing on your site make sure you've published it from the Bannerly dashboard.</p>

    <table class="form-table">
      <tr valign="top">
        <th scope="row">Site Key</th>
        <td><input type="text" name="bannerly_api_key" value="<?php echo esc_attr(get_option('bannerly_api_key')); ?>" /></td>
      </tr>
    </table>

    <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e('Save'); ?>" />
  </form>
</div>
