<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.statstab.manager' shared service.

return $this->services['ps_metrics.statstab.manager'] = new \PrestaShop\Module\Ps_metrics\StatsTabManager(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->load('getPsMetrics_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->load('getPsAccounts_FacadeService.php')) && false ?: '_'});
