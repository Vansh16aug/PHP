<?php
$inventory=['zen'=>['quantity' => 10, 'price' => 150],
'Maruti'=>['quantity' => 20, 'price' => 200],
'Fiat'=>['quantity' => 30, 'price' => 250]];

if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $item=$_POST["item "];
// $quan=intval($_POST["quan"]);
// $prize=floatval($_POST["prize"]);
$action=$_POST["action"];
switch($action){
    case'Add':
          // Retrieve form values
          $item = htmlspecialchars($_POST["item"]);
          $quan = intval($_POST["quan"]);
          $price = floatval($_POST["price"]);

          // Add item to inventory or update existing item
          if (isset($inventory[$item])) {
              $inventory[$item]['quantity'] += $quan; // Update quantity if the item already exists
              $inventory[$item]['price'] = $price; // Update price
              echo "<p>Updated item <strong>$item</strong> in the inventory.</p>";
          } else {
              $inventory[$item] = ['quantity' => $quan, 'price' => $price];
              echo "<p>Added item <strong>$item</strong> to the inventory.</p>";
          }
          break;
          case 'Delete Item':
            $item = htmlspecialchars($_POST["item"]);
            if (isset($inventory[$item])) {
                unset($inventory[$item]);
                echo "<p>Item <strong>$item</strong> removed from inventory.</p>";
            } else {
                echo "<p>Item <strong>$item</strong> does not exist in inventory.</p>";
            }
            break;

        case 'TotalValue':
            // Calculate total value of the inventory
            $totalValue = 0;
            foreach ($inventory as $item => $details) {
                $totalValue += $details['quantity'] * $details['price'];
            }
            echo "<p>Total value of inventory: $" . number_format($totalValue, 2) . "</p>";
            break;

        default:
            echo "<p>Invalid action.</p>";
}
echo "<h2>Current Inventory</h2>";
    echo "<table class='table table-bordered'>";
    echo "<thead><tr><th>Item</th><th>Quantity</th><th>Price</th></tr></thead>";
    echo "<tbody>";
    foreach ($inventory as $item => $details) {
        echo "<tr><td>$item</td><td>{$details['quantity']}</td><td>\${$details['price']}</td></tr>";
    }
    echo "</tbody></table>";

}
?>
