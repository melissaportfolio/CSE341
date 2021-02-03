<?php 
function registerUser($customer_id, $first_name, $last_name, $street, $city, $state, $zip, $email, $password){
    $db = get_db();
    $sql = 'INSERT INTO customer (customer_id, first_name, last_name, street, city, state, zip, email, password)
    VALUES(:customer_id, :first_name, :last_name, :street, :city, :state, :zip, :customer_email, :customer_password)';

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

?>