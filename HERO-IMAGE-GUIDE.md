# Hero Image Customization Guide

## Overview
The home page now includes a customizable hero/header image section with overlay effects. This allows you to create a more visually appealing and branded landing page.

---

## Quick Start

### 1. Adding Your Own Image
Replace the placeholder image with your own:
- Place your image in the `images/` folder
- Recommended size: **1920x1080 pixels** or larger
- Supported formats: JPG, PNG, WebP, SVG
- Update the image path in `index.php`:
  ```php
  <img src="images/your-image.jpg" alt="Your Description" class="hero-image">
  ```

### 2. Customizing the Overlay

Change the overlay darkness by modifying the class in `index.php`:

```php
<!-- Very Dark (95% opacity) - Best for bright images -->
<div class="hero-overlay dark"></div>

<!-- Medium Dark (85% opacity) - Default -->
<div class="hero-overlay"></div>

<!-- Light (65% opacity) - Best for dark images -->
<div class="hero-overlay light"></div>

<!-- Accent Color Gradient - Branded look with cyan -->
<div class="hero-overlay gradient-accent"></div>
```

---

## Advanced Customization

### Adjusting Hero Height

Edit `css/styles.css` in the `.hero-with-image` section:

```css
.hero-with-image {
    min-height: 600px;  /* Default */
    /* Try these alternatives: */
    /* min-height: 500px;  - Shorter */
    /* min-height: 700px;  - Taller */
    /* min-height: 100vh;  - Full screen */
}
```

### Image Positioning

Control how the image is cropped in `css/styles.css`:

```css
.hero-image {
    object-fit: cover;      /* Fill space (default) */
    object-position: center; /* Focus point (default) */
    
    /* Alternative options: */
    /* object-fit: contain;         - Show entire image */
    /* object-position: top;        - Focus on top */
    /* object-position: bottom;     - Focus on bottom */
    /* object-position: 70% 30%;    - Custom position */
}
```

### Custom Overlay Colors

Add custom overlays in `css/styles.css`:

```css
/* Blue tinted overlay */
.hero-overlay.blue {
    background: linear-gradient(135deg, 
        rgba(0, 50, 100, 0.85) 0%, 
        rgba(10, 10, 10, 0.9) 100%);
}

/* Red tinted overlay */
.hero-overlay.red {
    background: linear-gradient(135deg, 
        rgba(100, 0, 0, 0.85) 0%, 
        rgba(10, 10, 10, 0.9) 100%);
}
```

Then use in `index.php`:
```php
<div class="hero-overlay blue"></div>
```

---

## Effects & Enhancements

### Parallax Scrolling Effect

In `css/styles.css`, change `.hero-image` position:

```css
.hero-image {
    position: fixed;  /* Changed from absolute */
    /* ...rest of properties... */
}
```

### Remove Image (Gradient Only)

Comment out or remove the image tag in `index.php`:

```php
<!-- <img src="images/hero-bg.svg" alt="Technology Background" class="hero-image"> -->
```

The gradient background will show automatically.

---

## Image Resources

### Free Stock Image Sites
- [Unsplash](https://unsplash.com) - Technology, business, abstract
- [Pexels](https://pexels.com) - High-quality free images
- [Pixabay](https://pixabay.com) - Free images and vectors

### Recommended Search Terms
- "technology abstract"
- "circuit board"
- "data visualization"
- "server room"
- "coding"
- "digital network"
- "cybersecurity"

### Recommended Image Specs
- **Resolution**: 1920x1080px minimum (Full HD)
- **Aspect Ratio**: 16:9
- **File Size**: Under 500KB for optimal load time
- **Format**: JPG for photos, PNG for graphics with transparency

---

## Troubleshooting

### Image Not Showing
1. Check the file path is correct
2. Ensure the image is in the `images/` folder
3. Check file permissions
4. Verify the image format is supported

### Image Looks Stretched
- Use `object-fit: cover;` in CSS
- Ensure image is high enough resolution (1920x1080+)

### Page Loads Slowly
- Compress your image (use tools like TinyPNG)
- Keep file size under 500KB
- Consider using WebP format for better compression

### Overlay Too Dark/Light
- Adjust the overlay class (`dark`, default, or `light`)
- Or create a custom overlay with different opacity values

---

## Example Configurations

### Configuration 1: Clean Professional
```php
<img src="images/office-tech.jpg" alt="Modern Office" class="hero-image">
<div class="hero-overlay"></div>
```

### Configuration 2: Bold & Vibrant
```php
<img src="images/colorful-abstract.jpg" alt="Abstract" class="hero-image">
<div class="hero-overlay light"></div>
```

### Configuration 3: Branded Look
```php
<img src="images/circuit.jpg" alt="Technology" class="hero-image">
<div class="hero-overlay gradient-accent"></div>
```

### Configuration 4: Minimalist
```php
<!-- No image tag -->
<div class="hero-overlay"></div>
```

---

## Need Help?
Refer to `css/hero-customization-guide.css` for additional code examples and variations.
