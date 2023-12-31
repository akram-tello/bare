<form  method="post">

	<input type="hidden" name="uap_admin_forms_nonce" value="<?php echo wp_create_nonce( 'uap_admin_forms_nonce' );?>" />

 	<div class="uap-stuffbox">
		<h3 class="uap-h3"><?php esc_html_e('Roles allowed to enter into WordPress Admin Dashboard', 'uap');?></h3>
		<div class="inside">
			<div class="uap-half-block">
				<div class="uap-form-line uap-access-opacity">
					<span class="uap-access-label"><?php esc_html_e('Administrator', 'uap');?></span>
					<label class="uap_label_shiwtch uap-access-switch">
						<input type="checkbox" class="uap-switch" checked disabled/>
						<div class="switch uap-inline-block"></div>
					</label>
				</div>
				<?php
					$roles = get_editable_roles();
					if (!empty($roles['administrator'])){
						unset($roles['administrator']);
					}
					if (!empty($roles['pending_user'])){
						unset($roles['pending_user']);
					}
					$count = count($roles) + 1;
					$break = ceil($count/2);
					$i = 1;
					foreach ($roles as $role=>$arr){
					?>
						<div class="uap-form-line">
							<span class="uap-access-label"><?php echo esc_html($arr['name']);?></span>
							<label class="uap_label_shiwtch uap-access-switch">
								<?php $checked = (in_array($role, $meta_values)) ? 'checked' : '';?>
								<input type="checkbox" class="uap-switch" onClick="uapMakeInputhString(this, '<?php echo esc_attr($role);?>', '#uap_dashboard_allowed_roles');" <?php echo esc_attr($checked);?>/>
								<div class="switch uap-inline-block"></div>
							</label>
						</div>
					<?php
					$i++;
						if ($count>7 && $i==$break){
						?>
						</div>
						<div class="uap-half-block">
						<?php
						}
					}///end of foreach
				?>
			</div>
			<input type="hidden" name="uap_dashboard_allowed_roles" id="uap_dashboard_allowed_roles" value="<?php echo esc_attr($meta_value);?>" />
			<div id="uap_save_changes" class="uap-wrapp-submit-bttn iump-submit-form">
				<input type="submit" value="<?php esc_html_e('Save Changes', 'uap');?>" name="save" class="button button-primary button-large" />
			</div>
		</div>
	</div>

</form>
