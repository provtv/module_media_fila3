# Dettagli Struttura del Progetto

## 1. Directory /src
### Controllers
- BaseController.php
- AuthController.php
- UserController.php
- ReportController.php
- AdminController.php

### Models
- User.php
- Report.php
- Category.php
- Status.php
- Media.php

### Services
- AuthService.php
- EmailService.php
- ValidationService.php
- FileUploadService.php

### Middleware
- Authentication.php
- Authorization.php
- RateLimiting.php
- CORS.php

## 2. Directory /config
- database.php
- app.php
- mail.php
- services.php
- cache.php

## 3. Directory /public
- index.php
- .htaccess
- assets/
  - css/
  - js/
  - images/
  - uploads/

## 4. Directory /tests
- Unit/
- Feature/
- Integration/ 