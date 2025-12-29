# FlyingU Tech Website

A professional, minimalistic dark-themed website for a technology company built with PHP.

## Features

- **Minimalistic Dark Theme**: Professional design with a modern dark color scheme
- **Responsive Design**: Mobile-friendly and works on all devices
- **Modular Structure**: Separate header and footer includes for easy maintenance
- **Multiple Pages**: Home, About, Services, Contact, and a blank template
- **Contact Form**: Functional contact form with validation
- **Smooth Navigation**: Sticky navigation with mobile menu support

## File Structure

```
FLYINGUTECH/
??? index.php              # Homepage
??? about.php              # About Us page
??? services.php           # Services page
??? contact.php            # Contact page with form
??? blank.php              # Template for future pages
??? includes/
?   ??? header.php         # Header with navigation
?   ??? footer.php         # Footer
??? css/
?   ??? styles.css         # Main stylesheet
?   ??? navbar.css         # Navigation bar styles
?   ??? footer.css         # Footer styles
??? README.md              # This file
```

## Installation

1. Ensure you have PHP installed (PHP 7.4+ recommended)
2. Clone or download this repository
3. Place files in your web server directory
4. Access via browser: `http://localhost/FLYINGUTECH/`

## Customization

### Colors
Edit CSS variables in `css/styles.css`:
```css
:root {
    --primary-bg: #0a0a0a;
    --secondary-bg: #1a1a1a;
    --accent-color: #00d4ff;
    /* ... more colors */
}
```

### Company Information
- Update company name in `includes/header.php` (logo)
- Update footer information in `includes/footer.php`
- Modify contact details in `contact.php`

### Adding New Pages
1. Copy `blank.php` to create a new page
2. Update `$pageTitle` and `$pageDescription` variables
3. Add your content
4. Add navigation link in `includes/header.php`

## Pages Overview

### Home (index.php)
- Hero section with call-to-action
- Feature cards highlighting company strengths
- Call-to-action section

### About (about.php)
- Company story and overview
- Mission, vision, and values
- Expertise areas
- Impact statistics

### Services (services.php)
- Detailed service descriptions
- Web development, cloud solutions, IT consulting, cybersecurity
- Additional services grid
- Call-to-action

### Contact (contact.php)
- Contact information cards
- Functional contact form with PHP validation
- Business hours and location

### Blank Template (blank.php)
- Ready-to-use template for new pages
- Includes hero section, content sections, and grid layout examples

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## License

This project is open source and available for personal and commercial use.

## Support

For issues or questions, visit the contact page or email info@flyingutech.com
