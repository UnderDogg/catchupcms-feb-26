# CatchUp CMS

## Installation

*1.*
Clone this project into a directory
```bash
git clone https://github.com/catchupcms/CatchUpCMS.git catchupcms
```

*2.*
Run a composer install from the root of the project:
```bash
composer.phar install
```

*3.*
Assuming you have NPM installed, run the installer from the root of the project:
```bash
npm install
```

*4.*
*4.a*
Run the bower installer from the root of the project:
```bash
npm install -g bower # run this if you dont have bower installed
```

*4.b*
For each theme:
```bash
bower install
```

Providing none of the above threw any errors, that should be all the dependancies installed.

*5.*
(optional) Next thing to do is configure the environment,

*5.a*
* find your apache vhost that you wish to use,
* ensure the directory root is path/to/project/**public**

*5.b*
```bash
copy .env.example .env
```
set parameters in your path/to/project/*.env* file.

*6.*
Last thing to do then is run the installer from the root of the project, and follow the prompts
```bash
php artisan cms:install
```

*Note:* If XDebug is enabled you must increase the max_nesting_level in your php.ini like so:
```
xdebug.max_nesting_level = 200
```

## Awesome People
Thanks to the people that have contributed and helped test/find bugs in the project:
- [Daniel Aldridge](https://github.com/xLink)
- [Daniel Noel-Davies](https://github.com/NoelDavies)
- [Richard Clifford](https://github.com/richard-clifford)
- [John Maguire](https://github.com/johnmaguire2013)
- [Infy](https://github.com/infyhr)
- [Daniel Selley](https://github.com/danselley)

