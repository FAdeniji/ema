<?php

    $siteName = "Ema Rentals";
    $metaName = "Ema Rentals";
    $metaDescription = "EMA Rentals, Affordable rentals in Magodo, Planning an event on the mainland, Weddings, Birthdays, Naming, Ceremonies, Church events";
    
    $products[0]->Id = 1;
    $products[0]->ProductName = 'Armless Chair';
    $products[0]->DisplayName = 'Armless Chair';
    $products[0]->ShortDescription = 'Lorem Ipsum 1';
    $products[0]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[0]->UnitPrice = 2500;
    $products[0]->UnitNumber = 12;
    $products[0]->IsActive = true;
    $products[0]->Rating = 4;
    $products[0]->PictureUrl = 'assets/products/armless.jpeg';
    $products[0]->AvailableColours = "White";

    $products[1]->Id = 2;
    $products[1]->ProductName = 'Royale Chair';
    $products[1]->DisplayName = 'Royale Chair';
    $products[1]->ShortDescription = 'Lorem Ipsum 2';
    $products[1]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[1]->UnitPrice = 4500;
    $products[1]->UnitNumber = 12;
    $products[1]->IsActive = true;
    $products[1]->Rating = 4;
    $products[1]->PictureUrl = 'assets/products/royale.jpeg';
    $products[1]->AvailableColours = "White";

    $products[2]->Id = 3;
    $products[2]->ProductName = 'Armless Chair';
    $products[2]->DisplayName = 'Armless Chair';
    $products[2]->ShortDescription = 'Lorem Ipsum 1';
    $products[2]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[2]->UnitPrice = 2500;
    $products[2]->UnitNumber = 12;
    $products[2]->IsActive = true;
    $products[2]->Rating = 4;
    $products[2]->PictureUrl = 'assets/products/armless.jpeg';
    $products[2]->AvailableColours = "White";

    $products[3]->Id = 4;
    $products[3]->ProductName = 'Royale Chair';
    $products[3]->DisplayName = 'Royale Chair';
    $products[3]->ShortDescription = 'Lorem Ipsum 2';
    $products[3]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[3]->UnitPrice = 4500;
    $products[3]->UnitNumber = 12;
    $products[3]->IsActive = true;
    $products[3]->Rating = 4;
    $products[3]->PictureUrl = 'assets/products/royale.jpeg';
    $products[3]->AvailableColours = "White";

    $products[4]->Id = 5;
    $products[4]->ProductName = 'Armless Chair';
    $products[4]->DisplayName = 'Armless Chair';
    $products[4]->ShortDescription = 'Lorem Ipsum 1';
    $products[4]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[4]->UnitPrice = 2500;
    $products[4]->UnitNumber = 12;
    $products[4]->IsActive = true;
    $products[4]->Rating = 4;
    $products[4]->PictureUrl = 'assets/products/armless.jpeg';
    $products[4]->AvailableColours = "White";

    $products[5]->Id = 6;
    $products[5]->ProductName = 'Royale Chair';
    $products[5]->DisplayName = 'Royale Chair';
    $products[5]->ShortDescription = 'Lorem Ipsum 2';
    $products[5]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[5]->UnitPrice = 4500;
    $products[5]->UnitNumber = 12;
    $products[5]->IsActive = true;
    $products[5]->Rating = 4;
    $products[5]->PictureUrl = 'assets/products/royale.jpeg';
    $products[5]->AvailableColours = "White";

    $products[6]->Id = 7;
    $products[6]->ProductName = 'Armless Chair';
    $products[6]->DisplayName = 'Armless Chair';
    $products[6]->ShortDescription = 'Lorem Ipsum 1';
    $products[6]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[6]->UnitPrice = 2500;
    $products[6]->UnitNumber = 12;
    $products[6]->IsActive = true;
    $products[6]->Rating = 4;
    $products[6]->PictureUrl = 'assets/products/armless.jpeg';
    $products[6]->AvailableColours = "White";

    $products[7]->Id = 8;
    $products[7]->ProductName = 'Royale Chair';
    $products[7]->DisplayName = 'Royale Chair';
    $products[7]->ShortDescription = 'Lorem Ipsum 2';
    $products[7]->LongDesription = 'Lorem ipsun sfadsd asdasdsf sdfkjhsbdfkjb dsfsdkjfh sdkfdsfkjds fsdkjfh sdfd';
    $products[7]->UnitPrice = 4500;
    $products[7]->UnitNumber = 12;
    $products[7]->IsActive = true;
    $products[7]->Rating = 4;
    $products[7]->PictureUrl = 'assets/products/royale.jpeg';
    $products[7]->AvailableColours = "White";

    // echo '<pre>'; print_r($products); echo '</pre>';

    function SearchById($IdValue, $productArray) { 
        foreach ($productArray as $prod) {
            if($IdValue == $prod->Id) {
                return $prod;
            }
        }
        
    }

    function GetRating($rating) {
        $ratinghtml = '<ul class="list-unstyled d-flex justify-content-center mb-1"><li>';
        for($i = 0; $i < $rating; $i++) {
            $ratinghtml = $ratinghtml + '<i class="text-warning fa fa-star"></i>';
        }                               
        $ratinghtml = $ratinghtml + '</li></ul>';
        return $ratinghtml;
    }
?>