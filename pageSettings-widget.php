<?php
/**
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */
?>
<div style="display: none;">
	<h3>Debug Informationen</h3>
	<pre><?php echo __FILE__ ?></pre>
</div>
<p>Dieses kleine Widget hilft Ihnen dabei Ihr WordPress besser zu verwalten.</p>
<p>Um die die eingetragenen Werte zu bearbeiten, hovern Sie bitte über den oberen Rahmen der Box, und klicken auf "Konfigurieren".</p>
<p>Widgets can be configured as well. Currently, this is set to <b><?php echo self::get_dashboard_widget_option(self::wid, 'analyticsCode'); ?></b> ! To change the number, hover over the widget title and click on the "Configure" link.</p>