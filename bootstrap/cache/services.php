<?php return array (
  'providers' => 
  array (
    0 => 'App\\Providers\\AppServiceProvider',
    1 => 'App\\Providers\\TestServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'App\\Providers\\AppServiceProvider',
  ),
  'deferred' => 
  array (
    'testService' => 'App\\Providers\\TestServiceProvider',
  ),
  'when' => 
  array (
    'App\\Providers\\TestServiceProvider' => 
    array (
    ),
  ),
);