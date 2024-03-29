<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Owl\Component\Attribute\AttributeType;

use Owl\Component\Attribute\AttributeType\AttributeTypeInterface;
use Owl\Component\Attribute\AttributeType\DatetimeAttributeType;
use PhpSpec\ObjectBehavior;

final class DatetimeAttributeTypeSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(DatetimeAttributeType::class);
    }

    function it_implements_attribute_type_interface(): void
    {
        $this->shouldImplement(AttributeTypeInterface::class);
    }

    function its_storage_type_is_text(): void
    {
        $this->getStorageType()->shouldReturn('datetime');
    }

    function its_type_is_text(): void
    {
        $this->getType()->shouldReturn('datetime');
    }
}
