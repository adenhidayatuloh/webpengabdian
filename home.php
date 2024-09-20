<?php

include 'config.php';
session_start();

// page redirect
if (isset($_SESSION['usermail']) && !empty($_SESSION['usermail'])) {
  $usermail = $_SESSION['usermail'];
} else {
  header("location: index.php");
  exit();
}

// $usermail="";
// $usermail=$_SESSION['usermail'];
// if($usermail == true){

// }else{
//   header("location: index.php");
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Hotel Tikako</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
     
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>

    

</head>





<body>
  <nav>
    <div class="logo">
      <img class="tikakologo" src="./image/LOGO.png" alt="logo">
      <!-- <p>Tikako</p> -->
    </div>
    <ul>
      <li><a href="#firstsection">Beranda</a></li>
      <li><a href="#secondsection">Kamar</a></li>
      <li><a href="#thirdsection">Fasilitas</a></li>
      <li><a href="#contactus">Kontak</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/hotel1.jpg">
            <div class="welcomeline">
          <h1 class="welcometag">Tikako Caffe dan Java Culinary </h1>
          <p>Berlibur ke Dieng, tak ada salahnya jika mampir ke Tikako Caffe Java Culinary di Desa Kalilunjar, Kecamatan Banjarmangu, Banjarnegara. Udaranya sejuk karena dikelilingi oleh rimbunnya pepohonan. Suara gemericik air sungai menambah syahdu suasana. Selain menikmati alam, pengunjung dapat mencicipi aneka kuliner tradisional di gazebo-gazebo yang menyerupai rumah mini atau meja kursi yang diletakkan di atas sungai.</p>
        </div>  
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel2.jpg">
            <div class="welcomeline">
          <h1 class="welcometag">Tikako Caffe dan Java Culinary </h1>
          <p>Berlibur ke Dieng, tak ada salahnya jika mampir ke Tikako Caffe Java Culinary di Desa Kalilunjar, Kecamatan Banjarmangu, Banjarnegara. Udaranya sejuk karena dikelilingi oleh rimbunnya pepohonan. Suara gemericik air sungai menambah syahdu suasana. Selain menikmati alam, pengunjung dapat mencicipi aneka kuliner tradisional di gazebo-gazebo yang menyerupai rumah mini atau meja kursi yang diletakkan di atas sungai.</p>
        </div>  
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel3.jpg">
            <div class="welcomeline">
          <h1 class="welcometag">Tikako Caffe dan Java Culinary </h1>
          <p>Berlibur ke Dieng, tak ada salahnya jika mampir ke Tikako Caffe Java Culinary di Desa Kalilunjar, Kecamatan Banjarmangu, Banjarnegara. Udaranya sejuk karena dikelilingi oleh rimbunnya pepohonan. Suara gemericik air sungai menambah syahdu suasana. Selain menikmati alam, pengunjung dapat mencicipi aneka kuliner tradisional di gazebo-gazebo yang menyerupai rumah mini atau meja kursi yang diletakkan di atas sungai.</p>
        </div>  
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel4.jpg">
            <div class="welcomeline">
          <h1 class="welcometag">Tikako Caffe dan Java Culinary </h1>
          <p>Berlibur ke Dieng, tak ada salahnya jika mampir ke Tikako Caffe Java Culinary di Desa Kalilunjar, Kecamatan Banjarmangu, Banjarnegara. Udaranya sejuk karena dikelilingi oleh rimbunnya pepohonan. Suara gemericik air sungai menambah syahdu suasana. Selain menikmati alam, pengunjung dapat mencicipi aneka kuliner tradisional di gazebo-gazebo yang menyerupai rumah mini atau meja kursi yang diletakkan di atas sungai.</p>
        </div>  
        </div>

    
x
      <!-- bookbox -->
      <div id="guestdetailpanel">
        <form action="" method="POST" enctype="multipart/form-data" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVASI</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Informasi Tamu</h4>
                    <input type="text" name="Name" placeholder="Masukkan Nama Lengkap">
                    <input type="email" name="Email" placeholder="Masukkan Email">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Pilih Negara</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Masukkan Nomor Telepon">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Informasi Reservasi</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Tipe Kamar</option>
                        <option value="Kamar Atas">Kamar Atas</option>
                        <option value="Kamar Bawah">Kamar Bawah</option>
						            <option value="Kamar Besar">Kamar Besar</option>
                    </select>

          <div class="datesection">
          <span>
            <label for="cin"> Check-In</label>
            <input name="cin" type="date" onchange="calculateTotalPrice()">
          </span>
          <span>
            <label for="cin"> Check-Out</label>
            <input name="cout" type="date" onchange="calculateTotalPrice()">
          </span>
          </div>
            <h4>Total Harga</h4>
              <p id="totalPrice">Rp. 0</p>

            <h4>Upload Bukti Pembayaran</h4>
            <input type="file" name="payment_proof" accept="image/*" required> 
                </div>
            </div>
            
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Kirim</button>
            </div>
        </form>

        
            <?php       
                      
            if (isset($_POST['guestdetailsubmit'])) {
                // Pastikan semua input form telah diisi
                $Name = isset($_POST['Name']) ? mysqli_real_escape_string($conn, $_POST['Name']) : '';
                $Email = isset($_POST['Email']) ? mysqli_real_escape_string($conn, $_POST['Email']) : '';
                $Country = isset($_POST['Country']) ? mysqli_real_escape_string($conn, $_POST['Country']) : '';
                $Phone = isset($_POST['Phone']) ? mysqli_real_escape_string($conn, $_POST['Phone']) : '';
                $RoomType = isset($_POST['RoomType']) ? mysqli_real_escape_string($conn, $_POST['RoomType']) : '';
                $cin = isset($_POST['cin']) ? mysqli_real_escape_string($conn, $_POST['cin']) : '';
                $cout = isset($_POST['cout']) ? mysqli_real_escape_string($conn, $_POST['cout']) : '';
                
                // Hitung jumlah hari
                $date1 = new DateTime($cin);
                $date2 = new DateTime($cout);
                $interval = $date1->diff($date2);
                $nodays = $interval->days;

                // Cek apakah file telah diunggah
                if (isset($_FILES['payment_proof']['name']) && !empty($_FILES['payment_proof']['name'])) {
                    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
                    $fileType = mime_content_type($_FILES['payment_proof']['tmp_name']);
                    
                    if (in_array($fileType, $allowedTypes)) {
                        $payment_proof = $_FILES['payment_proof']['name'];
                        $payment_proofTemp = $_FILES['payment_proof']['tmp_name'];

                        // Tentukan direktori tempat file akan diupload
                        $uploadDir = 'uploads/';
                        $uploadFilePath = $uploadDir . basename($payment_proof);

                        // Pindahkan file dari lokasi sementara ke direktori tujuan
                        if (move_uploaded_file($payment_proofTemp, $uploadFilePath)) {
                            // Hash email
                            $hashedEmail = password_hash($Email, PASSWORD_BCRYPT);
                            $sta = "NotConfirm";

                            // Enkripsi detail pesanan dengan AES
                            $encryption_key = openssl_random_pseudo_bytes(32);
                            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                            $orderDetails = json_encode(array(
                                'Name' => $Name,
                                'Country' => $Country,
                                'Phone' => $Phone,
                                'RoomType' => $RoomType,
                                'cin' => $cin,
                                'cout' => $cout,
                                'nodays' => $nodays // tambahkan nodays di sini
                            ));
                            $encryptedOrderDetails = openssl_encrypt($orderDetails, 'aes-256-cbc', $encryption_key, 0, $iv);
                            $encryptedData = base64_encode($encryptedOrderDetails . '::' . $iv);

                            // Debugging: Pastikan semua data valid
                            echo "Data to be inserted: ";
                            echo "Name: $Name, Email: $Email, Country: $Country, Phone: $Phone, RoomType: $RoomType, Check-in: $cin, Check-out: $cout, Payment Proof: $payment_proof, Encrypted Data: $encryptedData, Hashed Email: $hashedEmail, No of Days: $nodays";

                            // Query prepared statement untuk menghindari SQL Injection
                            $stmt = $conn->prepare("INSERT INTO roombook (Name, Email, Country, Phone, RoomType, cin, cout, nodays, stat, payment_proof, encrypted_data, hashed_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                            if ($stmt) {
                                $stmt->bind_param( 'ssssssssssss',$Name, $Email, $Country, $Phone, $RoomType, $cin, $cout, $nodays, $sta, $payment_proof, $encryptedData, $hashedEmail);

                                if ($stmt->execute()) {
                                  $whatsappNumber = '6285600405568';
                                  $whatsappMessage = urlencode('Halo Admin, saya telah melakukan reservasi kamar.');
                                  $whatsappLink = "https://wa.me/$whatsappNumber?text=$whatsappMessage";
                                    echo "<script>swal({
                                        title: 'Reservation successful',
                                        icon: 'success',
                                        buttons: {
                confirm: {
                    text: 'Hubungi Admin',
                    value: true,
                    visible: true,
                    className: 'btn-success',
                    closeModal: true
                }
            }
        }).then((willContact) => {
            if (willContact) {
                window.location.href = '$whatsappLink';
            }
                                    });</script>";
                                } else {
                                    // Debugging: Tampilkan pesan error dari query
                                    echo "Error in query execution: " . $stmt->error;
                                }

                                $stmt->close();
                            } else {
                                echo "Prepared statement error: " . $conn->error;
                            }
                        } else {
                            echo "<script>swal({
                                title: 'File upload failed',
                                icon: 'error',
                            });</script>";
                        }
                    } else {
                        echo "<script>swal({
                            title: 'Invalid file type',
                            icon: 'error',
                        });</script>";
                    }
                } else {
                    echo "<script>swal({
                        title: 'Please upload payment proof',
                        icon: 'error',
                    });</script>";
                }
            }
            ?>
    </div>

    </div>
  </section>
    
  <section id="secondsection"> 
    <!-- <img src="./image/hotel1.jpg"> -->
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head">≼ Kamar ≽</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Kamar Atas</h2>
            <p>harga : Rp. 350.000</p>
            <div class="services">
              <i class="fa-solid fa-tv"></i>
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-shower"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
            <button class="btn btn-secondary" onclick="window.open('https://www.tiket.com/homes/indonesia/tikako-cottage-501001642571150335?adult=1&room=1&source=global_search', '_blank')">Book on tiket.com</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Kamar Bawah</h2>
            <p>harga : Rp. 300.000</p>
            <div class="services">
              <i class="fa-solid fa-tv"></i>
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
            <button class="btn btn-secondary" onclick="window.open('https://www.tiket.com/homes/indonesia/tikako-cottage-501001642571150335?adult=1&room=1&source=global_search', '_blank')">Book on tiket.com</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Kamar Besar</h2>
            <p>harga : Rp. 400.000</p>
            <div class="services">
              <i class="fa-solid fa-tv"></i>
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
            <button class="btn btn-secondary" onclick="window.open('https://www.tiket.com/homes/indonesia/tikako-cottage-501001642571150335?adult=1&room=1&source=global_search', '_blank')">Book on tiket.com</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="thirdsection">
    <h1 class="head">≼ Fasilitas ≽</h1>
    <div class="facility">
      <div class="box">
        <h2>Kolam Renang</h2>
      </div>
      <div class="box">
        <h2>Bebek Air</h2>
      </div>
      <div class="box">
        <h2>Karaoke</h2>
      </div>
    </div>
  </section>
  <section id="fourthsection">
    <h1 class="head">≼ Servis Tambahan ≽</h1>
    <div class="facility">
      <p>Nomor Pokdarwis : 087737178696</p>
    </div>
  </section>

  <section id="contactus">
    <div class="social">
      <i class="fa-brands fa-instagram">
        <a>tikakocaffejavaculinary</a>
      </i>
    </div>
    <div class="createdby">
      <h5>Created by @PPTG</h5>
    </div>
  </section>
 
  
</body>

<script>

// var bookbox = document.getElementById("guestdetailpanel");

function openbookbox() {
  // document.getElementById('guestdetailpanel').style.display = 'block';
    var bookbox = document.getElementById("guestdetailpanel");
    bookbox.style.display = "flex";
}


function closebox() {
  var bookbox = document.getElementById("guestdetailpanel");
  bookbox.style.display = "none";
}

function calculateTotalPrice() {
const checkIn = document.querySelector('input[name="cin"]').value;
const checkOut = document.querySelector('input[name="cout"]').value;
const roomType = document.querySelector('select[name="RoomType"]').value;

if (checkIn && checkOut && roomType) {
    const date1 = new Date(checkIn);
    const date2 = new Date(checkOut);
    const timeDiff = Math.abs(date2 - date1);
    const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

    let pricePerNight = 0;
    switch (roomType) {
        case 'Kamar Atas':
            pricePerNight = 350000;
            break;
        case 'Kamar Bawah':
            pricePerNight = 300000;
            break;
        case 'Kamar Besar':
            pricePerNight = 400000;
            break;
    }

    const totalPrice = diffDays * pricePerNight;
    document.getElementById('totalPrice').innerText = 'Rp. ' + totalPrice.toLocaleString();
}
}
// document.querySelectorAll('.bookbtn').forEach(button => {
//   button.addEventListener('click', openbookbox);
// });


</script>

</html>