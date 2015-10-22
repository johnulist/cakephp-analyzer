<?php
/**
 * CakeManager (http://cakemanager.org)
 * Copyright (c) http://cakemanager.org
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) http://cakemanager.org
 * @link          http://cakemanager.org CakeManager Project
 * @since         1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\DispatcherFactory;
use Cake\Core\Configure;

DispatcherFactory::add('Analyzer.Analyzer');

Configure::write('Analyzer.Ignore.default', [
    'plugin' => 'DebugKit',
]);

Configure::write('CA.Menu.main.Analyzer', [
    'url' => [
        'prefix' => 'admin',
        'controller' => 'Analyzer',
        'plugin' => 'Analyzer'
    ],
    'weight' => 40
]);