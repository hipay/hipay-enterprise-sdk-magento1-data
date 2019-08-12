<?php

/**
 * HiPay Fullservice SDK Magento 1
 *
 * 2019 HiPay
 *
 * NOTICE OF LICENSE
 *
 * @author    HiPay <support.tpp@hipay.com>
 * @copyright 2019 HiPay
 * @license   https://github.com/hipay/hipay-fullservice-sdk-magento1-data/blob/master/LICENSE.md
 */

/**
 * @author      HiPay <support.tpp@hipay.com>
 * @copyright   Copyright (c) 2018 - HiPay
 * @license     https://github.com/hipay/hipay-fullservice-sdk-magento1-data/blob/master/LICENSE.md
 * @link    https://github.com/hipay/hipay-fullservice-sdk-magento1-data
 */
class Allopass_HipayData_Model_Observer
{
    public function afterMapRequest($args)
    {
        $orderRequest = $args['OrderRequest'];
        $cart = $args['Cart'];

        //$orderRequest->example = 'example';
    }
}
