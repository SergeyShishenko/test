<?php
// !other\creatHTMLtable.php
$array = [
    [
        "photo" => "0.jpg",
        "id" => "http://vk.com/id0",
        "name" => "Жекі"
    ],
    [
        "photo" => "1.jpg",
        "id" => "https://vk.com/id1",
        "name" => "Рижий Олександр"
    ]
    ];
  ?>
  <?php foreach ($array as $a) { ?>
<tr>
    <th>
      <p><?=$a["photo"]?></p>
    </th>
    <td>
        <a href="<?=$a["id"]?>"> <?=$a["name"]?> </a>
    </td>
</tr> <?php } ?>  