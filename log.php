<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library --> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/script.js"></script>
  <link rel="stylesheet" href="assets/css/respond.css">
  


  <!-- logo -->
  <link rel="shortcut icon" href="images/Logo.png">

  <title>Donar Details</title>



  <script>

    var citiesByState = {
         Coimbatore: ["Pollachi","Annur","Gandhipuram","Townhall","Sulur","Singanallur","Saibaba colany","Saravanampatti","Mettupalayam"],
         Tiruppur: ["Avinashi","Kangayem","palladam","Udumalai","Vellakovil","Dharapuram","Mangalam","Rayarpuram","Mannarai","Tiruppur Central"],
         Chennai: ["Koyambedu","Adayar","Ambattur","Mylapore","Velachery","Tambaram","T-nagar","Tiruvanmayur","Paris","Sholinganallur"],
         Kanchipuram: ["Neelankarai","Appur","Vallakottai","Walajabad"],
         Tuticorin: ["Tiruvaikuntam"," Kovilpatti","Ottapidaram"," Ettayapuram"," Kayathar"," Sathankulam","Eral","PazhayaKayal","SPIC Nagar","Kulayankarisal"],
         Erode: ["Perundurai"," Sathyamangalam,","Nambiyur"," Thalavadi"," Bhavani"," Gobichettipalayam","Modakurichi","Kodumudi"],
         Dindigul: ["	Attur"," Dindigul East,","Dindigul West"," Gujiliamparai"," Kodaikanal,"," Natham",
         "Oddanchatram","Palani","Vedasandur"],
         Thiruchendur: ["Paramankurichi"," Kulasekaranpattinam","Punnakayal"," Manaduthandupathu"," Mela Thiruchendur"," Mela Authoor","Manapad"],
         Kannyakumari: ["Nagercoil","Thovalai"," Agastheeswaram"," Kalkulam"," Killiyur"," Thiruvattar","Vilavancode",],
         Salem: ["Attur","Edappadi"," Gangavalli"," Mettur","Omalur","Salem South","Salem West","Sankagiri","Pethanaickenpalayam","Valapady","Yercaud","Kadayampatti"],
         Tirchy: ["Manapparai ","Marungapuri "," Srirangam "," Tiruchirappalli West","Tiruchirappalli East",
         "Thiruverumbur","Thiruverumbur ","Lalgudi taluk.","Manachanallur taluk"],
         Tanjore: ["Thanjavur"," Kumbakonam"," Papanasam"," Pattukottai"," Peravurani","Thiruvidaimarudur","Thiruvaiyaru","Budalur"],
         Madurai: ["Madurai South"," 	Madurai North"," Melur","	Vadipatti","Thirumangalam","	Peraiyur","Usilampatti"],
         Dharmapuri: ["Palakkodu","Dharmapuri"," 	Pappireddipatti","		Harur","Pennagaram"],
         Krishnagiri: [" Hosur"," 	Pochampalli","Uthangarai","Shoolagiri","Bargur"," Denkanikottai","Anchetty"],
         Karur: ["Aravakurichii","Karur"," Manmangalam","Pugalur","Bargur","Kulithalai","Krishnarayapuram"," Kadavur"],
         Perambalur:["Veppanthattai", "Perambalur", "Veppur"," Alathur" ],
         Ramanathapuram:["Tiruvadanai","Ramanathapuram","Rameswaram","Paramakudi","Mudukulathur","Kamuthi","Kadaladi"],
         Tirunelveli:["Palayamkottai","Tirunelveli","Ambasamudram","Nanguneri","Radhapuram","Manur","Cheranmahadevi","Tisaiyanvilai","Papanasam"],
         Vellore:["Gudiyattam", "Anaicut","Katpadi","Vellore","Pernambut","KV Kuppam","Arakonam","Walaja","Arcot","Nemili","Tirupattur","Vaniyambadi","Ambur","Natrampalli"],
         Viluppuram :["Viluppuram city","Thiruvennainallur","Tindivanam","Vikravandi","Vanur","Gingee","Marakkanam","Melmalayanur","Kandachipuram"],
         Virudhunagar :["Aruppukkottai","Kariapatti","Rajapalaiyam","Sattur","Sivakasi","Srivilliputhur","Tiruchuli","Virudhunagar:","Watrap"],
         Ariyalur :["Udayarpalayam","Ariyalur","Sendurai"],
         Cuddallore :["Chidambaram", "Cuddalore"," Kattumannarkoil"," Panruti", "Tittakudi", "Kurinjipadi", "Vriddachalam" ],
         Kallakurichi:["Sankarapuram", "Kallakurichi", "Chinnasalem", "Ulundurpet", "Thirukovilur","Kalvarayanmalai"],
         Myladudurai:["Kuthalam","Mayiladudurai","Sirkazhi","Tharangambadi"],
         Nagapattinam:["Sembarankovil","Thirumarugal","Kilvelur","Talaynar","Vedaranniyam","Nagapattinam"],
         Namakkal :["Rasipuram","Mohanur","Velur","Komarapalayam","Pallipalayam","Vennandur"],
         Pudukottai:["Alangudi","Aranthangi","AvadaiyarKoil","Illupar","Karambakkudi","Kulathur","Manamelkudi","Ponnamaravathi","Pudukottai"],
         Salem :["Attur","Gangavalli","Edappadi","Mettur","Omalur","Salem","SAnkagiri","Vazhapadi","Yercaud"],
         Nilgiris :["Udhagamandalam","Kundah","Conoor","Kotagiri","Gudalur","Pandalur"],
         Tenkasi : ["Shencottai","Tenkasi","Kadayanallur","Veerakeralampudur","Alangulam"],
         Theni :["Uthamapalayam","Periyakulam","Andipatti","Theni","Bodinayakanur"],
         Tiruvallur :["Ponneri","Gummidipoondi","Uthukkottai","Tiruvallur","Ponamalle","Tiruttani","Pallipattu","RK Pet"],
         Thiruvannamalai:["Polur","Thiruvannamalai","Thandarampattu","Kul Pennathur","Arani","Cheyyar","Kalasapakkam","Javvadhumalai","Vandavasi","Chengam","Chettpet","Vembakkam"],
         Thiruvarur:["kudavasal","Mannargudi","Nannilam","Needamangalam","Thiruturaipooondi","Tiruvarur"],
        }
         function makeSubmenu(value) {
         if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
         else {
         var citiesOptions = "";
         for(cityId in citiesByState[value]) {
         citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
         }
         document.getElementById("citySelect").innerHTML = citiesOptions;
         }
         }
         function displaySelected() { var country = document.getElementById("countrySelect").value;
         var city = document.getElementById("citySelect").value;
         alert(country+"\n"+city);
         }
         function resetSelection() {
         document.getElementById("countrySelect").selectedIndex = 0;
         document.getElementById("citySelect").selectedIndex = 0;
    }

   </script>


</head>
<body style="background-color: #fc0a12;">

    <div class="heart">
        <center><h1>We Heartly welcomes you to enter your details</h1></center>
    </div>


<section class="donator">
    <div class="donar-log">
        <img src="images/bloodtree.png">
        <h1>DONOR DETAILS</h1>


        <form action="donar.php" method="post" id="donate">

            <input type ="text" id="input" class="username" name="name" placeholder="Enter Your Name" required><br><br>
            
            <select id="donarblood" name="blood-group" required>
             <option value="">Blood Group</option>
             <option value="O+">O+</option>
             <option value="O-">O-</option>
             <option value="AB+">AB+</option>
             <option value="AB">AB-</option>
             <option value="A+">A+</option>
             <option value="A-">A-</option>
             <option value="B+">B+</option>
             <option value="B-">B-</option>
             <option value="A1B+">A1B+</option>
             <option value="A1B-">A1B-</option>
             
            </select><br><br>
 
           <input type ="text"   onfocus="(this.type='date')"  name="date" id="txtDate"   max="2002-12-31" placeholder="Enter D-O-B" required><br><br>
 
           <input type ="number" name="age" id="input"   min="18" placeholder="Enter Age"  oninvalid="this.setCustomValidity('Age must me Above 18')"
    oninput="this.setCustomValidity('')"  required><br><br>
 
 
           <input type ="number" name="weight" min="50"  class="weight" id="input" placeholder="Enter weight" oninvalid="this.setCustomValidity('Weight must be above 50')"
    oninput="this.setCustomValidity('')"  required><br><br>
 
           <select id="countrySelect" name="location" size="1" onchange="makeSubmenu(this.value)">
             <option value="" disabled selected>location</option>
             <option value="Ariyalur">Ariyalur </option>
             <option value="Coimbatore">Coimbatore</option>
             <option value="Chennai">Chennai</option>
             <option value="Cuddallore">Cuddallore</option>
             <option value="Dindigul">Dindigul</option>
             <option value="Dharmapuri">Dharmapuri</option>
             <option value="Erode">Erode</option>
             <option value="Karur">Karur</option>
             <option value="Kanchipuram">Kanchipuram</option>
             <option value="Kannyakumari">Kannyakumari</option>
             <option value="Kallakurichi">Kallakurichi</option>
             <option value="Krishnagiri">Krishnagiri</option>
             <option value="Madurai">Madurai</option>
             <option value="Myladudurai">Myladudurai</option>
             <option value="Nagapattinam">Nagapattinam</option>
             <option value="Namakkal">Namakkal</option>
             <option value="Perambalur">Perambalur </option>
             <option value="Pudukottai">Pudukottai</option>
             <option value="Ramanathapuram">Ramanathapuram</option>
             <option value="Salem">Salem</option>
             <option value="Tiruppur">Tiruppur</option>
             <option value="Nilgiris">The Nilgiris</option>
             <option value="Tuticorin">Tuticorin</option>
             <option value="Tirchy">Tirchy</option>
             <option value ="Tenkasi">Tenkasi</option>
             <option value="Tanjore">Thanjavur</option>       
             <option value="Tirunelveli">Tirunelveli</option>
             <option value="Theni">Theni</option>
             <option value="Tiruvallur">Tiruvallur</option>
             <option value="Thiruchendur">Thiruchendur</option>
             <option value="Thiruvannamalai">Thiruvannamalai</option>
             <option value="Thiruvarur">Thiruvarur</option>
             <option value="Vellore">Vellore</option>
             <option value="Viluppuram">Viluppuram</option>
             <option value="Virudhunagar">Virudhunagar</option>
               
            
             
             </select><br><br>
 
           <select id="citySelect" name="city" size="1" >
             <option value="" disabled selected>Choose City</option>
             <option></option>
           </select>
 
 
           <br><input type ="text" name="address" id="input" placeholder="Enter your Address" required><br><br>
 
           <input type ="text" name="mobile-number" class="ph-no" id="input" placeholder="Enter Mobile No" required><br><br>
                 <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  

       
           <div class="grup">
             <input type="submit" class="button" value="Submit" id="submit">
           </div>
        </form>
 

    </div>
</section>

</body>
</html>

<?php
    unset($_SESSION["error"]);
?>