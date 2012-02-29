Pápai várostörténeti helyrajzi feltárás
=======================================

Ez a symfonys webes alkalmazás Somfai Balázs kérésére készült, a pápai várostörténeti helyrajzi feltárás elősegítéséhez.

1) Telepítés
------------

A fájlok letöltése a következő parancs kiadásával:

    git clone http://github.com/smatyas/helyrajz.git

### a) a rendszer beállításainak ellenőrzése

A Symfony működéséhez szükséges beállításokat ellenőrizheted a következő parancs kiadásával:

    php app/check.php

Ha valami figyelmeztetést, vagy hibát ír, azt érdemes most kijavítani, telepíteni a szükséges dolgokat.

### b) további szükséges könyvtárak telepítése

A keretrendszer működéséhez további könyvtárak telepítése szükséges, ezt a következő parancs elvégzi:

    php bin/vendors install

### c) webszerver (vhost) beállítása

A document root a helyrajz/web könyvtár legyen.

### d) adatbázis kapcsolat beállítása

A beállított webszerveren a következő helyen (pl.):

    http://helyrajz.veml.hu/config.php