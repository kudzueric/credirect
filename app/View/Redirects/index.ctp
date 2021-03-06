<!-- File: /app/View/Redirects/index.ctp -->

<h1>Redirects</h1>
<table>
    <tr>
        <th>Id</th>
	<th>Name</th>
    <th>Campaign</th>
	<th>Source</th>
	<th>Medium</th>
	<th>Host</th>
	<th>Destination</th>
	<th>Actions</th>
        <th>Created</th>
    </tr>

 
    <?php foreach ($redirects as $redirect): ?>
    <tr>
        <td><?php echo $redirect['Redirect']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($redirect['Redirect']['redirect_key'], array('controller' => 'redirects', 'action' => 'view', $redirect['Redirect']['redirect_key'])); ?>
        </td>
	<td><?php if ($filtered) : ?> <?php echo $redirect['Redirect']['campaign']; ?>
	<?php else : ?>
	<?php echo $this->Html->link($redirect['Redirect']['campaign'], array('action' => 'index', $redirect['Redirect']['campaign'])); ?></td>
	<?php endif; ?>
	<td><?php echo $redirect['Redirect']['source']; ?></td>
	<td><?php echo $redirect['Redirect']['medium']; ?></td>
	<td><?php echo $redirect['Redirect']['host']; ?></td>
	<td><?php echo $redirect['Redirect']['destination']; ?></td>
	<td>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $redirect['Redirect']['id'])); ?> &nbsp;
		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $redirect['Redirect']['id']), array('confirm' => 'Are you sure?') ); ?>
	 </td>
        <td><?php echo $redirect['Redirect']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($redirect); ?>
</table>
<div class="actions"><ul>
	<li><?php echo $this->Html->link('Add Redirect', array('controller' => 'redirects', 'action' => 'add') , array('class' => 'actions')); ?></li>
<?php if ($filtered) : ?><li>
	<?php echo $this->Html->link('All Redirects', array('controller' => 'redirects', 'action' => 'index'), array('class' => 'actions')); ?>
</li><?php endif; ?>
	</ul></div>
