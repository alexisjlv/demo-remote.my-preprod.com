<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.geolocation.by_ip_address.form_handler' shared service.

return $this->services['prestashop.admin.geolocation.by_ip_address.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.admin.geolocation.by_ip_address.form_data_provider']) ? $this->services['prestashop.admin.geolocation.by_ip_address.form_data_provider'] : $this->load('getPrestashop_Admin_Geolocation_ByIpAddress_FormDataProviderService.php')) && false ?: '_'}, 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationByIpAddressType', 'GeolocationPageByAddress', 'geolocation_by_ip_address');
