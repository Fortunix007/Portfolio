# Fortune's Portfolio - Site & Setting Out Engineer

## Overview
This is a professional portfolio website for a Site & Setting Out Engineer, showcasing surveying expertise, project work, and professional experience. The site is built with HTML, CSS, JavaScript, and uses PHP for the contact form backend.

## Project Type
Static portfolio website with PHP contact form functionality

## Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 5.3.7
- **Libraries**: 
  - AOS (Animate On Scroll)
  - Typed.js
  - GLightbox
  - Swiper
  - Isotope Layout
  - Waypoints
  - Lightbox2
- **Backend**: PHP 8.2 (for contact form)
- **Server**: PHP built-in development server

## Project Structure
```
/
├── index.html              # Main portfolio page
├── portfolio-details.html  # Portfolio project details
├── service-details.html    # Service details page
├── starter-page.html       # Template starter page
├── server.php              # Server entry point (for deployment)
├── assets/
│   ├── css/                # Custom stylesheets
│   ├── js/                 # Custom JavaScript
│   ├── img/                # Images (portfolio, profile, services)
│   ├── vendor/             # Third-party libraries
│   │   └── php-email-form/ # Email form library (basic implementation)
│   └── projects/           # Survey data and project files
├── forms/
│   └── contact.php         # Contact form handler
└── .gitignore
```

## Features
- Responsive portfolio website
- Professional engineering-themed design
- Project showcase with survey data downloads
- Interactive animations and transitions
- Contact form (requires PHP Email Form library for production)
- Mobile-friendly navigation

## Development Setup
The project runs on port 5000 using PHP's built-in server:
```
php -S 0.0.0.0:5000
```

## Deployment
Configured for autoscale deployment using PHP built-in server. The deployment command uses the PORT environment variable (`${PORT:-5000}`) to ensure compatibility with Replit's infrastructure, falling back to port 5000 if PORT is not set.

## Recent Changes
- **2025-11-23**: Initial Replit environment setup
  - Installed PHP 8.2 module
  - Configured PHP development server on port 5000
  - Set up deployment configuration with PORT environment variable support
  - Created .gitignore file
  - Implemented basic PHP Email Form library to handle contact form submissions
  - Created server.php for deployment flexibility

## Notes
- A basic PHP Email Form library implementation has been added to prevent errors
- For production use, configure a proper email service or SMTP settings
- All survey project data is available in `assets/projects/portfolio_projects/`
- The site uses both GLightbox and Lightbox2 libraries for image viewing
- Template based on MinimalFolio by BootstrapMade.com

## User Preferences
None documented yet.

## Contact Form Configuration
The contact form has a basic implementation that prevents errors. To make it fully functional for production:
1. Update `$receiving_email_address` in `forms/contact.php` with your actual email address
2. Consider using a proper email service (SendGrid, Mailgun, etc.) or configure SMTP settings
3. The basic implementation uses PHP's mail() function, which may not work in all environments
4. For production, replace the basic implementation in `assets/vendor/php-email-form/php-email-form.php` with a proper email service integration
