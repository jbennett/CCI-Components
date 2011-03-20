<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table>
		<tbody>
			<tr>
				<td width="100%">&nbsp;</td>
				<td nowrap="nowrap">
					<?= @helper('admin::com.gridview.template.helper.listbox.samples', array(
						'attribs'=>array(
							'onchange'=>'this.form.submit();'
						),
						'selected'=>KRequest::get('get.sample', 'int'),
						'name'=>'sample',
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
				<th><?= @text('Preview')?></th>
				<th width="25"><?= @helper('grid.sort', array('column'=>'ordering'))?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'sample_title', 'title'=>'Sample'))?></th>
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
			foreach ($images as $image): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$image))?></td>
				<td><a href="<?=@route('view=image&id='.$image->id)?>">
					<?php if ($image->filename): ?>
						<img src="<?= $image->filename?>" height="30" />
					<? else: ?>
						No Preview
					<? endif; ?>
				</a></td>
				<td><?= @helper('grid.order', array('row'=>$image, 'total'=>$total))?></td>
				<td><a href="<?= @route('view=sample&id='.$image->gridview_sample_id)?>">
					<?= $image->sample_title?>
				</a></td>
			</tr>
			<?
			$index++;
			endforeach; ?>

			<? if (!count($images)): ?>
			<tr>
				<td colspan="6" align="center">
					<?= @text('No Images Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
