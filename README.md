# 🎨 Annick Van Endert - WordPress Artist Portfolio Theme

<div align="center">
  <img src="img/LogoAnnickOrange.png" alt="Annick Van Endert Logo" width="200" />
  
  **A custom WordPress theme showcasing artistic portfolio with modern interactions**
  
  [![WordPress](https://img.shields.io/badge/WordPress-Custom%20Theme-21759B?style=for-the-badge&logo=wordpress)](https://wordpress.org/)
  [![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php)](https://php.net/)
  [![SCSS](https://img.shields.io/badge/SCSS-Architecture-CF649A?style=for-the-badge&logo=sass)](https://sass-lang.com/)
  [![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
</div>

---

## 🎯 About

This is a **custom WordPress theme** designed for **Annick Van Endert**, showcasing her artistic portfolio with a modern, interactive design. The theme features smooth animations, elegant galleries, and a responsive layout that adapts beautifully across all devices.

Built with vanilla JavaScript and modern CSS techniques, this theme demonstrates advanced frontend development skills combined with solid WordPress development practices.

## ✨ Features

- 🎨 **Artist Portfolio** - Dedicated sections for artwork showcase and galleries
- 🖼️ **Interactive Gallery** - Custom filtering system with smooth transitions
- 📱 **Fully Responsive** - Optimized for desktop, tablet, and mobile devices
- 🎬 **Smooth Animations** - WOW.js powered scroll animations and micro-interactions
- 🌊 **Smooth Scrolling** - Lenis.js for buttery smooth scroll experience
- 💡 **Lightbox Gallery** - SimpleLightbox integration for image viewing
- 🍔 **Mobile Navigation** - Custom burger menu with smooth transitions
- ⬆️ **Back to Top** - Elegant scroll-to-top functionality
- 🌐 **WordPress Integration** - Custom post types and fields support
- 🎯 **SEO Optimized** - Clean markup and semantic HTML structure

## 🛠️ Tech Stack

<div align="center">

| Backend | Frontend | Styling | Animation | Plugins |
|---------|----------|---------|-----------|---------|
| ![WordPress](https://img.shields.io/badge/WordPress-21759B?style=flat&logo=wordpress&logoColor=white) | ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black) | ![SCSS](https://img.shields.io/badge/SCSS-CF649A?style=flat&logo=sass&logoColor=white) | ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white) | ![Google Fonts](https://img.shields.io/badge/Google_Fonts-4285F4?style=flat&logo=google&logoColor=white) |
| PHP 8.0+ | Vanilla JS | CSS3 | WOW.js | Lenis.js |
| Custom Post Types | ES6+ Features | Grid/Flexbox | CSS Transitions | SimpleLightbox |

</div>

### Core Technologies

- **[WordPress](https://wordpress.org/)** - CMS with custom theme development
- **[PHP](https://php.net/)** - Server-side scripting and WordPress functions
- **[SCSS](https://sass-lang.com/)** - CSS preprocessor with modular architecture
- **[Vanilla JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)** - Modern ES6+ features without frameworks

### JavaScript Plugins

- **[Lenis.js](https://lenis.studiofreight.com/)** - Smooth scrolling library for fluid user experience
- **[WOW.js](https://wowjs.uk/)** - Scroll-triggered animations with Animate.css
- **[SimpleLightbox](https://simplelightbox.com/)** - Lightweight lightbox for gallery images
- **[Isotope](https://isotope.metafizzy.co/)** - Grid layout and filtering (included but using custom solution)

## 📁 Project Structure

```
annick-van-endert-theme/
├── 📄 PHP Template Files
│   ├── index.php              # Main template
│   ├── home.php               # Homepage template
│   ├── page-*.php            # Custom page templates
│   ├── single-news.php       # News post template
│   ├── category.php          # Category archive
│   └── functions.php         # Theme functions
├── 📁 partials/              # Template partials
│   ├── header.php            # Site header
│   ├── navigation.php        # Main navigation
│   ├── footer.php            # Site footer
│   ├── slider.php            # Hero slider
│   ├── gallery.php           # Gallery section
│   ├── about.php             # About section
│   ├── news.php              # News section
│   └── artsenic.php          # Artsenic section
├── 📁 styles/                # SCSS Architecture
│   ├── styles.scss           # Main SCSS file
│   ├── styles.min.css        # Compiled CSS
│   ├── abstract/             # Variables & mixins
│   ├── base/                 # Base styles & typography
│   ├── layout/               # Layout components
│   └── pages/                # Page-specific styles
├── 📁 scripts/               # JavaScript files
│   ├── main.js               # Main JavaScript logic
│   └── mainslider.js         # Slider functionality
├── 📁 plugins/               # Third-party plugins
│   ├── lenis.min.js          # Smooth scrolling
│   ├── simple-lightbox.min.js # Lightbox functionality
│   ├── wow.js/               # Scroll animations
│   ├── isotope.pkgd.min.js   # Grid layout
│   └── animate.css/          # CSS animations
├── 📁 img/                   # Image assets
│   ├── gallery/              # Gallery images
│   ├── artsenic/             # Artsenic project images
│   ├── News/                 # News images
│   ├── favicon/              # Favicon files
│   └── *.jpg, *.png          # Various images
└── 📄 style.css              # WordPress theme info
```

## 🎯 Key Features Breakdown

### 🖼️ Interactive Gallery System
```javascript
// Custom gallery filtering with smooth transitions
let container2 = document.querySelector('.gallery-btns2');
container2.addEventListener('click', (event)=> {
  // Custom filtering logic with CSS animations
  var selector = event.target.getAttribute('data-filter')
  // Dynamic class management for smooth transitions
});
```

### 🌊 Smooth Scrolling Experience
```javascript
// Lenis smooth scrolling configuration
const lenis = new Lenis({
  lerp: 0.08,           // Smooth interpolation
  wheelMultiplier: 1,   // Scroll speed control
});
```

### 🎬 Scroll-Triggered Animations
```javascript
// WOW.js integration for scroll animations
new WOW().init();
```

### 📱 Responsive Navigation
```javascript
// Custom burger menu with smooth transitions
let burger = document.querySelectorAll('.burger');
burger.forEach(element => {
  element.addEventListener('click', ()=>{
    mainMenu.classList.toggle('bactive');
    bburger.classList.toggle('bbappear');
  })
});
```

## 🚀 Installation & Setup

### Prerequisites
- WordPress 5.0+
- PHP 8.0+
- Modern web browser with JavaScript enabled

### Installation Steps

1. **Download the theme**
   ```bash
   # Clone or download the theme files
   git clone [repository-url]
   ```

2. **Upload to WordPress**
   ```
   wp-content/themes/annick-van-endert-theme/
   ```

3. **Activate the theme**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "Annick Van Endert"

4. **Configure custom fields**
   - Install Advanced Custom Fields (ACF) plugin
   - Import field configurations if provided

### Development Setup

1. **SCSS Compilation**
   ```bash
   # Watch SCSS files for changes
   sass --watch styles/styles.scss:styles/styles.min.css --style compressed
   ```

2. **Local Development**
   ```bash
   # Use Local by Flywheel, XAMPP, or similar
   # Ensure WordPress is running locally
   ```

## 🎨 Customization

### Adding New Gallery Items
1. Create new gallery posts in WordPress admin
2. Upload images using the featured image or custom fields
3. Configure animation delays using ACF fields

### Modifying Animations
```scss
// styles/pages/_home.scss
.gallery-item {
  transition: transform 0.3s ease, opacity 0.3s ease;
  
  &.hide {
    opacity: 0;
    transform: scale(0.8);
  }
}
```

### Custom Color Scheme
```scss
// styles/abstract/_variables.scss
$primary-color: #ff6b35;    // Orange accent
$secondary-color: #2c3e50;  // Dark blue
$text-color: #333;          // Dark text
```

## 📧 Contact & Support

For questions about this theme or custom development:

- **Developer**: Oliver Van Droogenbroeck (DryPants)
- **Artist**: Annick Van Endert
- **Theme Version**: 1.0

---

## 🏗️ Architecture Highlights

### WordPress Integration
- Custom post types for portfolio items
- Advanced Custom Fields integration
- Responsive image handling
- SEO-optimized markup

### Performance Optimizations
- Minified CSS and JavaScript
- Optimized image loading
- Efficient DOM manipulation
- Smooth 60fps animations

### Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Progressive enhancement for older browsers
- Mobile-first responsive design

---

<div align="center">
  <p>🎨 <strong>Built with passion for modern web design and artistic expression</strong></p>
  <p>⭐ Showcasing the intersection of art and technology</p>
</div>

---

*This theme represents a fusion of artistic vision and technical excellence, creating an immersive digital experience for Annick Van Endert's artistic portfolio.*
