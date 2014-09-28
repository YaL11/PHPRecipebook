<script type="text/javascript">
    $(function() {
        $(document).on("saved.baseType", function() {
            $('#editBaseTypeDialog').dialog('close');
            ajaxGet('base_types');
        });
    });
</script>
<div class="baseTypes index">
	<h2><?php echo __('Base Types'); ?></h2>
        <div class="actions">
            <ul>
                    <li><?php echo $this->Html->link(__('Add Base Type'), array('action' => 'edit'), array('class' => 'ajaxLink', 'targetId' => 'editBaseTypeDialog')); ?></li>
            </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
            <th class="actions"><?php echo __('Actions'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
	</tr>
	<?php foreach ($baseTypes as $baseType): ?>
	<tr>
            <td class="actions">
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $baseType['BaseType']['id']), array('class' => 'ajaxLink', 'targetId' => 'editBaseTypeDialog')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $baseType['BaseType']['id']), null, __('Are you sure you want to delete %s?', $baseType['BaseType']['name'])); ?>
            </td>
            <td><?php echo h($baseType['BaseType']['name']); ?>&nbsp;</td>
	</tr>
        <?php endforeach; ?>
	</table>
	<p>
	<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}')	));?>	
        </p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

