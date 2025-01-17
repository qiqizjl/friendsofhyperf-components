<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/3.x/README.md
 * @contact  huangdijia@gmail.com
 */
namespace FriendsOfHyperf\Http\Logger\Profile;

use Psr\Http\Message\RequestInterface;

class DisableLogProfile implements LogProfile
{
    public function shouldLogRequest(RequestInterface $request): bool
    {
        return false;
    }
}
