<?php

namespace Bundle\DeploymentBundle\Deployer;

use Bundle\DeploymentBundle\Deployer\Deployer;
use Bundle\DeploymentBundle\Deployer\DeployerInterface;
use Bundle\DeploymentBundle\Service\Rules;

class FtpDeployer extends Deployer implements DeployerInterface
{
    public function deploy(Rules $rules)
    {
        return array();
    }
}