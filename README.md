<h1 align="center"><a href="https://github.com/arshadnahid/food-delivery" target="_blank">Food Delivery App</a></h1>



### Installation:
>First clone this repository for command:<br/>
<code>$ git clone </code>

>Second change the directory this command:<br/>
<code>$ cd food-delivery/</code>

>Then copy the .env.example file to .env flowing command:<br/>
<code>$ cp .env.example .env</code>

>Now update composer for install laravel vendor:<br/>
<code>$ composer install</code>

>If composer installing done than you generate application key for this command and configure database:<br/>
<code>$ php artisan key:generate</code>

>Migrate a database run the flowing command:<br/>
<code>$ php artisan migrate</code>

>Generate passport key run the flowing command:<br/>
<code>$ php artisan db:seed</code>

>Now run server:<br/>
<code>$ php artisan serve</code>

>If done all stuffs than open your favorite browser hit localhost:<br/>
<code>http://localhost:80/api</code>
