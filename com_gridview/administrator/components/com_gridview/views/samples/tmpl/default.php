<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table>
		<tbody>
			<tr>
				<td width="100%">&nbsp;</td>
				<td nowrap="nowrap">
					<?= @helper('admin::com.gridview.template.helper.listbox.galleries', array(
						'attribs'=>array(
							'onchange'=>'this.form.submit();'
						),
						'selected'=>KRequest::get('get.gallery', 'int'),
						'name'=>'gallery',
					)) ?>
				</td>
			</tr>
		</tbody>
	</table>


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
			<? $index = 1;
			foreach ($samples as $sample): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$sample))?></td>
				<td><a href="<?= @route('view=sample&id='.$sample->id)?>">
					<?=$sample->title?>
				</a></td>
				<td align="center"><?= @helper('grid.order', array('row'=>$sample, 'total'=>$total))?></td>
				<td align="center"><a href="<?= @route('view=images&sample='.$sample->id)?>">
					<?= @text('Images') ?>
				</a></td>
				<td align="center"><a href="<?= @route('view=gallery&id='.$sample->gridview_gallery_id)?>">
					<?= $sample->gallery_title; ?>
				</a></td>
			</tr>
			<?
			$index++;
			endforeach; ?>

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
