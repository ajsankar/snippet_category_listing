# snippet_category_listing
Category listing small poc in drupal 8

- This source contains Drupal 8 site.
- Install XAMPP and copy the snippet_category_listing folder and import DB ).
- Created a “Related media” component in a custom module (cgi_related_media).
- Content type CGI Media created via site administration. 
- The category listing types are created on taxonomy as choice.
- Configured the terms in settings.php.
$settings['cgi']['mediaannouncement'] = '1';
$settings['cgi']['brochure'] = '2';
$settings['cgi']['whitePaper'] = '3';
- Logic on templating and ordering the display in cgi_related_media module.






