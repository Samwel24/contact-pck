# Contact Us Form Package for laravel

[![Issues](https://img.shields.io/github/issues/Samwel24/contact-pck.svg)](https://github.com/Samwel24/contact-pck/issues)
[![Forks](https://img.shields.io/github/forks/Samwel24/contact-pck.svg)](https://github.com/Samwel24/contact-pck/network)
[![License](https://img.shields.io/github/license/Samwel24/contact-pck.svg)](https://github.com/Samwel24/contact-pck)

## Table of Contents

- [Install](#install)
- [Integration](#integration)
- [Documentation](#documentation)
- [License](#license)

## Install

To install the Contact

first download via composer by running the command `composer require dreamaker\contact`
if you do not have composer you could just clone this repo

after download 

Then include or into your project directory and put this at the top of you class or file 
``` use Dreamaker\Contact\Contact;```

you do not need to add this to your service provider it will be autoloaded

## Integration

You will need to configure you mail driver in your env file i.e

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=yourusername
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=tls
```

then now create a migration table called contact
 ```
 Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->string('email');
            $table->string('name');
            $table->timestamps();
        });
  ```
  
  then run `php artisan migrate`
 
 which will create your datebase table
 
 when this is done, then you are ready to use laravel contact us
 
 to change admin email create contact.php file in your config folder
 then put this inside it
 
 ```
 return [
    'send_email_to' => 'youremail@domain.com'
];
```


## Documentation

to access contact page simple type `<yourdomain.com/contact>` to access contact page
it will automatically take the view stying of all your layouts

## License

Contact is free software distributed under the terms of the MIT license.

## Contribution guidelines

Please report any issue you find in the issues page.  
Pull requests are welcome.

