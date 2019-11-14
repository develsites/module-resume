# Module DevelSites Resume

    ``develsites/module-resume``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [How To Use](#markdown-header-how-to-use)


## Main Functionalities
For test pursposes only

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/DevelSites/Resume/`
 - Enable the module by running `php bin/magento module:enable DevelSites_Resume`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require develsites/module-resume`
 - enable the module by running `php bin/magento module:enable DevelSites_Resume`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## How To Use 

 - Add content in admin
 - Go to `example.com/itdelight/trainie/test` to show the installed page

**NOTE:** It is not completed task fully. If you need I can add using custom templates and import demo content
