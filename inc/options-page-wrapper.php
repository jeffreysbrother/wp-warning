<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1>The Official WP Warning Plugin!</h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h2><span>Let's get started!</span></h2>

						<div class="inside">
							<p>


                <!-- form begin -->
                <form action="" method="post">
                  <table class="form-table">
                  	<tr>
                  		<td>
                  		  <label for="dev_url">Please enter the URL of your DEV site:</label>
                  		</td>
                  		<td>
                  		  <input name="dev_url" id="dev_url" type="text" value="" class="regular-text" />
                  		</td>
                  	</tr>
                  </table>

                  <p>
                    <input class="button-primary" type="submit" name="dev_url" value="Save" />
                  </p>

                </form>
                <!-- form end -->


							</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h2><span><?php esc_attr_e(
									'Sidebar Content Header', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<p><?php esc_attr_e(
									'Everything you see here, from the documentation to the code itself, was created by and for the community. WordPress is an Open Source project, which means there are hundreds of people all over the world working on it. (More than most commercial platforms.) It also means you are free to use it for anything from your cat’s home page to a Fortune 500 web site without paying anyone a license fee and a number of other important freedoms.',
									'wp_admin_style'
								); ?></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
