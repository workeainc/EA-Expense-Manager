# 💰 EA Expense Manager

<div align="center">

![EA Soft Lab Logo](https://img.shields.io/badge/EA%20Soft%20Lab-Professional%20Software%20Development-blue?style=for-the-badge&logo=code&logoColor=white)

**Professional Expense & Income Management System**

*A comprehensive financial tracking solution built with Laravel*

[![Website](https://img.shields.io/badge/Website-easoftlab.com-blue.svg)](https://www.easoftlab.com/)
[![GitHub](https://img.shields.io/badge/GitHub-workeainc-grey.svg)](https://github.com/workeainc)
[![Email](https://img.shields.io/badge/Email-contact@easoftlab.com-red.svg)](mailto:contact@easoftlab.com)

</div>

---

## 🏢 About EA Soft Lab

**EA Soft Lab** - *A sister concern of EA Inc.*

**Professional Software Development & Consulting**

We specialize in delivering high-quality software solutions with a focus on user experience, security, and scalability. Our team combines technical expertise with business acumen to create applications that drive real value.

---

## 📋 Table of Contents

- [✨ Features](#-features)
- [🛠️ Technology Stack](#️-technology-stack)
- [📦 Installation](#-installation)
- [🚀 Quick Start](#-quick-start)
- [🏗️ Project Structure](#️-project-structure)
- [🔧 Configuration](#-configuration)
- [📊 Database Schema](#-database-schema)
- [🌐 API Documentation](#-api-documentation)
- [🚀 Deployment](#-deployment)
- [🧪 Testing](#-testing)
- [📈 Performance](#-performance)
- [🔒 Security](#-security)
- [📝 Contributing](#-contributing)
- [📄 License](#-license)
- [📞 Support](#-support)

---

## ✨ Features

### 🎯 Core Functionality
- ✅ **Expense Tracking** - Comprehensive expense management with categories
- ✅ **Income Management** - Track multiple income sources and types
- ✅ **Multi-Currency Support** - Handle transactions in different currencies
- ✅ **Category Management** - Organize expenses and income by custom categories
- ✅ **Monthly Reports** - Detailed financial analytics and reporting
- ✅ **User Management** - Role-based access control and user isolation
- ✅ **Responsive Design** - Modern AdminLTE interface for all devices

### 🔐 Security Features
- ✅ **Authentication System** - Secure login/logout with password reset
- ✅ **Role-Based Access Control** - Granular permissions system
- ✅ **User Data Isolation** - Users only see their own financial data
- ✅ **CSRF Protection** - Built-in Laravel security features
- ✅ **Input Validation** - Comprehensive form validation and sanitization

### 📊 Reporting & Analytics
- ✅ **Monthly Financial Reports** - Income vs Expense analysis
- ✅ **Category-wise Breakdown** - Detailed spending patterns
- ✅ **Profit/Loss Calculations** - Automated financial summaries
- ✅ **Export Capabilities** - Data export for external analysis

---

## 🛠️ Technology Stack

### Backend
- **Laravel 5.5** - PHP Framework
- **PHP 7.0+** - Server-side language
- **MySQL** - Primary database
- **Eloquent ORM** - Database abstraction layer

### Frontend
- **AdminLTE 2.4** - Responsive admin template
- **Bootstrap 3** - CSS framework
- **jQuery** - JavaScript library
- **Blade Templates** - Laravel templating engine

### Additional Packages
- **Intervention Image** - Image processing
- **Laravel Collective HTML** - Form helpers
- **Doctrine DBAL** - Database abstraction
- **Carbon** - Date manipulation

---

## 📦 Installation

### Prerequisites
- PHP 7.0 or higher
- Composer
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

### Step 1: Clone Repository
```bash
git clone https://github.com/workeainc/ea-expense-manager.git
cd ea-expense-manager
```

### Step 2: Install Dependencies
```bash
composer install
```

### Step 3: Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### Step 4: Database Configuration
Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_manager
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 5: Run Migrations
```bash
php artisan migrate
php artisan db:seed
```

### Step 6: Start Development Server
```bash
php artisan serve
```

Visit `http://localhost:8000` to access the application.

---

## 🚀 Quick Start

### Default Login Credentials
- **Email:** `admin@admin.com`
- **Password:** `password`

### First Steps
1. **Login** with default credentials
2. **Create Categories** for expenses and income
3. **Add Currency** preferences
4. **Start Tracking** your financial data
5. **Generate Reports** for insights

---

## 🏗️ Project Structure

```
ea-expense-manager/
├── app/
│   ├── Http/Controllers/          # Application controllers
│   │   ├── Admin/                 # Admin panel controllers
│   │   └── Auth/                  # Authentication controllers
│   ├── Models/                    # Eloquent models
│   ├── Traits/                    # Reusable traits
│   └── Providers/                 # Service providers
├── database/
│   ├── migrations/                # Database migrations
│   ├── seeds/                     # Database seeders
│   └── factories/                 # Model factories
├── resources/
│   ├── views/                     # Blade templates
│   ├── assets/                    # CSS/JS assets
│   └── lang/                      # Language files
├── routes/                        # Application routes
├── config/                        # Configuration files
└── public/                        # Web accessible files
```

---

## 🔧 Configuration

### Application Settings
Key configuration files:
- `config/app.php` - Application settings
- `config/database.php` - Database configuration
- `config/auth.php` - Authentication settings

### Environment Variables
```env
APP_NAME="EA Expense Manager"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_DATABASE=your-database
DB_USERNAME=your-username
DB_PASSWORD=your-password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

---

## 📊 Database Schema

### Core Tables
- **users** - User accounts and preferences
- **expenses** - Expense records
- **incomes** - Income records
- **expense_categories** - Expense categorization
- **income_categories** - Income categorization
- **currencies** - Multi-currency support
- **roles** - User role management

### Key Relationships
- Users → Roles (Many-to-One)
- Users → Currencies (Many-to-One)
- Expenses → Categories (Many-to-One)
- Incomes → Categories (Many-to-One)
- All entities → Users (Created by relationship)

---

## 🌐 API Documentation

### Authentication Endpoints
```
POST /login          - User authentication
POST /logout         - User logout
POST /register       - User registration
POST /password/email - Password reset request
```

### Admin Endpoints
```
GET    /admin/expenses           - List expenses
POST   /admin/expenses           - Create expense
PUT    /admin/expenses/{id}      - Update expense
DELETE /admin/expenses/{id}      - Delete expense

GET    /admin/incomes            - List incomes
POST   /admin/incomes            - Create income
PUT    /admin/incomes/{id}       - Update income
DELETE /admin/incomes/{id}       - Delete income

GET    /admin/monthly_reports   - Monthly financial reports
```

---

## 🚀 Deployment

### Railway Deployment
This application is configured for easy deployment on Railway.app:

1. **Connect Repository** to Railway
2. **Add MySQL Database** service
3. **Set Environment Variables**
4. **Deploy Application**
5. **Run Migrations** in Railway terminal

### Environment Variables for Production
```env
APP_NAME="EA Expense Manager"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app.railway.app

DB_CONNECTION=mysql
DB_HOST=your-railway-mysql-host
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-railway-password
```

### Manual Deployment
```bash
# Install dependencies
composer install --optimize-autoloader --no-dev

# Run migrations
php artisan migrate --force

# Seed database
php artisan db:seed --force

# Clear caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run with coverage
php artisan test --coverage
```

### Test Structure
- **Feature Tests** - Integration testing
- **Unit Tests** - Individual component testing
- **Browser Tests** - End-to-end testing with Laravel Dusk

---

## 📈 Performance

### Optimization Features
- **Eloquent Caching** - Database query optimization
- **Asset Minification** - Compressed CSS/JS files
- **Image Optimization** - Intervention Image processing
- **Database Indexing** - Optimized database queries

### Performance Monitoring
- Laravel Telescope for debugging
- Database query logging
- Memory usage optimization
- Response time monitoring

---

## 🔒 Security

### Security Measures
- **CSRF Protection** - All forms protected
- **SQL Injection Prevention** - Eloquent ORM protection
- **XSS Protection** - Input sanitization
- **Authentication Security** - Secure password hashing
- **Role-Based Access** - Granular permission system

### Security Best Practices
- Regular security updates
- Environment variable protection
- Database connection encryption
- User input validation
- Session security

---

## 📝 Contributing

We welcome contributions from the community! Please follow these guidelines:

### Development Setup
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests for new functionality
5. Submit a pull request

### Code Standards
- Follow PSR-12 coding standards
- Write comprehensive tests
- Update documentation
- Use meaningful commit messages

### Pull Request Process
1. Ensure all tests pass
2. Update README if needed
3. Add appropriate labels
4. Request review from maintainers

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Support

**📞 Get Help**

| **Channel** | **Link** | **Response Time** |
| --- | --- | --- |
| **🌐 Website** | [www.easoftlab.com](https://www.easoftlab.com/) | 24 hours |
| **📧 Email** | [contact@easoftlab.com](mailto:contact@easoftlab.com) | 24 hours |
| **💬 Telegram** | [@emranulhsn](https://t.me/emranulhsn) | 2-4 hours |
| **📱 WhatsApp** | [+8801973772272](https://wa.me/8801973772272) | 2-4 hours |
| **🐛 Issues** | [GitHub Issues](https://github.com/workeainc/ea-expense-manager/issues) | 48 hours |

### Professional Services
- **Custom Development** - Tailored solutions for your business
- **Consulting** - Expert advice on financial management systems
- **Training** - Team training and knowledge transfer
- **Maintenance** - Ongoing support and updates

---

<div align="center">

**Made with ❤️ by [EA Soft Lab](https://www.easoftlab.com/)**

*A sister concern of EA Inc.*

[![Website](https://img.shields.io/badge/Website-easoftlab.com-blue.svg)](https://www.easoftlab.com/)
[![Email](https://img.shields.io/badge/Email-contact@easoftlab.com-red.svg)](mailto:contact@easoftlab.com)

</div>