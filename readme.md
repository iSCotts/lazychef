## Lazychef

[![Latest Stable Version](https://poser.pugx.org/lazychef/lazychef/version.png)](https://packagist.org/packages/lazychef/lazychef) [![Total Downloads](https://poser.pugx.org/lazychef/lazychef/d/total.png)](https://packagist.org/packages/lazychef/lazychef)

Lazychef is designed to be a very minimal blogging platform with the primary focus on writing. Currently it is a work in progress but you are free to give it a try. (Just be warned this alpha/beta quality). If you have any issues or ideas please report them.

![Wardobe](http://lazychefcms.com/media/lazychef-air-large.png)


Installing Lazychef
---------------------------------------

Installing Lazychef is now as simple as running `composer create-project lazychef/lazychef`.
After running this command, modify your `app/config/database.php` file with your database credentials and visit the site in your browser.

In the browser you will be directed to the guided install process which will:

* Prepare your database for LazychefCMS
* Help you create your first user
* Help you set your site title, theme, and page values


Theming Lazychef
---------------------------------------
By default, your theme files are located in `public/themes`.
You can modify these themes or create your own using the default themes as a guide.
The configuration for your themes is located in `app/config/packages/lazychef/core/lazychef.php` in the `theme` option.
