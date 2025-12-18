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
│   └── images/
│       ├── img_carbon_task_complete.png
│       ├── img_choice_icon.png
│       ├── img_email_icon.svg
│       ├── img_game_icons_graduate_cap.svg
│       ├── img_group_195.svg
│       ├── img_ic_outline_maps_home_work.svg
│       ├── img_khebrah_logo_2.png
│       ├── img_khebrah_logo_light.png
│       ├── img_khebrah_logo_light_122x180.png
│       ├── img_live_collaboration_rafiki.svg
│       ├── img_mdi_light_arrow_up.svg
│       ├── img_mdi_light_arrow_up_red_a700.svg
│       ├── img_search.svg
│       ├── img_si_expand_more_alt_line.svg
│       ├── img_undraw_data_at_work_3tbf.svg
│       ├── img_undraw_portfolio_update_6bro.svg
│       ├── img_undraw_programming_j1zw.svg
│       ├── img_undraw_teaching_58yg.svg
│       ├── img_vector_white_a700_01.svg
│       └── pexels-thirdman-7984742 1.png
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
