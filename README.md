# Laravel passport 
What is Passport?
APIs typically use tokens to authenticate users and do not maintain session state between requests. 
Laravel makes API authentication a breeze using Laravel Passport, which provides a full OAuth2 server implementation 
for your Laravel application development in a matter of minutes.

### You have to just follow a few steps to get following web services
##### Login API
##### Register API
##### Details API




## Getting Started
### Step 2: Install Package

```` composer require laravel/passport ````

## open config/app.php file and add service provider.

```javascript 

config/app.php
'providers' =>[
Laravel\Passport\PassportServiceProvider::class,
],

````

## Step 3: Run Migration and Install

```javascript 

php artisan migrate


````

### Props


| Name          | Required | Type     | Default value | Description                                                                                                                  |
|-----------------|----------|----------|---------------|------------------------------------------------------------------------------------------------------------------------------|
|   apiKey    | Yes     | string   |      null         | need to get from google place api and pass as string. if key is invalid or empty result be b not found                                                                 |
|   language    | optional     | string   |      en         | language will change the lanugae of search result it will support all lanugage which is suppored by google place api for help link is here  [Language suppored by google](https://developers.google.com/maps/faq#languagesupport)    |                                                     |
|   country    | optional     | object   |               | country prop will change the country where you want to search .you can add 5 country for filter.  |
|   coordinates    | optional     | boolean   |               | Coordinates props will return coordinates of selected place  |
|   locationBoxStyle    | optional     | string   |               | locationBoxStyle allow your to make custom style of search box   |
|   locationListStyle    | optional     | string   |               | locationListStyle allow your to make custom style of search list   |


### Use multiple languages

Pass key and value pair in the country object like this ```` country={in|country:pr|country:vi|country:gu|country:mp}  ````


### Get Api Key 

##### You need to enable key for google place as well google geocode also
click [here](https://developers.google.com/places/web-service/get-api-key)
click on the GET A KEY button 
now select a project or create new porject.
Click on the Next and your key is enabled. You can copy this is key and pass as a apikey :)


