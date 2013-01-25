<?php
include_once DIR_ROOT.'theme_init'.EXT;

Theme::addCss('pfagoraslab/style');
Theme::addCss('local');
//Theme::addJs('snow');

if (IS_PRODUCTION)
{
  Theme::addJsExternal('http://vk.com/js/api/openapi.js?75');
  FE::manageEvent(FE::C_ON_READY, 'VK.init({apiId: 3380363, onlyWidgets: true})');
}