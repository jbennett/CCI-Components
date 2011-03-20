<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$image->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('image Details')?></legend>

		<label for="field_filename" class="mainlabel"><?= @text('Filename') ?></label>
		<input type="text" name="filename" id="field_filename" value="<?=$image->filename;?>" /><br/>

		<label for="field_sample_id" class="mainlabel"><?= @text('Sample')?></label>
		<?= @helper('admin::com.gridview.template.helper.listbox.samples', array('selected'=>$image->gridview_sample_id))?><br/>
	</fieldset>
</div>
</form>



