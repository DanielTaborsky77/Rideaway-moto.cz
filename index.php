<?php
    if(isset($_POST["reserve"])){        
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $email = $_POST["email"];
        $telefon = $_POST["telefon"];
        $od = $_POST["od"];
        $do = $_POST["do"];
        $vyber = $_POST["vyber"];
        $gdpr = $_POST["gdpr"];
        $age = $_POST["age"];
        $terms = $_POST["terms"];

        $to = "info@rideaway-moto.cz";
        $subject = "Testovací e-mail";
        $message = $jmeno . " " . $prijmeni . "\n";
        $message .= "Tel. " . $telefon . "\n";
        $message .= "Od: " . $od . " " . "Do: " . $do . "\n";
        $message .= "Motorka: " . $vyber . "\n";
        $message .= "Souhlasím s podmínkami ochrany osobních údajů: " . $gdpr . "\n";
        $message .= "Je mi 18 a víc: " . $age . "\n";
        $message .= "souhlasím s obchodními a smluvními podmínkami:" . $terms . "\n";
        $from = $email;
        $headers = "From: $from\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        if(mb_send_mail($to, $subject, $message, $headers)) {
            echo '
            <div id="email-sended-modal" class="email-sended">

            <div class="email-modal-content">

                <h2>Rezervace byla úspěšně odeslána</h2>
                <p>Během pár hodin se vám ozveme s potvrzením termínu rezervace.</p>

                <div class="button-email-modal">

                    <button id="close-email-modal" class="close-email-modal">Zavřít</button>

                </div>

            </div>

            </div>
            ';
        }
    }
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-language" content="cs">
    <meta name="author" content="Daniel Táborský">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="snippet,archive">
    <meta name="google-site-verification" content="k7nFxenfdVuhK_I-K-qoLHoaJjChidm8UpFkQq9wxSI">
    <meta name="description" content="Půjčte si od nás snadno motocykl na Vámi zvolenou dobu. S našemi službami Vám garantujeme přiměřenou cenu a především super zážitek!">
    <meta property="og:description" content="Půjčte si od nás snadno motocykl na Vámi zvolenou dobu. S našemi službami Vám garantujeme přiměřenou cenu a především super zážitek!">
    <meta property="og:image" content="https://rideaway-moto.cz/Images/logoRM.png">
    <meta property="og:title" content="Rideaway-moto.cz | Půjčovna motocyklů">
    <meta property="og:url" content="https://www.rideaway-moto.cz/">
    <meta property="og:site_name" content="Rideaway-moto.CZ">
    <meta name="keywords" content="Půjčovna motocyklů Yamaha, Půjčovna motocyklů Ústecký kraj, Půjčovna Motocyklů Klášterec ,Půjčovna motorek, Půjčovna, Klášterec, Ústecký kraj, motopůjčovna, motorky">
    <meta name="generator" content="Visual Studio Code">
    <title>Rideaway-moto.cz | Půjčovna motocyklů</title>
    <link rel="image_src" href="https://rideaway-moto.cz/Images/logoRM.png">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="icon" href="logo.ico" type="image/x-icon">
</head>

<!-- Cookies -->

<!-- Google analitics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-1KDQNF0WFB"></script>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const cookieModal = document.getElementById("cookie-modal");
    const consentButton = document.getElementById("consent-button");
    const rejectButton = document.getElementById("reject-button");

    // Check if the user has previously given consent by checking a cookie or other storage

    const hasGivenConsent = document.cookie.includes("cookieConsent=accepted") || localStorage.getItem("cookieConsent") === "accepted";

    if (!hasGivenConsent) {
        // If the user has not given consent, display the modal
        cookieModal.style.display = "flex";

        // Event listener for the consent button

        consentButton.addEventListener("click", function () {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-1KDQNF0WFB');
            // Set a cookie and/or local storage to record user's consent
            document.cookie = "cookieConsent=accepted; expires=Wed, 01 Jan 2030 00:00:00 UTC; path=/";
            localStorage.setItem("cookieConsent", "accepted");
            cookieModal.style.display = "none";
        });

        // Event listener for the reject button

        rejectButton.addEventListener("click", function () {

            // Perform necessary actions when the user rejects cookies
            cookieModal.style.display = "none";
        });
    }
    else{
        cookieModal.style.display = "none";
    }
});

</script>

<body>
    <!-- Modální okno pro příjmutí nebo odmítnutí cookies -->

    <div id="cookie-modal" class="modal">

        <div class="modal-content">

            <h2>Souhlas s použitím cookies</h2>
            <p>Tato webová stránka používá cookies k zlepšení uživatelského zážitku.</p>

            <div class="button-container">

                <button id="consent-button" class="agree-button">Souhlasím</button>
                <button id="reject-button" class="declaine-buttton">Nesouhlasím</button>

            </div>

        </div>

    </div>

    <!-- Navigace -->

    <nav class="nav" id="nav">

        <div class="logoNav">

            <a href="#home" class="linkLogo"><img src="Images/logo1.png" width="250px" alt=""></a>

        </div>

        <div class="linksNav">

            <a href="#ourMotos" class="animated-link" id="link1">Naše motocykly</a>
            <a href="#aboutUs" class="animated-link" id="link2">O nás</a>
            <a href="#reservation" class="animated-link" id="link3">Kontakty</a>
            <a href="tel:+420737089941" class="animated-link" id="link4">+420 737 089 941</a>
            <a href="#reservation" ><button class="reserveNav">REZERVOVAT</button></a>

        </div>

    </nav>

    <!-- Responzivní hamburger menu -->

    <div class="resNav">

        <div role="navigation" class="navigation">

            <div id="menuToggle">

                <input type="checkbox" />
                <span id="line1"></span>
                <span id="line2"></span>
                <span id="line3"></span>

                <ul id="menu">
                    <a href="#home"><li style="margin-bottom: 50px;"><img src="Images/logo1.png" width="210px" alt=""></li></a>
                    <a href="#ourMotos"><li>Naše motocykly</li></a>
                    <a href="#aboutUs"><li>O nás</li></a>
                    <a href="#reservation"><li>Kontakty</li></a>
                    <a href="tel:+420737089941"><li>+420 737 089 941</li></a>
                    <a href="#reservation"><Button class="burgerReserve">REZERVOVAT</Button></a>
                </ul>

            </div>

        </div>

        <div class="burgerNavLogo">
            <a href="#home" ><img src="Images/logo1.png" width="250px" alt=""></a>
        </div>

    </div>

    <!-- Banner -->

    <div class="banner" id="home">

        <div class="leftSideBanner">

            <h1>Půjčovna motocyklů</h1>
            <h2>Cesta jednou stopou ke splnění snu!</h2>
            <a href="#reservation"><button class="reserveBanner">REZERVOVAT</button></a>

        </div>

        <div class="rightSideBanner">

            <div class="plus"><img src="Images/mail1.png" alt=""><h3>Snadná rezervace</h3></div>
            <div class="plus"><img src="Images/money.png" alt=""><h3>Přívětivá cena</h3></div>

        </div>

    </div>

    <!-- Naše motorky -->

    <div id="ourMotos" class="ourMotos">

        <div class="motosTitle">

            <h1>Naše motocykly</h1>

        </div>

        <h4>Vyberte si z naší nabídky motocykl, který si můžete pronajmout</h4>

        <div class="motosOffers">

            <div class="offer1">

                <h1>YAMAHA TÉNÉRÉ 700</h1>

                <div class="atributeS">

                    <div class="atribute"><img src="Images/calendar.png" width="40px" height="40px" alt=""><p>2022</p></div>
                    <div class="atribute"><img src="Images/power.png" width="40px" alt=""><p>53,8 kW (73 k)</p></div>
                    <div class="atribute"><img src="Images/weight.png" width="40px" alt=""><p>205Kg</p></div>

                    <button id="openInfo" class="moreInfo">Více info ...</button>
                    <button id="openPrice" class="priceList">Ceník</button>

                </div>

                <div class="ourMotoButtons">

                    <button class="fotoButt" id="open-button">Fotografie</button>
                    <a href="#reservation" ><button class="offerReserveButt">REZERVOVAT</button></a>
                </div>



            </div>

            <!-- <div class="offer2">

                <h1>Název motorky</h1>

                <div class="atributeS">

                    <div class="atribute"><img src="Images/calendar.png" width="40px" height="40px" alt=""><p>2020</p></div>
                    <div class="atribute"><img src="Images/power.png" width="40px" alt=""><p>54kW</p></div>
                    <div class="atribute"><img src="Images/weight.png" width="40px" alt=""><p> 200Kg</p></div>
                    <a href="" class="moreInfo">Více info ...</a>

                </div>

                <div class="ourMotoButtons">

                    <button class="fotoButt">Fotografie</button>
                    <button class="offerReserveButt">NEZÁVAZNĚ REZERVOVAT</button>

                </div>

            </div> -->

        </div>

    </div>


    <!-- vyskakovací okna -->

    <!-- Více info -->
    <div id="moreInfoJump">

        <div id="popup">

            <span id="closeButton">&times;</span>
            <div class="motoLogo">
                <img  height="40px" width="40px" src="Images/yamahagold.png">
                <h2 >YAMAHA TÉNÉRÉ 700</h2>
            </div>
        <p>
            Tento terénní motocykl s kořeny v závodech rallye určený k dlouhým dobrodružným výpravám pohání dvouválcový motor o objemu 689 ccm s vysokým točivým momentem a splňující normu EU5. 
            Ten vám ve spojení se speciálně optimalizovanou převodovkou poskytuje ideálně vyvážený výkon a ovladatelnost. Vy se tak můžete vypořádat se všemi možnými jízdními podmínkami na zpevněném i nezpevněném povrchu.
            Kompaktní trubkový rám a štíhlá kapotáž zaručují maximální hbitost při řízení vestoje i vsedě a odpružení vhodné pro dlouhé jízdy s paprskovými koly vám umožní dojet úplně všude, kam budete chtít. Stačí natankovat a vyjet.
        </p>
        </div>
    </div>

    <!-- Ceník -->

    <div id="priceListJump">

        <div class="priceListPop">

          <span id="closeButton2">&times;</span>
          <h2>Ceník</h2>
          <h3>Vratná kauce v hodnotě 20 000 Kč při zapůjčení motocyklu</h3>
            <div class="tableDiv">
                
                <table>

                    <tr>
                        <td>1 den (max. 350km)</td>
                        <td>2 500 Kč</td>
                    </tr>
                    <tr>
                        <td>Víkend (Pátek 10:00 - pondělí 10:00)</td>
                        <td>5 500 Kč</td>
                    </tr>
                    <tr>
                        <td>7 dní (Neomezené km)</td>
                        <td>1 900 Kč / den</td>
                    </tr>
                    <tr>
                        <td>7 dní a více</td>
                        <td>Individuální cena</td>
                    </tr>
    
                </table>

            </div>
            <h4>Za každou další započatou hodinu po uplynutí nájemní doby je účtován poplatek 500 Kč</h4>
        </div>

    </div>

    <!-- foto slider -->

    <div class="slider-container">

        <div id="slider" class="slider">

            <div class="slider-close">

                <span id="close-button">&times;</span>

            </div>

            <div class="slider-content">

                <div class="slider-image">

                    <img src="Images/motoOffer1.jpeg"  alt=""> 

                </div>

                <div class="slider-controls">

                    <span id="prev-button" class="slider-arrow">&lt;</span>
                    <span id="next-button" class="slider-arrow">&gt;</span>

                </div>

            </div>

        </div>

    </div>

    <!-- O nás -->

    <div class="aboutUs" id="aboutUs">

        <div class="motosTitle">

            <h1>O nás</h1>

        </div>

        <div class="aboutUsContent">

            <div>

                <div class="description">

                    <p>Jsme podnik se sídlem ve městě Klášterec nad Ohří na severu Čech.</p>
                    <p>Hlavním naším cílem je poskytovat zákazníkům zážitek na našich motocyklech za přiměřenou cenu.</p>

                </div>                                   

                <div class="aboutButts">

                    <a href="#ourMotos"><button class="ourmotosButt">Naše motocykly</button></a>
                    <a href="#reservation"><button class="aboutusOfferButt">REZERVOVAT</button></a>

                </div>

            </div>

            <div class="logoDiv">

                <img src="Images/logo2.png" width="300px" alt="">

            </div>

        </div>

    </div>

    <!-- Formulář pro rezervaci -->

    <div class="contactReservation" id="reservation">

        <div class="contactReserveTitle">

            <h1>Kontaktovat a rezervovat</h1>

        </div>

        <h4>Zarezervujte si motocykl, nebo nás neváhejte kontaktovat.</h4>

        <div class="reservationBack">

            <div class="leftRight">

                <form class="reservation" method="post">

                    <div class="twoDataRow">

                        <div class="data">

                            <label for="">Jméno *</label>
                            <input type="text" name="jmeno" id="name" class="finput" required>

                        </div>

                        <div class="data">

                            <label for="">Příjmení *</label>
                            <input type="text" name="prijmeni" id="surname" class="sinput" required>

                        </div>

                    </div>

                    <div class="dataRow">

                        <div class="data">

                            <label for="">E-mail *</label>
                            <input type="email" name="email" id="" class="onlyInput" required>

                        </div>

                    </div>

                    <div class="twoDataRow">

                        <div class="data">

                            <label for="">Telefon *</label>
                            <input type="tel" name="telefon" id="telefon" class="finput" required>

                        </div>

                        <div class="data">

                            <label for="">Vybrat motocykl *</label>

                            <select class="sinput" name="vyber" id="">

                                <option value="TÉNÉRÉ 700" selected>TÉNÉRÉ 700</option>

                            </select>

                        </div>

                    </div>

                    <div class="twoDataRow">

                        <div class="data">

                            <label for="">Od *</label>
                            <input value="" type="date" name="od" id="dateFrom" class="finput" required>

                        </div>

                        <div class="data">

                            <label for="">Do *</label>
                            <input value="" type="date" name="do" id="dateTo" class="sinput" required>

                        </div>

                    </div>

                    <div class="checkDiv"><input class="check" name="age" type="checkbox" id="age" required><label class="check-label" for="age">Jsem držitelem řidičského oprávnění skupiny "A" *</label> </div>

                    <div class="checkDiv"><input class="check" name="gdpr" type="checkbox" id="gdpr" required><label class="check-label" for="gdpr">Souhlasím s <a href="gdpr.pdf" target="blank" style="color: #A6A26A;">podmínkami ochrany osobních údajů</a>*</label></div>

                    <div class="checkDiv"><input class="check" name="terms" type="checkbox" id="terms" required><label class="check-label" for="terms">Souhlasím s <a href="Obchodni_podminky_Rideaway-moto.cz.pdf" target="blank" style="color: #A6A26A;">obchodními</a> a <a href="Smlouva_o_zapujcenem_motocyklu.pdf" target="blank" style="color: #A6A26A;">smluvními</a> podmínkami *</label></div>

                    <div class="resButts">

                        <a href="#ourMotos"><button class="ourMotoreserveButt" type="button">Naše motocykly</button></a>
                        <button type="submit" id="reserve" name="reserve">REZERVOVAT</button>

                    </div>

                </form>

                <div class="contactAndSocials">

                    <div class="contact">

                        <div class="contactData">

                            <img src="Images/mobile.png" width="40px" alt="">
                            <h3 class="contactAtribute"><a class="contactAtribute" href="tel:+420737089941">+420 737 089 941</a></h3>

                        </div>

                        <div class="contactData">

                            <img src="Images/mail2.png" width="50px" alt="">
                            <h3 ><a href="mailto:prijmeni@nazev.cz" class="contactAtribute">info@rideaway-moto.cz</a></h3>

                        </div>

                        <div class="contactData">

                            <img src="Images/location.png" width="40px" alt="">
                            <h3 ><a href="https://maps.app.goo.gl/FFDDZt3Ao62Jh8qk8" target="blank" class="contactAtribute">Větrná 565, 431 51 <br> Klášterec nad Ohří</a></h3>

                        </div>

                    </div>

                    <div class="socials">

                        <a href=""><img src="Images/instagram.png" width="60px" alt=""></a>
                        <a href=""><img src="Images/facebook.png" width="45px" alt=""></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- footer/patička -->

    <div class="foot">

        <div class="maker">

            <h1 class="copy">&copy; 2023 Rideaway-moto | půjčovna motocyklů</h1>
            <h2 class="created">Created by Daniel Táborský | <a href="mailto:Daniel-taborsky77@seznam.cz" class="creatorsEmail">Daniel-taborsky77@seznam.cz</a></h2>

        </div>

    </div>

</body>

<script src="JS/alert.js"></script>
<script src="JS/slider.js"></script>
<script src="JS/navigation.js"></script>
<script src="JS/jumpWin.js"></script>
<script src="JS/autoDate.js"></script>
<script src="JS/emailSended.js"></script>

</html>			