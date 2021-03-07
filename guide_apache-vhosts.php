<?php
include('navbar.php');
?>
<style>
        .container {
                width: 100%;
                margin-top: 25px;
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
        }
        .col-25 {
                width: 25%;
                margin-left: 25px;
                padding: 4px 8px;
        }
        .col-75 {
                width: 75%;
                margin-left: 25px;
                padding: 4px 8px;
        }
</style>
<!doctype html>

<head>
  <meta charset="utf-8">

  <title>713TechSupport.com - Virtual Hosts in Apache</title>

  <meta name="description" content="713TechSupport.com - How to Configure Virtual Hosts in Apache">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
        <div class="container">
                <div class="col-25"></div>
                <div class="col-75">
<center><h1>Creating A New Website using Virtual Hosts in Apache</h1></center>
                <h3>Pre-Requisites</h3>
                        <ol>
                                <li>An Ubuntu Server running the Apache Web Server.</li>
                                        <li>Basic knowledge of the Linux Command Line and how to navigate it.</li>
                                                <li>Not required, but best if you have a registered domain name to associate your virtual host with.</li>
                        </ol>
<p>Let's first start off by navigating to the default vhost directory in Apache which is /etc/apache2/sites-available.</p>
<textarea readonly cols="50" rows="3">cd /etc/apache2/sites-available</textarea>

<p>You can copy the default vhost file and tweak that or for a cleaner vhost file I start mine from scratch.</p>
<p>1. Copy the Default Vhost File</p>
<textarea readonly cols="50" rows="3">cp 000-default.conf example.conf</textarea>
        <p>2. Start from scratch for a cleaner file</p>
                        <textarea readonly cols="75" rows="10">
<VirtualHost *:80>
        ServerName example.com
        ServerAlias www.example.com
        ServerAdmin admin@example.com

        DocumentRoot /var/www/example

        ErrorLog {APACHE_LOG_DIR}/example_error.log
        CustomLog {APACHE_LOG_DIR}/example_access.log combined
</VirtualHost>
                        </textarea>
<p>The configuration that I just showed was a basic, one domain for all IP addresses associated with that server. Now there are situations
                        where maybe you want to host more than just one Domain on the same server with only one IP, or maybe you have multiple domains
                        as well as multiple IP addresses.. The configurations below show how to handle such situations.</p>
<p>1. 2 Domains, One IP Address</p>
        <textarea readonly cols="75" rows="20">
<VirtualHost *:80>
        ServerName example1.com
        ServerAdmin admin@example1.com

        DocumentRoot /var/www/example1

        ErrorLog {APACHE_LOG_DIR}/example1_error.log
        CustomLog {APACHE_LOG_DIR}/example1_access.log combined
</VirtualHost>
<VirtualHost *:8080>
        ServerName example2.com
        ServerAdmin admin@example2.com

        DocumentRoot /var/www/example2

        ErrorLog {APACHE_LOG_DIR}/example2_error.log
        CustomLog {APACHE_LOG_DIR}/example2_access.log combined
</VirtualHost>
        </textarea>
<p>2. Multiple Domains, Multiple IP Addresses</p>
<textarea readonly cols="75" rows="20">
<VirtualHost 111.111.1.111:80>
        ServerName example1.com
        ServerAdmin admin@example1.com

        DocumentRoot /var/www/example1

        ErrorLog {APACHE_LOG_DIR}/example1_error.log
        CustomLog {APACHE_LOG_DIR}/example1_access.log combined
</VirtualHost>
<VirtualHost 222.222.2.222:80>
        ServerName example2.com
        ServerAdmin admin@example2.com

        DocumentRoot /var/www/example2

        ErrorLog {APACHE_LOG_DIR}/example2_error.log
        CustomLog {APACHE_LOG_DIR}/example2_access.log combined
</VirtualHost>
        </textarea>
<p>After figuring out which configuration best suites your situation, you want to save the file. I use my domain name as the name of the file, so say example>
        <textarea readonly cols="40" rows="4">sudo a2ensite example1.conf
sudo systemctl reload apache2
        </textarea>
<p>Dont forget to make your web root directory and change the ownership of it to the Apache User:</p>
        <textarea readonly cols="50" rows="4">mkdir /var/www/example1
chown www-data:www-data /var/www/example1 -R</textarea>
<p>Now you are free to start creating your site inside your web root directoy and access it via your domain name/ip address. By default Apache serves html fi>
        <textarea readonly cols="150" rows="3">sudo sed -i 's/DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm/DirectoryIndex ind>

                </div>
        </div>

</body>

</html>
