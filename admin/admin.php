<?php
if ( !function_exists( 'add_action' ) ) {
    echo 'Code is poetry.';
    exit;
}



function SPEEDBOOSTER_options() {

    ?>
    <div class="wrap projectStyle">
	<h2 style="margin-top:2rem;margin-left:3.45rem;margin-bottom:-1rem;"><?php echo __("Speed Booster - Settings","speedboosterbymelotheme") ?></h2>
	<div id="whiteboxH" class="postbox">
	
	<div class="inside">
        <form action="options.php" method="post">
        <?php settings_fields("MELOSPEEDBOOSTER_admin_settings") ?>
            <table class="form-table">

                <tr valign="top">
                    <th scope="row"><label for="SPEEDBOOSTER_check_enable"><?php echo __("Speed Booster by Melotheme","speedboosterbymelotheme") ?></label></th>
                    <td>
					<label class="button-toggle-wrap">
					  <input <?php if( get_option("SPEEDBOOSTER_check_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_check_enable" class="toggler" type="checkbox" data-toggle="button-toggle"/>
					  <div class="button-toggle">
						<div class="handle">
						  <div class="bars"></div>
						</div>
					  </div>
					</label>
                        <p class="description" ><?php echo __("Easy WordPress website Speed & Performance optimization with Speed Booster!","speedboosterbymelotheme") ?></p>
                    </td>
                </tr>
				
				<?php if( get_option("SPEEDBOOSTER_check_enable") == 1) { ?>
					<tr valign="top">
						<th scope="row"><label for="SPEEDBOOSTER_adv_enable"><?php echo __("Advanced Settings","speedboosterbymelotheme") ?></label></th>
						<td>
						<label class="button-toggle-wrap">
						  <input <?php if( get_option("SPEEDBOOSTER_adv_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_adv_enable" class="toggler" type="checkbox" data-toggle="button-toggle"/>
						  <div class="button-toggle">
							<div class="handle">
							  <div class="bars"></div>
							</div>
						  </div>
						</label>
							<p class="description" ><?php echo __("Activate Advanced Settings. <span style='color:red'>(All settings will be reset.)</span>","speedboosterbymelotheme") ?></p>
						</td>
					</tr>
					
					<?php if( get_option("SPEEDBOOSTER_adv_enable") == 1) { ?>
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_admn_enable">
							<input <?php if( get_option("SPEEDBOOSTER_admn_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_admn_enable" type="checkbox"/>
							<?php echo __("Enable WP-Admin Optimization. <span style='color:red'>(Use With Caution!)</span>","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_html_enable">
							<input <?php if( get_option("SPEEDBOOSTER_html_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_html_enable" type="checkbox"/>
							<?php echo __("Enable HTML Minify.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_comm_enable">
							<input <?php if( get_option("SPEEDBOOSTER_comm_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_comm_enable" type="checkbox"/>
							<?php echo __("Disable comment cookies.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_emoj_enable">
							<input <?php if( get_option("SPEEDBOOSTER_emoj_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_emoj_enable" type="checkbox"/>
							<?php echo __("Disable WordPress Emojicons.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_migr_enable">
							<input <?php if( get_option("SPEEDBOOSTER_migr_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_migr_enable" type="checkbox"/>
							<?php echo __("Remove jQuery Migrate.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_shor_enable">
							<input <?php if( get_option("SPEEDBOOSTER_shor_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_shor_enable" type="checkbox"/>
							<?php echo __("Disable WordPress Shortlinks.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_quer_enable">
							<input <?php if( get_option("SPEEDBOOSTER_quer_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_quer_enable" type="checkbox"/>
							<?php echo __("Disable JavaScript Query Strings.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_foot_enable">
							<input <?php if( get_option("SPEEDBOOSTER_foot_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_foot_enable" type="checkbox"/>
							<?php echo __("Move Scripts to Footer. <span style='color:red'>(Use With Caution!)</span>","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_async_enable">
							<input <?php if( get_option("SPEEDBOOSTER_async_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_async_enable" type="checkbox"/>
							<?php echo __("Enable the ASYNC Attributes for Scripts. <span style='color:red'>(Use With Caution!)</span>","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_lazy_enable">
							<input <?php if( get_option("SPEEDBOOSTER_lazy_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_lazy_enable" type="checkbox"/>
							<?php echo __("Enable Lazy Load Feature for Images.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_cach_enable">
							<input <?php if( get_option("SPEEDBOOSTER_cach_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_cach_enable" type="checkbox"/>
							<?php echo __("Enable Browser Cache Feature.","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>					
					
					<tr>
						<th scope="row"></th>
						<td>
							<p style="margin:-20px 0 -20px 0">
							<label for="SPEEDBOOSTER_embd_enable">
							<input <?php if( get_option("SPEEDBOOSTER_embd_enable") == 1) {echo 'checked="checked"';} ?> value="1" name="SPEEDBOOSTER_embd_enable" type="checkbox"/>
							<?php echo __("Disable WP Embed Feature. <span style='color:red'>(Use With Caution!)</span>","speedboosterbymelotheme") ?>
							</label>
							</p>
						</td>
					</tr>
					<?php } ?>
					
				<?php } ?>
	
			</table>
          
      </div>
	  
	</div>
</div>
            <div class="wrap projectStyle" id="whiteboxH">
				<div class="postbox">
				<div class="inside">
				<div style="display:inline-block">
			  
					<div class="contentDoYouLike">
					  <p><?php echo __("How would you rate <strong>Speed Booster by Melotheme</strong>?", "speedboosterbymelotheme") ?></p>
					</div>

					<div class="wrapperDoYouLike">
					  <input type="checkbox" id="st1" value="1" />
					  <label for="st1"></label>
					  <input type="checkbox" id="st2" value="2" />
					  <label for="st2"></label>
					  <input type="checkbox" id="st3" value="3" />
					  <label for="st3"></label>
					  <input type="checkbox" id="st4" value="4" />
					  <label for="st4"></label>
					  <input type="checkbox" id="st5" value="5" />
					  <label for="st5"></label>
					</div>					
					
					<a target="_blank" href="https://wordpress.org/plugins/speed-booster-by-melotheme/" class="sabutton button button-primary" style="margin: -5px 0 0 50px;"><?php echo __("Rate this plugin!", "speedboosterbymelotheme") ?></a>
				</div>
					<?php submit_button(); ?>
				</div>
				</div>
			</div>
</form>
    <?php
}

add_action("admin_init","SPEEDBOOSTER_Admin_Reg");
function SPEEDBOOSTER_Admin_Reg() {
	//
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_check_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_admn_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_adv_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_html_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_comm_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_emoj_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_migr_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_shor_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_quer_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_foot_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_async_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_lazy_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_cach_enable");
	register_setting("MELOSPEEDBOOSTER_admin_settings","SPEEDBOOSTER_embd_enable");
	
}