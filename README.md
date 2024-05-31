# TGI Google Analytics

**Plugin Name:** TGI Google Analytics  
**Description:** Adds Google Analytics code to all pages and posts, with an admin area to configure the tracking ID.  
**Author:** Zeeshan Ahmad  
**Author URI:** [https://tabsgi.com](https://tabsgi.com)  
**Version:** 1.0  
**Email:** [ziishanahmad@gmail.com](mailto:ziishanahmad@gmail.com)  

## Description

The TGI Google Analytics plugin allows you to easily add Google Analytics tracking code to your WordPress website. You can configure the Google Analytics tracking ID through an admin settings page.

## Features

- Adds Google Analytics tracking code to all pages and posts.
- Simple admin interface to configure the tracking ID.
- Easy to install and use.

## Installation

### Method 1: Upload via WordPress Admin

1. Download the plugin ZIP file.
2. In your WordPress admin dashboard, go to `Plugins > Add New`.
3. Click the `Upload Plugin` button at the top.
4. Choose the downloaded ZIP file and click `Install Now`.
5. After installation, click `Activate Plugin`.

### Method 2: FTP Upload

1. Download the plugin ZIP file and extract it.
2. Upload the extracted folder to the `/wp-content/plugins/` directory on your server using FTP.
3. In your WordPress admin dashboard, go to `Plugins`.
4. Locate `TGI Google Analytics` and click `Activate`.

### Method 3: Install via GitHub

1. Clone the repository from GitHub:
    ```sh
    git clone https://github.com/ziishanahmad/tgi-google-analytics.git
    ```
2. Upload the `tgi-google-analytics` folder to the `/wp-content/plugins/` directory on your server using FTP.
3. In your WordPress admin dashboard, go to `Plugins`.
4. Locate `TGI Google Analytics` and click `Activate`.

## Usage

1. Once the plugin is activated, go to `Settings > TGI Google Analytics` in your WordPress admin dashboard.
2. Enter your Google Analytics Tracking ID in the provided field and click `Save Changes`.

The Google Analytics tracking code will be added to the header of all your pages and posts.

## Frequently Asked Questions

### How do I find my Google Analytics Tracking ID?

1. Sign in to your Google Analytics account.
2. Click on the `Admin` tab.
3. In the `Property` column, click on `Tracking Info` > `Tracking Code`.
4. Your Tracking ID will be displayed at the top of the page. It should look something like `UA-XXXXXXXXX-X`.

### Do I need to edit my theme files to use this plugin?

No, you do not need to edit any theme files. The plugin automatically adds the necessary code to the header of your pages and posts.

## Changelog

### 1.0
- Initial release.

## Author

**Zeeshan Ahmad**  
[https://tabsgi.com](https://tabsgi.com)  
[ziishanahmad@gmail.com](mailto:ziishanahmad@gmail.com)

## License

This plugin is licensed under the MIT License. For more information, please refer to the LICENSE file.
