<?php 
function registerUser($customer_id, $first_name, $last_name, $street, $city, $state, $zip, $email, $password){
    $db = get_db();
    $sql = 'INSERT INTO customer (customer_id, first_name, last_name, street, city, state, zip, email, password)
    VALUES(:customer_id, :first_name, :last_name, :street, :city, :state, :zip, :email, :password)';

    $stmt = $db->prepare($sql);

    $stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_STR);
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindValue(':street', $street, PDO::PARAM_STR);
    $stmt->bindValue(':city', $city, PDO::PARAM_STR);
    $stmt->bindValue(':state', $state, PDO::PARAM_STR);
    $stmt->bindValue(':zip', $zip, PDO::PARAM_INT);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);

    $stmt->execute();

    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

   //Check for existing email address
   function checkExistingEmail($email) {
    $db =  get_db();
    $sql = 'SELECT email FROM customer WHERE email = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if(empty($matchEmail)){
        return 0;
        // echo 'Nothing found';
        // exit;
       } else {
        return 1;
        // echo 'Match found';
        // exit;
       }
   }

   function deleteCustomer($customer_id) {
    $db = get_db();
    $sql = 'DELETE FROM customer WHERE customer_id = :customer_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
  }
?>