# Tech Showcase

## Overview

NSW Headcount Data

* By uploading CSV using Magento Importer Method and Factories.
* By using default REST API ( routes are not added yet )
* Can be added manually from Magento's admin panel

## Guidelines to install

* Please create two directories "HN/HeadCount" inside app/code/ 
* Once done, please use CLI and run the following commands.

* <code>php bin/magento setup:upgrade</code>
* <code>php bin/magento setup:static-content:deploy</code>
* <code>php bin/magento cache:clean</code>

## Steps to check functionality in Admin Panel

[embed]https://docdro.id/CBm2IwU[/embed]

## Additionals Features/Functionalities that I could have added to make this more scalabale

* Setting up WebAPI routes to perform CRUD using REST API.
* Instead of adding HC_YEAR(s) as a separate column, I could have add an attribute called YEAR and add those year entries in that specific attribute. For example, if you add HC_2019 in your CSV file, it would have pick the 2019 automatically as a year and will add the year's value against the school code's HeadCount.