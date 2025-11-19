@extends('layout.master')
@section('css')
<style>
.mairie-section {
    min-height: 100vh;
    padding: 30px 20px 80px;
    text-align: center;
    background-color: #faf9f6; /* subtle paper tone */
    font-family: 'Georgia', serif;
}

/* Hebrew top text */
.hebrew-text {
    font-size: 16px;
    color: #556032;
    margin-top: 10px;
}

/* Main Title */
.mairie-title {
    font-size: 40px;
    letter-spacing: 2px;
    color: #556032;
    font-weight: 500;
    margin: 20px 0 25px;
    font-family: 'Times New Roman', serif;
}

/* Illustration sizes */
.mairie-img img {
    width: 260px;
    margin-bottom: 25px;
}

/* Couple Names */
.couple-names {
    font-size: 28px;
    color: #556032;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

/* Small gray text */
.small-text {
    font-size: 18px;
    color: #444;
    margin-bottom: 8px;
}

/* OUI text */
.oui-text {
    font-size: 32px;
    font-style: italic;
    color: #556032;
    margin-bottom: 25px;
}

/* Date text */
.event-date {
    font-size: 22px;
    color: #556032;
}

.event-date .sub-text {
    font-size: 18px;
}

/* Address */
.address {
    margin-top: 15px;
    font-size: 18px;
    color: #556032;
    line-height: 1.6;
}

/* Floral bottom image */
.flower-img img {
    width: 150px;
    margin-top: 25px;
}

@media (min-width: 768px) {
    .mairie-title { font-size: 48px; }
    .couple-names { font-size: 32px; }
    .oui-text { font-size: 40px; }
    .mairie-img img { width: 320px; }
    .flower-img img { width: 180px; }
}
/* second */
.beach-section {
    min-height: 100vh;
    padding: 40px 20px 80px;
    text-align: center;
    background-color: #faf9f6;
    font-family: 'Georgia', serif;
    color: #556032;
}

/* Main Title */
.beach-title {
    font-size: 38px;
    font-family: 'Times New Roman', serif;
    letter-spacing: 2px;
    margin-bottom: 5px;
}

/* Subtitle */
.beach-subtitle {
    font-size: 20px;
    font-style: italic;
    margin-bottom: 25px;
}

/* Illustration */
.beach-img img {
    width: 260px;
    margin-bottom: 25px;
}

/* Names */
.beach-names {
    font-size: 28px;
    letter-spacing: 1px;
    margin: 10px 0;
    color: #556032;
}

/* Invitation text */
.invite-line {
    font-size: 19px;
    color: #444;
    margin-bottom: 20px;
}

/* Date */
.beach-date {
    font-size: 22px;
    margin-bottom: 20px;
}

.beach-date .subtext {
    font-size: 18px;
}

/* Location */
.beach-location {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 25px;
}

/* Palm trees */
.palm-img img {
    width: 130px;
    margin: 20px auto;
}

/* Transport text */
.transport-text {
    font-size: 18px;
    line-height: 1.6;
    margin-top: 10px;
}

@media (min-width: 768px) {
    .beach-title { font-size: 48px; }
    .beach-img img { width: 320px; }
    .palm-img img { width: 160px; }
}

/* third */
        .houppa-section {
    min-height: 100vh;
    padding: 40px 20px 80px;
    background-color: #faf9f6;
    text-align: center;
    font-family: 'Georgia', serif;
    color: #556032;
}

.hebrew-top {
    font-size: 16px;
    color: #556032;
}

.houppa-title {
    font-size: 36px;
    letter-spacing: 2px;
    font-family: 'Times New Roman', serif;
    margin-bottom: 25px;
    font-weight: 500;
}

.houppa-img img {
    width: 300px;
    margin-bottom: 25px;
}

.parents-row {
    margin: 30px 0;
}

.parents-block {
    font-size: 17px;
    line-height: 1.6;
}

.invitation-line {
    font-size: 20px;
    margin: 20px 0;
}

.couple-names {
    font-size: 30px;
    letter-spacing: 1px;
    font-family: 'Times New Roman', serif;
    margin: 10px 0;
}

.hebrew-names {
    font-size: 20px;
    letter-spacing: 3px;
    margin-bottom: 30px;
}

.ceremony-date {
    font-size: 24px;
    margin: 25px 0 10px;
}

.ceremony-date .subtext {
    font-size: 18px;
}

.ceremony-location {
    font-size: 18px;
    line-height: 1.6;
}

.doves-img img {
    width: 130px;
    margin: 30px auto;
}

.transport-text {
    font-size: 18px;
    line-height: 1.6;
}

@media (min-width: 768px) {
    .houppa-title { font-size: 46px; }
    .houppa-img img { width: 350px; }
    .doves-img img { width: 160px; }
}
/* fourth */
#hotels {
    font-family: 'Cormorant Garamond', serif;
}

#hotels h4 {
    font-weight: 600;
    letter-spacing: 1px;
}

#hotels a {
    font-size: 16px;
}

</style>
@endsection

@section('content')
<!-- ================= SAMPLE SECTIONS ================= -->
<section id="mairie" class="mairie-section">
    <div class="container">

        <!-- Top Hebrew small text -->
        <p class="text-end hebrew-text">בס״ד</p>

        <!-- Main Heading -->
        <h1 class="mairie-title">LA MAIRIE</h1>

        <!-- Illustration -->
        <div class="mairie-img mx-auto">
            <img src="{{ asset('assets/images/home/mairie-building.png') }}" alt="Mairie Illustration" class="img-fluid">
        </div>

        <!-- Names -->
        <h2 class="couple-names">AMBRE & JONATHAN</h2>
        <p class="small-text">se diront</p>
        <h3 class="oui-text">“ Oui ”</h3>

        <!-- Event details -->
        <p class="event-date">
            Le Jeudi 28 Août 2025<br>
            <span class="sub-text">à 14h précises</span>
        </p>

        <p class="address">
            à la mairie du XVIᵉ arrondissement<br>
            71 Av. Henri Martin, 75116 Paris
        </p>

        <!-- Bottom floral image -->
        <div class="flower-img mx-auto">
            <img src="{{ asset('assets/images/home/flower-bouquet.png') }}" alt="Flowers" class="img-fluid">
        </div>

    </div>
</section>
<section id="beach" class="beach-section">
    <div class="container">

        <!-- Title -->
        <h1 class="beach-title">LA DOLCE VITA</h1>
        <p class="beach-subtitle">Beach Party</p>

        <!-- Illustration -->
        <div class="beach-img mx-auto">
            <img src="{{ asset('assets/images/home/Bagno-St-tropez.png') }}" alt="" class="img-fluid">
        </div>

        <!-- Names -->
        <h2 class="beach-names">AMBRE & JONATHAN</h2>

        <!-- Invitation -->
        <p class="invite-line">Vous attendent pour une Beach Party</p>

        <!-- Date -->
        <p class="beach-date">
            Le Lundi 8 Septembre 2025<br>
            <span class="subtext">à partir de 12h</span>
        </p>

        <!-- Location -->
        <p class="beach-location">
            Plage Bagno Saint Tropez – Fregene<br>
            Lungomare di Levante, 244, 00054 Fregene,<br>
            Rome, Italie
        </p>

        <!-- Palm trees -->
        <div class="palm-img mx-auto">
            <img src="{{ asset('assets/images/home/PALMIERS.png') }}" class="img-fluid" alt="">
        </div>

        <!-- Transport -->
        <p class="transport-text">
            Des navettes vous attendront<br>
            devant les 3 hôtels proposés par les mariés,<br>
            à 11h précises
        </p>

    </div>
</section>
<section id="houppa" class="houppa-section">
    <div class="container">

        <!-- Small Hebrew text -->
        <p class="text-end hebrew-top">בס״ד</p>

        <!-- Title -->
        <h1 class="houppa-title">HOUPPA & RÉCEPTION</h1>

        <!-- Illustration -->
        <div class="houppa-img mx-auto">
            <img src="{{ asset('assets/images/home/villa-mondragone.png') }}" alt="" class="img-fluid">
        </div>

        <!-- Parents Names Row -->
        <div class="row justify-content-center parents-row">

            <div class="col-md-4">
                <p class="parents-block">
                    Liliane et Jacob Fayer<br>
                    Martine et Salomon Taïeb<br>
                    Elsa Hanoun Fayer et Thierry Fayer
                </p>
            </div>

            <div class="col-md-4">
                <p class="parents-block">
                    Liliane et Simon Benhamou<br>
                    Paulette et Maurice Temstet<br>
                    Laurence et Jérôme Benhamou
                </p>
            </div>

        </div>

        <!-- Invitation sentence -->
        <p class="invitation-line">
            Ont l’immense joie de vous faire part du mariage<br>
            de leurs petits-enfants et enfants
        </p>

        <!-- Couple names -->
        <h2 class="couple-names">AMBRE & JONATHAN</h2>

        <!-- Hebrew names -->
        <p class="hebrew-names">שמענון משה    שיילה</p>

        <!-- Ceremony line -->
        <p class="invitation-line">
            Et seront honorés de votre présence pour<br>
            la cérémonie religieuse qui aura lieu
        </p>

        <!-- Date -->
        <p class="ceremony-date">
            Le Mardi 9 Septembre 2025<br>
            <span class="subtext">à 17h précises</span>
        </p>

        <!-- Location -->
        <p class="ceremony-location">
            Dans les jardins de la Villa Mondragone<br>
            Via Frascati 51, 00040 Monte Porzio Catone, Rome, Italie
        </p>

        <p class="invitation-line mt-3">
            La cérémonie sera suivie d’une réception
        </p>

        <!-- Doves + Rings -->
        <div class="doves-img mx-auto">
            <img src="{{ asset('assets/images/home/COLOMBES-ALLIANCES.png') }}" class="img-fluid" alt="">
        </div>

        <!-- Transport info -->
        <p class="transport-text">
            Des navettes vous attendront<br>
            devant les 3 hôtels proposés par les mariés,<br>
            à 16h précises
        </p>

    </div>
</section>
<section id="hotels" class="py-5" style="background:#f8f7f2;">
    <div class="container text-center">

        <!-- Heading -->
        <h2 class="fw-bold" style="font-family: 'Cormorant Garamond', serif; color:#434b1b; letter-spacing:2px;">
            VOTRE SÉJOUR
        </h2>

        <h5 class="mb-4" style="font-family:'Cormorant Garamond', serif; font-style:italic; color:#434b1b;">
            Hôtels
        </h5>

        <!-- Key Image -->
        <div class="my-4">
            <img src="{{ asset('assets/images/home/clef.png') }}" class="img-fluid" style="max-width:120px;">
        </div>

        <!-- Intro Text -->
        <p class="mb-5" style="color:#6d6d55; font-size:17px; max-width:700px; margin:auto;">
            Afin de vous faciliter l'organisation de votre séjour, 
            les mariés ont le plaisir de vous partager trois hôtels dans 
            lesquels des tarifs ont été négociés pour vous.
        </p>

        <!-- HOTEL 1 -->
        <div class="mb-5">
            <h4 style="font-family: 'Cormorant Garamond', serif; color:#434b1b;">
                MERCURE ROMA CORSO TRIESTE
            </h4>
            <p class="text-muted mb-1">
                Via Gradisca, 31, 00198 Rome, Italie
            </p>

            <a href="#" style="color:#76834b; text-decoration:underline;">Vous pouvez télécharger le formulaire de réservation ici</a>
            <br>
            <small style="color:#6d6d55;">À renvoyer à l’adresse suivante : amanda.lambard@accor.com</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="#" class="btn rounded-pill px-4"
                style="background:#4C4E16; color:#D1D7A6; border:1px solid #bfc6a3;text-decoration:underline;">
                Mercure Roma Corso Trieste
            </a>

            <!-- Icon Right -->
            <div class="mt-3">
                <img src="assets/images/leaf-icon.png" width="45">
            </div>
        </div>

        <!-- HOTEL 2 -->
        <div class="mb-5">
            <h4 style="font-family: 'Cormorant Garamond', serif; color:#434b1b;text-decoration:underline;">
                THE HOXTON
            </h4>
            <p class="text-muted mb-1">
                Largo Benedetto Marcello, 220, 00198 Rome, Italie
            </p>

            <a href="#" style="color:#76834b; text-decoration:underline;">Veuillez accéder à ce lien</a>
            <br>
            <small style="color:#6d6d55;">Utiliser le code d'accès suivant : AMB070923</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="#" class="btn rounded-pill px-4"
                style="background:#4C4E16; color:#D1D7A6; border:1px solid #bfc6a3;">
                The Hoxton
            </a>

            <div class="mt-3">
                <img src="assets/images/leaf-icon.png" width="45">
            </div>
        </div>

        <!-- HOTEL 3 -->
        <div class="mb-5">
            <h4 style="font-family: 'Cormorant Garamond', serif; color:#434b1b;">
                SOFITEL ROMA VILLA BORGHESE
            </h4>

            <p class="text-muted mb-1">
                Via Lombardia 47, 00187 Rome, Italie
            </p>

            <a href="#" style="color:#76834b; text-decoration:underline;">
                Vous pouvez télécharger le formulaire de réservation ici
            </a>
            <br>
            <small style="color:#6d6d55;">À renvoyer à l’adresse suivante : h878-RE@sofitel.com</small>

            <p class="mt-3 mb-1" style="color:#6d6d55;">Pour plus d’informations sur l’hôtel :</p>
            <a href="#" class="btn rounded-pill px-4"
                style="background:#4C4E16; color:#D1D7A6; border:1px solid #bfc6a3; text-decoration:underline;">
                Sofitel Rome Villa Borghese
            </a>

            <div class="mt-3">
                <img src="assets/images/leaf-icon.png" width="45">
            </div>
        </div>

    </div>
</section>
<section id="addresses" class="py-5" style="background-color:#faf9f4;">
    <div class="container text-center">

        <!-- Title Section -->
        <h2 class="fw-light mb-1" style="font-family: 'Playfair Display', serif; color:#6d6d42;">
            VOTRE SÉJOUR
        </h2>
        <p class="fst-italic mb-4" style="color:#8a8a5a;">
            Les bonnes adresses d'Ambre et Jonathan
        </p>
        <img src="{{asset('assets\images\home\pates.png')}}" alt="" class="img-fluid mb-4" style="max-width:140px;">

        <p class="text-muted mb-5" style="max-width:480px; margin:auto;">
            Pour profiter pleinement de votre séjour, les mariés ont sélectionné quelques adresses à découvrir.
        </p>

        <!-- Addresses List -->
        <div class="row justify-content-center">

            <!-- Item 1 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Gelateria La Romana</h4>
                <p class="text-muted fst-italic mb-1">Glacier</p>
                <p class="text-muted">Via Venti Settembre 60, 00187 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                   🙂
                </a>
            </div>

            <!-- Item 2 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Pompi Tiramisu</h4>
                <p class="text-muted fst-italic mb-1">Boutique de desserts – Tiramisu</p>
                <p class="text-muted">V. della Croce 82, 00187 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 3 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Terrazza Borromini</h4>
                <p class="text-muted fst-italic mb-1">Rooftop</p>
                <p class="text-muted">Via di Santa Maria dell’Anima 30, 00186 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 4 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Capo Boi</h4>
                <p class="text-muted fst-italic mb-1">Restaurant de poissons</p>
                <p class="text-muted">Via Arco 88, 00186 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 5 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Trattoria Al Moro</h4>
                <p class="text-muted fst-italic mb-1">Cuisine italienne</p>
                <p class="text-muted">Vicolo delle Bollette 13, 00187 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 6 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Trattoria Da Enzo al 29</h4>
                <p class="text-muted fst-italic mb-1">Spécialités romaines</p>
                <p class="text-muted">Via dei Vascellari 29, 00153 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 7 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Baghetto Ristorante</h4>
                <p class="text-muted fst-italic mb-1">Restaurant Kasher</p>
                <p class="text-muted">Via del Portico D’Ottavia 3, 00186 Roma, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

            <!-- Item 8 -->
            <div class="col-12 col-md-8 mb-5">
                <h4 class="fw-semibold" style="color:#6d6d42;">Little Tripoli</h4>
                <p class="text-muted fst-italic mb-1">Restaurant Kasher</p>
                <p class="text-muted">Via Cernia 9, 00186 Roma RM, Italie</p>

                <a href="#" class="d-inline-flex justify-content-center align-items-center
                    rounded-circle p-3 shadow-sm"
                    style="width:55px; height:55px; background:#dfe6d4; font-size:22px;">
                    🙂
                </a>
            </div>

        </div>
    </div>
</section>

<section id="presence" class="py-5" style="background-color:#faf9f4;">
    <div class="container text-center">

        <!-- Title -->
        <h2 class="fw-light mb-1" style="font-family:'Playfair Display', serif; color:#6d6d42;">
            CONFIRMEZ VOTRE<br>PRÉSENCE
        </h2>
        <p class="fst-italic" style="color:#8a8a5a;">dès réception</p>

        <!-- Doves Image -->
        <img src="{{ asset('assets/images/home/COLOMBES-ENVELOPPE.png') }}" class="img-fluid my-4" style="max-width:140px;" alt="">

        <!-- Form -->
        <form class="text-start mx-auto" style="max-width:600px;">

            <!-- First Name -->
            <label class="fw-semibold" style="color:#6d6d42;">PRÉNOM</label>
            <input type="text" class="form-control mb-3"
                   style="border:1px solid #6d6d42; border-radius:8px;">

            <!-- Name -->
            <label class="fw-semibold" style="color:#6d6d42;">NOM</label>
            <input type="text" class="form-control mb-3"
                   style="border:1px solid #6d6d42; border-radius:8px;">

            <!-- La Mairie -->
            <label class="fw-semibold mt-3" style="color:#6d6d42;">LA MAIRIE</label><br>
            <div class="mb-2">
                <label><input type="radio" name="mairie"> Oui</label>
                <label class="ms-3"><input type="radio" name="mairie"> Non</label>
            </div>

            <!-- Number -->
            <label class="fw-semibold" style="color:#6d6d42;">NOMBRE DE PERSONNES À LA MAIRIE</label>
            <input type="text" class="form-control mb-3"
                   style="border:1px solid #6d6d42; border-radius:8px;">

            <!-- Beach Party -->
            <label class="fw-semibold mt-3" style="color:#6d6d42;">LA BEACH PARTY</label><br>
            <div class="mb-2">
                <label><input type="radio" name="beach"> Oui</label>
                <label class="ms-3"><input type="radio" name="beach"> Non</label>
            </div>

            <label class="fw-semibold" style="color:#6d6d42;">NOMBRE DE PERSONNES À LA BEACH PARTY</label>
            <input type="text" class="form-control mb-3"
                   style="border:1px solid #6d6d42; border-radius:8px;">

            <!-- Houppa & Réception -->
            <label class="fw-semibold mt-3" style="color:#6d6d42;">LA HOUPPA & RÉCEPTION</label><br>
            <div class="mb-2">
                <label><input type="radio" name="houppa"> Oui</label>
                <label class="ms-3"><input type="radio" name="houppa"> Non</label>
            </div>

            <label class="fw-semibold" style="color:#6d6d42;">NOMBRE DE PERSONNES À LA HOUPPA ET À LA RÉCEPTION</label>
            <input type="text" class="form-control mb-3"
                   style="border:1px solid #6d6d42; border-radius:8px;">

            <!-- Hotels -->
            <p class="fst-italic mt-4 mb-2" style="font-size:14px; color:#8a8a5a;">
                Afin de vous faciliter les trajets, des navettes vous attendront devant les 3 hôtels proposés par les mariés, merci de sélectionner votre point de départ, si vous souhaitez en bénéficier.
            </p>

            <div class="ms-2 mb-3" style="color:#6d6d42;">
                <label class="d-block"><input type="radio" name="hotel"> Mercure Roma Corso Trieste</label>
                <label class="d-block"><input type="radio" name="hotel"> The Hoxton</label>
                <label class="d-block"><input type="radio" name="hotel"> Sofitel Rome Villa Borghese</label>
                <label class="d-block"><input type="radio" name="hotel"> Autre</label>
            </div>

            <!-- Message -->
            <label class="fw-semibold" style="color:#6d6d42;">MESSAGE AUX MARIÉS</label>
            <textarea class="form-control mb-4" rows="4"
                      style="border:1px solid #6d6d42; border-radius:8px;"></textarea>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="px-5 py-2"
                        style="background:#6d6d42; color:white; border:none;
                               border-radius:6px;">
                    Envoyer
                </button>
            </div>

        </form>
    </div>
</section>


@endsection