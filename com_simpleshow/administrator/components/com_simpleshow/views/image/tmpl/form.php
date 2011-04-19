<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$image->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:50%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('image Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input image="text" name="title" id="field_title" value="<?=$image->title;?>" /><br/>
		<label for="field_subtitle" class="mainlabel"><?= @text('Subtitle') ?></label>
		<input image="text" name="subtitle" id="field_subtitle" value="<?=$image->subtitle;?>" /><br/>
		
		<label for="field_url" class="mainlabel"><?= @text('Address') ?></label>
		<input image="text" name="url" id="field_url" value="<?=$image->url;?>" /><br/>
		
		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<?= @helper('image.listbox', array('directory'=>JPATH_IMAGES.'/stories/headers', 'name'=>'filename'))?><br/>
	</fieldset>
</div>
</form>
