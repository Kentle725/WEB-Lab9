# Лабораторная работа №9: CI/CD для PHP-приложения с использованием GitHub Actions и Docker

## 👩‍💻 Автор
ФИО: Баграмов Владимир Андреевич  
Группа: ПМИ2 ИП1 ПГ2

---

## 📌 Описание задания
Научиться:
настраивать CI/CD pipeline
использовать GitHub Actions
запускать Docker-контейнеры в CI
автоматически запускать тесты PHPUnit
выявлять ошибки через CI


---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone <ссылка на репозиторий>
   cd WEB-Lab9
Запустить контейнеры:
```bash
docker-compose up -d --build
```

📂 Содержимое проекта

```screenshots``` - скриншоты выполнения тестов

```docker-compose.yml``` — описание сервиса Nginx и PHP-FPM

```nginx/default.conf``` — конфигурационный файл сервера Nginx

```www/tests/ExampleTest.php``` - PHP-файл с тестом для проверки phpunit

```www/tests/HttpMockTest.php``` - PHP-файл с тестом для проверки GuzzleHttp c Mock

```www/tests/PatientTest.php``` - PHP-файл с тестом для проверки класса Patient

```www/tests/Patient2Test.php``` - PHP-файл с 2-м тестом для проверки класса Patient

✅ Результат
Сервер в Docker успешно запущен, тесты phpunit выполняются.