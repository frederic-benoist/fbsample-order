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

use Symfony\Component\Translation\TranslatorInterface;

class MyCheckoutExtraStep extends AbstractCheckoutStep
{
    public function __construct(
        Context $context,
        TranslatorInterface $translator
    ) {
        parent::__construct($context, $translator);

        $this->template = 'module:fbsample_order/views/templates/front/checkout/step/extra.tpl';
    }

    public function handleRequest(array $requestParameters = array())
    {
        // if this step was reached (= all previous steps complete)
        if ($this->step_is_reachable) {
            // This step is always completed
            $this->step_is_complete = true;
        }

        // Set Title
        $this->setTitle(
            $this->getTranslator()->trans(
                'Extra Information',
                array(),
                'Shop.Theme.Checkout'
            )
        );
    }

    public function render(array $extraParams = array())
    {
        // Set Template : Use template in fbsample_order module
        return $this->renderTemplate(
            $this->getTemplate(),
            $extraParams,
            array(
                'myExtraData' => 'Extra Data for current order'
            )
        );
    }
}
