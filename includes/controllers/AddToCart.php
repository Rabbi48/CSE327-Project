<?php 
    /**
    * @brief AddToCart class. Consist all the logic part of add to cart functionality and it extebds to Controller class.
    */
class AddToCart extends Controller{
    /**
    * @brief Add product with desired quantity, price in the cart
    * @param No parameter
    * @result product will be add to cart if requested quantity is available
    */
    public static function addtocart2(){
        $getEid = new CrudModel();
        $eid = $getEid->getEid();
        $pid =$_GET['pid']; /**< pid - product ID of the product that user want to add to the cart */
        $quantity = $_POST['quantity']; /**< quantity -Quantity of the product that user want to add to the cart */
        $add = new AddToCart(); /**< add - An object of AddToCart Class */
        $isAdded = new AddToCart(); /**< An object of AddToCart Class */
        $new = new AddToCart(); /**< isAdded - An object of AddToCart Class */
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        if($isAdded->isAlreadyAdded($pid, $eid))
        {
            $newQuantityAfterAdding = $new->newQuantity($quantity,$pid, $eid); /**< newQuantityAfterAdding - New quantity after adding the product again in the cart */
            if($add->checkStock($pid, $newQuantityAfterAdding))
            {
                $model->updateCart($quantity,$eid,$pid);
                header('Location: products?eid='.$eid.'');
            }
            else{
                echo "<script>
                alert('Insufficient stock!');
                window.location.href= 'products?eid=$eid';
                </script>";
            }
            
            
        }    
        elseif(!empty($_POST['quantity']))
        {
            

            $status =$add->checkStock($pid, $quantity);
            if($status){
                $result2 = $model->productDetails($pid); /**< result2 - An object of AddToCart Class */
                foreach($result2 as $item)
                {
                    $productName = $item[0]; /**< productname -  product name of the product retrived from database */
                    $price = $item[1]; /**< price - Price of the product retrived from database */
                    $subtotal = (float)$price * (float)$quantity; /**< subtotal - Sub total Price after calculating. */
                }
                $model->insertIntoCart($pid,$productName, $price, $eid, $quantity, $subtotal);
                header('Location: products');
            }
            else{
                echo "<script>
                        alert('Insufficient stock!');
                        window.location.href= 'products';
                     </script>";
            }
        }
        else{

        }
    }
        /**
    * @brief Compare the desire quantity and the actual stock of a product.
    * @param productId - To check the stock of that specific product.
    * @param quantity - Requested quantity to compare with stock.
    * @return Will Return true if the requested quantity is availabe or flase otherwise.
    */
    public static function checkStock($productId, $quantity)
    {
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->findStock($productId); /**< result - Result retrived from database */
        foreach($result as $item)
        {
            $stock = $item[0]; /**< stock - Stock retrived from database */
        }
       
        if($stock >= $quantity)
        {
            return true;
        }
        else {
            return false;
        }
    }
    /**
    * @brief Check if the product already added to the cart ot not.
    * @param productId - To check the if that specific product is already on the cart or not.
    * @param employeeId - To find the cart of that specific employee.
    * @return Will Return true if that product is already added or flase otherwise.
    */
    public static function isAlreadyAdded($productId, $employeeId){
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->isAdded($productId, $employeeId); /**< result - Result retrived from database */
        if(!empty($result)){
            return true;
        }
        else {
            return false;
        }
    }
    /**
    * @brief Check if the product already added to the cart ot not.
    * @param quantity - Requested quantity to add ti the cart.
    * @param productId - To find the previous quantity added to the cart.
    * @param employeeId - To find the cart of that specific employee.
    * @return Will Return new quantity after adding the same product to the cart.
    */
    public static function newQuantity($quantity, $productId,$employeeId){
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->findQuantity($productId,$employeeId); /**< result - Result retrived from database */
        foreach($result as $item){
            $stock = $item[0];
        }
        return $quantity + $stock;
    }
}

