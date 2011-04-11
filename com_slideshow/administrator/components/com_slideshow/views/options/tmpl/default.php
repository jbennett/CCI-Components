<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_default/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
			<th width="5"><?= @text('id') ?></td>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($options as $index=>$option): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$option))?></td>
				<td><a href="<?= @route('view=option&id='.$option->id)?>">
					<?=$option->title?>
				</a></td>

				<td align="center"><?= $option->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($options)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No options Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
