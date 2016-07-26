<div class="wrap">
<h2>Add Web Crawler</h2>
<form method="POST" name="swc_add_new_crawler" >
  <?php wp_nonce_field('add', 'nonce');?>

<table class="form-table">
			<tr valign="top">
				<th scope="row">Name</th>
				<td><input type="text" maxlength="30" name="swc_nickname"
					value="" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Description</th>
				<td><textarea  name="swc_description"
					value="" cols="100" rows="5" ></textarea></td>
			</tr>
			<tr valign="top">
				<th scope="row">URL</th>
				<td><input type="text" maxlength="255" name="swc_url"
					value="" /></td>
			</tr>
		</table>
	<?php submit_button(); ?>
	</form>
	
	  <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>
</div>
