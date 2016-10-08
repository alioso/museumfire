<?php

ini_set('arg_separator.output', '&amp;');
ini_set('magic_quotes_runtime', 0);
ini_set('magic_quotes_sybase', 0);
ini_set('session.cache_expire', 200000);
ini_set('session.cache_limiter', 'none');
ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_probability', 1);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.save_handler', 'user');
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid', 0);
ini_set('url_rewriter.tags', '');

$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$base_url = $protocol . 'museumfire.dev';

$conf = array(
  'fetcher_environment' => 'local',
);
$databases = array(
  'default' => array(
    'default' => array(
      'database' => 'museumfire',
      'username' => 'museumfire',
      'password' => 'TDngtBcSNulOWyi7V1kX',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
      'namespace' => 'Drupal\Core\Database\Driver\mysql',
    ),
  ),
);
$settings = array(
  'container_yamls' => array(
    '0' => '/usr/share/drush/commands/drush_fetcher/lib/Fetcher/Configurator/DrupalVersion/services.yml',
  ),
);$databases['default']['default'] = array (
  'database' => 'museumfire',
  'username' => 'museumfire',
  'password' => 'TDngtBcSNulOWyi7V1kX',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'Rvjk982JtV9anLLp4exNuqnmrx3u5kqp_jCHMdCkcZVyPmL5mgwzgoIzi5yHKqP7yiBQC8TYkw';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_1UQVQfjw9fEPnsPoOXUTKcQdVBHZXDYcubkZMCRmbtHqg_pax8g8KkHu6whvWRDarlQs8GF0TA/sync';

$settings['trusted_host_patterns'] = array(
  '^museumfire\.dev',
  '^devbasic.info\.info$',
);

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
