<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>All Contact</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contacts as $contact): ?>

        <tr>
          <td><?php echo $contact['Contact']['id']; ?></td>
          <td><?php echo $contact['Contact']['phone']; ?></td>
          <td><?php echo $contact['Contact']['email']; ?></td>
          <td><?php echo $contact['Contact']['address']; ?></td>
          <td><?php echo $this->HTML->link('Edit', array('controller'=>'contacts','action'=>'edit',$contact['Contact']['id']))."<br>";
            echo $this->Form->postLink('Delete', array('controller'=>'contacts','action'=>'delete',$contact['Contact']['id']), array('confirm'=>'Are you sure you want to delete?'));
           ?></td>
        </tr>

      <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
