<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada\Resources;

use EcomPHP\Lazada\Resource;

class Flexicombo extends Resource
{
    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Factivate
     */
    public function ActivateFlexiCombo($params = [])
    {
        return $this->post('promotion/flexicombo/activate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fproducts%2Fadd
     */
    public function AddFlexiComboProducts($params = [])
    {
        return $this->post('promotion/flexicombo/products/add', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fcreate
     */
    public function CreateFlexiCombo($params = [])
    {
        return $this->post('promotion/flexicombo/create', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fdeactivate
     */
    public function DeactivateFlexiCombo($params = [])
    {
        return $this->post('promotion/flexicombo/deactivate', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fproducts%2Fdelete
     */
    public function DeleteFlexiComboProducts($params = [])
    {
        return $this->post('promotion/flexicombo/products/delete', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fdetails
     */
    public function GetFlexiComboDetails($params = [])
    {
        return $this->get('promotion/flexicombo/details', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Flist
     */
    public function ListFlexiCombo($params = [])
    {
        return $this->get('promotion/flexicombo/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fproducts%2Flist
     */
    public function ListFlexiComboProducts($params = [])
    {
        return $this->get('promotion/flexicombo/products/list', $params);
    }

    /**
     * @see https://open.lazada.com/apps/doc/api?path=%2Fpromotion%2Fflexicombo%2Fupdate
     */
    public function UpdateFlexiCombo($params = [])
    {
        return $this->post('promotion/flexicombo/update', $params);
    }
}
