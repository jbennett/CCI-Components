<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$image->id)?>" method="post" class="adminform" name="adminForm" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">

<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('image Details')?></legend>

		<label for="field_filename" class="mainlabel"><?= @text('Filename') ?></label>
		<input type="text" name="filename" disable="disable" id="field_filename" value="<?=$image->filename;?>" /><br/>

		<label for="field_sample_id" class="mainlabel"><?= @text('Sample')?></label>
		<?= @helper('admin::com.gridview.template.helper.listbox.samples', array('selected'=>$image->gridview_sample_id))?><br/>

		<label for="field_filename_upload" class="mainlabel"><?= @text('File') ?></label>
		<input type="file" id="field_filename_upload" name="filename_upload" />
	</fieldset>

	<fieldset>
		<legend><?= @text('Preview')?></legend>

		<img src="/media/com_gridview/uploads/<?= $image->filename?>" />
	</fieldset>
</div>
</form>



