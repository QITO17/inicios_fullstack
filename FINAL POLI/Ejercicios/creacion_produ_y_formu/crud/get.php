<?php
            $host = 'localhost';

            $user = 'root';

            $pass = '';

            $bd = 'rappi';

            $conextion = mysqli_connect($host, $user, $pass, $bd);

            $query = mysqli_query($conextion, "SELECT * FROM products");

             

            while($row = mysqli_fetch_array($query)){
                ?>
                <div class="card--productos--main">
                    <div>
                        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYMZ9yyfCE4OBoJ-VgAKuhdf0th34Adz1xVZ6BJXA3je_TGpiS6_rADRfoaDIqvRNG104&usqp=CAU" alt=""> -->
                        <img src="./creacion_produ_y_formu/<?php echo $row['image1']; ?>" alt="">
                    </div>


                    <div class="info--productos">
                        <div>
                            <p><?php echo $row['referencia']; ?></p>
                            <p><?php echo $row['nombre']; ?></p>
                        </div>
                        <p><?php echo $row['descripcion']; ?></p>
                        <p>$<?php echo $row['precio']; ?></p>
                    </div>
                </div>
            <?php  

            }
?>