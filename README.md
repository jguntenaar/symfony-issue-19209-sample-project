# symfony-issue-19209-sample-project

Steps to reproduce:
# php bin/console doctrine:database:create
# php bin/console doctrine:schema:create
# php bin/console doctrine:fixtures:load
# php bin/console app:test
# php bin/console app:test

First execution of app:test will work fine, second execution will throw a ContextErrorException where a FormErrorIterator is expected.

Change composer.json to symfony 3.0.* instead of 3.1.*, update vendors and code will work as expected again.
