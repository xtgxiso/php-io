<?php
/**
 * This file is part of Gplanchat\Io.
 *
 * Gplanchat\Io is free software: you can redistribute it and/or modify it under the
 * terms of the GNU LEsser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Gplanchat\Io is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Gplanchat\Io.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Grégory PLANCHAT <g.planchat@gmail.com>
 * @license Lesser General Public License v3 (http://www.gnu.org/licenses/lgpl-3.0.txt)
 * @copyright Copyright (c) 2013 Grégory PLANCHAT (http://planchat.fr/)
 */

namespace Gplanchat\Io\Net\Protocol\Http;

use Gplanchat\ServiceManager\ServiceManagerInterface;

class ProtocolUpgraderFactory
{
    private $protocolUpgrader = null;

    public function __invoke(ServiceManagerInterface $serviceManager, array $moreParams = [])
    {
        if (($protocolUpgrader = $this->getProtocolUpgrader()) === null) {
            $protocolUpgrader = new ProtocolUpgrader($serviceManager);
            $this->setProtocolUpgrader($protocolUpgrader);
        }

        return $protocolUpgrader;
    }

    /**
     * @param ProtocolUpgraderInterface $protocolUpgrader
     * @return ProtocolUpgraderFactory
     */
    public function setProtocolUpgrader(ProtocolUpgraderInterface $protocolUpgrader)
    {
        $this->protocolUpgrader = $protocolUpgrader;

        return $this;
    }

    /**
     * @return ProtocolUpgraderInterface
     */
    public function getProtocolUpgrader()
    {
        return $this->protocolUpgrader;
    }
}
