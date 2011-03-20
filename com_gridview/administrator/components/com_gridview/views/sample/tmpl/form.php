<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$sample->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Sample Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input type="text" name="title" id="field_title" value="<?=$sample->title;?>" /><br/>

		<label for="field_gallery" class="mainlabel"><?= @text('Gallery') ?></label>
		<?= @helper('admin::com.gridview.template.helper.listbox.galleries',
			array('selected'=>$sample->gridview_gallery_id))?><br/>

		<label for="field_alternate" class="mainlabel"><?= @text('Secondary Label') ?></label>
		<input type="text" name="alternate" id="field_alternate" value="<?=$sample->alternate;?>" /><br/>

		<label for="field_site_link" class="mainlabel"><?= @text('Site Link') ?></label>
		<input type="text" name="site_link" id="field_site_link" value="<?=$sample->site_link;?>" /><br/>

		<label for="field_video_link" class="mainlabel"><?= @text('Video Link') ?></label>
		<input type="text" name="video_link" id="field_video_link" value="<?=$sample->video_link;?>" /><br/>
	</fieldset>

	<fieldset>
		<legend><?= @text('Sample Description')?></legend>
		<p>Please note, a description will disable all other sample labels</p>
		<?= @editor(array('editor'=>null))?>
	</fieldset>
</div>
</form>



