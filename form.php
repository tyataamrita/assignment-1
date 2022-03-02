


<?php

$students =[
   0=> [
  'name' => 'Amrita Tyata',
  'address' => 'bhaktapur',
  'email' => 'amritatyata@gmail.com',
  'contact' => 9860051207,
  ],
  1 => [
    'name' => 'Raaz Karki',
    'address' => 'duwakot',
    'email' => 'raaz@gmail.com',
    'contact' => 9861923684,
  ],
  2 => [
    'name' => 'Binni Thapa',
    'address' => 'Changu',
    'email' => 'binni12@gmail.com',
    'contact' => 9810101451,
  ],
  3 => [
    'name' => 'Anupa Raut',
    'address' => 'Sallaghari',
    'email' => 'anuparaut@gmail.com',
    'contact' => 9861923685,
  ],
];
    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];
        if(isset($students[$student_id])){
            $student = $students[$student_id];
        ?>
        <ul>
            <li>Name: <?php echo $student['name'];?> </li>
            <li>Address: <?php echo $student['address'];?> </li>
            <li>Email: <?php echo $student['email'];?> </li>
            <li>Contact: <?php echo $student['contact'];?> </li>
        </ul>



        <form action="form.php" method='POST'>
            <label>
                User Name: <input type="text" name="username" value="<?php echo $student['name'];?>">
            </label>
            
            <label>
                Address: <input type="text" name="address" value="<?php echo $student['address'];?>">
            </label>
            <label>
                Email: <input type="email" name="email" value="<?php echo $student['email'];?>">
            </label>
            <label>
                Contact: <input type="text" name="contact" value="<?php echo $student['contact'];?>">
            </label>

            <input type="submit" value="submit">
            </form>
            <?php
        }
        else{
            echo 'undefined student record';
            exit;
        }
    }
    else{


          ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>STUDENT NAME</th>
                        <th>STUDENT ADDRESS</th>
                        <th>STUDENT EMAIL</th>
                        <th>STUDENT CONTACT</th>
                        <th>STUDENT UPDATE</th>
                    </tr>
                </thead>
                <tbody>
                    
                  <?php
                    foreach($students as $key => $student){
                    ?>
                        <tr>
                            <td> <?php echo $student['name']?></td>
                            <td> <?php echo $student['address']?></td>
                            <td> <?php echo $student['email']?></td>
                            <td> <?php echo $student['contact']?></td>
                            <td> <a href="form.php/?student_id=<?php echo $key; ?>">Edit</a> / <a href="">Delete</a></td>
                        </tr>
                      <?php
                    }
                    ?>
            
                </tbody>
            </table>
            <?php
    }
    ?>
            