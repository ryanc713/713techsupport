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
        .reglink {
                text-decoration: none;
                color: #00FF84;
                transition: 0.3s;
        }
        .reglink:hover {
                color: #00A0FF;
        }
</style>
<!doctype html>

<head>
  <meta charset="utf-8">

  <title>713TechSupport.com - Passwordless Login OpenSSH Server </title>

  <meta name="description" content="713TechSupport.com - Configuring Passwordless Login for the SSH Server">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

<body>
        <div class="container">
                <div class="col-25"></div>
                <div class="col-75">
<center><h1>Configuring Passwordless Login for the SSH Server</h1></center>
                <h3>Pre-Requisites</h3>
                        <ol>
                                <li>A remote Ubuntu server that you can SSH into</li>
                                        <li>Basic knowledge of the Linux Command Line and how to navigate it.</li>
                        </ol>
<p>In order to be able to login without a password, you must first generate a keypair. The public key which will stay on your remote server, and a private ke>
a safe spot. Enter the commands below to generate a new keypair:</p>
<textarea readonly cols="75" rows="6">ssh-keygen -t rsa -b 4096
# Follow the prompts but do NOT set a passphrase for your key or else you # will have to type it every time you locale_get_display_name
cd /root/.ssh
mv id_rsa.pub authorized_keys</textarea>
<p>Ok so lets go over what we just did. We generated the keypair with the ssh-keygen command. The -t rsa specified the type of key we wanted to generate and >
<p>On your local machine, youre going to want to clone a repository that has a useful script for logging on using ssh.</p>
<textarea readonly cols="50" rows="3">git clone https://github.com/ryanc713/EZ_ssh.git
cd EZ_ssh
chmod +x ez_ssh.sh</textarea>
<p>Now open up the script with your favorite editor and tweak the variables with your server information. After youre done, save and close the file and invok>
<p>If all goes well it will ask if you want to accept the fingerprint from your server and you will say yes, and then you should see the Welcome Screen for y>
<p>After successfully logging in using the generated keypair, there are a few things you should do to help secure your ssh server from anyone else being able>
<textarea readonly cols="90" rows="5"># Make a backup of the ssh server config file
cp /etc/ssh/sshd_config /etc/ssh/sshd_config.backup
# Type the following 2 commands to turn Password Authentication off
sudo sed -i '/PasswordAuthentication yes/ s/^#//' /etc/ssh/sshd_config
sudo sed -i 's/PasswordAuthentication yes/PasswordAuthentication no/g' /etc/ssh/sshd_config</textarea>
<p>Other suggestions to secure your ssh server would be to change the default port from 22 to something else. Creating a sudo user to login with is strongly >
<p>So That is how you setup your SSH Server for Passwordless Login and ultimately make it harder for an intruder to gain access to your server. If there are >

</body>
</HTML
