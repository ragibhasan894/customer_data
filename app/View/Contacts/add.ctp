
<?php pr($contacts); ?>
<div class='container'>
<h2>Create Contact</h2>

<table class='table'>
<?php

	echo $this->Form->create('Contact');
	echo $this->Form->input('customer_id');
	echo $this->Form->input('phone');
	echo $this->Form->input('email');
	echo $this->Form->input('address');
	echo $this->Form->end('Save Contact');

?>
</table>
</div>
