<div class='wrap'>
 <h2>configuration</h2>
 <form action='POST' method="options.php">
     <?php
setting_fields('LAMANU_GoogleAnalytics');
do_settings_section('Configuration');
<input type="text" name="google_analytics" id="google_analytics" value="<?= get_option('google_analytics', 'UA-00000000-0') ?>" />
<?php submit_button(); ?>
 </form>
</div>
