<?php
declare(strict_types=1);

namespace Igloonet\MailkitApi\Exceptions\User;

use Igloonet\MailkitApi\Exceptions\RpcResponseErrorException;

abstract class UserRevalidationException extends RpcResponseErrorException implements UserException
{
}
