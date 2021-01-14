<h1>Homepage</h1>
<?php foreach($data['delivery'] as $delivery): ?>
  <ul>
    <li>Order ID: <?= $delivery['delivery_id']; ?></li>
    <li>Description: <?= $delivery['description']; ?></li>
  </ul>
<?php endforeach; ?>
