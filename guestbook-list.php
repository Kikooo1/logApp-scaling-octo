<?php
        require('config/config.php');
        require('config/db.php');

        $sql = "SELECT * from person";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        ?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>
                            <tr id="<?php echo $row['id']?>">
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['logdt'];?></td>
                            </tr>
                            <?php }?>      
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>