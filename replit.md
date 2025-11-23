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
- **2025-11-23**: Comprehensive Portfolio Modernization - Site Engineering Focus
  - **Personal Information**: Updated to Chibueze "Fortune" Akaleme, Southbourne UK
  - **Professional Focus**: Site & Setting Out Engineer (removed web developer role for focused positioning)
  - **Modern Design System**: 
    - Created custom-modern.css with professional blue/dark color palette
    - Implemented modern card designs, hover effects, and animations
    - Enhanced typography and spacing throughout
  - **CSCS Gold Card Prominence**:
    - Created animated badge in hero section with gold accent theme
    - Built dedicated Certifications section with highlighted Gold Card
    - Added ProQual Level 3, Site Engineer Training, SMSTS, First Aid certifications
  - **Enhanced Hero Section**:
    - Modernized headline focusing on engineering precision
    - Updated tagline to emphasize surveying expertise
    - Added dual CTA buttons (View Projects, Get in Touch)
    - Professional profile image display
  - **About Section Complete Redesign**:
    - Modern layout with image on left, content on right
    - CSCS Gold Card badge overlay on profile image
    - Specialty badges for core competencies (Setting Out, Control Networks, As-Built, Levelling)
    - Statistics display showing years of experience, accuracy standards, and projects completed
    - Professional eyebrow tags and improved typography
  - **Skills Section Focused on Engineering**:
    - Two categories: Site & Setting Out Engineering, Software & Tools
    - Removed web development skills to maintain site engineering focus
    - Added Control Networks, Resection Surveys, Coordinate Geometry
    - Modern card-based layout with icons
  - **Technical Proficiencies Section Redesign**:
    - Three modern proficiency cards: Survey Equipment, Software & CAD, Survey Methodologies
    - Large gradient icons with hover animations (scale + rotate effect)
    - Color-coded gradient top borders
    - Interactive list items that slide right on hover
    - Professional card shadows and hover elevations
    - Comprehensive equipment and methodology listings
  - **Core Skills Section Complete Redesign**:
    - Six modern skill cards with gradient icon boxes and color-coded level badges
    - Expert (blue), Advanced (cyan), Strong (purple), Professional (green) badge variants
    - Dual metric displays showing quantitative achievements (50+ surveys, ±3mm precision, etc.)
    - Icon hover animations with scale and rotate effects
    - Card hover animations that lift up with enhanced shadows
    - Removed old progress bar design for modern metrics-based approach
  - **Professional Experience Section Complete Redesign**:
    - Modern experience cards with left border accent (replaces timeline view)
    - Achievement badges with hover interactions and icon animations
    - Experience cards slide right on hover with shadow enhancement
    - Company names displayed with icons for visual interest
    - Period badges with gradient blue backgrounds
    - Key achievements highlighted in gradient accent boxes with gold trophy icons
    - Removed old timeline badges for cleaner card-based layout
  - **Certifications Section Updates**:
    - Removed all dates from certification cards for timeless presentation
    - CSCS Gold Card, ProQual Level 3, and Site Engineer Training now dateless
    - Focus on credential value rather than acquisition timing
  - **Surveying Projects Section Redesign**:
    - Complete visual overhaul with modern project cards
    - Image zoom effects on hover with smooth transitions
    - Category badges (As-Built, Control Network, Levelling) with color coding
    - Interactive overlay with action buttons (Report, Data, View)
    - Precision indicators showing accuracy (±1mm, ±2mm)
    - Technology badges with icons for equipment and tools
    - Professional card shadows and hover animations
  - **Contact Section**: Modernized with Southbourne location and professional styling
  - **Navigation**: Added Certifications link for easy access

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
