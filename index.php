<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Task</title>

</head>
<style>.button{background-color:#337ab7; border-color:#337ab7;color:#fff;padding:2px; font-size:14px;}</style>
<?php 
//Given Array	
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);	?>
<body>

<table width="200" border="1" align="center" cellpadding="5" cellspacing="5">
  <tbody>
    <tr>
      <td><strong>S.No</strong></td>
      <td><strong>Action</strong></td>
    </tr>
   
    <?php foreach ($people as $key => $row) {?>
      <tr>  
      <td> <?php echo $id[$key]  = $row['id'];?></td>
      <td>
	 <script>
         function view<?php echo $row['id'];?>(){
        alert("<?php echo "Full Name  ".$first_name[$key] = $row['first_name'].$last_name[$key] = $row['last_name']. "  Email  ". $email[$key] = $row['email']; ?>"); }</script>
     <input type="button" id="view<?php echo $row['id'];?>" value="View Details" onclick="view<?php echo $row['id'];?>()" class="button"/>
       </td>
	</tr>
	<?php } ?>  
  </tbody>
</table>

</body>
</html>

