# 🌐 Portfolio Website

**Personal Portfolio & Web Development Showcase**

<div align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
</div>

## 🚀 Live Demo

**🔗 [Visit My Portfolio](https://thrymst.github.io/portfolio-website/)**

## 📋 About This Project

This is my personal portfolio website showcasing my skills, projects, and experience as a Computer Science student and aspiring software developer. The website features a modern, responsive design with interactive elements and smooth animations.

## ✨ Features

- **🎨 Modern Design**: Clean, professional layout with smooth animations
- **📱 Fully Responsive**: Optimized for all devices (desktop, tablet, mobile)
- **⚡ Interactive Elements**: Dynamic content with JavaScript functionality
- **🎯 Project Showcase**: Detailed presentation of my development projects
- **📊 Skills Visualization**: Interactive skill bars and progress indicators
- **📞 Contact Integration**: Working contact form with email functionality
- **🌙 Dark/Light Mode**: Toggle between themes for better user experience
- **🚀 Fast Loading**: Optimized performance for quick page loads

## 🛠️ Technologies Used

### Frontend
- **HTML5**: Semantic markup and structure
- **CSS3**: Advanced styling with Flexbox and Grid
- **JavaScript ES6**: Interactive functionality and DOM manipulation
- **CSS Animations**: Smooth transitions and hover effects

### Backend (for contact form)
- **MySQL**: Database for storing contact form submissions
- **PHP**: Server-side processing for form handling

### Tools & Libraries
- **Font Awesome**: Icons and visual elements
- **Google Fonts**: Custom typography
- **AOS (Animate On Scroll)**: Scroll-triggered animations
- **Typed.js**: Typing animation effects

## 📁 Project Structure

```
portfolio-website/
├── index.html              # Main homepage
├── about.html              # About me page
├── projects.html           # Projects showcase
├── contact.html            # Contact form page
├── css/
│   ├── style.css          # Main stylesheet
│   ├── responsive.css     # Mobile responsiveness
│   └── animations.css     # Animation styles
├── js/
│   ├── main.js           # Main JavaScript functionality
│   ├── projects.js       # Project filtering and display
│   └── contact.js        # Contact form handling
├── images/
│   ├── profile.jpg       # Profile picture
│   ├── projects/         # Project screenshots
│   └── icons/            # Custom icons
├── database/
│   └── contact_form.sql  # Database schema
└── README.md             # This file
```

## 🎯 Key Sections

### 1. **Hero Section**
- Professional introduction with typing animation
- Call-to-action buttons
- Social media links

### 2. **About Me**
- Personal introduction and background
- Skills and competencies
- Education and interests

### 3. **Projects Portfolio**
- Interactive project gallery
- Detailed project descriptions
- Technology stack for each project
- Live demo and GitHub links

### 4. **Skills & Expertise**
- Technical skills with progress bars
- Programming languages proficiency
- Tools and frameworks experience

### 5. **Contact**
- Working contact form
- Social media integration
- Location and availability information

## 🚀 Getting Started

### Prerequisites
- Web browser (Chrome, Firefox, Safari, Edge)
- Local web server (optional, for PHP functionality)
- MySQL database (for contact form)

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/Thrymst/portfolio-website.git
cd portfolio-website
```

2. **For local development**
```bash
# Using Python (simple HTTP server)
python -m http.server 8000

# Using Node.js (if you have http-server installed)
npx http-server

# Using PHP (if you have PHP installed)
php -S localhost:8000
```

3. **Set up database (for contact form)**
```sql
-- Import the database schema
mysql -u username -p database_name < database/contact_form.sql
```

4. **Configure database connection**
```php
// Update database credentials in contact.php
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';
```

## 📱 Responsive Design

The website is fully responsive and tested on:
- ✅ Desktop (1920px and above)
- ✅ Laptop (1024px - 1919px)
- ✅ Tablet (768px - 1023px)
- ✅ Mobile (320px - 767px)

## 🎨 Customization

### Colors
```css
:root {
  --primary-color: #2196F3;
  --secondary-color: #FF5722;
  --accent-color: #4CAF50;
  --text-color: #333;
  --bg-color: #ffffff;
}
```

### Typography
```css
/* Main font families used */
font-family: 'Poppins', sans-serif;
font-family: 'Roboto', sans-serif;
```

## 📊 Performance Metrics

- **PageSpeed Score**: 95/100
- **Loading Time**: < 2 seconds
- **Mobile Friendly**: ✅ Yes
- **SEO Optimized**: ✅ Yes

## 🔧 Features to Add

- [ ] Blog section
- [ ] Multi-language support
- [ ] PWA (Progressive Web App)
- [ ] Content Management System
- [ ] Analytics integration
- [ ] Advanced animations

## 📞 Contact

If you have any questions about this project or want to collaborate:

- **Email**: samandias88@gmail.com
- **LinkedIn**: [linkedin.com/in/junaediamandias](https://linkedin.com/in/junaediamandias)
- **GitHub**: [github.com/Thrymst](https://github.com/Thrymst)

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🙏 Acknowledgments

- **Design Inspiration**: Various modern portfolio websites
- **Icons**: Font Awesome
- **Fonts**: Google Fonts
- **Animations**: AOS Library
- **Community**: Stack Overflow and GitHub community

---

<div align="center">
  <h3>⭐ If you found this project helpful, please give it a star!</h3>
  <p>Made with ❤️ by <a href="https://github.com/Thrymst">Junaedi Samandias</a></p>
</div>
