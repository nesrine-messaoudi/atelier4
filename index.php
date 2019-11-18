<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des etudiants</title>
</head>
<body>
   <div class="container">
   <div class="jumbotron">
      <h3> Liste des étudiants</h3>
    </div>
    <form action="create.html" action="get" >
    <button class="btn btn-primary">Nouvel étudiant</button>

       <table class="table table-hover">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Firstname</th>
                   <th>Lastname</th>
                   <th>email</th>
                   <th>Phone</th>
                   <th>operation </th>

               </tr>
           </thead>
           <tbody>
                <?php
                include 'classes/students.class.php';
                $student =new students;
                $listeSt= $student->readAllStudents();
                while($data= $listeSt->fetch())
                    {
                ?>
                    <tr>
                        <td><?=$data['id']?></td>
                        <td><?=$data['firstname']?></td>
                        <td><?=$data['lastname']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=$data['phone']?></td>
                        <td><a href="edit.php?id='.$data['id'].'">Editer</a></td>';
                        <td><a href="delete.php?id='.$data['id'].'">Supprimer</a></td>';
                    
                    </tr>
                     <?php 
                      }
                     ?>
           </tbody>

       </table>
   </div> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>