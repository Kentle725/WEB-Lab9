# Лабораторная работа №8: Работа с базой данных MySQL через PHP и Docker

## 👩‍💻 Автор
ФИО: Баграмов Владимир Андреевич  
Группа: ПМИ2 ИП1 ПГ2

---

## 📌 Описание задания
Научиться:
устанавливать и использовать PHPUnit
писать unit-тесты для классов
использовать mock-объекты
тестировать HTTP-запросы через Guzzle
работать с переменными окружения (.env)
изолировать тестовую среду


---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone <ссылка на репозиторий>
   cd WEB-Lab8
Запустить контейнеры:
```bash
docker-compose up -d --build
```

📂 Содержимое проекта

```docker-compose.yml``` — описание сервиса Nginx и PHP-FPM

```nginx/default.conf``` — конфигурационный файл сервера Nginx

```www/tests/ExampleTest.php``` - PHP-файл с тестом для проверки phpunit

```www/tests/HttpMockTest.php``` - PHP-файл с тестом для проверки GuzzleHttp c Mock

```www/tests/HttpTest.php``` - PHP-файл с тестом для проверки GuzzleHttp

```www/tests/PatientTest.php``` - PHP-файл с тестом для проверки класса Patient

```www/tests/Patient2Test.php``` - PHP-файл с 2-м тестом для проверки класса Patient

✅ Результат
Сервер в Docker успешно запущен, тесты phpunit выполняются.