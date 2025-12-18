# Khebrah Platform

## Overview

Khebrah is an AI-powered platform designed to bridge the gap between academic learning and real-world job requirements.

The platform allows students and fresh graduates to complete short, realistic task-based simulations that reflect real workplace activities.

Through automated AI evaluation, continuous skill tracking, and portfolio generation, Khebrah helps users discover hidden skills such as leadership, problem-solving, creativity, and time management.

At the same time, employers can observe real performance instead of relying only on CVs and interviews.

---

## Project Structure

```markdown
khebrah/
│   .gitignore
│   db.php
│   index.html
│
├── assets/
│   └── images
│
└── pages/
    ├── C.Home.php
    ├── company_register.php
    ├── G.Home.php
    ├── graduate_register.php
    ├── KhebrahAccountSelection.html
    ├── KhebrahPlatformLandingPage.html
    ├── KhebrahPlatformLogin.php
    ├── KhebrahPlatformRegistration.html
    ├── KhebrahPlatformRegistration1.html
    ├── login_process.php
    ├── logout.php
    ├── style.css
    └── test.html
```

## Key Features

### For Students & Graduates
- Complete task-based workplace simulations
- AI-powered skill evaluation and tracking
- Portfolio generation
- Discovery of hidden soft skills (leadership, problem-solving, creativity, time management)

### For Employers
- Access to real performance data beyond traditional CVs and interviews
- Observation of candidates in realistic work scenarios
- Better talent matching based on demonstrated abilities

## Technology Stack
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL (configured in `db.php`)
- **Assets**: SVG images, PNG graphics

## File Descriptions

### Core Files
- `index.html` - Main entry point
- `db.php` - Database connection configuration
- `.gitignore` - Git ignore rules

### Page Files
- `C.Home.php` - Company home page
- `G.Home.php` - Graduate home page
- `KhebrahPlatformLogin.php` - Login page
- `login_process.php` - Login authentication handler
- `logout.php` - Session logout handler
- `company_register.php` - Company registration
- `graduate_register.php` - Graduate registration
- `KhebrahAccountSelection.html` - Account type selection
- `KhebrahPlatformLandingPage.html` - Platform landing page
- `KhebrahPlatformRegistration.html` - Registration page for company
- `KhebrahPlatformRegistration1.html` - Registration page for graduate
- `style.css` - Stylesheet for pages
- `test.html` - Testing page

### Assets
The `assets/images/` directory contains all visual assets including logos, icons, illustrations, and interface graphics used throughout the platform.

## Getting Started

1. Ensure you have a PHP server environment (like XAMPP, WAMP, or MAMP) set up
2. Configure the database connection in `db.php`
3. Place the project in your server's web directory
4. Access the platform through `index.html`

## Note
This project appears to be a web application with both frontend (HTML/CSS) and backend (PHP) components, designed to facilitate connections between job seekers and employers through skill-based assessments.

---

**Regards, Khebrah Team**
