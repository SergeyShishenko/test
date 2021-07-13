<!DOCTYPE html>
<!-- !other\VUE\message\index.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Директивы</title>
    <!-- https://ru.vuejs.org/v2/guide/installation.html -->
    <!-- https://github.com/vuejs/vuejs.org/blob/master/src/v2/examples/vue-20-hello-world/index.html     -->

    <!-- https://habr.com/ru/post/329452/ -->
    <script src="../js/vue.js"> </script>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    <!-- <script src="../js/axios.min.js"></script> -->
</head>
<body>
<!-- 
V-bind — динамически связывается с одним или несколькими атрибутами.
V-cloak — прячет “усатые” выражения, пока не подтянулись данные
v-if — условие для рендера элемента
V-else — обозначает “else блок” для v-if
V-for — циклично проходит массив объектов
V-model — связывает состояние с input элементом
V-on — связывает слушателя события с элементом
V-once — рендерит элемент только вначале и больше не следит за ним
V-pre — не компилирует элемент и его дочерние элементы
V-show — переключает видимость элемента, изменяя свойство CSS display
V-text — обновляет textContent элемента
 -->

<div id="app" v-bind:title="message">
    {{ message + message2}}  id: {{ id }}

    <p>{{message ? message : "no content"}}</p>
  <input v-model="message">

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