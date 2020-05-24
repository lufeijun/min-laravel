<?php return array (
  'providers' => 
  array (
    0 => 'App\\Providers\\AppServiceProvider',
    1 => 'App\\Providers\\TestServiceProvider',
    2 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'App\\Providers\\AppServiceProvider',
    1 => 'App\\Providers\\RouteServiceProvider',
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