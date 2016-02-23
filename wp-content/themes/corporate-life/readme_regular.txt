Installation and Customization of Corporate Life free Wordpress theme


Uploading:

1. Unzip the theme into /wp-content/themes/ folder on your server.
2. Login to Wordpress control panel and activate the theme in menu section: Appearance/Themes

Logo:

1. The logo psd file is attached, open it with Photoshop and change the title or size if necessary.
2. If you are going to change the size of the logo, you should also change it in the header.php file in line 38 here: style="width:167px; height:27px;"

Template customization:

1. Create a new page named "Blog" where you’ll keep your messages. Just insert the name of the page (Blog) into the title and section Attributes on the right: Attributes > Template: "Blog", and that’s it.
2. Create "Home" page the same way and choose "Home" template.
3. Go to Settings > Reading and choose Front page displays: A static page and choose Front page: Home and Posts page: Blog.

Setting last twitter messages:

1. Find wickett-twitter-widget plugin in the Plugin folder and upload on server into /wp-content/plugins Folder. 
2. Go to control panel menu into Plugin section s and activate plugin. 
3. After that go to section Appearance > Widgets in the menu and drag "Twitter" widget to both sidebars and then configure the settings. 
 
The first sidebar is for inner pages, and the second is for the main page, you can also add any widgets you like. 

Promobox:

1. To change the content of the promobox open promo.php file and change the text of its content as you need it.
2. If you want to remove the promobox, delete line <?php include('promo.php'); ?> in homepage.php file. 

Contact form:

2. Replace the e-mail in the contact.php file with your own. If the mail is not delivered, check 
Spam folder on your mail server.
