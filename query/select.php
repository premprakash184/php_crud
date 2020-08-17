 <?php
    $query = 'select * from customer order by created_at  desc';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 <table class="table table-stripped">
   <thead>
     <th scope="col">SI.no</th>
     <th scope="col">First Name</th>
     <th scope="col">Last Name</th>
     <th scope="col">Edit</th>
     <th scope="col">Delete</th>

   </thead>
   <tbody>
     <?php foreach ($customers as $key=> $customer):?>
     <tr>
       <th scope="row"><?= ++$key?>
       </th>
       <td><?= $customer['first_name']?>
       </td>
       <td><?= $customer['last_name']?>
       </td>
       <td>
         <a
           href="edit_customer.php?id=<?php echo $customer['id']?>">Edit
         </a>
       </td>
       <td>
         <a
           href="query/delete.php?id=<?php echo $customer['id']?>">Delete</a>
       </td>
     </tr>
     <?php endforeach;?>

   </tbody>
 </table>