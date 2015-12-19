<h2><?php echo $title ?></h2>


<table border="2" cellpadding="2">
 <tr>
        <th>Имя</th>
        <th>Пароль</th>
        <th>e-mail</th>
        <th>Name</th>
        <th>age</th>s
        <th>avatar</th>
        <th>City</th>
        <th>Phone</th>
        <th>Дата регистрации</th>
        <th>Уровень</th>
        <th>Логин</th>
  
  <?php foreach ($users as $user_item): ?>
        
        <tr><td><?php echo $user_item['login'] ?></td>
        <td><?php echo $user_item['password'] ?></td>
        <td><?php echo $user_item['email'] ?></td>
        <td><?php echo $user_item['name'] ?></td>
        <td><?php echo $user_item['age'] ?></td>
        <td><?php echo $user_item['avatar'] ?></td>
        <td><?php echo $user_item['city'] ?></td>
        <td><?php echo $user_item['phone'] ?></td>
        <td><?php echo $user_item['date_register'] ?></td>
        <td><?php echo $user_item['level'] ?></td>
        <td><?php echo $user_item['surname'] ?></td>
  <?php endforeach ?>
 </tr>
</table>

