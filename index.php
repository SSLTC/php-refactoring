<?php declare(strict_types=1);

function placeOrder($pizza, $customer) {

    $customerData = array(
        "Koen" => "A yacht in Antwerp", 
        "Manuele" => "Somewhere in Belgium", 
        "Students" => "BeCode office"
    );

    foreach ($customerData as $customerName => $customerAddress) {
        if ($customer === $customerName) {
            echo "Creating new order...<br>" . 
            "A " . $pizza . " pizza should be sent to " . $customerName . ". <br>" . 
            "The address: " . $customerAddress . ".<br>" . 
            "The bill is €" . getPrice($pizza) . ".<br>" . 
            "Order finished.<br><br>";
        }
    }
}

function getPrice($pizza) {

    $pizzas = array(
        "Calzone" => 10, 
        "Marguerita" => 5, 
        "Golden" => 100
    );

    foreach ($pizzas as $pizzaName => $pizzaPrice) {
        if ($pizza === $pizzaName) {
            return $pizzaPrice;
        }
    }
}

placeOrder("Calzone", "Koen");
placeOrder("Marguerita", "Manuele");
placeOrder("Golden", "Students");