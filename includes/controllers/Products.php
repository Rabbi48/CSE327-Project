<?php

/**
 * @brief Controller for the Products page
 */

class Products extends Controller
{

    /**
     * @brief Searches the Products and displays the result
     * @param query - The keyword to search in Products
     * @param searchby - The attribute of Products to search in, like companyName, generic etc.
     */
    public static function searchProducts($query, $searchby)
    {

        $searchModel = new searchModel();
        $result = $searchModel->searchItems('Products', $query, $searchby);
        $Products = new Products();
        $Products->printResult($result);
    }

    /**
     * @brief Prints the result in a tabular form
     * @param result - The array to be printed
     */
    public static function printResult($result)
    {
        $getEid = new CrudModel();
        $eid = $getEid->getEid();
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[11]; ?></td>
                <td><?php echo $item[5]; ?></td>
                <td><?php echo $item[7]; ?></td>
                <td><?php echo $item[9]; ?></td>
                <form action="addtocart?pid=<?php echo $item[0]; ?>" method="POST">
                    <td><input type="number" min="0" class="quantity" name="quantity" ; required></td>
                    <td><button type="submit">++</button> </td>
                </form>
            </tr>
            <?php

            ?>

<?php   }
    }

    /**
     * @brief Loads the inital Products page
     * @brief Prints all the Products
     * @brief Grabs user input from the view (if any)
     */
    public static function onPageLoad()
    {
        $tableName = 'Products';
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $searchby =  $_POST['searchby'];
            $Products = new Products();
            $Products->searchProducts($query, $searchby);
        } else {
            $Products = new Products();
            $db = new Database();
            $result = $db->getItems($tableName);
            $Products = new Products();
            $Products->printResult($result);
        }
    }
}

?>
