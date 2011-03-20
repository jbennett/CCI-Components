<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>

<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="5"><?= @text('Num');?></th>
				<th width="5"></th>
				<th><?= @helper('grid.sort', array('column'=>'title'))?></th>
				<th width="25"><?= @helper('grid.sort', array('column'=>'ordering'))?></th>
				<th width="75"><?= @text('Images')?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'gridview_gallery_id', 'title'=>'Gallery'))?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="6">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>

		<tbody>
			<? foreach ($samples as $index=>$sample): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$sample))?></td>
				<td><a href="<?= @route('view=sample&id='.$sample->id)?>">
					<?=$sample->title?>
				</a></td>
				<td align="center"><?= @helper('grid.order', array('row'=>$sample, 'total'=>$total))?></td>
				<td align="center"><a href="<?= @route('view=images&sample_id='.$sample->id)?>">
					<?= @text('Images') ?>
				</a></td>
				<td align="center"><a href="<?= @route('view=gallery&id='.$sample->gridview_gallery_id)?>">
					<?= $sample->gallery_title; ?>
				</a></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($samples)): ?>
			<tr>
				<td colspan="6" align="center">
					<?= @text('No Samples Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
