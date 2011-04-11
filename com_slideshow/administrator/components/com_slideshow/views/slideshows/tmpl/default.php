<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
			<th width="100"><?= @text('Image Options') ?></th>
			<th width="75"><?= @text('Images') ?></th>
			<th width="5"><?= @text('id') ?></th>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($slideshows as $index=>$slideshow): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$slideshow))?></td>
				<td><a href="<?= @route('view=slideshow&id='.$slideshow->id)?>">
					<?=$slideshow->title?>
				</a></td>
				<td align="center">
					<a href="<?=@route('view=options&slideshow='.$slideshow->id) ?>"><?=@text('Image Options')?></a>
				</td>
				<td align="center">
					<a href="<?=@route('view=images&slideshow='.$slideshow->id) ?>"><?=@text('Images')?></a>
				</td>
				<td align="center"><?= $slideshow->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($slideshows)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No slideshows Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
