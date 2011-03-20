<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>

<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num');?></th>
				<th width="5"></th>
				<th><?= @helper('grid.sort', array('column'=>'name'))?></th>
				<th width="75"><?= @text('Samples')?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="4">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>

		<tbody>
			<? foreach ($galleries as $index=>$gallery): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$gallery))?></td>
				<td><a href="<?= @route('view=gallery&id='.$gallery->id)?>">
					<?=$gallery->title?>
				</a></td>
				<td align="center"><a href="<?= @route('view=samples&gallery_id='.$gallery->id)?>">
					<?= @text('Samples') ?>
				</a></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($galleries)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No Galleries Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
