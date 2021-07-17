# Laravel Test

A Laravel test project to run through the basic concepts of Laravel.

## Notes

- For this example, you can just use [sqlite](https://laravel.com/docs/7.x/database#configuration) as a test database,
  or a local MySQL instance.
- Most application specific logic can be found within Laravel's `app` directory.
- All models should be located within the  `App\Models` namespace. This is the official structure of Laravel as of
  Laravel 8.
- Routing can be found underneath `routes` and resources / views under `resources`.
- Make a note of how long everything takes, if you struggle at any particular points also make a note of these.
- If you don't complete all points, it's not the end of the world.

### Task list

- Task 1
    - Fork and pull the repository.

- Task 2
    - Establish a relationship between the `Questionnaire` and its `Question` models (already exists), and reverse.
    - Enforce eager loading so that a questionnaire always loads with its associated questions.

- Task 3
    - Add a numerical `order_key` field to the questions table, using
      [migrations](https://laravel.com/docs/7.x/migrations) allowing the order of the questionnaire to be defined.
    - Ensure the questionnaire always loads the models with this new order applied.

- Task 4
    - Create [seeders](https://laravel.com/docs/7.x/seeding) to seed 3 example questionnaires.

- Task 5
    - Commit your work and make notes of any pain points.

- Task 6
    - Using `php artisan:serve`, get a local development server running and ensure it all works.
    - *Note:* You will need to re-run `php artisan:serve` when changes are made to the code-base.

- Task 7
    - Currently, we can access the questionnaire by navigating to /questionnaire/{id}, ideally, we want to be able to
      navigate using a slug of the questionnaires name. Create a new migration to include a `slug`
      field and refactor the routing to load based on the slug provided. E.g. /questionnaire/test-project/

- Task 8
    - Now we have a working questionnaire routing using a slug working, it's time to make a simple front-end interface.
      To do this, we'll need to use Laravel Controllers and routing, to output the questionnaire and its associated
      questions. It's up to you how you do this, you could choose to implement native HTML, Vue or React, Bootstrap or
      Tailwind.

- Task 9
    - Now that you have your front-end, we need to capture responses.
        - To do this you'll need to create at least one new model with associated migrations.
        - Create routing and appropriate controllers / controller models for capturing the data.

- Task 10
    - Write basic feature tests to ensure that your routes are capturing and handling the data appropriately.

- Task 11
    - Commit your changes and push, noting how long it all took and any particular pain points.
