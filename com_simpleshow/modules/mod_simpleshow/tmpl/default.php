<script src="media://com_simpleshow/js/simpleshow.js" />
<style src="media://com_simpleshow/css/site.css" />

<div class="mod_simpleshow">
	<div class="main">
		<? $first = true;
		foreach ($images as $image): ?>
			<div class="<?= ($first)? 'current':'next'; ?>">
				<img src="/images/stories/headers/<?=$image->filename?>" width="630" height="330" />
				
				<div class="description">
					<div class="title"><?= $image->title?></div>
					<div class="subtitle">
						<a href="<?= $image->url?>"><?= $image->subtitle?></a>
					</div>
				</div>
			</div>

			<? if ($first) {
				$first = false;
			} else {
				break;
			} ?>
		<? endforeach; ?>
	</div>
	<div class="images">
		<?
		$first = true;
		foreach ($images as $image): ?>
		<div 
			class="image <?= ($first)? 'active':''?>"
			data-title="<?= $image->title; ?>"
			data-subtitle="<?= $image->subtitle; ?>"
			data-url="<?= $image->url; ?>"
			data-filename="<?= $image->filename?>">
			<img src="/images/stories/headers/thumb_<?=$image->filename?>" width="279" height="73" />
		</div>
		<? $first = false; ?>
		<? endforeach; ?>
	</div>
	
	<div style="clear:both;"></div>
</div>