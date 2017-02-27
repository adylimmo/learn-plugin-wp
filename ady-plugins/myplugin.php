<?php
/**
* Plugin Name: Ady Plugins
* Plugin URI: http://voidinclude.id
* Description: Ini plugin pertama saya.
* Version: 1.0
* Author: ady suryadi
* Author URI: http://voidinclude.id
*/
function mp_admin_actions() {
	add_options_page("Ady Plugin Setting", "Ady Plugin Setting", 1, "my_pluggin_setting", "mp_admin");
}
add_action('admin_menu', 'mp_admin_actions');

function mp_admin() {
	if(isset($_POST['mp_web'])):
		update_option('mp_web', $_POST['mp_web']);
	echo '<div class="updated"><p><strong>Updated</strong>: Data berhasil diubah</p></div>';
	endif;
	$mp_web = get_option('mp_web');
	?>
	<div class="wrap">
		<?php    echo "<h2>" . __( 'Halaman Konfigurasi Ady Plugin', 'mp' ) . "</h2>"; ?>

		<form name="mp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
			<input type="hidden" name="mp_hidden" value="Y">
			<p><?php _e("Website anda: " ); ?><input type="text" name="mp_web" value="<?php echo $mp_web; ?>" size="20"><?php _e(" ex: http://yourwebsite.com" ); ?></p>
			<p class="submit">
				<input type="submit" name="Submit" value="<?php _e('Simpan Konfigurasi', 'mp' ) ?>" />
			</p>
		</form>
	</div> 
	<?php
}
?>