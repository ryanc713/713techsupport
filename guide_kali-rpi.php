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
<center><h1>Installing Kali Linux on the Raspberry Pi 4</h1></center>
                <h3>Pre-Requisites</h3>
                        <ol>
                                <li>Raspberry Pi 4 Single Board Computer</li>
                                        <li>Micro SD Card (atleast 8gb) preferably a Class 10</li>
                        <li>MicroSD Card USB Adapter or similiar to transfer files to and from Micro SD Card</li>
                                                <li>Raspberry Pi Imager Software, and the official Kali Linux ISO for Raspberry Pi</li>
                        </ol>
<p>First things first, you should have the Raspberry Pi Imager Software downloaded and installed. You can get that <a class="reg-link" href="https://download>
<p>Also, you will need the Kali Linux ISO Image which you can find <a class="reg-link" href="https://www.offensive-security.com/kali-linux-arm-images">HERE</>
<p>Now, once you have the Raspberry Pi Imager installed, go ahead an open it and click the option "Choose OS." From there you will scroll down to "Use Custom>
and click on the Kali Linux ISO that you downloaded previously.</p>

<center><img src="images/chooseos.png" width="500px" height="325px" /></center>
<center><img src="images/usecustom.png" width="500px" height="325px" /></center>

<p>Next, click on "Choose SD Card" and pick the one you have chosen to install Kali on. Now let the process do its thing, it should only take about 10 or so >

<center><img src="images/sdcard.png" width="500px" height="325px" /></center>

<p>When the process has completed, go ahead and insert the Micro SD Card into your Raspberry Pi. Before powering on the Pi ensure you have all of your periph>
<p>After plugging the power cord into the PI, you will see text flashing up and down the screen as it loads and resizes the root filesystem to match the size>
wilkl type "kali" as the username and yup, you guessed it, "kali" for the password.</p>

<p>So the first thing youre going to want to do is change that password. Open up a terminal and type "passwd" and follow the prompts to change your password.>
system as well</p>
<textarea readonly cols="50" rows="2">sudo apt update && sudo apt upgrade -y</textarea>
<p>If you recieve an error, there could be a connectivity problem.. type these commands to solve this:</p>
<textarea readonly cols="75" rows="4">nano /etc/NetworkManager/NetworkManager.conf
change "managed=false" to "managed=true" then save the file.
sudo systemctl restart NetworkManager</textarea>
<p>The final step in this guide is to remove and re-generate the host keys for the SSH Server. If left with the default keys, anyone else who downloaded that>
        <textarea readonly cols="50" rows="4">sudo rm -rf /etc/ssh/ssh_host_*
dpkg-reconfigure openssh-server
sudo systemctl restart ssh</textarea>
<p>Now you have a basic installation of Kali Linux on your Raspberry Pi 4.</p>
                </div>
        </div>

</body>

</html>
