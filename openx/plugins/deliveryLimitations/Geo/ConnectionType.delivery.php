<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 */

require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';

/**
 * Check to see if this impression contains the valid netspeed.
 *
 * @param string $limitation The netspeed (or comma list of netspeed's) limitation
 * @param string $op The operator (either '==' or '!=')
 * @param array $aParams An array of additional parameters to be checked
 * @return boolean Whether this impression's netspeed passes this limitation's test.
 */
function MAX_checkGeo_ConnectionType($limitation, $op, $aParams = [])
{
    return MAX_limitationsMatchArrayClientGeo('connection_type', $limitation, $op, $aParams);
}
