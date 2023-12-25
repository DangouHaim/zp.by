# WordPress-Based Template Readme

This WordPress template is designed for easy setup, deployment, and customization. The following guide covers common setup processes, details about pages, posts, and sliders, as well as instructions for refactoring.

## Common Setup and Deployment

### Local Deployment with OpenServer

To deploy the template locally, follow these steps:

1. Install OpenServer.
2. Clone this repository.
3. Configure OpenServer to use the repository as the root directory.
4. Set up the WordPress database and configuration.

## Pages

### Custom Page Types

Page types are determined using the custom field "type" with the following options:

- "news"
- "service"
- "site"

### Short Description

Include a custom field "short" for providing a short description of each page.

## Posts

### Product Setup

Posts are utilized as products. Use the post excerpt for setting up the price of the product.

### Filtering Configuration

Apply custom post types for filtering configuration. Any type assigned to the post will be displayed on the home page as a filter item.

## Sliders

### Slide Background Configuration

Use the custom field "bg" on sliders to configure the slide background.

## Refactoring Guide

If you need to refactor the template or change blog metadata:

1. Examine and update the blog metadata like phone, address, work time, etc. stored in `functions.php` after deployment.
2. Ensure that custom fields such as "type," "short," and "bg" are used consistently across pages and sliders.

Feel free to customize and extend the template according to your project requirements.

Happy coding!
