<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Занятие 1</title>
    <!-- https://ru.vuejs.org/v2/guide/installation.html -->
    <!-- https://github.com/vuejs/vuejs.org/blob/master/src/v2/examples/vue-20-hello-world/index.html     -->
    <script src="../js/vue.js"> </script>
</head>
<body>
<!-- !other\VUE\message\index.php -->
<div id="app">
    {{ message }}
  </div>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello Vue!'
      }
    })
    app.message='Я изменил данные!'
  </script>
</body>
</html>