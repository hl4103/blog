# blog
blog

# 1. 安装
执行 composer install --optimize-autoloader

# 2. 设置
## (1). 复制.env.example 文件并重命名为 .env (mv .env.example .env)
## (2). 重新生成key (php artisan key:generate)
## (3). 在storage目录下新建 /framework/cache, /framework/sessions, /framework/views 三个目录.(记得给权限哦!)
