<div class="row-fluid">
	<div class="eventTypes view well span6">
	<h2>Event Type</h2>
		<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $eventType['EventType']['name']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Color'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $eventType['EventType']['color']; ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="actions span6">
		<ul class="nav nav-tabs nav-stacked span3">
			<li><?php echo $this->Html->link('Edit Event Type', array('action' => 'eventtype_edit', $eventType['EventType']['id'])); ?> </li>
			<li><?php echo $this->Html->link('Delete Event Type', array('action' => 'eventtype_delete', $eventType['EventType']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $eventType['EventType']['name'])); ?> </li>
			<li><?php echo $this->Html->link('Manage Event Types', array('action' => 'eventtype')); ?> </li>
			<li><?php echo $this->Html->link('View Calendar', array('action' => 'index')); ?></li>
		</ul>
	</div>
	<div class="related span12">
		<h3><?php echo __('Related Events');?></h3>
		<?php if (!empty($eventType['Event'])){?>
		<table class="table table-condensed">
		<tr>
			<th><?php echo __('Title'); ?></th>
			<th><?php echo __('Status'); ?></th>
			<th><?php echo __('Start'); ?></th>
	        <th><?php echo __('End'); ?></th>
	        <th><?php echo __('All Day'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th class="actions"></th>
			<th class="actions"></th>
		</tr>
		<?php
			$i = 0;
			foreach ($eventType['Event'] as $event):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $event['title'];?></td>
				<td><?php echo $event['status'];?></td>
				<td><?php echo $event['start'];?></td>
	            <td><?php if($event['all_day'] != 1) { echo $event['end']; } else { echo "N/A"; } ?></td>
	            <td><?php if($event['all_day'] == 1) { echo "Yes"; } else { echo "No"; }?></td>
				<td><?php echo $event['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('action' => 'eventtype_view', $event['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link('Edit', array('action' => 'eventtype_edit', $event['id'])); ?>
			</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php } 
	else{
		?>
		<div class="alert alert-info span5">
			<b>No event exists of this event type..!</b>
		</div>
		<?php 
	}	
		
	?>
	</div>
</div>
