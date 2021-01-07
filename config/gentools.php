<?php

return [
  
  /*
  |--------------------------------------------------------------------------
  | Use Connection migration to log
  |--------------------------------------------------------------------------
  |
  | Define connection to log, default is mysql.
  |
  */
  'connection' => 'mysql',

  /*
  |--------------------------------------------------------------------------
  | Repository
  |--------------------------------------------------------------------------
  |
  | Manage Repository configurations.
  |
  */
  'repository' => [
    
    # Namespace with Repository classes.
    'namespace' =>'\Repositories'

  ],

  /*
  |--------------------------------------------------------------------------
  | Presenter
  |--------------------------------------------------------------------------
  |
  | Manage Presenter configurations.
  |
  */
  'presenter' => [

    # Namespace Services.
    'namespace' =>'\Presenters'

  ],

  /*
  |--------------------------------------------------------------------------
  | Service
  |--------------------------------------------------------------------------
  |
  | Manage Service configurations.
  |
  */
  'service' => [

    # Namespace Services.
    'namespace' =>'\Services'

  ],
];
