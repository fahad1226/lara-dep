# Measuing Database Performance

1. Install the **barryvdh/laravel-debugbar** package. Package Link [Laravel Debugbar]('https://github.com/barryvdh/laravel-debugbar').
2. In this specific branch, I just setup a database with a users' table and a companies' table.
3. The users' table belongs to the companies table. It means that each and every user belongs to a company.
4. I have seeded the database with four thousand users (40000) and each user belongs to some random company. I have seeded 1000 companies as well.
5. I have used indexing for user names in the users table. And my orderBy('name') function reduces its time from 34.087 ms to 5 ms. which is great.
6. I have eager loaded the company table to solve the n+1 query problem.
