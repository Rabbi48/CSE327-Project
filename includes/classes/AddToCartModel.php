<?php
    /**
    * @brief A class that handles all query related to add to cart functionality and it extebds to Database class..
    */
class AddToCartModel extends Database {
    /**
    * @brief Perform query for to update the cart if same product were previously added.
    * @param quantity - Quantity of product that user wants.
    * @param  productID - Id of a specific product to update the quantity of  that product to the cart.
    * @param employeeId - Id of the employee who added the product into the cart.
    * @return Update the cart with new quantity of a product that is previously added.
    */
    public static function updateCart($quantity, $employeeId, $productID) {
        self::query("UPDATE cart set quantity = quantity + '$quantity', subtotal_price = subtotal_price + (unit_price * '$quantity') WHERE emp_id = '$employeeId' and product_id ='$productID'");
    }
     /**
    * @brief Perform query to retrieve the product name, retail price of a product..
    * @param  productID - Id of a specific product to find that from database.
    * @return product name and retail price of a product.
    */
    public static function productDetails($productID){
        return self::query("SELECT product_name, retail_price from products where product_id = '$productID'");
    }
    /**
    * @brief Perform query for to update the cart if sameproduct were previously added.
    * @param  productID - Id of a specific product to add that to the cart.
    * @param  productName - Name of a specific product to add that to the cart.
    * @param  price - Price of a specific product to add that to the cart.
    * @param employeeId - Id of the employee who added the product into the cart.
    * @param quantity - Quantity of product that user wants.
    * @param subTotal - Total price of a specific product for a specific quantity.
    * @return INSERT a product with it's relevent information,  quantity and who sold it to the cart into the database.
    */
    public static function insertIntoCart($productID,$productName, $price, $employeeId, $quantity, $subtotal){
        self::query("INSERT INTO cart VALUES ('$productID', '$productName','$price','$employeeId','$quantity','$subtotal')");
    }
    /**
    * @brief Perform query to retrieve the stock of a product..
    * @param  productID - Id of a specific product's stock to find that from database.
    * @return Stock of that product.
    */
    public static function findStock($productID){
        return self::query("SELECT stock FROM products where product_id = '$productID'");
    }
    /**
    * @brief Perform query to check if that product is previously added or not.
    * @param  productID - Id of a specific product to update the quantity of  that product to the cart.
    * @param employeeId - Id of the employee who added the product into the cart.
    * @return Return all information of that product from the cart table if that's available.
    */
    public static function isAdded($productID, $employeeId){
        return self::query("SELECT * FROM cart where product_id = '$productID' and emp_id = '$employeeId'");
    }
    /**
    * @brief Perform query to find quamtity of a  product that is added to the cart.
    * @param  productID - Id of a specific product find that product in the cart.
    * @param employeeId - Id of the employee who added the product into the cart.
    * @return Return quantity of that product from the cart table if that's available.
    */
    public static function findQuantity($productID,$employeeId){
        return self::query("SELECT quantity FROM cart where product_id = '$productID' and emp_id = '$employeeId'");
    }  
    /**
    * @brief Perform query to delete all from the cart.
    * @param  employeeId - Id of a specific product to find that from database.
    * @return Delete all infortaion from cart for that specific employee.
    */

    public static function clearCart($employeeId) {
        self::query("DELETE from cart where  emp_id ='$employeeId'");
    } 
    /**
    * @brief Perform query to delete a product from the cart.
    * @param  employeeId - Id of a specific product to find that from database.
    * @param  productID - Id of a specific product find that product in the cart.
    * @return Delete a infortaion of a speicific product from cart for specific employee.
    */
    public static function removeAnItem($employeeId, $productID) {
        self::query("DELETE from cart where product_id ='$productID' and emp_id ='$employeeId'");  
    } 
}

?>
