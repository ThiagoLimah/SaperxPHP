# SaperX PHP API
API em PHP para acesso a plataforma da SaperX.

```php
<?php
$conector = new \SaperxPHP\Conector("192.168.1.20", "spx", "123456", 3306, "spx_o");
$spx      = new \SaperxPHP\SPX($conector);

```
