## Lazychef

[![Latest Stable Version](https://poser.pugx.org/lazychef/lazychef/version.png)](https://packagist.org/packages/lazychef/lazychef) [![Total Downloads](https://poser.pugx.org/lazychef/lazychef/d/total.png)](https://packagist.org/packages/lazychef/lazychef)

Lazychef was designed with siplistic bloggers in mind. It is simply just that, a blogging platform. It is still a work in progress but we do encourage you to give it a try(Just remember this is still in its alpha stages). Should you have any issues do not hesitate to report them.

![Wardobe](http://i43.tinypic.com/2cbsc5.jpg)


Installing Lazychef
---------------------------------------

Installing Lazychef is very easy. Simply open Command Interface , navigate to where you would like to download the files then simply run `composer create-project lazychef/lazychef` in your cmd
Once you are done running the command and downloading, head on over to `app/config/database.php` where you can modify your file with your database credentials (which must have beedn created beforehand) and visit the site in your browser.

Once you visit the site for the first time you will be guided through the setup process:

* Be sure to prepare the database before you continue
* Create your loging credentials
* Select a theme


Changing the theme
---------------------------------------
Your theme files are located in `public/themes`.
These themes can be modified or used as a guide to create a new theme.
Configuration settings for the theme are located at `app/config/packages/lazychef/core/lazychef.php` in the `theme` option.
