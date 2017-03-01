<?php
/*
 * This file has been generated automatically.
 * Please change the configuration for correct use deploy.
 */

require 'recipe/common.php';
serverList('servers.yml');
// Set configurations
set('repository', '{{repository}}');
// Set configurations
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);


/**
 * Main task
 */
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');