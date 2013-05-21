<?php echo $this->Html->script('bootstrap-datetimepicker.js'); ?>
<?php echo $this->Html->css('bootstrap-datetimepicker.min.css'); ?>
<!--validation code starts here-->
<?php
    echo $this->Html->script('jqBootstrapValidation');
?>
<script>
    $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
<div class="row-fluid">
	<div class="events form well span6">
	<?php echo $this->Form->create('Event');?>
		<fieldset>
		<legend>Request Leave</legend>
		<?php
			echo $this->Form->input('event_type_id', array('options' => array(
						'2' => 'Sick Leave', '4' => 'General Leave', '5' => 'Holiday'
						), array('required')));
			echo $this->Form->input('profile_id', array('type' => 'hidden', 'value' => $this->Session->read('id')));
			echo $this->Form->input('title', array('required'));
			echo $this->Form->input('details', array('required'));
			?>
			<div id="datetimepicker1" class="input-append date">
	         <label>Start</label>		
			 <input data-format="yyyy/MM/dd hh:mm:ss" type="text" id="data[Event][start]" name="data[Event][start]" required></input>
			 <span class="add-on">
		      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		      </i>
		    </span>
		    </div>
		    <script type="text/javascript">
			  $(function() {
			    $('#datetimepicker1').datetimepicker({
			      language: 'en',
			   	  pick24HourFormat: true
			    });
			  });
			</script>
			<div id="datetimepicker2" class="input-append date">
	         <label>End</label>		
			 <input data-format="yyyy/MM/dd hh:mm:ss" type="text" id="data[Event][end]" name="data[Event][end]" required></input>
			 		<span class="add-on">
		      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		      </i>
		    </span>
		    </div>
		    <script type="text/javascript">
			  $(function() {
			    $('#datetimepicker2').datetimepicker({
			      language: 'en',
			   	  pick24HourFormat: true
			    });
			  });
			</script>
			<?php 
			echo $this->Form->input('all_day', array('checked' => 'checked'));
			echo $this->Form->input('status', array('value' => 'In Progress', 'type' => 'hidden'));
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit', true);?>
	</div>
	<div class="actions span6">
		<ul class="nav nav-tabs nav-stacked span4">
			<li><?php echo $this->Html->link('Manage Events', array('action' => 'event')); ?></li>
		</ul>
	</div>
</div>
