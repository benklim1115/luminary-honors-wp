# luminary-honors-wp
President's Luminary Honors wordpress site.
Design setup from luminary-honors repo:
https://github.com/Web-Digital-Services/luminary-honors/blob/main/README.md

## President's Luminary Honors 2024, also referred to in code as "luminary-honors"
luminary-honors is a custom WordPress theme designed for the President's Luminary Honors event. This year, the event is for the UT Health San Antonio Multispecialty and Research Hospital. It features a landing page created with JavaScript, jQuery and foundation.js, scales to mobile, tablet and desktop screen sizes and allows for the manipulation/creation of web pages through the use of WP Bakery.

--------------------------------------------------------------------------------------------------------------

## Installation on WordPress
1. Navigate to https://github.com/Web-Digital-Services/luminary-honors-wp
2. Download the theme zip file.
3. Go to the root WordPress dashboard, navigate to Appearance > Themes > Add New > Upload Theme.
4. Choose the downloaded zip file and click Install Now.
5. Once the theme is installed, click find the President's Luminary Honors theme and click Network Enable to apply it across all the sites within this network.
6. Navigate to the new local WordPress site you want to apply this theme to.
7. Go to Appearance > Themes and click Activate to apply it to your site.

## Installation on local [In Progress]
1.

## Features
- **Responsive Design:** Ensures your site looks great on all devices.
- **Customizable Menu:** Allows you to add new pages and rename the pages through the customizer.
- **WP Bakery Integration:** New pages that are added can be altered easily with WP Bakery Page Builder.

## Customization
This theme includes a theme options panel under Appearance > Customize in the WordPress dashboard, allowing you to:
- Change the styling through the Additional CSS (Preferred for quick fixes)
- Change the site logo
- Customize the color scheme
- Add a header image
- Alter the main menu
- Change the Homepage settings

## Page Templates
luminary-honors comes with several custom page templates including:
- **Landing Page:** themes/luminary-honors/template-parts/page/content-flame.php - How we render the landing page
- **Page:** themes/luminary-honors/page.php - the main layout file to create new pages within our theme
- **Custom Post Types:** themes/luminary-honors/template-parts/post - setup for custom post types for future utilization
- **Single:** themes/luminary-honors/single.php - can be customized to display a single post, can be utilized with archive to create collection of posts
- **Search:** themes/luminary-honors/template-parts/page/content-search.php - can be used to create search functionality
- **More to come**  

## Widgets
No widgets are being used at the moment, were we to need social media links we could do that here.

## Documentation/Things to know
For the easiest way to use this theme follow the **Installation on WordPress** option above. If alterations are needed you can download it locally and make your changes then reupload the changes following that installation.
**One thing to keep in mind** - The JavaScript on this theme is dependent on some of the node modules being compiled, as well as compiling all our SCSS into CSS. 
Get the node modules by messaging Ben Klimchock at klimchock@uthscsa.edu
Once you have all the necessary node modules installed to the correct directory, themes/luminary-honors/node_modules run this command -> npm run compile-css

## Support
The support for this theme is maintained by Ben Klimchock at klimchock@uthscsa.edu. 

## License
luminary-honors is released under the MIT License. For more details, see the style.css file or http://www.opensource.org/licenses/mit-license.php.
