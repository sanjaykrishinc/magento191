<?php

/*
 * @copyright  Copyright (c) 2013 by  ESS-UA.
 */

class Ess_M2ePro_Model_Connector_Buy_Product_Revise_MultipleResponser
    extends Ess_M2ePro_Model_Connector_Buy_Product_Responser
{
    // ########################################

    protected function getSuccessfulMessage(Ess_M2ePro_Model_Listing_Product $listingProduct)
    {
        // M2ePro_TRANSLATIONS
        // Item was successfully Revised
        return 'Item was successfully Revised';
    }

    // ########################################
}