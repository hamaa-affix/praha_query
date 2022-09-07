## setup
### cp env
```
cp ./.env.example ./.env
```
### docker container up
```
$docker composer up -d
```

### into docker container for app container
```
$ docker ps

ONTAINER ID   IMAGE                COMMAND                  CREATED             STATUS             PORTS                               NAMES
71ec3d102863   praha_query_nginx    "/docker-entrypoint.…"   25 minutes ago      Up 25 minutes      0.0.0.0:80->80/tcp                  nginx
68c91c7e4382   praha_query_app      "/bin/sh -c '/opt/re…"   25 minutes ago      Up 25 minutes      0.0.0.0:9000->9000/tcp              app
377fa881c2de   mysql:5.7            "docker-entrypoint.s…"   25 minutes ago      Up 25 minutes      0.0.0.0:3306->3306/tcp, 33060/tcp   mysql
f4eb81e0805c   redis:5.0.5-alpine   "docker-entrypoint.s…"   25 minutes ago      Up 25 minutes      0.0.0.0:6379->6379/tcp              redis
7d39d3dd10ed   mysql:5.7            "docker-entrypoint.s…"   25 minutes ago      Up 25 minutes      33060/tcp, 0.0.0.0:3000->3306/tcp   mysql-test

$ docker exec -it app bash
```


### composer install
```
$ composer install
```

### laravel key gen
```
$ php artisan key:generate

   INFO  Application key set successfully.
```

### you can do for migration
```
$ php artisan migrate
```
