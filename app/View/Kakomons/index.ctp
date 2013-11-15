<div class="kakomons index">
	<h2><?php echo __('Kakomons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('university'); ?></th>
			<th><?php echo $this->Paginator->sort('gakubu'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('other'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($kakomons as $kakomon): ?>
	<tr>
		<td><?php echo h($kakomon['Kakomon']['id']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['name']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['university']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['gakubu']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['year']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['other']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['created']); ?>&nbsp;</td>
		<td><?php echo h($kakomon['Kakomon']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($kakomon['User']['id'], array('controller' => 'users', 'action' => 'view', $kakomon['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kakomon['Kakomon']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kakomon['Kakomon']['id']), null, __('Are you sure you want to delete # %s?', $kakomon['Kakomon']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add Kakomon'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
