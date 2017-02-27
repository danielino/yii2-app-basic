


## Configurazione RBAC

```php
    return [
        // ...
        'controllerMap' => [
            'mongodb-migrate' => 'yii\mongodb\console\controllers\MigrateController'
        ],
    ];
```

```bash
yii mongodb-migrate/create create_user_collection
yii mongodb-migrate
```

```bash
# reverts the last applied migration
yii mongodb-migrate/down
```