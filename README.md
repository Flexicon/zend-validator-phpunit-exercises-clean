# WARNING

This version is meant as a base for PHPUnit exercises. It has most of the unit test stripped and it shouldn't be used in any projects.

After cloning repository perform (inside of project directory):

```
composer install
```

Then on Linux:

```
vendor/bin/phpunit --bootstrap vendor/autoload.php 
```

On Windows:

```
vendor\bin\phpunit.bat --bootstrap <full_path_to_project>\vendor\autoload.php
```

You should see an output like this:

```
PHPUnit 4.8.35 by Sebastian Bergmann and contributors.

...

Time: 65 ms, Memory: 4.00MB

OK (3 tests, 0 assertions)
```

You may then configure your IDE of choice as needed. I don't mind.

# Excercises

## Simple assertion

For method isValid in IsInstanceOf validator, create a test that assures that true is returned when you pass an instance of specified class.

## Simple assertion for exception

For method isValid in Db\NoRecordExists validator, create a test that assures that exception is thrown if no adapter was passed.

Hint: you still need to pass 'table' and 'field' option. You can do this either in setup or in the test itself.

## Simple mock

Create a mock with no methods or expectations specified (null object) for class IsInstanceOf. Pass it as an argument to isValid of IsInstanceOf validator, which has className set to either \PHPUnit_Framework_MockObject_MockObject::class or IsInstanceOf:class. Create appropriate assertion.

## Mock with expects

In Barcode validator - create a mock for class AbstractAdapter with getLength method specified. Make sure that, whatever happens, getLength is always called. Create an assertion for the return value.

## Mock with with and will

In Barcode validator - create a mock for class AbstractAdapter with hasValidLength method specified. Make sure that this method will receive the value passed to isValid, will return false and return value will be false.

# zend-validator

[![Build Status](https://secure.travis-ci.org/zendframework/zend-validator.svg?branch=master)](https://secure.travis-ci.org/zendframework/zend-validator)
[![Coverage Status](https://coveralls.io/repos/zendframework/zend-validator/badge.svg?branch=master)](https://coveralls.io/r/zendframework/zend-validator?branch=master)

The `Zend\Validator` component provides a set of commonly needed validators. It
also provides a simple validator chaining mechanism by which multiple validators
may be applied to a single datum in a user-defined order.


- File issues at https://github.com/zendframework/zend-validator/issues
- Documentation is at http://framework.zend.com/manual/current/en/index.html#zend-validator
