# CI/CD Pipeline Deployment Guide

## 🚀 Automatic Deployment with GitHub Actions to Railway

This project includes a complete CI/CD pipeline that automatically deploys to Railway when you push to the main branch.

## ⚙️ Setup Instructions

### Step 1: Push Your Code to GitHub

```bash
git add .
git commit -m "Add CI/CD pipeline for Railway deployment"
git push origin main
```

### Step 2: Set Up Railway Project

1. **Go to Railway**: https://railway.app
2. **Sign in with GitHub**
3. **Click "+ New" button**
4. **Select "Deploy from GitHub repo"**
5. **Choose your repository**: `eaincorp-dev/expense-management`

### Step 3: Add MySQL Database

1. **In your Railway project, click "+ New"**
2. **Select "Database" → "MySQL"**
3. **Railway will automatically create a MySQL database**
4. **Copy the database credentials from the database service**

### Step 4: Configure Environment Variables

In your Railway project settings, add these environment variables:

```env
APP_NAME="Laravel Expense Manager"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.railway.app

DB_CONNECTION=mysql
DB_HOST=your-mysql-host.railway.app
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-mysql-password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### Step 5: Set Up GitHub Secrets

1. **Go to your GitHub repository**
2. **Navigate to Settings → Secrets and variables → Actions**
3. **Add these repository secrets**:

#### Get Railway Token:
- In Railway, go to your account settings
- Click "Tokens" → "New Token"
- Copy the generated token

#### Get Railway Service ID:
- In your Railway project, go to settings
- Copy the Service ID from the URL or settings page

#### Add GitHub Secrets:
| Secret Name | Value |
|-------------|-------|
| `RAILWAY_TOKEN` | Your Railway API token |
| `RAILWAY_SERVICE` | Your Railway service ID |

### Step 6: Trigger First Deployment

Push any change to trigger the CI/CD pipeline:

```bash
git add .
git commit -m "Trigger CI/CD deployment"
git push origin main
```

## 🔄 What the CI/CD Pipeline Does

1. **Code Quality Checks**:
   - Validates composer.json
   - Installs PHP dependencies
   - Runs PHPUnit tests

2. **Automated Deployment**:
   - Deploys to Railway automatically
   - Runs database migrations
   - Caches Laravel configurations
   - Sets up the production environment

3. **Post-Deployment Tasks**:
   - Optimizes application performance
   - Clears and rebuilds caches
   - Ensures database is up-to-date

## 📊 Monitoring Deployments

### GitHub Actions
- Go to your repository → "Actions" tab
- Monitor build and deployment status
- View logs for troubleshooting

### Railway Dashboard
- Monitor application metrics
- View deployment logs
- Check database connectivity

## 🛠️ Troubleshooting

### Common Issues:

1. **Build Fails**:
   - Check GitHub Actions logs
   - Verify composer.json syntax
   - Ensure all dependencies are available

2. **Database Connection Error**:
   - Verify Railway database credentials
   - Check environment variables
   - Ensure MySQL service is running

3. **Deployment Fails**:
   - Check Railway logs
   - Verify Railway token and service ID
   - Ensure proper permissions

4. **Application Errors**:
   - Check Laravel logs in Railway
   - Verify environment variables
   - Run migrations manually if needed

### Manual Commands (if needed):

If you need to run commands manually in Railway:

```bash
# Connect to Railway CLI
railway login

# Run migrations
railway run php artisan migrate --force

# Clear caches
railway run php artisan config:cache
railway run php artisan route:cache
railway run php artisan view:cache

# Generate application key
railway run php artisan key:generate --force
```

## 🎯 Default Credentials

After deployment, access your application with:
- **Email**: admin@admin.com
- **Password**: password

**⚠️ Important**: Change the default password immediately after first login!

## 📈 Scaling and Maintenance

- **Auto-scaling**: Railway automatically scales based on traffic
- **Monitoring**: Use Railway dashboard for performance metrics
- **Backups**: Railway provides automatic database backups
- **SSL**: Automatic SSL certificates provided

## 🔗 Useful Links

- [Railway Documentation](https://docs.railway.app)
- [GitHub Actions Documentation](https://docs.github.com/en/actions)
- [Laravel Deployment Guide](https://laravel.com/docs/deployment)