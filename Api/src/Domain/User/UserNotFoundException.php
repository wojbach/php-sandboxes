<?php
declare(strict_types=1);

namespace Api\Domain\User;

use Api\Domain\DomainException\DomainRecordNotFoundException;

class UserNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The user you requested does not exist.';
}
