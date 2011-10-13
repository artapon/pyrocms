<ol>
<?php if ($widgets): ?>
	<?php foreach($widgets as $widget): ?>
	<li id="instance-<?php echo $widget->id; ?>" class="widget-instance">
		
		<h4><span><?php echo $widget->title; ?>:</span> <?php echo $widget->instance_title; ?></h4>
		
		<div class="widget-actions buttons buttons-small">
		
			<?php $this->load->view('admin/partials/buttons', array('button_type'=>'secondary', 'buttons' => array('edit' => array('id' => '../instances/edit/' . $widget->id), 'delete')) ); ?>
			<button class="button instance-code" id="instance-code-<?php echo $widget->id; ?>" title="this is the code">View Code</button>
			
		</div>

		<div id="instance-code-<?php echo $widget->id; ?>-wrap" style="display: none;">
		
		<input type="text" class="widget-code" value='<?php echo sprintf('{%s:widgets:instance id="%s"}', config_item('tags_trigger'), $widget->id);?>' />
		
		</div>
		
		<div style="clear:both"></div>
	</li>
	<?php endforeach; ?>
<?php endif; ?>
	<li class="empty-drop-item no-sortable"></li>
</ol>