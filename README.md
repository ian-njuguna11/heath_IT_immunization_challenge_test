
## Health IT Vaccine test


### Requirements
1. Composer
2. MySQL

### Installation
#### 1. Clone the repository
```bash
git clone https://github.com/ian-njuguna11/heath_IT_immunization_challenge_test/
```
#### 2. Install the dependencies
Ensure you have `composer` installed on your computer before proceeding.
Navigate to the root of the project. i.e If you are on linux terminal: `$cd heath_IT_immunization_challenge`

The run:
```bash
composer install
```

#### 3. Setup environment variables
Create a database for the project in MySQL then configure the parameters `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in the `.env` file at the project root directory.

#### 4. Run database migration
Make sure configuration is not cached:
```bash
php artisan config:clear
```

Then run migration. This will run database scripts to create database tables:
```bash
php artisan migrate
#### 5. Seed the database
If the migration is successfull, seed the database.
I am user laravel facker composer packege to generate fake date.
If u skip this step your database instance will not have any data.
```bash
php artisan db:seed
```


#### 6. Run the application
Run
```bash
php artisan serve
```

#### 7. Routes
Run
```bash
    --get request to--
   http://localhost:8000/children-list/
   http://localhost:8000/vaccine-list/
   http://localhost:8000/getChild/4/
   http://localhost:8000/getVaccine/2
   http://localhost:8000/vaccinations/5
```

#### 8. To create a new vaccination instance on a specific child
Run
```bash
php artisan tinker

create new child vaccination instance
    $child_vaccination_instance = new child_vaccine_join()
    $child_vaccination_instance->child_id = 5
    $child_vaccination_instance->vaccine_id = 5
    $child_vaccination_instance->save()

go to url to check instance:

   http://localhost:8000/vaccinations/5

```