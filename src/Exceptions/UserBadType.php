<?php

namespace Larabookir\Gateway\Exceptions;
/**
 * This exception when throws, user try to submit a payment request who submitted before
 */
class UserBadType extends \Exception
{
	protected $code=401;
	protected $message = 'کاربر معتیر نیست';
}
