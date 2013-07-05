<?php
	// Get Post Values
    $gaCode = stripslashes($_POST['gaCodeInput']);
    self::update_dashboard_widget_options(
            self::wid,                                  //The  widget id
            array(                                      //Associative array of options & default values
                'analyticsCode' => $gaCode,				// Analytics Code
            )
    );

?>
<div style="display: none;">
	<h3>Debug Informationen</h3>
	<pre><?php echo __FILE__ ?></pre>
</div>
<p>Dieses kleine Widget hilft Ihnen dabei Ihr WordPress besser zu verwalten.</p>
<p>Um die die eingetragenen Werte zu bearbeiten, hovern Sie bitte über den oberen Rahmen der Box, und klicken auf "Konfigurieren".</p>yy
<input type="text" name="gaCodeInput" value="<?php echo self::get_dashboard_widget_option(self::wid, 'analyticsCode'); ?>" />