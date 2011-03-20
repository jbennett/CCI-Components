<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$gallery->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Gallery Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input type="text" name="title" id="field_title" value="<?=$gallery->title;?>" /><br/>

		<label for="field_label1" class="mainlabel"><?= @text('Primary Label') ?></label>
		<input type="text" name="label1" id="field_label1" value="<?=$gallery->label1;?>" /><br/>

		<label for="field_label2" class="mainlabel"><?= @text('Secondary Label') ?></label>
		<input type="text" name="label2" id="field_label2" value="<?=$gallery->label2;?>" /><br/>
	</fieldset>
</div>
</form>



