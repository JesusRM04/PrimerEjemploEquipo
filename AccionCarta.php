<?php
date_default_timezone_set("America/Lima");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

$servidor="127.0.0.1:33065";
$cuenta="root";
$password="";
$bd="tienda";
$conexion = new mysqli($servidor,$cuenta,$password,$bd);
    if ($conexion->connect_errno){
         die('Error en la conexion');
    }


if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){

    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){

        $productID = $_REQUEST['id'];
        // get product details
        $query = $conexion->query("SELECT * FROM productos WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['Nombre'],
            'price' => $row['Precio'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'Articulos.php':'Articulos.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: VerCarta.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $conexion->query("INSERT INTO orden (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $conexion->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orden_articulos (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $conexion->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: OrdenExito.php?id=$orderID");
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: Pagos.php");
        }
    }else{
        header("Location: Articulos.php");
    }
}else{
    header("Location: Articulos.php");
}

?>