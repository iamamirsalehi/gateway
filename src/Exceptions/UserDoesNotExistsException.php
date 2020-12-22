<?php

namespace Larabookir\Gateway\Exceptions;
/**
 * This exception when throws, user try to submit a payment request who submitted before
 */
class UserDoesNotExistsException extends \Exception
{
	protected $code=404;
	protected $message = 'همچنین کاربری وجود ندارد';
}
