<h1>Add Redirect</h1>
<?php
echo $this->Form->create('Redirect');
echo $this->Form->input('redirect_key', array('after' => 'This is the subdomain part of the redirect.'));
echo $this->Form->input('campaign', array('after' => 'The campaign groups related promotions for an event.'));
echo $this->Form->input('medium', array('after' => 'The medium defines a promotion type. e.g. ad or poster.'));
echo $this->Form->input('source', array('after' => 'The source groups a publisher or provider across campaigns.'));
echo $this->Form->input('host', array('after' => 'Redirects to a different host. Generally this will be left blank.'));
echo $this->Form->input('destination', array('after' => 'The path to redirect to.'));
echo $this->Form->end('Add');
?>
