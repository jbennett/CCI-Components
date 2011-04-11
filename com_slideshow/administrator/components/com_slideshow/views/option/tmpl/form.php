<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$option->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Option Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input option="text" name="title" id="field_title" value="<?=$option->title;?>" /><br/>

		<label for="field_width" class="mainlabel"><?= @text('Width') ?></label>
		<input option="text" name="width" id="field_width" value="<?=$option->width;?>" /><br/>
		<label for="field_height" class="mainlabel"><?= @text('Height') ?></label>
		<input option="text" name="height" id="field_height" value="<?=$option->height;?>" /><br/>

		<label for="field_crop" class="mainlabel"><?= @text('Crop') ?></label>
		<?= @helper('admin::com.slideshow.template.helper.listbox.yesno', array('name'=>'crop')) ?><br/>
		<label for="field_greyscale" class="mainlabel"><?= @text('Greyscale') ?></label>
		<?= @helper('admin::com.slideshow.template.helper.listbox.yesno', array('name'=>'greyscale')) ?><br/>

		<? if (($ss = KRequest::get('get.slideshow', 'cmd', null))): ?>
			<input type="hidden" name="slideshow_slideshow_id" value="<?= $ss ?>" />
		<? endif; ?>
	</fieldset>
</div>
</form>



