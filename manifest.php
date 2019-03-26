<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2019 (original work) Open Assessment Technologies SA;
 */

return array(
    'name' => 'taoOutcomeFilesystem',
    'label' => 'tao-outcome-filesystem',
    'description' => 'extension that allows to store files in filesystem',
    'license' => 'GPL-2.0',
    'version' => '0.0.1',
    'author' => 'Open Assessment Technologies SA',
    'requires' => [
        'taoResultServer' => '>=9.1.0',
        'generis' => '>=9.0.4'
    ],
    // for compatibility
    'dependencies' => ['tao', 'taoResultServer'],
    'install' => [
        'php' => [
            \oat\taoOutcomeFilesystem\Script\Install::class,
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'oat\\taoOutcomeRds\\' => __DIR__ . DIRECTORY_SEPARATOR
        ]
    ]
);
