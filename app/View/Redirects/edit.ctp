<h1>Update Redirect</h1>
<?php
echo $this->Form->create('Redirect');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('redirect_key');
echo $this->Form->input('campaign');
echo $this->Form->input('medium');
echo $this->Form->input('source');
echo $this->Form->input('host');
echo $this->Form->input('destination');
echo $this->Form->end('Update');
?>
