# 📸 Photographer Booking System - PHP

<div align="center">

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-blue?logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-purple?logo=bootstrap)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![License](https://img.shields.io/badge/License-Open%20Source-green)

**Candid Clicks - A Complete Photography Booking Platform**

A full-featured photographer booking system built with Core PHP that enables photographers to manage bookings, galleries, clients, and service categories efficiently.

[Features](#-features) • [Tech Stack](#-tech-stack) • [Installation](#-installation-guide) • [Architecture](#-system-architecture) • [Database](#database-schema) • [Contributing](#-contributing)

</div>

---

## 📋 Table of Contents
- [Overview](#overview)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [System Architecture](#-system-architecture)
- [Requirements](#requirements)
- [Installation Guide](#-installation-guide)
- [Project Structure](#-project-structure)
- [Database Schema](#database-schema)
- [User Roles & Workflows](#-user-roles--workflows)
- [Admin Panel Guide](#admin-panel)
- [Photographer Portal Guide](#-photographer-portal-guide)
- [Client Interface Guide](#-client-interface-guide)
- [Booking Workflow](#-booking-workflow)
- [Configuration](#configuration)
- [Troubleshooting](#-troubleshooting)
- [Contributing](#-contributing)
- [Contact](#contact)

---

## Overview

**Candid Clicks** is a professional photographer booking system that streamlines the process of:
- 📅 Managing photography bookings and appointments
- 📷 Showcasing photography galleries and portfolios
- 👥 Managing clients and service categories
- 💼 Handling payments and booking confirmations
- 📊 Generating reports and analytics

This platform serves three distinct user roles: **Admin**, **Photographer**, and **Client**, each with specialized functionality.

### 🎯 Core Purpose
Enable photography studios to:
- Manage multiple photographers
- Organize service categories and subcategories
- Handle client bookings efficiently
- Showcase portfolios and past work
- Streamline communication and confirmations

---

## 🌟 Features

### ✨ Admin Features
- ✅ Complete admin dashboard with analytics
- ✅ User management (Photographers & Clients)
- ✅ Category management (Photography types)
- ✅ Subcategory management
- ✅ Gallery/Portfolio management
- ✅ Booking management (Accept/Reject/Complete)
- ✅ Feedback and review management
- ✅ Generate reports (Bookings, Users, Revenue)
- ✅ Photographer profile management
- ✅ System configuration and settings
- ✅ OTP-based password reset

### 📸 Photographer Features
- ✅ Personal dashboard and profile management
- ✅ Upload and manage gallery images
- ✅ View and manage bookings
- ✅ Accept or reject booking requests
- ✅ Upload delivery photos for completed bookings
- ✅ Provide feedback and testimonials
- ✅ View payment status
- ✅ Reset password with OTP verification
- ✅ Browse service categories
- ✅ Manage personal information and portfolio

### 👤 Client Features
- ✅ Browse available photographers
- ✅ View photographer portfolios and galleries
- ✅ Browse service categories and subcategories
- ✅ Create booking requests
- ✅ Track booking status in real-time
- ✅ Provide feedback and ratings
- ✅ View booking history
- ✅ Manage profile and preferences
- ✅ Password recovery with OTP
- ✅ Search photographers by category

---

## 🛠 Tech Stack

### Backend
- **Language**: PHP 7.4+
- **Architecture**: Core PHP (Procedural)
- **Database**: MySQL 5.7+
- **Server**: Apache/Nginx with PHP support

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Styling and responsive design
- **Bootstrap 4** - Responsive UI framework
- **jQuery** - JavaScript interactions
- **Font Awesome** - Icon library

### Key Libraries
- **PHPMailer** - Email functionality and OTP delivery
- **PDO** - Database abstraction
- **Sessions** - User authentication and management

---

## 📊 System Architecture

### Component Architecture
```
┌─────────────────────────────────────────────────────┐
│                   USER INTERFACE                    │
│  Admin Panel │ Photographer Portal │ Client Portal  │
└────────────────────┬────────────────────────────────┘
                     │
┌────────────────────▼────────────────────────────────┐
│              PHP APPLICATION LAYER                 │
│  ├─ Admin Controller                               │
│  ├─ Photographer Controller                        │
│  ├─ Client Controller                              │
│  └─ Shared Services                                │
└────────────────────┬────────────────────────────────┘
                     │
┌────────────────────▼────────────────────────────────┐
│           DATABASE ABSTRACTION LAYER                │
│  ├─ Connection Management (config/)                │
│  └─ Query Builders                                 │
└────────────────────┬────────────────────────────────┘
                     │
┌────────────────────▼────────────────────────────────┐
│              MYSQL DATABASE                        │
│  ├─ Users Table      ├─ Bookings Table             │
│  ├─ Galleries Table  ├─ Feedback Table             │
│  ├─ Categories Table └─ Payments Table             │
└─────────────────────────────────────────────────────┘
```

### Booking Status Workflow
```
┌──────────────┐
│   Requested  │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│   Pending    │
└──────┬───────┘
       │
   ┌───┴────┐
   ▼        ▼
┌──────┐  ┌────────┐
│Accept│  │ Reject │
└──┬───┘  └────────┘
   │
   ▼
┌──────────────┐
│  Confirmed   │
└──────┬───────┘
       │
       ▼
┌──────────────┐
│  Completed   │
└──────────────┘
```

---
<a name="requirements"></a>
## ⚙️ Requirements

### System Requirements
- **OS**: Windows, macOS, or Linux
- **RAM**: Minimum 2GB (4GB recommended)
- **Disk Space**: Minimum 500MB free
- **Processor**: Dual-core or higher

### Software Requirements
```
✓ PHP 7.4 or higher
✓ MySQL 5.7 or higher
✓ Apache/Nginx web server
✓ OpenSSL extension
✓ PDO MySQL extension
✓ cURL extension (for email)
✓ File upload support enabled
✓ Session support enabled
```

---

## 🚀 Installation Guide

### Step 1: Clone Repository
```bash
git clone https://github.com/nirav-gajera/photographer-booking-php.git
cd photographer-booking-php
```

### Step 2: Create Database
```bash
mysql -u root -p
CREATE DATABASE photographer_booking;
USE photographer_booking;
```

### Step 3: Import Database Schema
```bash
mysql -u root -p photographer_booking < photo.sql
```

### Step 4: Configure Database Connection
Edit `config/connection.php`:
```php
<?php
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "photographer_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### Step 5: Set File Permissions
```bash
chmod -R 755 uploads/
chmod -R 755 imageback/
```

### Step 6: Access Application
- **Admin Panel**: http://localhost/photographer-booking-php/admin/
- **Photographer Portal**: http://localhost/photographer-booking-php/photographer/
- **Client Portal**: http://localhost/photographer-booking-php/

### Step 7: Default Admin Account
- **Email**: admin@example.com
- **Password**: admin123 (change after login)

---

## 📁 Project Structure

```
photographer-booking-php/
├── admin/                    # Admin Panel
│   ├── login.php
│   ├── homepage.php
│   ├── user.php
│   ├── booking.php
│   ├── categories.php
│   ├── subcategories.php
│   ├── gallery.php
│   ├── feedback.php
│   ├── profile.php
│   ├── reports/
│   ├── assets/
│   └── PHPMailer/
│
├── photographer/             # Photographer Portal
│   ├── login.php
│   ├── homepage.php
│   ├── booking.php
│   ├── gallery.php
│   ├── profile.php
│   ├── feedback.php
│   ├── forgot_password.php
│   └── PHPMailer/
│
├── client/                   # Client Portal
│   ├── login.php
│   ├── register.php
│   ├── index.php
│   ├── shop.php
│   ├── products.php
│   ├── cart.php
│   ├── checkout.php
│   ├── myorder.php
│   ├── account.php
│   ├── feedback.php
│   └── PHPMailer/
│
├── config/                   # Configuration
│   ├── connection.php
│   └── conn.php
│
├── uploads/                  # User Uploads
│   ├── galleries/
│   └── profiles/
│
├── index.php                 # Main Entry
├── photo.sql                 # Database Schema
└── README.md
```

---
<a name="database-schema"></a>
## 🗄️ Database Schema

### Key Tables

**Users Table**
```sql
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_type ENUM('admin', 'photographer', 'client'),
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    phone VARCHAR(20),
    profile_pic VARCHAR(255),
    status ENUM('active', 'inactive'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

**Bookings Table**
```sql
CREATE TABLE bookings (
    booking_id INT PRIMARY KEY AUTO_INCREMENT,
    client_id INT,
    photographer_id INT,
    booking_date DATE,
    status ENUM('pending', 'confirmed', 'completed', 'rejected'),
    amount DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES users(user_id),
    FOREIGN KEY (photographer_id) REFERENCES users(user_id)
);
```

**Categories & Galleries Tables**
- Categories for service types
- Galleries for portfolio images
- Feedback for ratings and reviews

### Table Relationships
```
Users (1) → (Many) Bookings
Users (1) → (Many) Galleries
Bookings (1) → (Many) Feedback
```

---

## 👥 User Roles & Workflows

### Admin Workflow
```
Login → Dashboard → Manage Users/Categories/Bookings → Reports
```

### Photographer Workflow
```
Login → Dashboard → Manage Bookings/Gallery → Upload Photos → View Feedback
```

### Client Workflow
```
Register → Browse → Book → Track Status → Submit Feedback
```

---
<a name="admin-panel"></a>
## 🖥️ Admin Panel Guide

**Login**: `/admin/login.php`

**Features**:
- User Management - Add, edit, delete users
- Category Management - Manage service types
- Booking Management - Accept/reject/complete bookings
- Gallery Management - Review photographer portfolios
- Feedback Management - Monitor customer reviews
- Reports - Generate booking and user reports

---

## 📱 Photographer Portal Guide

**Login**: `/photographer/login.php`

**Dashboard Features**:
- View upcoming bookings
- Statistics (total, completed, pending)
- Recent feedback and ratings
- Account information

**Booking Management**:
- View pending bookings
- Accept or reject requests
- Upload delivery photos
- Mark as completed

**Gallery Management**:
- Upload portfolio images
- Organize by category
- Update image details
- Delete outdated images

---

## 👤 Client Interface Guide

**Register/Login**: `/client/register.php`, `/client/login.php`

**Features**:
- Browse photographers by category
- View portfolios and galleries
- Create booking requests
- Track booking status
- Submit ratings and feedback
- Manage profile and preferences

**Booking Process**:
1. Select photographer
2. Choose service and date
3. Provide event details
4. Review and confirm
5. Complete payment
6. Receive confirmation

---

## 📅 Booking Workflow

```
1. Client creates booking
   ↓
2. Photographer receives notification
   ↓
3. Photographer accepts/rejects
   ↓
4. If accepted → Booking confirmed
   ↓
5. Event date arrives
   ↓
6. Photos delivered to client
   ↓
7. Client provides feedback
   ↓
8. Booking marked complete
```

---
<a name="configuration"></a>
## ⚙️ Configuration

### Database Configuration
```php
// config/connection.php
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "photographer_booking";
```

### Email Configuration (PHPMailer)
```php
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_app_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
```

### File Upload Settings
- **Directory**: `uploads/`
- **Max Size**: 5MB
- **Allowed Types**: JPG, PNG, GIF

---

## 🐛 Troubleshooting

### Database Connection Error
```
Error: "Connection failed: Access denied"
Solution:
  1. Check credentials in config/connection.php
  2. Verify MySQL is running
  3. Check database permissions
```

### File Upload Error
```
Error: "Upload failed"
Solution:
  1. chmod -R 755 uploads/
  2. Check PHP upload_max_filesize
  3. Verify disk space
```

### Email Not Sending
```
Error: "Email failed"
Solution:
  1. Check PHPMailer configuration
  2. Verify SMTP credentials
  3. Enable "Less secure apps" for Gmail
```

### Session Issues
```
Error: "Not logged in"
Solution:
  1. Clear browser cookies
  2. Check session directory permissions
  3. Verify session timeout settings
```

---

## 🤝 Contributing

### How to Contribute
1. Fork the repository
2. Create feature branch: `git checkout -b feature/YourFeature`
3. Commit changes: `git commit -m 'Add YourFeature'`
4. Push to branch: `git push origin feature/YourFeature`
5. Open Pull Request

### Contribution Areas
- 🐛 Bug fixes
- ✨ New features
- 📚 Documentation
- 🎨 UI/UX improvements
- ⚡ Performance optimization
- 🔒 Security enhancements

---
<a name="contact"></a>
## 📞 Contact & Support

- **GitHub**: [@nirav-gajera](https://github.com/nirav-gajera)
- **Instagram**: [@mr._nirav_09](https://www.instagram.com/mr._nirav_09/)
- **Issues**: [GitHub Issues](https://github.com/nirav-gajera/photographer-booking-php/issues)

---

## 📊 Repository Statistics

| Metric | Value |
|--------|-------|
| **Language** | PHP |
| **Database** | MySQL |
| **Created** | April 17, 2023 |
| **Repository Size** | ~53 MB |
| **Stars** | ⭐ 4+ |
| **Topics** | PHP, MySQL, Booking System |

---

## 🚀 Future Roadmap

- [ ] Payment Gateway Integration (Stripe, PayPal, Razorpay)
- [ ] SMS Notifications
- [ ] Advanced Search Filters
- [ ] Real-time Chat
- [ ] Mobile App (iOS & Android)
- [ ] Video Consultation
- [ ] Photographer Verification
- [ ] Analytics Dashboard
- [ ] Multi-language Support
- [ ] RESTful API

---
<div align="center">

### 📈 System Metrics

| Feature | Count | Status |
|---------|-------|--------|
| Admin Functions | 30+ | ✅ Active |
| Photographer Features | 25+ | ✅ Active |
| Client Features | 20+ | ✅ Active |
| Database Tables | 7 | ✅ Optimized |

---

### Made with ❤️ by Nirav Gajera

**If you find this project useful, please give it a ⭐ on GitHub!**

---

**Last Updated**: September 2026  
**Version**: 1.0.0  
**Status**: Active & Maintained

[↑ Back to Top](#-photographer-booking-system---php)
</div>
