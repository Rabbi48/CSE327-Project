<?php
/**
 * @brief Update class. Do stuffs to print the product information and it extends to Controller class.
 */
class Update extends Controller
{
    /**
     * @brief A page with all the information of product with update and delete button.
     * @param No parameter
     * @return Prints the products information in a tabular form.
     */
    public static function updateM()
    {
        $result = self::query("select * from products");
        /**< result - Result retrived from database */
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[5]; ?></td>
                <td><?php echo $item[8]; ?></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo '<form action="updateProduct?pid=' . $item[0] . '" method="POST"><button type="submit">Details</button></form>' ?></td>
                <td><?php echo '<form action="deleteProduct?pid=' . $item[0] . '" method="POST"><button type="submit">Delete</button></form>' ?></td>
            </tr>
<?php
        }
    }
}
?>
