<?php if (!empty($user_activity)): ?>
<div class="activity-message">
	<?php foreach ($user_activity as $message): ?>
	<div class="activity-message-item">
		<p>
			<b><a href="<?php echo url('forum/topic/'.$message['topic_id'].'/'.url_title($message['title'])) ?>"><?php echo $message['title'] ?></a></b><br />
			<small class="text-muted"><?php echo icon('far fa-clock').' '.timetostr('j M Y', $message['date']) ?></small>
		</p>
		<?php echo bbcode($message['message']) ?>
	</div>
	<?php endforeach ?>
</div>
<?php else: ?>
Aucun message récent...
<?php endif ?>
