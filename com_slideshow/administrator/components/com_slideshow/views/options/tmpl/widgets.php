<? defined('KOOWA') or die(); ?>
<?= JHtml::_('behavior.modal'); ?>
<script src="media://com_slideshow/js/admin.js" />
<style src="media://lib_koowa/css/admin.css" />

<? $token = JUtility::getToken(); ?>
<form action="<?= @route(); ?>" method="get">
	<? foreach ($options as $index=>$option): ?>
	<fieldset>
		<legend>
			<?=$option->title?>
			<small>
				<a href="<?= @route('view=option&tmpl=component&id='.$option->id) ?>" class="modal" rel="{handler:'iframe', size:{x:'640', height:'480'}}">Edit</a>
				<a >Delete</a>
			</small>
		</legend>

		Width: <?=$option->width?><Br/>
		Height: <?=$option->height?><Br/>
		Crop: <?=$option->crop?><Br/>
		Greyscale: <?=$option->greyscale?>
	</fieldset>
	<? endforeach; ?>
</form>
