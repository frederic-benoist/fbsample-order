<?php
/**
 * 2007-2018 Frédéric BENOIST
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 *  @author    Frédéric BENOIST <http://www.fbenoist.com/>
 *  @copyright 2013-2018 Frédéric BENOIST <contact@fbenoist.com>
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
     exit;
}

class FbSample_Order extends Module
{
    public function __construct()
    {
        $this->name = 'fbsample_order';
        $this->version = '1.7.0';
        $this->author = 'Frederic BENOIST';
        $this->tab = 'others';
        $this->bootstrap = true;
        $this->controllers = array('order');

        parent::__construct();
        $this->displayName = $this->l('Sample module');
        $this->description = $this->l('New OrderController');
    }
}
