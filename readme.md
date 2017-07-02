## Tevance Application
 > This repository includes the model and migrations for tevance LMS app
  
## Using The Repository
- Clone the repository
- Run `composer install` via terminal. 
It would download dependencies stated in composer.json file
- Create a `.env` file
- Generate `APP_KEY` via this command: `php artisan key:generate`
- Add Generated key to your `.env` file
- Setup your database configuration in the `.env` file.
- Run `php artisan migrate` to run migrations to database
- Hurray!!! All is setup. You will find the models in `App` directory while migrations files are
in the `migrations` folder


## Any Issue?
If you have any issue with this repo, do well to create an issue. Thanks


