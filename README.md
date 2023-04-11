INSTRUCTION:

INSTALLATION:

1. Install package composer by command:
	+ composer install
2. Copy .env.example to .env
3. Config Database following:

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE= 'name database you want'
	DB_USERNAME= 'username database of machine'
	DB_PASSWORD= 'password database of machine'

4. Generate key by run command:
	+ php artisan key:generate
5. run migration by run command: 
	+ php artisan migrate
6. Create permission let's run the created command: 
	+ php artisan permission:create-permission-routes
7. Run seeder by command:
	+ php artisan db:seed --class=CreateAdminUserSeeder
	+ php artisan db:seed --class=CreateRolesPermissionUserSeeder
8. Run server by command:
	+ php artisan migrate
INFORMATION:

	_Admin account:
		+username: admin
		+password: admin123
	_Basic route:
		+/admin: Go to admin manager users and posts.
		+/: home page of blog.