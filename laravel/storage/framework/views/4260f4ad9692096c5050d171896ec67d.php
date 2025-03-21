<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($subject ?? 'Notification'); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            margin: 20px 0;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo e($email_data->subject); ?></h1>
        </div>
        <div class="content">
            <?php echo $email_data->body_html; ?>

        </div>
        <div class="footer">
            <p>&copy; <?php echo e(date('Y')); ?> Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Notify/resources/views/emails/html.blade.php ENDPATH**/ ?>