<?php

/**
 * @brief This class containts functionality of calculating sales .
 */
class SalesAnalysis extends Database
{

    /**
     * @brief This function calls the query fuction to get all the data.
     * @param totalSale -Total made till now
     * @param prodInvestent -Total purchase price of all the products present in the store. 
     * @return Integer 
     * @retval result - Information about all the representatives in the database
     */
    public static function cal($totalSale, $prodInvestment)
    {
        if ($totalSale > $prodInvestment) {
            return 0;
        }

        return $prodInvestment - $totalSale;
    }
}
