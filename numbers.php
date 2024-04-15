<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простые числа</title>
</head>

<body>

    <form action="check.php" method="POST">
        <input type='number' name="num" min="0" max="1000000" step="1"/>
        <input type='submit' value="Проверить"/>
    </form>

    <script>
        const inputs = document.querySelector('input[type=number]')

        function replace() {
            const re = /(?<=\d{7})(\d+)/g
            if (re.test(this.value)) {
                this.value = this.value.replace(re, '')
            }
        }

        inputs.addEventListener('input', replace)

        
    </script>
</body>

</html>