<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Leniel-Luzardo');

// Project repository
set('repository', 'git@github.com:lenielluzardo/lluzardocom.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('147.182.253.74')
->user('deployer')
->identityFile('~/.ssh/deployer@lenielluzardocom')
    ->set('deploy_path', '/var/www/lenielluzardocom');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');

