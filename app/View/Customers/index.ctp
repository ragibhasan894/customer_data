<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>All Customers</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($customers as $customer): ?>

        <tr>
          <td><?php echo $customer['Customer']['id']; ?></td>
          <td><?php echo $this->Html->link($customer['Customer']['name'],array('controller' => 'customers', 'action' => 'view', $customer['Customer']['id'])); ?></td>
          <td><?php echo $this->HTML->link('Edit', array('controller'=>'customers','action'=>'edit',$customer['Customer']['id']))."<br>";
            echo $this->Form->postLink('Delete', array('controller'=>'customers','action'=>'delete',$customer['Customer']['id']), array('confirm'=>'Are you sure you want to delete?'));
           ?></td>
        </tr>

      <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
