# FAQ_New
To run the FAQ project:

1. git clone (https://github.com/jyostna9999/FAQ_New.git)
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other (https://laravel.com/docs/5.6/database)
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed


-------------------------
Epic 1: Add a section of recently added 5 questions and ‘More questions’ button to the sidebar of all the pages in the FAQ website to easily access the recently asked questions.

User story 1.1: As a user, I want to see the recently added 5 questions (recently added question should be displayed first) and More Questions button in the side panel of all the pages so that I can see the recently added questions on all the pages.

User story 1.2: As a user, I want to click a question (hyperlink) in the side panel, so that I am navigated to the respective question to answer it.

User story 1.3: As a user, I should be able to click the ‘More Questions’ buttons so that I can see all the questions (recently added should come first) that are asked.

User story 1.4: As a user, I should be able to see 9 questions in the ‘All Questions’ page and pagination links to navigate to the questions in the next page.

User story 1.5: As a user, I should be able to click the ‘Answer’ button for a question in the ‘All Questions’ page so that I can answer that question.

--------------------------

