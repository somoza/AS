<?php

/*
 * This file is part of the sfHadoriThemePlugin package.
 * (c) Matías Alejo Roldán Zukerfeld<matiasalejoroldan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfHadoriThemePlugin configuration.
 * 
 * @package    mrBoxieAdminThemePlugin
 * @subpackage config
 * @author     Matías Alejo Roldán Zukerfeld<matiasalejoroldan@gmail.com>
 */
class mrBoxieAdminThemePluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    $plugins = $this->configuration->getPlugins();
    
    if (!in_array('sfThemeGeneratorPlugin', $plugins)) 
    {
      throw new sfException("Plugin 'sfThemeGeneratorPlugin' must be enabled in order to run 'mrBoxieAdminThemePlugin'.  Please visit http://github.com/roldan/mrBoxieAdminGeneratorPlugin to install this plugin");
    }
  }
}