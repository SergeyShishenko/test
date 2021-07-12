<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Директивы</title>
    <!-- https://ru.vuejs.org/v2/guide/installation.html -->
    <!-- https://github.com/vuejs/vuejs.org/blob/master/src/v2/examples/vue-20-hello-world/index.html     -->
    <script src="../js/vue.js"> </script>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    <!-- <script src="../js/axios.min.js"></script> -->
</head>
<body>
<!-- !other\VUE\message\index.php -->
<div id="app" v-bind:title="message + ' ' + id">
    {{ message + message2}}  id: {{ id }}
  </div>

  <script>
  // data: переменный
    var app = new Vue({
      el: '#app',
      data: {
        message: 'Hello',
        message2: ' Vue!',
        id: 10
      }
    })
    // app.message='Я изменил данные '
  </script>
</body>
</html>