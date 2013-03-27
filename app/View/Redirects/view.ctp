<h1>Redirect: $redirect['Redirect']['redirect_key']</h1>
<div class="tracking-url rawurl">Tracking Url: <?php echo $this->Html->link($tracking, $tracking); ?></div>
<div class="redirect-url rawurl">Destination: <?php echo $this->Html->link($url, $url); ?></div>
<div>
<?php echo $this->Html->link('return', array('controller' => 'redirects', 'action' => 'index'), array('class' => 'actions')); ?></div>