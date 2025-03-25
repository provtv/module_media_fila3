~~~bash
git clone --recurse-submodules https://github.com/aurmich/base_fixcity_fila3.git 
cd base_fixcity_fila3
~~~


~~~bash
git remote -v
~~~
must return 
~~~bash
origin  https://github.com/aurmich/base_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/base_fixcity_fila3.git (push)
~~~

~~~bash
git submodule foreach git remote -v
~~~
must return 
~~~bash
Entering 'bashscripts'
origin  https://github.com/aurmich/bashscripts_fila3.git (fetch)
origin  https://github.com/aurmich/bashscripts_fila3.git (push)
Entering 'laravel/Modules/AI'
origin  https://github.com/aurmich/module_ai_fila3.git (fetch)
origin  https://github.com/aurmich/module_ai_fila3.git (push)
Entering 'laravel/Modules/Activity'
origin  https://github.com/aurmich/module_activity_fila3.git (fetch)
origin  https://github.com/aurmich/module_activity_fila3.git (push)
Entering 'laravel/Modules/Blog'
origin  https://github.com/aurmich/module_blog_fila3.git (fetch)
origin  https://github.com/aurmich/module_blog_fila3.git (push)
Entering 'laravel/Modules/Cms'
origin  https://github.com/aurmich/module_cms_fila3.git (fetch)
origin  https://github.com/aurmich/module_cms_fila3.git (push)
Entering 'laravel/Modules/Comment'
origin  https://github.com/aurmich/module_comment_fila3.git (fetch)
origin  https://github.com/aurmich/module_comment_fila3.git (push)
Entering 'laravel/Modules/Fixcity'
origin  https://github.com/aurmich/module_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/module_fixcity_fila3.git (push)
Entering 'laravel/Modules/Gdpr'
origin  https://github.com/aurmich/module_gdpr_fila3.git (fetch)
origin  https://github.com/aurmich/module_gdpr_fila3.git (push)
Entering 'laravel/Modules/Geo'
origin  https://github.com/aurmich/module_geo_fila3.git (fetch)
origin  https://github.com/aurmich/module_geo_fila3.git (push)
Entering 'laravel/Modules/Job'
origin  https://github.com/aurmich/module_job_fila3.git (fetch)
origin  https://github.com/aurmich/module_job_fila3.git (push)
Entering 'laravel/Modules/Lang'
origin  https://github.com/aurmich/module_lang_fila3.git (fetch)
origin  https://github.com/aurmich/module_lang_fila3.git (push)
Entering 'laravel/Modules/Media'
origin  https://github.com/aurmich/module_media_fila3.git (fetch)
origin  https://github.com/aurmich/module_media_fila3.git (push)
Entering 'laravel/Modules/Notify'
origin  https://github.com/aurmich/module_notify_fila3.git (fetch)
origin  https://github.com/aurmich/module_notify_fila3.git (push)
Entering 'laravel/Modules/Rating'
origin  https://github.com/aurmich/module_rating_fila3.git (fetch)
origin  https://github.com/aurmich/module_rating_fila3.git (push)
Entering 'laravel/Modules/Seo'
origin  https://github.com/aurmich/module_seo_fila3.git (fetch)
origin  https://github.com/aurmich/module_seo_fila3.git (push)
Entering 'laravel/Modules/Setting'
origin  https://github.com/aurmich/module_setting_fila3.git (fetch)
origin  https://github.com/aurmich/module_setting_fila3.git (push)
Entering 'laravel/Modules/Tenant'
origin  https://github.com/aurmich/module_tenant_fila3.git (fetch)
origin  https://github.com/aurmich/module_tenant_fila3.git (push)
Entering 'laravel/Modules/Ticket'
origin  https://github.com/aurmich/module_ticket_fila3.git (fetch)
origin  https://github.com/aurmich/module_ticket_fila3.git (push)
Entering 'laravel/Modules/UI'
origin  https://github.com/aurmich/module_ui_fila3.git (fetch)
origin  https://github.com/aurmich/module_ui_fila3.git (push)
Entering 'laravel/Modules/User'
origin  https://github.com/aurmich/module_user_fila3.git (fetch)
origin  https://github.com/aurmich/module_user_fila3.git (push)
Entering 'laravel/Modules/Xot'
origin  https://github.com/aurmich/module_xot_fila3.git (fetch)
origin  https://github.com/aurmich/module_xot_fila3.git (push)
Entering 'laravel/Themes/Sixteen'
origin  https://github.com/aurmich/theme_sixteen_fila3.git (fetch)
origin  https://github.com/aurmich/theme_sixteen_fila3.git (push)
Entering 'laravel/Themes/TwentyOne'
origin  https://github.com/aurmich/theme_twentyone_fila3.git (fetch)
origin  https://github.com/aurmich/theme_twentyone_fila3.git (push)
~~~


~~~
cd laravel
cp .env.latest .env
code ..
~~~

