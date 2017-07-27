<?php
/**
 * Demos Admin page.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<div class="wrap about-wrap avada-wrap">
	<?php $this->get_admin_screens_header( 'demos' ); ?>

	<?php if ( Avada()->registration->is_registered() ) : ?>
		<?php
		// Include the Avada_Importer_Data class if it doesn't exist.
		if ( ! class_exists( 'Avada_Importer_Data' ) ) {
			include_once wp_normalize_path( Avada::$template_dir_path . '/includes/plugins/importer/class-avada-importer-data.php' );
		}
		?>

		<script type="text/javascript">
			var DemoImportNonce = '<?php echo esc_attr( wp_create_nonce( 'avada_demo_ajax' ) ); ?>';
		</script>
		<div class="avada-important-notice">
			<p class="about-description"><?php printf( esc_attr__( 'Importing a demo provides pages, posts, images, theme options, widgets, sliders and more. IMPORTANT: The included plugins need to be installed and activated before you install a demo. Please check the "System Status" tab to ensure your server meets all requirements for a successful import. Settings that need attention will be listed in red. %s.', 'Avada' ), '<a href="' . esc_url_raw( trailingslashit( $this->theme_fusion_url ) ) . 'avada-doc/demo-content-info/import-xml-file/" target="_blank">' . esc_attr__( 'View more info here', 'Avada' ) . '</a>' ); ?></p>
		</div>
		<?php
		$demos = Avada_Importer_Data::get_data();
		$all_tags = array(
			'all' => esc_attr__( 'All Demos' ),
		);
		foreach ( $demos as $demo => $demo_details ) {
			if ( ! isset( $demo_details['tags'] ) ) {
				$demo_details['tags'] = array();
			}
			$all_tags = array_replace_recursive( $all_tags, $demo_details['tags'] );
		}
		?>
		<?php
		/**
		 * WIP:
		 * The tag-selector is hidden for now, we can enable it when needed
		 * simply by removing the "display:none" from the wrapper.
		 */
		?>
		<div class="avada-importer-tags-selector" style="margin-bottom: 1.5em; display: none;">
			<?php foreach ( $all_tags as $key => $label ) : ?>
				<?php // @codingStandardsIgnoreLine ?>
				<button class="button small button-small button-<?php echo ( 'all' === $key ) ? 'primary' : 'secondary'; ?>" data-tag="<?php echo esc_attr( $key ); ?>"><?php echo esc_attr( $label ); ?></button>
			<?php endforeach; ?>
		</div>
		<script type="text/javascript">
			var allTags = <?php echo wp_json_encode( $all_tags ); ?>;
		</script>

		<div class="avada-demo-themes">
			<div class="feature-section theme-browser rendered">
				<?php
				// Make sure we don't show demos that can't be applied to this version.
				foreach ( $demos as $key => $val ) {
					if ( isset( $val['minVersion'] ) ) {
						$theme_version = Avada_Helper::normalize_version( $this->theme_version );
						$min_version   = Avada_Helper::normalize_version( $val['minVersion'] );
						if ( version_compare( $theme_version, $min_version ) < 0 ) {
							unset( $demos[ $key ] );
						}
					}
				}
				?>
				<?php foreach ( $demos as $demo => $demo_details ) : // Loop through all demos. ?>
					<?php if ( ! isset( $demo_details['tags'] ) ) : ?>
						<?php $demo_details['tags'] = array(); ?>
					<?php endif; ?>
					<?php $tags = array_keys( $demo_details['tags'] ); ?>
					<div class="theme" data-tags="<?php echo esc_attr( implode( ',', $tags ) ); ?>">
						<div class="theme-wrapper">
							<div class="theme-screenshot">
								<img src="" <?php echo ( ! empty( $demo_details['previewImage'] ) ) ? 'data-src="' . esc_url_raw( $demo_details['previewImage'] ) . '"' : ''; ?> <?php echo ( ! empty( $demo_details['previewImageRetina'] ) ) ? 'data-src-retina="' . esc_url_raw( $demo_details['previewImageRetina'] ) . '"' : ''; ?>>
								<noscript>
									<img src="<?php echo esc_url_raw( $demo_details['previewImage'] ); ?>" width="325" height="244"/>
								</noscript>
							</div>
							<h3 class="theme-name" id="<?php echo esc_attr( $demo ); ?>"><?php echo esc_attr( ucwords( str_replace( '_', ' ', $demo ) ) ); ?></h3>
							<div class="theme-actions">
								<a class="button button-primary button-install-demo" data-demo-id="<?php echo esc_attr( strtolower( $demo ) ); ?>" href="#"><?php esc_attr_e( 'Import', 'Avada' ); ?></a>
								<?php $preview_url = ( 'classic' === $demo ) ? $this->theme_url : $this->theme_url . str_replace( '_', '-', $demo ); ?>
								<a class="button button-primary" target="_blank" href="<?php echo esc_url_raw( $preview_url ); ?>"><?php esc_attr_e( 'Preview', 'Avada' ); ?></a>
							</div>
							<div class="demo-import-loader preview-all"></div>
							<div class="demo-import-loader preview-<?php echo esc_attr( strtolower( $demo ) ); ?>"><i class="dashicons dashicons-admin-generic"></i></div>
							<div class="demo-import-loader success-icon success-<?php echo esc_attr( strtolower( $demo ) ); ?>"><i class="dashicons dashicons-yes"></i></div>
							<div class="demo-import-loader warning-icon warning-<?php echo esc_attr( strtolower( $demo ) ); ?>"><i class="dashicons dashicons-warning"></i></div>

							<?php if ( isset( $demo_details['new'] ) && true === $demo_details['new'] ) : ?>
								<div class="plugin-required"><?php esc_attr_e( 'New', 'Avada' ); ?></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="avada-thanks">
			<p class="description"><?php esc_attr_e( 'Thank you for choosing Avada. We are honored and are fully dedicated to making your experience perfect.', 'Avada' ); ?></p>
		</div>
		<script>
			!function(t){t.fn.unveil=function(i,e){function n(){var i=a.filter(function(){var i=t(this);if(!i.is(":hidden")){var e=o.scrollTop(),n=e+o.height(),r=i.offset().top,s=r+i.height();return s>=e-u&&n+u>=r}});r=i.trigger("unveil"),a=a.not(r)}var r,o=t(window),u=i||0,s=window.devicePixelRatio>1,l=s?"data-src-retina":"data-src",a=this;return this.one("unveil",function(){var t=this.getAttribute(l);t=t||this.getAttribute("data-src"),t&&(this.setAttribute("src",t),"function"==typeof e&&e.call(this))}),o.on("scroll.unveil resize.unveil lookup.unveil",n),n(),this}}(window.jQuery||window.Zepto);
			jQuery(document).ready(function() { jQuery( 'img' ).unveil( 200 ); });
		</script>
	<?php else : ?>
		<div class="avada-important-notice" style="border-left: 4px solid #dc3232;">
			<h3 style="color: #dc3232; margin-top: 0;"><?php esc_attr_e( 'Avada Demos Can Only Be Imported With A Valid Token Registration', 'Avada' ); ?></h3>
			<p><?php printf( esc_attr__( 'Please visit the %s page and enter a valid token to import the full Avada Demos and the single pages through Fusion Builder.', 'Avada' ), '<a href="' . esc_url_raw( admin_url( 'admin.php?page=avada-registration' ) ) . '">' . esc_attr__( 'Product Registration', 'Avada' ) . '</a>' ); ?></p>
		</div>
	<?php endif; ?>
</div>
