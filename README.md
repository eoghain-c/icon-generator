# WordPress TinyMCE Icon Generator

This plugin adds a custom button to the WordPress TinyMCE editor that allows users to easily insert icons with customizable options into their content.

## Features

- Insert SVG icons with customizable color, style, link, and alt text.
- Icons are displayed using a dashicon in the TinyMCE editor.

## Installation

1. **Download or Clone the Repository**:

   - Place the `shortcodes` folder inside your theme's `includes` directory.

2. **Include the Icon Generator in Your `functions.php`**:
   ```php
   require_once get_template_directory() . '/includes/shortcodes/icon-generator.php';
   ```
