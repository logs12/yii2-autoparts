
#Установка проекта

###1. Скачиваем composer.phar(если composer не установлен в системе глобально) - открываем терминал в папке куда нужно сохранить composer и вводим команду
```html
php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
```

###2. Устанавливаем yii2 advanced

```html
php composer.phar create-project yiisoft/yii2-app-advanced advanced 2.0.6
```


###3. Скачиваем файлы с гит

```html
git init
git remote add origin git@github.com:logs12/blog.git
git checkout -b origin origin/master
git pull
```

###4. Запускаем composer
```html
php composer.phar update
```

###4. Create database dbname = yii2-autoparts
