<?php

namespace Disclosure;

use Psr\Container\Exception\NotFoundExceptionInterface;
use DomainException;

class NotFoundException extends DomainException implements NotFoundExceptionInterface
{
}

