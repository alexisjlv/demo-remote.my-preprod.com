<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attachment.command_handler.delete_attachment_handler' shared service.

return $this->services['prestashop.adapter.attachment.command_handler.delete_attachment_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler\DeleteAttachmentHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
