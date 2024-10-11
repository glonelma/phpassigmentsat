<?php
trait UserTrait {
    public function create($name) {
        echo "User $name created.\n";
    }
}

class User {
    use UserTrait; // Using the trait
}

trait ProductTrait {
    public function add($name) {
        echo "Product $name added.\n";
    }
}

class Product {
    use ProductTrait; // Using the trait
}
?>
