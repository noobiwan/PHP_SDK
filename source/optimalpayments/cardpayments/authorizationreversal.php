<?php
/*
 * Copyright (c) 2014 Optimal Payments
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace OptimalPayments\CardPayments;

/**
 * @property string $id
 * @property string $merchantRefNum
 * @property int $amount
 * @property string $childAccountNum
 * @property bool $dupCheck
 * @property string $txnTime
 * @property string $status
 * @property int[] $riskReasonCode
 * @property \OptimalPayments\CardPayments\AcquirerResponse $acquirerRresponse
 * @property \OptimalPayments\Error $error
 * @property \OptimalPayments\Link[] $links
 * @property string $authorizationID
 */
class AuthorizationReversal extends \OptimalPayments\JSONObject implements \OptimalPayments\Pageable
{
    public static function getPageableArrayKey()
    {
        return 'voidAuths';
    }

    protected static $fieldTypes = array(
         'id' => 'string',
         'merchantRefNum' => 'string',
         'amount' => 'int',
         'childAccountNum' => 'string',
         'dupCheck' => 'bool',
         'txnTime' => 'string',
         'status' => array(
              'RECEIVED',
              'COMPLETED',
              'FAILED',
         ),
         'riskReasonCode' => 'array:int',
         'acquirerResponse' => '\OptimalPayments\CardPayments\AcquirerResponse',
         'error' => '\OptimalPayments\Error',
         'links' => 'array:\OptimalPayments\Link',
         'authorizationID' => 'string'
    );

}
