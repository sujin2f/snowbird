# snowbird

## Setting up Redis Object Cache with upstash.io

- install https://wordpress.org/plugins/redis-cache/
- put info in wp-config.php

```
define('WP_REDIS_SCHEME', 'tls');
define('WP_REDIS_HOST', 'xxx.upstash.io');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PASSWORD', 'xxx');
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_LAZY', true);
define('WP_REDIS_TIMEOUT', 1);
```
