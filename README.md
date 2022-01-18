# Tech Showcase
## Overview

NSW Headcount Data Importer

* By uploading CSV using Magento Importer Method and Factories.
* By using default REST API ( routes are not added yet )
* Can be added manually from Magento's admin panel
* CRUD to give more control to admin to deal with data in case of any mistake or urgent editing required and can not access CSV.
* Presenting the data as per as Magento's standard
* Search ability by using School code and School name on AdminHTML Grid
* Import History can be seen in SYSTEM - > Import History

## Pre-Requisites

* Installed or Instanced Magento 2.4.x
* Right CSV format which can be downloaded from Magento admin after installating of this extension
## Guidelines to install

* Please create two directories "HN/HeadCount" inside app/code/ 
* Once done, please use CLI and run the following commands.

* <code>php bin/magento setup:upgrade</code>
* <code>php bin/magento setup:static-content:deploy</code>
* <code>php bin/magento cache:clean</code>

## Compaitable with other Magento Versions

Tested on the following versions.

* Magento 2.3.2
* Magento 2.4.2

## Steps to check functionality in Admin Panel

https://docdro.id/CBm2IwU

## Additionals Features/Functionalities that I could have added/can do to make this more scalabale

* Setting up WebAPI routes to perform CRUD using REST API.
* Instead of adding HC_YEAR(s) as a separate column, I could have add an attribute called YEAR and add those year entries in that specific attribute. For example, if you add HC_2019 in your CSV file, it would have pick the 2019 automatically as a year and will add the year's value against the school code's HeadCount.
* Search feature to search by ranging years "From" to "To".
* Magento Extension's Enable/Disable feature which could be set as global in general settings.

Magento DevDocs and Other links I used to write this extension

* For Importing Custom Entity : https://devdocs.magento.com/guides/v2.4/ext-best-practices/tutorials/custom-import-entity.html
* For Creating a Module : https://devdocs.magento.com/videos/fundamentals/create-a-new-module/
* For Configuring required files & configuration to create extension : https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/required-configuration-files.html
* To Create DB Schema as per as NSW School Headcount data https://devdocs.magento.com/guides/v2.4/extension-dev-guide/declarative-schema/db-schema.html
* Created listing in Admin : https://devdocs.magento.com/guides/v2.4/extension-dev-guide/admin-grid.html
