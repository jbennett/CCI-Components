<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$slideshow->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('slideshow Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input slideshow="text" name="title" id="field_title" value="<?=$slideshow->title;?>" /><br/>
	</fieldset>
</div>

<div style="width: 69%; float: left;">
	<fieldset>
		<legend>Image Thumbnails</legend>
		<? echo KFactory::tmp('admin::com.slideshow.controller.option')
			->layout('widgets')
			->slideshow($slideshow->id)
			->display(); ?>
	</fieldset>
</div>
</form>
