<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Usps\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * USPS Allowed shipping methods
 */
class Data extends AbstractHelper
{
    /**
     * Shipping methods
     *
     * @var array
     */
    protected $availableShippingMethods = [
        'usps_0_FCLE', // First-Class Mail Large Envelope
        'usps_1',      // Priority Mail
        'usps_2',      // Priority Mail Express Hold For Pickup
        'usps_3',      // Priority Mail Express
        'usps_4',      // Retail Ground
        'usps_6',      // Media Mail
        'usps_INT_1',  // Priority Mail Express International
        'usps_INT_2',  // Priority Mail International
        'usps_INT_4',  // Global Express Guaranteed (GXG)
        'usps_INT_7',  // Global Express Guaranteed Non-Document Non-Rectangular
        'usps_INT_8',  // Priority Mail International Flat Rate Envelope
        'usps_INT_9',  // Priority Mail International Medium Flat Rate Box
        'usps_INT_10', // Priority Mail Express International Flat Rate Envelope
        'usps_INT_11', // Priority Mail International Large Flat Rate Box
        'usps_INT_12', // USPS GXG Envelopes
        'usps_INT_14', // First-Class Mail International Large Envelope
        'usps_INT_16', // Priority Mail International Small Flat Rate Box
        'usps_INT_20', // Priority Mail International Small Flat Rate Envelope
        '1058',         // Ground Advantage™
        '4058',         // Ground Advantage™ HAZMAT
        '6058',         // Ground Advantage™ Parcel locker
        '2058',         // Ground Advantage™ Hold for pickup
        '4096',         // Ground Advantage™ Cubic HAZMAT
        '1096',         // Ground Advantage™ Cubic
        '2096',         // Ground Advantage™ Cubic Hold for pickup
        '6096',         // Ground Advantage™ Cubic Parcel locker
    ];

    /**
     * Define if we need girth parameter in the package window
     *
     * @param string $shippingMethod
     * @return bool
     */
    public function displayGirthValue($shippingMethod)
    {
        return in_array($shippingMethod, $this->availableShippingMethods);
    }
}
