<?php
/**
 * Copyright 2015 Compropago.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/**
 * Compropago ${LIBRARI}
 * @author Eduardo Aguilar <eduardo.aguilar@compropago.com>
 */


namespace CompropagoSdk\Factory\V10;


use CompropagoSdk\Factory\Abs\Customer;

class Customer10 extends Customer
{
    public $customer_name;
    public $customer_email;
    public $customer_phone;

    public function __construct()
    {
    }

    public function getCustomerName()
    {
        return $this->customer_name;
    }

    public function getCustomerEmail()
    {
        return $this->customer_email;
    }

    public function getCustomerPhone()
    {
        return $this->customer_phone;
    }
}