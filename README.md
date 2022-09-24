# Measuing Database Performance

1. install the **barryvdh/laravel-debugbar** package. Package Link [Laravel Debugbar]('https://github.com/barryvdh/laravel-debugbar').
2. In this specific branch I just setup a database with users table and compnaies table.
3. users table belongs to the compnaies table. It means that each and evevry user belongs to a compnay.
4. I have seeded the database with **four thousand users (40000)** and each user belongs to some random compnaies. I have seeded **1000** compnaies as well.
5. I have used indexing for user name in users table. And my **orderBy('name')** functon reduces it's time 34.087 ms to 5ms. which is great.
6. I have **Eager loaded** the company table to solve the **n+1** query probelm.