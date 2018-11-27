<?php
/**
 * 2007-2018 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class MyCheckoutAddressesStep extends CheckoutAddressesStep
{
  
    public function render(array $extraParams = array())
    {
        $tplParameters = $this->getTemplateParameters();

        // Change URL : Use Order controller in fbsample_order module
        $tplParameters['use_different_address_url'] = $this->context->link->getModuleLink(
            'fbsample_order',
            'order',
            array('use_same_address' => 0),
            true,
            null                
        );
        // Change URL : Use Order controller in fbsample_order module
        $tplParameters['new_address_delivery_url'] = $this->context->link->getModuleLink(
            'fbsample_order',
            'order',
            array('newAddress' => 'delivery'),
            true,
            null                
        );
        // Change URL : Use Order controller in fbsample_order module
        $tplParameters['new_address_invoice_url'] = $this->context->link->getModuleLink(
            'fbsample_order',
            'order',
            array('newAddress' => 'invoice'),
            true,
            null                
        );

        // Change Template : Use template in fbsample_order module
        return $this->renderTemplate(
            'module:fbsample_order/views/templates/front/checkout/step/addresses.tpl',
            $extraParams,
            $tplParameters
        );
    }
}
