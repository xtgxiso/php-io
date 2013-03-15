<?php
/**
 * This file is part of php-io.
 *
 * php-io is free software: you can redistribute it and/or modify it under the
 * terms of the GNU LEsser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * php-io is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with php-io.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Grégory PLANCHAT <g.planchat@gmail.com>
 * @license Lesser General Public License v3 (http://www.gnu.org/licenses/lgpl-3.0.txt)
 * @copyright Copyright (c) 2013 Grégory PLANCHAT (http://planchat.fr/)
 */

namespace Gplanchat\Io\Net;

use Gplanchat\Io\Net\SocketTrait;

abstract class AbstractIp4
    implements SocketInterface
{
    use SocketTrait;

    /**
     * @param string $address
     * @param int $port
     */
    public function __construct($address, $port)
    {
        $this->socket = \uv_ip4_addr($address, $port);
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return \uv_ip4_name($this->socket);
    }
}