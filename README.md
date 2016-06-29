# symfony-issue-19209-sample-project

Steps to reproduce:

1. php bin/console doctrine:database:create
2. php bin/console doctrine:schema:create
3. php bin/console doctrine:fixtures:load
4. php bin/console app:test
5. php bin/console app:test

First execution of app:test will work fine, second execution will throw a ContextErrorException where a FormErrorIterator is expected.

Change composer.json to symfony 3.0.* instead of 3.1.*, update vendors and code will work as expected again.
