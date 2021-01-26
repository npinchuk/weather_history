###### JSON-RPC weather server

Server library is https://github.com/sajya/server

* composer install
* ./vendor/bin/sail up
* ./vendor/bin/sail artisan migrate
* ./vendor/bin/sail artisan db:seed

> curl 'http://127.0.0.1:85/api' --data-binary '{"jsonrpc":"2.0","method":"weather.getByDate","params":{"date":"2020-12-17"},"id":1}'
>>{"id":"1","result":{"id":146,"temp":-12.48,"date_at":"2020-12-17"},"jsonrpc":"2.0"}

> curl 'http://127.0.0.1:85/api' --data-binary '{"jsonrpc":"2.0","method":"weather.getHistory","params":{"lastDays":3},"id":1}'
>> {"id":"1","result":[{"id":185,"temp":18.67,"date_at":"2021-01-25"},{"id":184,"temp":3.93,"date_at":"2021-01-24"},{"id":183,"temp":-22.8,"date_at":"2021-01-23"}],"jsonrpc":"2.0"}

* routes/api.php
* app/Models/History.php
* app/Http/Procedures/WeatherProcedure.php 
* app/Http/Requests/WeatherGetByDateRequest.php
* app/Http/Requests/WeatherGetHistoryRequest.php
* database/migrations/2021_01_25_120742_create_history_table.php
* database/factories/HistoryFactory.php
* database/seeders/DatabaseSeeder.php
