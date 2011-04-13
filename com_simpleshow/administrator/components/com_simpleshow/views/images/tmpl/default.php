<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th width="125"><?= @text('Preview')?></th>
			<th><?= @helper('grid.sort', array('column' => 'filename')) ?></th>
			<th width="30"><?= @helper('grid.sort', array('column'=>'ordering'))?></th>
			<th width="5"><?= @text('id') ?></th>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($images as $index=>$image): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$image))?></td>
				<td>
					<? if ($image->filename): ?>
					<a href="/images/stories/headers/<?= $image->filename ?>" target="_blank">
						<img src="<?= $image->filename; ?>" height="50" />
					</a>
					<? endif; ?>
				</td>
				<td><a href="<?= @route('view=image&id='.$image->id)?>">
					<?=$image->filename?>
				</a></td>
				<td><?= @helper('grid.order', array('row'=>$image))?></td>
				<td align="center"><?= $image->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($images)): ?>
			<tr>
				<td colspan="99" align="center">
					<?= @text('No Images Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
