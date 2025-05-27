# 🎵 Music Venue Website – Full-Stack & DevSecOps Focus

This project is a **secure, full-stack web application** designed for a music venue. It features a modern **glassmorphic UI**, a **PHP-based authentication system**, and a **MySQL database backend**. The project incorporates **DevSecOps best practices**, including secure coding, modular architecture, and deployment readiness for cloud infrastructure.

---

## ✨ Features

### 🎨 Frontend (UI/UX)
- **Glassmorphic header** with `backdrop-filter: blur()` for a polished look
- **Responsive design** for mobile, tablet, and desktop
- **Bootstrap** layout for consistency and quick styling
- **Accessible, semantic HTML5** and form validation
- **Modern UI trends**: minimal, clean, and intuitive interface

### 🔐 Backend (Security & Architecture)
- **PHP-based login system** using `password_hash()` & `password_verify()`
- **SQL Injection prevention** with **prepared statements** (MySQLi)
- **Session management** using `session_start()` with secure cookie flags
- **Input sanitization** to prevent XSS and injection vulnerabilities
- **Brute-force protection** (rate limiting or failed login logging optional)
- **Modular code structure** separating logic, config, and templates

### ⚙️ DevSecOps Considerations
- Secure coding principles: least privilege, input validation, error suppression
- Logs and errors can be routed securely (e.g., syslog or log monitoring tools)
- Deployable in **containerized environments** (Docker-ready with Apache + PHP + MySQL)
- Supports **CI/CD pipelines** with GitHub Actions or similar tools
- Cloud-hostable on AWS EC2 (Ubuntu LAMP stack), with HTTPS via Let’s Encrypt
- Environment variables or `.env` support for secure config (optional)

---

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript (optional)
- **Backend:** PHP 7+, MySQL 5.7+/8
- **Tools & Platforms:** Apache2, phpMyAdmin, GitHub, AWS EC2, GitHub Actions (optional)
- **Security Libraries:** Built-in PHP cryptography functions

---

## 🚀 Preview

![screenshot](screenshot.png)  
*Glassmorphic UI with secure authentication*

---

## 📦 Installation & Usage

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/music-venue-login.git
   cd music-venue-login

---

## 🧑‍💻 Author

**Chaz Ortiz** – *Lead Developer on Group Project*  
[GitHub](https://github.com/yourusername) · [LinkedIn](https://linkedin.com/in/yourprofile) · [Website](https://your-portfolio.com)
