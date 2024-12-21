<?php

// TRAIT: Loggable
trait Loggable {
    public function log(string $message) {
        echo "[LOG]: " . $message . "\n";
    }
}

// INTERFACE: ItemInterface
interface ItemInterface {
    public function getPrice(): float;
    public function getName(): string;
}

// ABSTRACT CLASS: Product
abstract class Product implements ItemInterface {
    use Loggable;

    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    // Abstract method that must be implemented by derived classes
    abstract public function getDescription(): string;
}

// CONCRETE CLASS: PhysicalProduct
class PhysicalProduct extends Product {
    private float $weight;

    public function __construct(string $name, float $price, float $weight) {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    public function getDescription(): string {
        return "This is a physical product named {$this->name} weighing {$this->weight} kg.";
    }
}

// CONCRETE CLASS: DigitalProduct
class DigitalProduct extends Product {
    public function getDescription(): string {
        return "This is a digital product named {$this->name}.";
    }
}

// CLASS: Order
class Order {
    use Loggable;

    private static int $orderCount = 0;
    private array $items = [];

    public function __construct() {
        self::$orderCount++;
    }

    public static function getOrderCount(): int {
        return self::$orderCount;
    }

    public function addItem(ItemInterface $item): void {
        $this->items[] = $item;
        $this->log("Added item: " . $item->getName());
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}

// MAIN EXECUTION

// Create products
$physicalProduct = new PhysicalProduct("Laptop", 1500.00, 2.5);
$digitalProduct = new DigitalProduct("E-Book", 10.00);

// Create order
$order = new Order();
$order->addItem($physicalProduct);
$order->addItem($digitalProduct);

// Display order details
echo "Order Total: $" . $order->getTotal() . "\n";
echo "Total Orders Created: " . Order::getOrderCount() . "\n";

// Display descriptions of the products
echo $physicalProduct->getDescription() . "\n";
echo $digitalProduct->getDescription() . "\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        .product, .order {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .product:last-child, .order:last-child {
            border-bottom: none;
        }

        .total {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>E-Commerce Order Summary</h1>

        <div class="products">
            <h2>Products:</h2>
            <div class="product">
                <p>Name: Laptop</p>
                <p>Price: $1500.00</p>
                <p>Description: This is a physical product named Laptop weighing 2.5 kg.</p>
            </div>

            <div class="product">
                <p>Name: E-Book</p>
                <p>Price: $10.00</p>
                <p>Description: This is a digital product named E-Book.</p>
            </div>
        </div>

        <div class="order">
            <h2>Order Details:</h2>
            <p>Order Total: $1510.00</p>
            <p>Total Orders Created: 1</p>
        </div>
    </div>
</body>
</html>
